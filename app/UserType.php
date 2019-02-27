<?php

namespace App;

use App\User;

use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    protected $fillable = ['user_type'];
    
   public function users()
   {
       return $this->hasMany('App\User');
   }
}
