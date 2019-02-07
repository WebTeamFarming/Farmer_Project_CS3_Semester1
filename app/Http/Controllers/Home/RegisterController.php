<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use User\User;

class RegisterController extends Controller
{


    public function store(Request $request){

        $this->validate($request,[

            'name' => ['required', 'string', 'max:255'],
            'email' => ['string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'phone' => ['required','min:9','string'],

        ]);


        $register = new User;



    }
}
