<?php

namespace App\Http\Controllers\Auth;
 
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UpdatePasswordController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index(){
    	$user = Auth::user();

        return view('auth.change-password')->with('user',$user);
    }

    public function update(Request $request)
    {
    	$this->validate($request, [
            'old' => 'required',
            'password' => 'required|min:6|confirmed',
        ]);

        $user = User::find(Auth::id());
        $hashedPassword = $user->password;
 
        if (Hash::check($request->old, $hashedPassword)) {
            //Change the password
            $user->fill([
                'password' => Hash::make($request->password)
            ])->save();
 
            $request->session()->flash('success_tost', 'Your password has been changed.');
 
            return back();
        }
 
        $request->session()->flash('error_tost', 'Your password has not been changed.');
 
        return back();

    }
}
