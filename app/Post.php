<?php

namespace App;

use App\Category;

use App\User;



use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    protected $fillable = ['title','price','post_image','post_phone','description','category_id','user_id'];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }


    public function user()
    {
        return $this->belongsTo('App\User');
    }


}
