<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
	protected $fillable = [
        'user_id','type','sent_user_id','content','url','timestamp','active'

        //types==============
        //interest_request
        //interest_request_accept
        //system_notification
    ];

    public function user()
	{
	    return $this->belongsTo('App\User');
	}

	public function sent_user()
	{
	    return $this->belongsTo('App\User','sent_user_id');
	}

}
