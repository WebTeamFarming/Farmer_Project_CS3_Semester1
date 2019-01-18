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
    //return view('welcome');
    return view('welcome');
});

Route::get('/test_inherit/child', function(){
    return view('test inherit/child');
});

Route::get('/test_inherit/master', function(){
    return view('test inherit/master');
});

Route::get('/getMigration', 'Test\SelectData@index');