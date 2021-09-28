<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\firstcontrollerpage;

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
Route::get('/Signuppage', [firstcontrollerpage::class, 'signup'])->name('/signuppage');
Route::post('/Dashboard', [firstcontrollerpage::class, 'loginform'])->name('/Dashboard');
Route::post('/Registertion', [firstcontrollerpage::class, 'sigpupform'])->name('/Registertion');
