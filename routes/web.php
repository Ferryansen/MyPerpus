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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/books','BookController@index')->name('book.table');

Route::prefix('/book')->group(function() {
    Route::get('/create','BookController@create')->name('book.create');
    Route::post('/create','BookController@store')->name('book.store');

    Route::get('/{id}', 'BookController@show')->name('book.show');

    Route::get('/edit/{id}', 'BookController@edit')->name('book.edit');
    Route::patch('/edit/{id}', 'BookController@update')->name('book.update');

    Route::delete('/delete/{id}', 'BookController@delete')->name('book.delete');
});
