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

Route::get('/create_admin', [
    'uses' => 'CreateAdminController@load_form'
]);

Route::get('blade', function () {
    return view('child');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/write_db',[

    'uses' => 'CreateAdminController@write_db',
    'as' => 'insert_data'

]);