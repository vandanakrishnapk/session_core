<?php

use Illuminate\Support\Facades\Route;
Route::group(['middleware'=>'user'], function() {    
Route::get('/index','HomeController@index')->name('index');
});
Route::get('/','HomeController@login')->name('login');
Route::post('/login','HomeController@dologin')->name('do.login');
Route::get('/logout','HomeController@logout')->name('do.logout');