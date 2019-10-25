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

Route::get('/', 'FormController@showForm');
Route::get('form', 'FormController@showForm');
Route::get('list', 'FormController@index');

Route::post('form' , 'FormController@store');
Route::get('succes', 'FormController@succes');