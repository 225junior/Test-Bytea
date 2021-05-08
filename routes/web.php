<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::group(['namespace'=>'App\Http\Controllers'], function(){

    Route::get('users','UtilisateurController@index')->name('users');
    
});


Route::get('user/add/', function () {
    return view('user.add');
});