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

Route::middleware('admin')->group(function () {
	Route::prefix('/admin')->group(function () {
		Route::get('/', 'AdminController@index');
		Route::get('/adminShowUsers', 'AdminController@showUsers');
		Route::get('/{user}/adminEditUser', 'AdminController@edit');

			Route::prefix('/{user}')->group(function () {
				Route::patch('/', 'AdminController@update');
				Route::delete('/', 'AdminController@destroy');
			});

			Route::prefix('/adminCreateUsers')->group(function () {
				Route::get('/', 'AdminController@createUser');
				Route::post('/', 'AdminController@store');
			});
			
				Route::get('/images', 'ImageController@index')->name('images.index');
				Route::resource('/categories', 'CategoryController');
		Route::get('/adminShowArticles', 'AdminController@showArticles');
	 });
});
Route::resource('/CreateArticle','ArticleController');
Route::get('/editor', 'EditorController@index');
Route::get('/user', 'UserController@index');