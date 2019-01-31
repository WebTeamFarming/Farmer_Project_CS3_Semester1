<?php

namespace App\Http\Controllers\Farmer_Store;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StoreController extends Controller
{
    public function index(){

        return view('layouts.farmer_store');
    }
}
