<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PrivacySetting;
use Auth;

class PrivacySettingsController extends Controller
{
	public function __construct() {
        $this->middleware('auth');
    }

    public function Update(Request $request)
    {

		// $PrivacySetting = PrivacySetting::where('user_id',Auth::user()->id);

		$PrivacySetting = PrivacySetting::find(Auth::user()->PrivacySetting->id);
		$PrivacySetting->email = ($request->email == null ? 1 :0);
		$PrivacySetting->dob = ($request->dob == null ? 1 :0);
		$PrivacySetting->mobile_number = ($request->mobile_number == null ? 1 :0);
		$PrivacySetting->address = ($request->address == null ? 1 :0);
		$PrivacySetting->income = ($request->income == null ? 1 :0);
		$PrivacySetting->save();
		
		return back()->with('success_tost','Privacy Settings Updated Successfully');
    }
}
