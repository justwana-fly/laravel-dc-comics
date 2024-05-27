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

// Route::get('/comics', 'App\Http\Controllers\ComicController@index')->name('comics.index');
// Route::get('/comics/create', 'App\Http\Controllers\ComicController@create')->name('comics.create');
// Route::post('/comics', 'App\Http\Controllers\ComicController@store')->name('comics.store');
// Route::get('/comics/{comic}', 'App\Http\Controllers\ComicController@show')->name('comics.show');
// Route::get('/comics/{comic}/edit', 'App\Http\Controllers\ComicController@edit')->name('comics.edit');
// Route::put('/comics/{comic}', 'App\Http\Controllers\ComicController@update')->name('comics.update');
// Route::delete('/comics/{comic}', 'App\Http\Controllers\ComicController@destroy')->name('comics.destroy');
Route::resource('comics', ComicController::class);


