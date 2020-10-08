<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PostController@index') -> name('post_index');

Route::get('/post/create', 'PostController@create') -> name('post_create');
Route::post('/post/store', 'PostController@store') -> name('post_store');



Route::get('/api/posts/all', 'PostApiController@getAllPost') -> name('post_api_all');
