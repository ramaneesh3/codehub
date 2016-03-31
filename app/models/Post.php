<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'posts';
    protected $fillable = [
        'category_id','title','body' ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

    // public function setPasswordAttribute($password){
        //this way the password will always be encrypted whenever tried to save user model  no need to write in controller
        // $this->arrtibutes['password'] = bcrypt($password);
    // }
}
