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


Route::get('/profile','UserController@profile');

Route::post('/profile/logout','UserController@logout')->name('logout');


Route::post('/profile',[

    'uses' => 'UserController@update_profile',
    'as' => 'user.profile'
]);



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/home/homepage',[

    'uses' => 'Home\HomeController@index',
    'as' => 'home'
]);


Route::get('/home/farmerstore',[

    'uses' => 'FarmerStore\FarmerStoreController@index',
    'as' => 'farmer_store'
]);


Route::get('/home/toolstore',[

    'uses' => 'ToolStoreController@index',
    'as' => 'tool_store'
]);


Route::get('/profile/ownpost',[

    'uses' => 'OwnPostController@index',
    'as' => 'own.post'
]);


Route::post('/post/create',[

    'uses' => 'PostController@store',
    'as' => 'post.create'
]);


Route::get('/post/edit/{id}',[

    'uses'=> 'PostController@update',
    'as' => 'post.edit'
]);


Route::get('/post/delete/{id}',[

    'uses' => 'PostController@delete',
    'as' => 'post.delete'
]);

Route::post('/post/save/{id}',[

    'uses' => 'PostController@save',
    'as' => 'post.save'
]);



Route::get('/profile/personalInfo',[

    'uses' => 'UserController@personal_information',
    'as' => 'user.personalInfo'
]);


Route::get('/home/farmerstore/productFarmerInfo/{id}',[

    'uses' => 'UserController@farmer_product_info',
    'as' => 'productFarmer.info'
]);


Route::get('/home/farmerstore/productCompnayInfo/{id}',[

    'uses' => 'UserController@company_product_info',
    'as' => 'productCompany.info'
]);


Route::get('/home/farmerstore/category/{id}',[

    'uses' => 'FarmerStore\FarmerStoreController@search',
    'as' => 'searchFarmer'
]);


Route::resource('create_admin', 'CreateAdminController');


Route::resource('farmer_list', 'FarmerListController');


Route::resource('company_list', 'CompanyListController');


Route::resource('admin_list', 'AdminListController');



Route::get('/AdminView/{id}',[

    'uses' => 'AdminViewController@show_view',
    'as' => 'admin_view'
]);
