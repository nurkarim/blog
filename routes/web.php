<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'FrontController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
