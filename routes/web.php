<?php

Route::get('/', function () {
    return view('blog.index');
})->name('blog');

Auth::routes();

Route::resource('post', 'PostController');


Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index')->name('home');//个人主页
});

