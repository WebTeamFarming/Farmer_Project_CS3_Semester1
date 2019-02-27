<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Post;

use App\Category;

use Session;
use Auth;
use Image;

class PostController extends Controller
{
    public function store(Request $request){

        // dd($request->all());

        $this->validate($request,array(

            'post_img'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'phone_post' => 'min:9|required|string',
        ));

        $post = new \App\Post;


        $post->title = $request->title_post;
        $post->price = $request->price_post;
        $post->post_phone = $request->phone_post;
        $post->description = $request->description_post;
        $post->user_id = Auth::user()->id;


        $cat = $request->category_post;

        // if ($cat == 'Fruit'){

        //     $cat = 1;
        // }else{

        //     $cat = 2;
        // }

        $cat_arr = DB::table('categories')->where('category_name',$cat)->first();

        $cat_id = $cat_arr->id;



        $post->category_id =$cat_id;

        if ($request->hasFile('post_img')){

            $avatar = $request->file('post_img');

            $filename = time(). '.' . $avatar->getClientOriginalExtension();

            Image::make($avatar)->resize(300,300)->save(public_path('/uploads/avatars/' . $filename));


            $post->post_image = $filename;

        }

        $post->save();

        return redirect()->route('own.post');

        // Session::flash('success','You are successfully created a post.');


    }


    public function update($id){


        $post = \App\Post::find($id);



        return view('childs.edit',array('posts'=>$post, 'user' => Auth::user(),'cate' => \App\Category::all()));
    }


    public function delete($id){

        $post = \App\Post::find($id);

        $post->delete();


        return redirect()->back();

    }


    public function save(Request $request, $id){

        $this->validate($request,array(

            'post_img'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'phone_post' => 'min:9|required|string',
        ));

        $post = \App\Post::find($id);

        $post->title = $request->title_post;
        $post->price = $request->price_post;
        $post->post_phone = $request->phone_post;
        $post->description = $request->description_post;
        $post->user_id = Auth::user()->id;


        $cat = $request->category_post;

        if ($cat == 'Fruit'){

            $cat = 1;
        }else{

            $cat = 2;
        }
        $post->category_id =$cat;

        if ($request->hasFile('post_img')){

            $avatar = $request->file('post_img');

            $filename = time(). '.' . $avatar->getClientOriginalExtension();

            Image::make($avatar)->resize(300,300)->save(public_path('/uploads/avatars/' . $filename));


            $post->post_image = $filename;

        }

        $post->save();

        return redirect()->route('own.post');
    }

}
