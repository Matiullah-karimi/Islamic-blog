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
Route::resource('posts', 'PostController');
Route::get('/', 'PostController@index');
Route::resource('users', 'UserController');
Route::get('/contact-us', function(){
    return view('contact-us');
});



Route::get('/auth/login', 'Auth\LoginController@loginRender');
Route::post('/auth/login', 'Auth\LoginController@loginAction');
Route::get('/auth/logout', 'Auth\LoginController@logoutAction');

Route::get('/auth/forgot/password', 'Auth\ResetPasswordController@resetPasswordRender');
Route::post('/auth/forgot/password', 'Auth\ResetPasswordController@resetPasswordAction');