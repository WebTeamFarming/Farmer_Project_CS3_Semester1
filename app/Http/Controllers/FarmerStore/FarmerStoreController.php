<?php

namespace App\Http\Controllers\FarmerStore;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FarmerStoreController extends Controller
{
    public function index(){

        return view('child.farmer_store');
    }
}
