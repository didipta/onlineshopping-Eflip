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
Route::get('/Dashboard', [logingcontroller::class, 'hopmepage'])->name('/Dashboard')->middleware('pageValidation');
Route::get('/Dashboardh/{id}', [firstcontrollerpage::class, 'Homepage'])->middleware('pageValidation');
Route::post('/Registertion', [firstcontrollerpage::class, 'sigpupform'])->name('/Registertion');
Route::get('/profile/{id}', [firstcontrollerpage::class, 'profile'])->middleware('pageValidation');
Route::post('/profileEdite', [profileedite::class,'profileEdite'])->name('/profileEdite');
Route::post('/Changepassword', [profileedite::class,'Changepassword'])->name('/Changepassword');

