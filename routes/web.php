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
Route::get('/admin/adminShowUsers', 'AdminController@showUsers');
Route::get('/admin/{user}/adminEditUser', 'AdminController@edit');
Route::patch('/admin/{user}', 'AdminController@update');
Route::delete('/admin/{user}', 'AdminController@destroy');
Route::get('/admin/adminCreateUsers', 'AdminController@createUser');
Route::post('admin/adminCreateUsers', 'AdminController@store');
Route::get('/editor', 'EditorController@index');
Route::get('/user', 'UserController@index');