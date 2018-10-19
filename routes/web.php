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
Route::get('/article/index','ArticleController@index')->name("article.index");
Route::any('/article/add','ArticleController@add')->name("article.add");
Route::any('/article/edit/{id}','ArticleController@edit')->name("article.edit");
Route::any('/article/del/{id}','ArticleController@del')->name("article.del");
Route::any('/article/help','ArticleController@help')->name("article.help");
Route::any('/article/about','ArticleController@about')->name("article.about");


//书
Route::get('/book/index','BookController@index')->name("book.index");
Route::any('/book/add','BookController@add')->name('book.add');
Route::any('/book/edit/{id}','BookController@edit')->name('book.edit');
Route::any('/book/del/{id}','BookController@del')->name('book.del');

//食物
Route::get('/food/index','FoodController@index')->name("food.index");
Route::any('/food/add','FoodController@add')->name('food.add');
Route::any('/food/edit/{id}','FoodController@edit')->name('food.edit');
Route::any('/food/del/{id}','FoodController@del')->name('food.del');