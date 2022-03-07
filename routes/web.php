<?php

use App\Http\Controllers\PostController;

Route::group(['middleware' => ['auth']], function(){
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
    Route::get('users/questions/todaymood','PostController@todaymood')
        ->name('todaymood');
    Route::post('/coordinate','PostController@coordinate')
        ->name('coordinate');
    Route::get('/coordinate/{mood}','PostController@coordinate');
    Route::get('/users/clothes/result','PostController@result')
        ->name('result');
    Route::post('/add','PostController@add')
        ->name('add');
    Route::get('/result','PostController@result')
        ->name('result');  
    Route::get('/users/clothes/list','PostController@list')
        ->name('list');
    Route::get('/users/clothes/list/{clothe}', 'PostController@show')
        ->name('show');
    Route::delete('/users/clothes/list/{clothe}', 'PostController@delete')
        ->name('delete');
});
Route::get('/look/home','PostController@lookhome')
    ->name('lookhome');
Auth::routes();
Route::get('/home', 'HomeController@index')
    ->name('home');
Route::get('guest', 'Auth\LoginController@guestLogin')
    ->name('login.guest');
// Route::get('/', 'WeatherController@index');
