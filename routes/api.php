<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Apiproductlist;
use App\Http\Controllers\Apiprofile;
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

/**productlist page  */
Route::get('/productlist/{id}', [Apiproductlist::class,'productlist'])->middleware('Apivalidation');
Route::get('/addtocarttwo/{id}', [Apiproductlist::class,'addtocarttwo'])->middleware('Apivalidation');
Route::get('/cartiteamdelet/{id}', [Apiproductlist::class, 'cartiteamdelete']);

/** addto card */
Route::post('/Addtocart', [Apiproductlist::class,'Addtocart'])->middleware('Apivalidation');
Route::get('/Addtocartdetalis/{id}', [Apiproductlist::class,'Addtocartdetalis']);

/**live search */
Route::get('/search', [Apiproductlist::class, 'search']);

/*Signinpage & logout*/
Route::post('/loginform', [Apiprofile::class, 'loginform']);
Route::post('/Registertion', [Apiprofile::class, 'sigpupform']);
/**profile page */
Route::get('/profile/{username}', [Apiprofile::class, 'profile']);
Route::get('/profilepage', [Apiprofile::class, 'profilepage']);
Route::post('/profileEdite', [Apiprofile::class,'profileEdite']);
Route::post('/Changepassword', [Apiprofile::class,'Changepassword']);

/**oders view */
Route::get('/Showalloders/{usename}', [Apiproductlist::class, 'Showalloders'])->middleware('Apivalidation');
Route::get('/Showallodersdetails/{id}', [Apiproductlist::class, 'Showallodersdetails'])->middleware('Apivalidation');


/** payment methoed */

Route::post('/Paymentadd', [Apiproductlist::class, 'Paymentadd']);