<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\UserDetail;
use Auth;
use DateTime;

class ProfileController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($user_id=null)
    {
    	$user = Auth::user();

    	// if user id is empty
    	if ($user_id==null) {
    		// return redirect('/profile/{$user_id}');
    		return redirect()->to('/profile/'.$user->id);
    	}

    	

    	if ($user_id == $user->id) {

    		//logged in user
    		
    		$suggestions = UserDetail::where('district', $user->UserDetail->district)
        				->where('user_id', '!=' , $user->id)
        				->where('gender', '!=' , $user->UserDetail->gender)
        				->inRandomOrder()
        				->limit(5)->get();
    		return view('profile.index')->with('user',$user)->with('suggestions',$suggestions);
    	}else{

    		//showing a different user
    		$some_user = User::find($user_id);

    		$suggestions = UserDetail::where('district', $user->UserDetail->district)
        				->where('user_id', '!=' , $user->id)
        				->where('user_id', '!=' , $user_id)
        				->where('gender', '!=' , $user->UserDetail->gender)
        				->inRandomOrder()
        				->limit(5)->get();

        	
    		return view('profile.other')->with('user',$user)->with('some_user',$some_user)->with('suggestions',$suggestions);
    	}

    }

    public function update(Request $request, $id)
    {
    	$dtime = DateTime::createFromFormat("d/m/Y", $request->input('dob'));
		$dob = $dtime->getTimestamp();

		$user = User::find($id);
		$user->firstname = $request->input('firstname');
		$user->lastname = $request->input('lastname');
		$user->save();


        $user_detail = UserDetail::find($user->UserDetail->id);
        $user_detail->gender = $request->input('gender');
        $user_detail->nationality = $request->input('nationality');
        $user_detail->religion = $request->input('religion');
        $user_detail->maritalstatus = $request->input('maritalstatus');
        $user_detail->height = $request->input('height');
        $user_detail->dob = $dob;
        $user_detail->mobilenumber = $request->input('mobilenumber');
        $user_detail->address = $request->input('address');
        $user_detail->district = $request->input('district');
        $user_detail->workingsector = $request->input('workingsector');
        $user_detail->workingas = $request->input('workingas');

        if ($request->input('workingas')=="Not listed here") {
        	$user_detail->profession = $request->input('profession');
        }else{
        	$user_detail->profession = null;
        }
        
        $user_detail->income = $request->input('income');
        $user_detail->save();

        return redirect('/profile/'.$id)->with('success_tost','Profile Updated Successfully');

    }
}
