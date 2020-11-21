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
    return view('layouts.app');
    // if(Auth::check()){
    //     return redirect('/student/'.Auth::user()->student_id);
    // }
    // return view('welcome');
});

// Auth::routes();
// Route::resource('student','App\Http\Controllers\StudentController');
// Route::resource('course','App\Http\Controllers\courseController');
// Route::resource('registration','App\Http\Controllers\registrationController');

// //main action
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::post('/login','App\Http\Controllers\Auth\LoginController@login');

// //student action
// Route::get('/student/create',[App\Http\Controllers\studentController::class,'create']);
// Route::post('/student','App\Http\Controllers\StudentController@store');
// Route::get('/student/{id}','App\Http\Controllers\StudentController@show')->middleware('auth');
// Route::get('/student/{id}/edit',function(){
//     return view('editProfile');
// });
// //course action
// Route::get('/course','App\Http\Controllers\courseController@index');

// //registration action
// Route::get('/enroll','App\Http\Controllers\registrationController@index');
// Route::post('/enrolled','App\Http\Controllers\registrationController@store');
// Route::get('/grade/{id}/grading','App\Http\Controllers\registrationController@edit');
// Route::post('/graded','App\Http\Controllers\registrationController@update');