<?php

use App\Http\Controllers\PostController;

Route::get('/','PostController@index')
    ->name('index');
Route::get('/users/questions/personalcolor','PostController@personalcolor')
    ->name('step1');
Route::post('/diagnose','PostController@diagnose')
    ->name('diagnose');
Route::get('/users/questions/personalinformation','PostController@personalinformation')
    ->name('step2');
Route::post('/profile','PostController@profile')
    ->name('profile');
Route::get('/users/questions/Clothes','PostController@RegisterClothes')
    ->name('step3');
Route::post('/register','PostController@register')
    ->name('register');
Route::get('/outfit','PostController@outfit')
    ->name('outfit');  
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
