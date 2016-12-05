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

//checking if user is logged in
Route::group(array('before' => 'auth'), function(){
    Route::get('/', 'HomeController@index');
});

Auth::routes();

//test data - to be removed when put on live server
Route::get('/testdata', 'TestDataController@create');

//browse/home page and handling search requests
Route::get('/home', 'ListingsController@listings');
Route::get('/', 'ListingsController@listings');
Route::post('/home', 'ListingsController@search');
Route::post('/', 'ListingsController@search');

//post a note page
Route::get('/post', 'PostController@create');
Route::post('/post', 'PostController@store');

//my listings page
Route::get('/myListings', 'ListingsController@userListings');

//details note page
Route::get('/note/{note}', 'NoteController@display');

//edit a note page
Route::get('/editNote/{note}', 'NoteController@edit');
Route::post('/editNote/{note}', 'NoteController@update');

//deleting a note from edit a note page
Route::post('/editNote/{note}/delete', 'NoteController@delete');

//Terms and conditions
Route::get('/termsOfService', 'HomeController@termsOfService');