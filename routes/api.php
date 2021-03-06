<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Apiproductlist;
use App\Http\Controllers\Apiprofile;
use App\Http\Controllers\staffapicontroller;
use App\Http\Controllers\adminapicontroller;
use App\Http\Controllers\Delivarymanapicontroller;
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
Route::get('/profile/{username}', [Apiprofile::class, 'profile'])->middleware('Apivalidation');
Route::get('/profilepage', [Apiprofile::class, 'profilepage'])->middleware('Apivalidation');
Route::post('/profileEdite', [Apiprofile::class,'profileEdite']);
Route::post('/Changepassword', [Apiprofile::class,'Changepassword']);
Route::post('/profileimg', [Apiprofile::class,'profileimg']);

/**oders view */
Route::get('/Showalloders/{usename}', [Apiproductlist::class, 'Showalloders'])->middleware('Apivalidation');
Route::get('/Showallodersdetails/{id}', [Apiproductlist::class, 'Showallodersdetails']);
Route::get('/financial/{usename}', [Apiproductlist::class, 'financial']);

/** payment methoed */

Route::post('/Paymentadd', [Apiproductlist::class, 'Paymentadd']);

//////Stafff Api///////////

Route::post('/addproduct',[staffapicontroller::class,'add']);

Route::get('/allproducts',[staffapicontroller::class,'APIProList']);

Route::get('/editproduct/{id}',[staffapicontroller::class,'edit']);

Route::post('/updateproduct/{id}',[staffapicontroller::class,'update']);

Route::delete('/deleteproduct/{id}',[staffapicontroller::class,'delete']);

Route::get('/allorders',[staffapicontroller::class,'order']);



/////////////Admin Api/////////////////////////////////////////

Route::get('/user/list',[adminapicontroller::class,'userAPIList']);
Route::post('/user/create',[adminapicontroller::class,'userAPIPost']);
Route::get('/orderdetail/list',[adminapicontroller::class,'orderdetailAPIList']);

Route::get('/product/list',[adminapicontroller::class,'productAPIList']);
Route::post('/product/create',[adminapicontroller::class,'productAPIPost']);

Route::get('/order/list',[adminapicontroller::class,'orderAPIList']);


/////////////////////Delivarymanapi///////////////////////
Route::get('/myorder/list',[Delivarymanapicontroller::class,'APIList']);
Route::post('/updateorder/{id}',[Delivarymanapicontroller::class,'update']);
Route::get('/editorder/{id}',[Delivarymanapicontroller::class,'edit']);
Route::get('/orderdetail/list',[Delivarymanapicontroller::class,'APILists']);
Route::get('/product/list',[Delivarymanapicontroller::class,'APIListproduct']);


