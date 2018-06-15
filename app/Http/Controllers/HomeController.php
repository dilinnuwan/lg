<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $user_details = User::find($user->id)->UserDetail;
        $avatar = User::find($user->id)->Avatar;

        if($user_details == null){
            return redirect()->route('setup');
        }
        elseif ($avatar == null) {
            return redirect()->route('setup.avatar');
        }
        else{
            return view('home')->with('user',$user);
        }
    }
}
