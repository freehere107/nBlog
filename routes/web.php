<?php

Route::get('/', function () {
    return view('blog.index');
})->name('blog');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::resource('post', 'PostController');
    Route::get('/home', 'HomeController@index')->name('home');//个人主页
});

