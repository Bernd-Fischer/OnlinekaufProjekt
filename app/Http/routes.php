<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
    Route::auth();

    Route::get('/', 'HomeController@uebersicht');
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@uebersicht');
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/aufladen', 'HomeController@aufladen');
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();



    Route::get('/einkauf', 'HomeController@einkauf');
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/profil', 'HomeController@profil');
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/umsaetze', 'HomeController@umsaetze');
});

