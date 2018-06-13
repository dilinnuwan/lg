<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\PrivacySetting;


class SettingController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index(){
    	$user = Auth::user();
    	$privacySettings = $user->PrivacySetting;

        return view('settings.settings')->with('user',$user)->with('privacySettings',$privacySettings);
    }
}
