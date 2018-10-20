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

//文章
Route::get('/article/index','ArticleController@index')->name("article.index");
Route::any('/article/add','ArticleController@add')->name("article.add");
Route::any('/article/edit/{id}','ArticleController@edit')->name("article.edit");
Route::any('/article/del/{id}','ArticleController@del')->name("article.del");
Route::any('/article/help','ArticleController@help')->name("article.help");
Route::any('/article/about','ArticleController@about')->name("article.about");




//文章分类
Route::get('/article_category/index','ArticleCategoryController@index')->name("article_category.index");
Route::any('/article_category/add','ArticleCategoryController@add')->name("article_category.add");
Route::any('/article_category/edit/{id}','ArticleCategoryController@edit')->name("article_category.edit");
Route::any('/article_category/del/{id}','ArticleCategoryController@del')->name("article_category.del");


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

//商品分类
Route::get('/goods_category/index','GoodsCategoryController@index')->name("goods_category.index");
Route::any('/goods_category/add','GoodsCategoryController@add')->name("goods_category.add");
Route::any('/goods_category/edit/{id}','GoodsCategoryController@edit')->name("goods_category.edit");
Route::any('/goods_category/del/{id}','GoodsCategoryController@del')->name("goods_category.del");

//商品
Route::get('/goods/index','GoodsController@index')->name("goods.index");
Route::get('/goods/show{id}','GoodsController@show')->name("goods.show");
Route::any('/goods/add','GoodsController@add')->name("goods.add");
Route::any('/goods/edit/{id}','GoodsController@edit')->name("goods.edit");
Route::any('/goods/del/{id}','GoodsController@del')->name("goods.del");