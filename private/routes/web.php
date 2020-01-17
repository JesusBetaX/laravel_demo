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
Route::get('/home', 'HomeController@index');

Route::get('/get_nombre_libros', 'HomeController@get_nombre_libros');

Route::get('/libro', 'LibroController@index');
Route::get('/libro/add', 'LibroController@add');
Route::post('/libro/insert', 'LibroController@insert');
Route::get('/libro/edit/{id}', 'LibroController@edit');
Route::post('/libro/update', 'LibroController@update');
Route::get('/libro/delete/{id}', 'LibroController@delete');
