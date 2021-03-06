<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' =>'App\Http\Controllers'], function () {
    Route::GET('affichage/', 'UserController@affichage');
    Route::GET('getfile', 'UserController@getfile');
    Route::GET('index', 'UserController@index');
    Route::GET('indexx', 'UserController@indexx');
    Route::POST('store', 'UserController@store');
});