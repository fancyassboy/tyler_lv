<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('profile', 'PagesController@getProfile');



Route::get('chat', 'PagesController@getChat');

Route::get('find', 'PagesController@getIndex');


Route::get('/', 'HomeController@index');

Auth::routes();


Route::resource('posts','PostController');