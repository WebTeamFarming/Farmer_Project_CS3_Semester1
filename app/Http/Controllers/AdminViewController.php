<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;

class AdminViewController extends Controller
{
    public function show_view($id){

        $user = \App\User::find($id);

        return view('childs.admin_view_profile',array('user'=>$user));
    }
}
