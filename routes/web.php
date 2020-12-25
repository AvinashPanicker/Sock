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

Route::get('/','App\Http\Controllers\SockController@index');
Route::get('/testmonial','App\Http\Controllers\SockController@testmonial');
Route::get('/about','App\Http\Controllers\SockController@about');
Route::get('/shop','App\Http\Controllers\SockController@shop');
Route::get('/contact','App\Http\Controllers\SockController@contact');
Route::get('/shop/add','App\Http\Controllers\SockController@create');
Route::post("/shop/add",'App\Http\Controllers\SockController@store');
Route::get('/shop/{id}','App\Http\Controllers\SockController@show');
Route::get('/shop/{id}/edit','App\Http\Controllers\SockController@edit');
Route::post('/shop/{id}/edit','App\Http\Controllers\SockController@update');
Route::delete("/shop/{id}/delete",'App\Http\Controllers\SockController@destroy');




