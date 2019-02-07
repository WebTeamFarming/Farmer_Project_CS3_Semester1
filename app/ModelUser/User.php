<?php

namespace App\ModelUser;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    protected $fillable = ['name','email','phone','password','user_types'];


    public function user_type(){

        return $this->hasMany('App\ModelUser\UserType');
    }
}
