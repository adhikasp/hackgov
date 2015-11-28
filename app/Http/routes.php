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
    'as'   => 'auth.processLogin',
    'uses' => 'Auth\AuthController@postLogin'
]);

Route::get('/daftar', [
    'as'   => 'auth.register',
    'uses' => 'Auth\AuthController@getRegister'
]);

Route::post('/daftar', [
    'uses' => 'Auth\AuthController@postRegister'
]);

Route::get('/jelajah', [
    'as'   => 'explore',
    'uses' => 'GuestController@getExplore'
]);

Route::get('/ukm/{id}', [
    'as'   => 'ukm.show',
    'uses' => 'UkmController@show'
]);

Route::group([], function() {
    Route::get('/home', [
        'as'   => 'home',
        'uses' => 'UserController@getHome'
    ]);

    Route::get('/ukm/buat', [
        'as'   => 'ukm.create',
        'uses' => 'UkmController@create'
    ]);

    Route::post('/ukm/buat', [
        'uses' => 'UkmController@store'
    ]);

    Route::get('/ukm/{id}/kelola', [
        'as'   => 'ukm.manage',
        'uses' => 'UkmController@manage'
    ]);
});