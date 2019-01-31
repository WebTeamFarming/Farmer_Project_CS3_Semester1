<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateAdminController extends Controller
{

    public function load_form(){

        return view('create_admin');

    }
}
