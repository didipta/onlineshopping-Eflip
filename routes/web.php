<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\firstcontrollerpage;
use App\Http\Controllers\logingcontroller;
use App\Http\Controllers\profileedite;
use App\Http\Controllers\pagecontroller;
use App\Http\Controllers\productlist;
use App\Http\Controllers\Orderpage;
use App\Http\Controllers\paymentmethod;
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
/*
  user Page
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
Route::get('/productlist/{id}', [productlist::class,'productlist'])->middleware('pageValidation');;
Route::get('/fashionproductlist/{id}', [productlist::class,'fashionproductlist'])->middleware('pageValidation');
Route::get('/fashionaddtocart/{id}', [productlist::class,'fashionaddtocart'])->middleware('pageValidation');
Route::get('/addtocarttwo/{id}', [productlist::class,'addtocarttwo'])->middleware('pageValidation');;
Route::post('/Addtocart', [Orderpage::class,'Addtocart'])->name('/Addtocart');
Route::post('/Addtocartfashion', [Orderpage::class,'Addtocartfashion'])->name('/Addtocartfashion');
Route::get('/Cartdetails', [Orderpage::class, 'Cartdetails'])->name('/Cartdetails')->middleware('pageValidation');
Route::get('/cartiteamdelet/{id}', [Orderpage::class, 'cartiteamdelete'])->name('/cartiteamdelet')->middleware('pageValidation');


Route::post('/Bkashmethod', [paymentmethod::class, 'Bkashmethod'])->name('/Bkashmethod');
Route::post('/cartmethod', [paymentmethod::class, 'cartmethod'])->name('/cartmethod');
Route::post('/cashmethod', [paymentmethod::class, 'cashmethod'])->name('/cashmethod');

Route::get('/search', [paymentmethod::class, 'search'])->name('search');


Route::get('/Showalloders', [paymentmethod::class, 'Showalloders'])->name('/Showalloders')->middleware('pageValidation');
Route::get('/Showallodersdetails/{id}', [paymentmethod::class, 'Showallodersdetails'])->name('/Showallodersdetails')->middleware('pageValidation');


/*
  Admin Page
*/
Route::get('/productaddpage', [pagecontroller::class, 'productaddpage'])->name('/productaddpage')->middleware('pageValidation');
Route::post('/productadd', [pagecontroller::class, 'productadd'])->name('/productadd');



