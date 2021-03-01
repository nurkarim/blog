<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'FrontController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/mark-as-read', 'HomeController@markNotification')->name('markNotification');
Route::post('/mark-as-delete', 'HomeController@deleteNotification')->name('deleteNotification');

Route::resource('languages','LanguageController');
Route::resource('categories','CategoryController');
Route::resource('subcategories','SubCategoryController');
Route::get('ajaxCategory','SubCategoryController@ajaxCategory')->name('ajaxCategory');
Route::resource('posts','PostController');
Route::resource('galleries','GalleryController');
Route::get('gallery/fetch-image','GalleryController@fetchImage')->name('gallery.fetch');
