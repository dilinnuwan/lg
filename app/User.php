<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname','lastname', 'email', 'password','verify_token','active'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function UserDetail()
    {
        return $this->hasOne('App\UserDetail');
    }

    public function Avatar()
    {
        return $this->hasOne('App\Avatar');
    }

    public function PrivacySetting()
    {
        return $this->hasOne('App\PrivacySetting');
    }

    public function Gallery()
    {
        return $this->hasMany('App\Gallery');
    }

    public function Interest()
    {
        // return $this->hasMany('App\Interest');
        return $this->hasMany('App\Interest')->where('mode','accepted');
    }

    public function Interest_requests()
    {
        // return $this->hasMany('App\Interest');
        return $this->hasMany('App\Interest')->where('mode','request');
    }

    public function Notification_active()
    {
        return $this->hasMany('App\Notification')->where('active',1);
    }
    public function Notification()
    {
        return $this->hasMany('App\Notification');
    }

    
}
