<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\UserDetail;
use App\Avatar;

class AvatarSetupController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
    	$user = Auth::user();
    	if ($user->Avatar == null) {
    		$user_details = User::find($user->id)->UserDetail;
    		return view('pages.avatar_setup')->with('user',$user)->with('user_details',$user_details);
    	}
    	else{
    		return redirect('/');
    	}
    }

    public function update(Request $request, $id)
    {
    	$data=$request->input('avatar');
    	$image_array_1 = explode(";", $data);
    	$image_array_2 = explode(",", $image_array_1[1]);
    	$data = base64_decode($image_array_2[1]);
    	$imageName = time() . '.png';

    	// $path = $data->storeAs('public/theme_src/profile_pics',$imageName);
    	file_put_contents(public_path('theme_src/profile_pics/').$imageName, $data);

    	$avatar = new Avatar;
    	$avatar->user_id = $id;
        $avatar->filename = $imageName;
        $avatar->save();

        return redirect('/')->with('success','Profile Created Successfully');

    	// dd();
    }
}
