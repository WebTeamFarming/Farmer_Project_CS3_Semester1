<?php

namespace App\Http\Controllers\FarmerStore;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Post;

use App\User;

use App\Category;

class FarmerStoreController extends Controller
{
    public function index(){


        $user = \App\User::all();
        $cat = \App\Category::all();
        $farmer = \App\User::all()->where('user_type_id',1);

        $user_farmer = [];

        foreach ($farmer as $uf) {
            $user_farmer[] = $uf->id;
        }
        $posts = \App\Post::all()->whereIn('user_id',$user_farmer);



        $data = [
            'posts' => $posts,
            'cats' => $cat,

        ];
        return view('childs.farmer_store',$data);
    }


    public function search($id){

        $post = \App\Post::all()->where('category_id',$id);


        return view('childs.farmer_store',$post);
    }
}
