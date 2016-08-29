<?php
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

//Route::resource('user','UserController');
Route::resource('photos', 'PhotoController');
