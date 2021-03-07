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
Route::get('ajaxSubCategory','SubCategoryController@ajaxSubCategory')->name('ajaxSubCategory');
Route::resource('posts','PostController');

Route::get('video/post/create','PostController@videoPostCreate')->name('video.post');

Route::resource('galleries','GalleryController');
Route::get('gallery/fetch-image','GalleryController@fetchImage')->name('gallery.fetch');
Route::delete('gallery/fetch-delete','GalleryController@delete')->name('galleries-destroy');
//==============This route working for upload videos
Route::get('gallery/fetch-video','GalleryController@fetchVideo')->name('fetch-video');
Route::post('gallery/video-save','GalleryController@videoUpload')->name('video-upload');
Route::delete('gallery/delete-video','GalleryController@deleteVideo')->name('delete-video');
