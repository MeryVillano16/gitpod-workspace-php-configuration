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

Route::get('/contact','App\Http\Controllers\UIContact\UIContactController@displayform');
Route::post('/add_data','App\Http\Controllers\UIContact\UIContactController@save');

Route::get('/contactview','App\Http\Controllers\UIContact\UIContactController@viewform');
Route::get('/contactview','App\Http\Controllers\UIContact\UIContactController@index');

Route::get('/', function () {
    return view('welcome');
});
