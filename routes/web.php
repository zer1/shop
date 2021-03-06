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

Route::get('/', 'ProductController@index');

Route::get('one/{product}', 'ProductController@show');




Route::get('admin', 'AdminController@index');

Route::get('admin/edit/{product}', 'AdminController@edit');
Route::get('admin/delete/{product}', 'AdminController@delete');
Route::get('admin/add', 'AdminController@add');

Route::post('admin/', 'AdminController@store');

