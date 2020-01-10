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

Auth::routes();
Route::get('/', 'HomeController@index');

Route::get('/libro', 'LibroController@index');
Route::get('/libro/add', 'LibroController@add');
Route::get('/libro/show/{id}', 'LibroController@show');
Route::post('/libro/save', 'LibroController@save');
Route::get('/libro/delete/{id}', 'LibroController@delete');
