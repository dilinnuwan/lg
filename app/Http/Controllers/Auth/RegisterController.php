<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Str;
use Mail;
use App\Mail\verificationEmail;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '\login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstname' => 'required|string|max:191',
            'lastname' => 'required|string|max:191',
            'email' => 'required|string|email|max:191|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'active' => 1,
        ]);

        //delete above and uncomment bellow if you want to send verification email
        
        // $created_user = User::create([
        //     'name' => $data['name'],
        //     'email' => $data['email'],
        //     'password' => Hash::make($data['password']),
        //     'verify_token' => Str::random(40),
        // ]);

        // $user = User::findOrFail($created_user->id);
        // $this->sendVerificationEmail($user);
    }

    public function sendVerificationEmail($user)
    {
        Mail::to($user['email'])->send(new verificationEmail($user));
    }

    public function emailVerificationChecker($email,$token)
    {
        $user = User::where(['email'=>$email,"verify_token"=>$token])->first();
        if ($user) {
            User::where(['email'=>$email,"verify_token"=>$token])->update(['active'=>'1','verify_token'=>NULL]);
            return redirect('\login')->with('success','Email verification completed. Now you can login');
        }else{
            return redirect('\login')->with('error','Verification code error. Please try again.');
        }
    }
}
