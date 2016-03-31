<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
         'remember_token',
    ];

    // public function setPasswordAttribute($password){
        //this way the password will always be encrypted whenever tried to save user model  no need to write in controller
        // $this->arrtibutes['password'] = bcrypt($password);
    // }
}
