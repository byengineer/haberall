<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', 'App\AppController@init');
    Route::get('/app/profile', 'App\ProfileController@init');
    Route::resource('/app/setting','App\SettingController');
    Route::post('/profile/image-save', 'App\ProfileController@resimKaydet');

});
Auth::routes();

Route::get('/home', 'HomeController@index');


Route::group(['prefix' => 'api',  'middleware' => 'auth'], function()
{
        Route::resource('/profile', 'Api\ProfileController');
        Route::resource('/getResource', 'Api\GetResourceController');
        Route::get('/news', 'Api\NewsController@init');
        Route::get('/yazarlar/{url?}', 'Api\NewsController@yazarlar');

});
