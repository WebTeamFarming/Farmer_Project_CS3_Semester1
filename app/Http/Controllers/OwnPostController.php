<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\Post;

use App\User;

class OwnPostController extends Controller
{
    public function index(){

        return view('childs.own')->with('posts',\App\Post::all()->where('user_id',Auth::user()->id));
    }
}
