<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    protected $fillable = [
       'user_id','nationality','religion','maritalstatus','height','dob','mobilenumber','address','district','workingsector','workingas','income'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function getAgeAttribute()
	{
		return floor((time() - $this->attributes['dob']) / 31556926);
	    // return Carbon::parse($this->attributes['dob'])->age;
	}

    
}
