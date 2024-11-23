<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'StaticController@index');
Route::get('/about-us', 'StaticController@about');

Route::get('/article/add', 'ArticlesController@create');
Route::post('/article/add', 'ArticlesController@store');

Route::get('/article/{id}', 'ArticlesController@show');
Route::get('/article/{id}/edit', 'ArticlesController@edit');
Route::put('/article/{id}/edit', 'ArticlesController@update');
Route::delete('/article/{id}/delete', 'ArticlesController@destroy');

Route::post('/add-comment/{id}', 'CommentsController@store');
Route::delete('/comment-destroy/{id}', 'CommentsController@destroy');

//Route::resource('/articles', 'ArticlesController');

Auth::routes();

Route::get('/user', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
