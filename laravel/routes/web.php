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
//Insert Data
Route::get('/contact','App\Http\Controllers\UIContact\UIContactController@displayform'); // route to show UI contactform
Route::post('/add_data','App\Http\Controllers\UIContact\UIContactController@save'); // route to save/insert data "add_data" < name of form 

// Get or Display Data
Route::get('/contactview','App\Http\Controllers\UIContact\UIContactController@viewform');
Route::get('/contactview','App\Http\Controllers\UIContact\UIContactController@index');


Route::get('/contactadd','App\Http\Controllers\UIContact\UIContactController@displayform');//route to display/show contactfor,

//Update
Route::get('/click_edit/{id}','App\Http\Controllers\UIContact\UIContactController@edit_function');//route to display/proceed to edit page
Route::post('/update/{id}','App\Http\Controllers\UIContact\UIContactController@update_function');//route to update or save data


//Delete
Route::get('/click_delete/{id}','App\Http\Controllers\UIContact\UIContactController@delete_function');


Route::get('/', function () {
    return view('welcome');
});
