<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Interests;
use App\User;

class SearchController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
    	$user = Auth::user();
    	$all_users = User::all()->where('id','!=',$user->id);

    	return view('search.index')->with('user',$user)->with('all_users',$all_users);
    }
}
