<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    protected $fillable = [
       'user_id','nationality','religion','maritalstatus','height','dop','mobilenumber','address','district','workingsector','workingas','income'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    
}
