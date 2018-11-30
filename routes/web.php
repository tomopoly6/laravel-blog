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

Route::get('/', 'ArticleController@index');

//記事の作成
Route::get('create', 'ArticleController@create');
Route::post('create', 'ArticleController@store');

//記事の編集
//引数を{id}として渡す
Route::get('edit/{id}', 'ArticleController@edit');
Route::post('edit', 'ArticleController@update');

//記事の削除
Route::get('delete/{id}', 'ArticleController@show');
Route::post('delete', 'ArticleController@delete');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
