<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrivacySetting extends Model
{
	protected $fillable = [
       'user_id','email','dob','mobile_number','address','income'
    ];

    public function user()
	{
	    return $this->belongsTo('App\User');
	}
}
