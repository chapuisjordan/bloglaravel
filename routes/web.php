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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/category', 'CategoryController@index');

Route::get('/category/create', 'CategoryController@create');

Route::get('/category/update/{id}', 'CategoryController@update');

Route::post('/category/create', 'CategoryController@store')->name('categoryStore');

Route::post('/category/update/{id}', 'CategoryController@edit')->name('categoryEdit');

Route::post('/category/update/{id}', 'CategoryController@store')->name('categoryStore');

