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
/*   Route::get('/', function () {
    return view('welcome');
});  */
//第二个参数是callback
Route::get('/', '\App\Http\Controllers\PostController@index');
Route::get('/posts', '\App\Http\Controllers\PostController@index');
Route::get('/posts/test'  , '\App\Http\Controllers\PostController@test');
Route::get('/posts/create', '\App\Http\Controllers\PostController@create');
Route::get('/posts/{post}', '\App\Http\Controllers\PostController@show');
Route::get('/posts/{post}/edit', '\App\Http\Controllers\PostController@edit'); 
Route::get('/posts/test'  , '\App\Http\Controllers\PostController@test');
Route::post('/posts', '\App\Http\Controllers\PostController@store');
Route::put('/posts/{post}', '\App\Http\Controllers\PostController@update');
Route::get('/posts/{post}/delete', '\App\Http\Controllers\PostController@delete');
 /*
Route::post('/posts', '\App\Http\Controllers\PostController@store');
Route::get('/posts/search', '\App\Http\Controllers\PostController@search');
Route::get('/posts/{post}/edit', '\App\Http\Controllers\PostController@edit');
Route::put('/posts/{post}', '\App\Http\Controllers\PostController@update'); */