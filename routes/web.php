<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();
Route::resource('student','App\Http\Controllers\StudentController');

//main action
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/user/login','App\Http\Controllers\Auth\LoginController@login');

//student action
Route::get('/student/create',[App\Http\Controllers\studentController::class,'create']);
Route::post('/student','App\Http\Controllers\StudentController@store');