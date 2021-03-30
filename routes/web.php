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

Route::get('post/create/video','PostController@videoPostCreate')->name('video.post');
Route::get('post/edit/video/{id}','PostController@videoPostEdit')->name('video.postEdit');
Route::get('post/all-video-post','PostController@allVideoPost')->name('video.postAll');
Route::get('post/all-pending-post','PostController@pendingPost')->name('post.pending');
Route::get('post/all-draft-post','PostController@draftPost')->name('post.draftPost');
Route::get('post/all-schedule-post','PostController@schedulePost')->name('post.schedulePost');

Route::resource('galleries','GalleryController');
Route::get('gallery/fetch-image','GalleryController@fetchImage')->name('gallery.fetch');
Route::delete('gallery/fetch-delete','GalleryController@delete')->name('galleries-destroy');
//==============This route working for upload videos
Route::get('gallery/fetch-video','GalleryController@fetchVideo')->name('fetch-video');
Route::post('gallery/video-save','GalleryController@videoUpload')->name('video-upload');
Route::delete('gallery/delete-video','GalleryController@deleteVideo')->name('delete-video');

Route::resource('menu-items','MenuController');
Route::resource('pages','PageController');
