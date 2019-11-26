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

Route::resource('/posts', 'PostController');
Route::get('/delete-post/{$id}', 'PostController@destroy')->name('post.delete');

Route::resource('/profile', 'UserController');
Route::get('/addfriend', 'UserController@getAddFriend')->name('add.friend');
Route::get('/userimage/{filename}', 'UserController@userImage')->name('profile.image');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
