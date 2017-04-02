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

// Home page
Route::get('/', function () {
    return view('welcome');
});

// Authentication routes
Auth::routes();

Route::get('/confirm/{id}/{token}', 'Auth\RegisterController@confirm');

// Authenticated User landing page
Route::get('/home', 'HomeController@index');

// User profile
Route::get('/user/{user}/profile', 'ProfileController@show')->name('user.profile');
Route::get('/user/{user}/edit', 'ProfileController@edit')->name('user.edit');
Route::patch('/profile', 'ProfileController@update')->name('user.updated');

// Static pages routes
Route::get('/about-me', 'PagesController@aboutMe');
Route::get('/contact-me', 'PagesController@contactMe');
