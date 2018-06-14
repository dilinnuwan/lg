<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = [
       'user_id','image_path','active'
    ];

    public function user()
	{
	    return $this->belongsTo('App\User');
	}
}
