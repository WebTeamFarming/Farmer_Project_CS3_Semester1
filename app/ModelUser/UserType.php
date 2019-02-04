<?php

namespace App\ModelUser;

use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    public function user(){

        return $this->belongTo('App\ModelUser\User');
    }
}
