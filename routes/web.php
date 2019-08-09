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


Route::get('/','PostController@getPosts');

Auth::routes();


Route::get('/home', 'HomeController@getPosts')->name('home');
Route::get('/home/edit/{id}','HomeController@getEdit');

Route::get('catalog/{id}','CatalogController@getIndex');

