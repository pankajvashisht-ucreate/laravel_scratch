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
    $new =['1','2'];
    dd(app('somefunction')->count_array($new));
    return view('welcome');
});

Auth::routes();

Route::get('/books', 'BooksController@index')->name('home')->middleware('auth');
Route::get('add_book','BooksController@create')->name('add_book')->middleware('auth');
Route::resource('category','CategoryController')->middleware('auth')->middleware('auth');
Route::post('/books','BooksController@store')->middleware('auth')->middleware('auth');
Route::delete('/books/{book}','BooksController@distory')->middleware('auth')->middleware('auth');
Route::get('books/{book}','BooksController@show')->middleware('can:view,book');