<?php

namespace App;

use App\Http\Controllers\Auth\ResetPasswordController;
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
        'firstName', 'lastName', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function setFirstNameAttribute($value){
        $this->attributes['firstName'] = ucfirst($value);
    }

    public function setLastNameAttribute($value){
        $this->attributes['lastName'] = ucfirst($value);
    }

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    public function getFullName()
    {
        return $this->attributes['firstName'] . " " . $this->attributes['lastName'];
    }

    public function getUserName(){
        return $this->attributes['email'];
    }

    public function getUserId(){
        return $this->attributes['id'];
    }
/*
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }*/
}
