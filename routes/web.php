<?php
Auth::routes();

Route::get('/', function () {
    return view('blog.index');
})->name('blog');

Route::group([], function () {
    Route::resource('post', 'PostController');
    Route::get('/home', 'HomeController@index')->name('home');//个人主页
});

Route::group(['prefix'=>'admin'],function(){
    Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index')->middleware('auth');
});
