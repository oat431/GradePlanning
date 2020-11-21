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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//main action
Route::post('/signin','App\Http\Controllers\Auth\LoginController@login');

//student action
Route::get('/student','App\Http\Controllers\studentController@index');
Route::get('/student/{id}/Edit','App\Http\Controllers\studentController@edit');

//course action
Route::get('/course','App\Http\Controllers\courseController@index');