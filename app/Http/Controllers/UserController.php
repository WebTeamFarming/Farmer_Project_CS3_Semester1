<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate/Support/Facades/Auth;

use Auth;

use App\Category;

use App\User;

use App\Post;

use Image;

class UserController extends Controller
{
    public function logout()
    {
        Auth::logout();
    }

    public function profile(){

        return view('childs.profile',array('user' => Auth::user(),'cate' => \App\Category::all()) );
    }


    public function update_profile(Request $request){

        $this->validate($request,array(

            'avatar'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ));

        if ($request->hasFile('avatar')){

            $avatar = $request->file('avatar');

            $filename = time(). '.' . $avatar->getClientOriginalExtension();

            Image::make($avatar)->resize(300,300)->save(public_path('/uploads/avatars/' . $filename));

            $user = Auth::user();

            $user->image = $filename;

            $user->save();

            return view('childs.profile',array('user'=>Auth::user()));

            // return view('test');

        }

    }


    public function farmer_product_info($id){

        $post = \App\Post::find($id);

        $user = \App\User::all();

        $data = [
            'posts' => $post,
            'users' => $user
        ];

        return view('childs.info_farmer',$data);
    }


    public function company_product_info($id){

        $post = \App\Post::find($id);

        $user = \App\User::all();

        $data = [
            'posts' => $post,
            'users' => $user
        ];

        return view('childs.info_farmer',$data);
    }
}
