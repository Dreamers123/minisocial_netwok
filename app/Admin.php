<?php

namespace App;
use App\role;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\notifications\AdminResetPasswordNotify;

class Admin extends Authenticatable
{
    use Notifiable;

    public function role()
    {
        return $this->BelongsToMany(role::class,'role_admins');
    }

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new AdminResetPasswordNotify($token));
    }

    protected $fillable = [
        'name', 'email', 'password','lastname','username'
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];
}
