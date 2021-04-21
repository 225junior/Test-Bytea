<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' =>'App\Http\Controllers'], function () {
    Route::GET('index', 'UserController@index');
    Route::POST('store', 'UserController@store');
});