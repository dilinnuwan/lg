<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\UserDetail;

class ProfileSetupController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$user = Auth::user();
    	return view('pages.profile_setup')->with('user',$user);
    }

    public function update(Request $request, $id)
    {
    	$dobinput = $request->input('bd_date').'-'.$request->input('bd_month').'-'.$request->input('bd_year');
        $dob = strtotime($dobinput);

        $user_detail = new UserDetail;
        $user_detail->user_id = $id;
        $user_detail->nationality = $request->input('nationality');
        $user_detail->religion = $request->input('religion');
        $user_detail->maritalstatus = $request->input('maritalstatus');
        $user_detail->height = $request->input('height');
        $user_detail->dop = $dob;
        $user_detail->mobilenumber = $request->input('mobilenumber');
        $user_detail->address = $request->input('address');
        $user_detail->district = $request->input('district');
        $user_detail->workingsector = $request->input('workingsector');
        $user_detail->workingas = $request->input('workingas');
        $user_detail->profession = $request->input('profession');
        $user_detail->income = $request->input('income');
        $user_detail->save();

        return redirect('/')->with('success','Profile Created Successfully');
    }
}
