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



Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile','ProfileController@show');
<<<<<<< HEAD
Route::get('/editProfile','EditProfileController@show');
Route::post('/editProfile','EditProfileController@update');
=======
>>>>>>> parent of dce929c... s
