<?php

use App\Http\Controllers\PostController;

Route::get('/','PostController@index')
    ->name('index');
Route::get('/users/questions/personalcolor','PostController@personalcolor')
    ->name('step1');
Route::post('/store','PostController@store')
    ->name('store');
Route::get('/users/questions/OwnInfo','PostController@OwnInfo')
    ->name('step2');
Route::get('/users/questions/Clothes','PostController@Clothes')
    ->name('step3');
Route::get('/outfit','PostController@outfit')
    ->name('outfit');  