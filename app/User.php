<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;


    protected $fillable = [
        'name', 'email', 'password','username','dob','image_link'
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getRouteKeyName()
    {
        return 'username';
    }
    protected $dates=[
        'dob'
    ];
    public function profiles()
    {
        return $this->hasOne(Profile::class);
    }
    public function articles()
    {
        return $this->hasMany(Article::class);
    }
    public function movies()
    {
        return $this->hasMany(Fav_movie::class);
    }

}
