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
    Route::get('/', 'HomeController@index');
});

Auth::routes();

Route::get('/testdata', 'TestDataController@create');

Route::get('/home', 'ListingsController@listings');
Route::get('/', 'ListingsController@listings');
Route::post('/home', 'ListingsController@search');
Route::post('/', 'ListingsController@search');


Route::get('/post', 'PostController@create');
Route::post('/post', 'PostController@store');





Route::get('/note', 'NoteController@display');
Route::get('/editNote', 'NoteController@edit');
Route::post('/editNote', 'NoteController@update');