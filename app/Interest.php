<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interest extends Model
{
    protected $fillable = [
       'user_id','interest_id','mode'
    ];

    public function user()
	{
	    return $this->belongsTo('App\User','user_id');
	}

	public function interest_user()
	{
	    return $this->belongsTo('App\User','interest_id');
	}

	public function accepted()
	{
	    return 'hi';
	}
	//===== modes are
    //request
    //accepted
    //block
}
