<?php

namespace App\ModelUser;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function user_type(){

        return $this->hasMany('App\ModelUser\UserType');
    }
}
