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

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/posts/{post}', 'PostController@show')->name('posts.show');

Route::get('/categories/{category}/posts', 'PostController@showByCategory')->name('category.posts');
Route::get('/tags/{tag}/posts', 'PostController@showByTag')->name('tag.posts');
