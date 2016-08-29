<?php
Route::get('/', function () {
    return view('blog');
})->name('home');;

Auth::routes();

//Route::get('/home', 'HomeController@index');

//Route::resource('user','UserController');
Route::resource('photos', 'PhotoController');
