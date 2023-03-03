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
Route::get('/', '\App\Http\Controllers\ProductController@index');
Route::post('/', 'App\Http\Controllers\ProductController@store');
Route::delete('/delete-prods', 'App\Http\Controllers\ProductController@destroy');
Route::get('/create', 'App\Http\Controllers\ProductController@create');
Route::get('encrypt', 'App\Http\Controllers\EncryptionController@encrypt');
Route::get('decrypt', 'App\Http\Controllers\EncryptionController@decrypt');