<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Notification;

class NotificationController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index()
    {
    	$user = Auth::user();
    	$all_notifications = Notification::where('user_id',$user->id)->where('active',1)->update(['active' => 0]);

    	$notifications = Notification::where('user_id',$user->id)->orderBy('timestamp', 'desc')->paginate(20);

    	return view('notifications.index')->with('user',$user)->with('notifications',$notifications);
    }

    public function count()
    {
    	$user = Auth::user();
    	$notification_count = $user->Notification_active->count();

    	return $notification_count;
    }
}
