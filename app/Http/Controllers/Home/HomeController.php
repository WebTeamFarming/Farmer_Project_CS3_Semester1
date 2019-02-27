<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Post;
use App\User;
use App\Category;

class HomeController extends Controller
{
    public function index(){


        $farmer = \App\User::all()->where('user_type_id',1);

        $user_farmer = [];

        foreach ($farmer as $uf) {
            $user_farmer[] = $uf->id;
        }
        $posts_farmer = \App\Post::all()->whereIn('user_id',$user_farmer);



        $company = \App\User::all()->where('user_type_id',2);

        $user_company = [];

        foreach ($company as $uc) {
            $user_company[] = $uc->id;
        }
        $posts_company = \App\Post::all()->whereIn('user_id',$user_company);


        $data = [
            'farmer' => $posts_farmer,
            'company' => $posts_company
        ];


        return view("childs.home",$data);
    }
}
