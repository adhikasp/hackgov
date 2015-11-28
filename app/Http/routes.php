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

Route::get('/logout', [
    'as'   => 'auth.logout',
    'uses' => 'Auth\AuthController@getLogout'
]);

Route::get('/daftar', [
    'as'   => 'auth.register',
    'uses' => 'Auth\AuthController@getRegister'
]);

Route::post('/daftar', [
    'as'   => 'auth.processRegister',
    'uses' => 'Auth\AuthController@postRegister'
]);

Route::get('/jelajah', [
    'as'   => 'ukm.index',
    'uses' => 'UkmController@index'
]);

Route::get('/ukm/{id}', [
    'as'   => 'ukm.show',
    'uses' => 'UkmController@show'
]);

Route::get('/belanja', [
    'as'   => 'store',
    'uses' => 'GuestController@store'
]);

Route::get('/cari', function() {
    return redirect()->route('ukm.search', ['ukm']);
});

Route::get('/cari/{name}', [
    'as'   => 'ukm.search',
    'uses' => 'UkmController@search'
])->where('name', '[A-Za-z0-9]+');

Route::group([], function() {
    Route::get('/home', [
        'as'   => 'user.home',
        'uses' => 'UserController@getHome'
    ]);

    Route::get('/ukm/buat', [
        'as'   => 'ukm.create',
        'uses' => 'UkmController@create'
    ]);

    Route::post('/ukm/buat', [
        'as'   => 'ukm.store',
        'uses' => 'UkmController@store'
    ]);

    Route::group([], function() {

        Route::get('/ukm/{id}/kelola', [
            'as'   => 'ukm.manage',
            'uses' => 'UkmController@manage'
        ]);

        Route::get('/ukm/{id}/kelola/edit', [
            'as'   => 'ukm.edit',
            'uses' => 'UkmController@edit'
        ]);

        Route::post('/ukm/{id}/kelola/edit', [
            'as'   => 'ukm.update',
            'uses' => 'UkmController@update'
        ]);

        Route::get('/ukm/{id}/kelola/artikel/baru', [
            'as'   => 'ukm.article.create',
            'uses' => 'ArticleController@create'
        ]);

        Route::post('/ukm/{id}/kelola/artikel/baru', [
            'as'   => 'ukm.article.store',
            'uses' => 'ArticleController@store'
        ]);

    });

});