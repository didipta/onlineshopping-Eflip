<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\firstcontrollerpage;
use App\Http\Controllers\logingcontroller;
use App\Http\Controllers\profileedite;
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
    return view('index');
});


Route::get('/Signinpage', [firstcontrollerpage::class, 'signin'])->name('/signinpage');
Route::get('/logout', [logingcontroller::class, 'logout'])->name('/logout');
Route::get('/Signuppage', [firstcontrollerpage::class, 'signup'])->name('/signuppage');
Route::post('/Dashboard', [logingcontroller::class, 'loginform'])->name('/Dashboard');
Route::get('/Dashboard', [logingcontroller::class, 'hopmepage'])->middleware('pageValidation');
Route::get('/Dashboard', [firstcontrollerpage::class, 'Homepage'])->name('/Dashboardp')->middleware('pageValidation');
Route::post('/Registertion', [firstcontrollerpage::class, 'sigpupform'])->name('/Registertion');
Route::get('/profile', [firstcontrollerpage::class, 'profile'])->name('/profile')->middleware('pageValidation');
Route::post('/profileEdite', [profileedite::class,'profileEdite'])->name('/profileEdite');
Route::post('/Changepassword', [profileedite::class,'Changepassword'])->name('/Changepassword');
Route::post('/profileimg', [profileedite::class,'profileimg'])->name('/profileimg');

