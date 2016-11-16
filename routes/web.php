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

Route::group(array('before' => 'auth'), function(){
    // your routes

    Route::get('/', 'HomeController@index');
});

Route::get('/', function () {
    Route::get('/home', 'ListingsController@listings');
});

Auth::routes();

Route::get('/schools', 'SchoolController@create');

Route::get('/home', 'ListingsController@listings');
Route::get('/', 'ListingsController@listings');

Route::get('/post', 'PostController@create');
Route::post('/post', 'PostController@store');
