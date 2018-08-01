<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'user_id','imagee_link','city','details','nickname'
    ];

    public function user()
    {
        return $this->belongsto(User::class) ;
    }
}
