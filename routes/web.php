<?php

Route::get('/', function () {
    return view('blog.index');
})->name('blog');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index');//个人主页
});

