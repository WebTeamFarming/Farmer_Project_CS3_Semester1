<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    return view('welcome');
});


Route::get('/home',[

    'uses' => 'HomeController@index'
]);
Route::get('/toolstore',['uses' => 'ToolStore@index']);

Route::get('/editeprofilefarmer',['uses' => 'EditeFarmerProfile@index']);
Route::get('edite',function(){
    return view('layouts.editefarmerprofile');
});
Route::get('/editeadmin',function(){
    return view('layouts.adminedite');
});
Route::get('/company',function(){
    return view('layouts.companyprofile');
});
Route::get('/master',function(){
    return view('layouts.master');
});

