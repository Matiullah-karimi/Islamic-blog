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
Route::resource('/home', 'HomeController');
Route::get('/', 'HomeController@index');
Route::resource('/users', 'UserController');
Route::get('/contact-us', function(){
    return view('contact-us');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::resource('/posts', 'PostController');
Route::get('/posts/destroy/{post}', 'PostController@destroy');
Route::get('/users/destroy/{user}', 'UserController@destroy');
