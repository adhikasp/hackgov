<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [
    'uses' => 'GuestController@getHome'
]);

Route::post('/login', [
    'uses' => 'Auth\AuthController@postLogin'
]);

Route::get('/daftar', [
    'uses' => 'Auth\AuthController@getRegister'
]);

Route::post('/daftar', [
    'uses' => 'Auth\AuthController@postRegister'
]);

Route::get('/jelajah', [
    'uses' => 'GuestController@getExplore'
]);

Route::group([], function() {
    Route::get('/home', [
        'uses' => 'UserController@getHome'
    ]);

    Route::get('/ukm/buat', [
        'uses' => 'UkmController@getCreate'
    ]);

    Route::post('/ukm/buat', [
        'uses' => 'UkmController@postCreate'
    ]);


});