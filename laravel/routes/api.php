<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//get method
Route::get('contact', 'App\Http\Controllers\Contact\ContactController@contactAll');

//get method using Id
Route::get('contact/{id}', 'App\Http\Controllers\Contact\ContactController@contactById');

//post method
Route::post('contact', 'App\Http\Controllers\Contact\ContactController@contactSave');

//put method
Route::put('contact/{contact}', 'App\Http\Controllers\Contact\ContactController@contactUpdate');

//delete method
Route::delete('contact/{contact}', 'App\Http\Controllers\Contact\ContactController@contactDelete');