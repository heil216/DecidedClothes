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
Route::get('/users/questions/registerclothes','PostController@registerclothes')
    ->name('step3');
// Route::post('/users/questions/clothes','PostController@registerclothes');
// Route::get('/register', 'FileUpController@index');
Route::post('/add','PostController@add')
    ->name('add');
Route::get('/outfit','PostController@outfit')
    ->name('outfit');  
Route::get('/look/home','PostController@lookhome')
    ->name('lookhome');
Auth::routes();
Route::get('/home', 'HomeController@index')
    ->name('home');
