<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use App\Category;

use App\User;

class ToolStoreController extends Controller
{
    public function index(){

        $cat = \App\Category::all();
        $company = \App\User::all()->where('user_type_id',2);

        $user_company = [];

        foreach ($company as $uc) {
            $user_company[] = $uc->id;
        }
        $posts = \App\Post::all()->whereIn('user_id',$user_company);

        $data = [
            'posts' => $posts,
            'cats' => $cat
        ];
        return view('childs.tool_store',$data);
    }
}
