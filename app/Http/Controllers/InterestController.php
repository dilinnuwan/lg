<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interest;
use App\User;
use App\Notification;
use Auth;
use App\Helper;

class InterestController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$user = Auth::user();

        $matchThese = ['user_id' => $user->id];
        $orThese = ['interest_id' => $user->id];

        $results = Interest::where($matchThese)->orWhere($orThese)->get();

    	return view('interest.index')->with('user',$user)->with('interests',$results->where('mode','accepted'));
    }

    public function requests_sent()
    {
        $user = Auth::user();
        $all_requests = Interest::where('user_id',$user->id)->where('mode','request')->get();

        return view('interest.requests_sent')->with('user',$user)->with('interests',$all_requests);
    }

    public function requests_received()
    {
        $user = Auth::user();
        $all_requests = Interest::where('interest_id',$user->id)->where('mode','request')->get();

        return view('interest.requests_received')->with('user',$user)->with('requests',$all_requests);
    }



    //bind with interest.js
    public function create(Request $request)
    {
        $user = Auth::user();
        $user_id = $user->id;
        $request_id = $request->interest_id;


        if(Interest::where('user_id','=',$user_id)->count() >= 5){
            return 'limit';
        }
        else{
            $number_of_records = Interest::where('user_id','=',$user_id)->where('interest_id','=',$request_id)->count();

            if($number_of_records == 0){
            	$interest = new Interest;
            	$interest->user_id = $user_id;
            	$interest->interest_id = $request_id;
            	$interest->save();


                $notification = new Notification;
                $notification->user_id = $request_id;
                $notification->sent_user_id = $user_id;
                $notification->timestamp = time();
                $notification->save();

                return 1;
            }else{
                return 0;
            }
        }

    }

    public function delete(Request $request){
        $interest = Interest::where('user_id','=',$request->user_id)->where('interest_id','=',$request->interest_id);
        return $interest->delete();
    }

    public function update(Request $request){
        $interest = Interest::find($request->interest_record_id);
        $interest->mode = "accepted";
        $interest->save();

        $notification = new Notification;
        $notification->user_id = $request->user_id;
        $notification->type = "interest_request_accept";
        $notification->sent_user_id = Auth::user()->id;
        $notification->timestamp = time();
        $notification->save();

        return 'success';
    }

    //!!bind with interest.js ends!!

    
}
