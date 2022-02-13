<?php

use App\Http\Controllers\PostController;

Route::get('/','PostController@index')
    ->name('posts.index');
    
Route::get('/step1','PostController@step1')
    ->name('posts.step1');

Route::get('/step2','PostController@step2')
    ->name('posts.step2');
    
Route::get('/step3','PostController@step3')
    ->name('posts.step3');
    
Route::get('/outfit','PostController@outfit')
    ->name('posts.outfit');