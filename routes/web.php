<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', 'PagesController@getIndex')->name('index');
Route::get('contact', 'PagesController@getContact')->name('contact');
Route::get('about', 'PagesController@getAbout')->name('about');
Route::get('music', 'PagesController@getMusic')->name('music');
Route::get('art', 'PagesController@getArt')->name('art');
Route::get('local', 'PagesController@getLocal')->name('local');
Route::get('places', 'PagesController@getPlaces')->name('places');
Route::get('eatdrink', 'PagesController@getEatdrink')->name('eatdrink');
Route::get('posts.create', 'PagesController@getCreate')->name('posts.create');
Route::get('posts.edit', 'PagesController@getEdit')->name('posts.edit');
Route::get('/admin', 'AdminController@getAdmin')->name('admin');
Route::get('home', 'HomeController@index')->name('home');

Auth::routes();

Route::resource('/posts', 'PostsController');
Route::resource('/categories', 'CategoryController');

Route::post('/approve/{post_id}', 'PostsController@approvePost');
Route::post('/unapprove/{post_id}', 'PostsController@unapprovePost');
