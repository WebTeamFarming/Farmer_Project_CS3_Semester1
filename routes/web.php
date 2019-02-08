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

    'uses' => 'Home\HomeController@index',
    'as' => 'home'
]);

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


Route::get('/home/farmer_store',[

    'uses' => 'FarmerStore\FarmerStoreController@index',
    'as' => 'home.farmer_store'
]);


Auth::routes();




