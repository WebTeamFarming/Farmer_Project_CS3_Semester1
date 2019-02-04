<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function store(Request $request)
    {
        //dd($request->all());

        $user = new User;


        $user->name = $request->name;

        $user->phone = $request->phone;

        $user->email = $request->email;

        $user->password = $request->password;

        $user->name = $request->name;

    }
}
