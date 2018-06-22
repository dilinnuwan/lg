<?php
namespace App;

use App\Interest;
use Auth;

class Helper
{
	
	public static function check_existence($user_id, $interest_id)
    {
    	$pattern_1 = Interest::where('user_id','=',$user_id)->where('interest_id','=',$interest_id)->get()->count();
		$pattern_2 = Interest::where('user_id','=',$interest_id)->where('interest_id','=',$user_id)->get()->count();

		if($pattern_1 == 0 and $pattern_2 ==0){
			return 1;
		}
        elseif ($pattern_1 == 1 and $pattern_2 ==0) {
            return 2; //request send
        }
        elseif ($pattern_1 == 0 and $pattern_2 ==1) {
            return 3; //request recived
        }
		else{
			return 0; //error
		}
    }

    public static function check_interest_owner($user_id, $interest_id)
    {
    	$pattern_1 = Interest::where('user_id','=',$user_id)->where('interest_id','=',$interest_id)->get()->count();
		$pattern_2 = Interest::where('user_id','=',$interest_id)->where('interest_id','=',$user_id)->get()->count();

		if ($pattern_1 == 1 and $pattern_2 ==0) {
            return 1; //request send
        }
        elseif ($pattern_1 == 0 and $pattern_2 ==1) {
            return 2; //request recived
        }
		else{
			return 3; //error
		}
    }

    public static function interest_button($user_id, $interest_id){
    	$me_someone = Interest::where('user_id','=',$user_id)->where('interest_id','=',$interest_id)->get();
    	$someone_me = Interest::where('user_id','=',$interest_id)->where('interest_id','=',$user_id)->get();

    	
    	if($me_someone->count() == 1){
	    	if ($me_someone->first()->mode == 'request') {
	    		//request sent/cancel button
	    		return view('interest_buttons.request_sent_&_cancel')->with('user_id',$user_id)->with('interest_id',$interest_id); //done
	    	}
	    	if($me_someone->first()->mode == 'accepted'){
	    		//interested/cancel button
	    		return view('interest_buttons.interested_&_cancel_2')->with('user_id',$user_id)->with('interest_id',$interest_id);
	    	}
    	}
    	else if($someone_me->count() == 1){
	    	if ($someone_me->first()->mode == 'request') {
	    		//accept/cancel button
	    		return view('interest_buttons.accept_&_cancel')->with('interest_record_id',$someone_me->first()->id)->with('user_id',$interest_id)->with('interest_id',$user_id);
	    	}
	    	if($someone_me->first()->mode == 'accepted'){
	    		//interested/cancel button
	    		return view('interest_buttons.interested_&_cancel')->with('user_id',$interest_id)->with('interest_id',$user_id);
	    	}
    	}
    	else{
    		return view('interest_buttons.request')->with('interest_id',$interest_id)->with('user_id',$user_id); //done
    	}
    }

    public static function notification_count()
    {	
    	$user = Auth::user();
    	return $user->Notification_active->count();
    }
}

