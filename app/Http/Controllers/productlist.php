<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Systemuser;

class productlist extends Controller
{
    public function productlist(Request $request)
    {
        $id=$request->id;
        $product = Product::all()->where('P_categories',$id);
        $usernames=session('username');
        $Systemuser = Systemuser::where('U_username',$usernames)->first();
        return view("userview.productlist",['product'=>$product,'Systemuser'=>$Systemuser]);
    }
}
