<?php

use Illuminate\Http\Request;

//Route::get('/user', function (Request $request) {
//    return $request->user();
//})->middleware('auth:api');

Route::group(['namespace' => 'Api', 'middleware' => ['checkParam']], function () {
    Route::get('/home', 'PostController@list');
    Route::post('/publish', 'PostController@publish');
});
