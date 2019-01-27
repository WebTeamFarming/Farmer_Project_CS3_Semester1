<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToolStore extends Controller
{

    public function index(){

        return view('layouts.toolstore');

    }
}
