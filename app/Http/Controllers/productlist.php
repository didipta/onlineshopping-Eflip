<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Systemuser;
use App\Models\Addtocart;

class productlist extends Controller
{
    public function productlist(Request $request)
    {
        $id=$request->id;
        $product = Product::all()->where('P_categories',$id);
        $usernames=session('username');
        $addcart = Addtocart::where('U_username',$usernames)->get();
        $countcart=$addcart->count();
        $Systemuser = Systemuser::where('U_username',$usernames)->first();
        return view("userview.productlist",['product'=>$product,'Systemuser'=>$Systemuser,'categories'=> $id,'countcart'=>$countcart]);
    }
    
    public function fashionproductlist(Request $request)
    {
        $id=$request->id;
        $product = Product::all()->where('P_categories',$id);
        $usernames=session('username');
        $addcart = Addtocart::where('U_username',$usernames)->get();
        $countcart=$addcart->count();
        $Systemuser = Systemuser::where('U_username',$usernames)->first();
        return view("userview.fashionproduct",['product'=>$product,'Systemuser'=>$Systemuser,'categories'=> $id,'countcart'=>$countcart]);
    }
//show product
    public function fashionaddtocart(Request $request)
    {
        $usernames=session('username');
        $addcart = Addtocart::where('U_username',$usernames)->get();
         $countcart=$addcart->count();
        $id=$request->id;
        $product = Product::where('id',$id)->first();;
        $Systemuser = Systemuser::where('U_username',$usernames)->first();
        return view("userview.addtocart",['product'=>$product,'Systemuser'=>$Systemuser,'countcart'=>$countcart]);
    }

    public function addtocarttwo(Request $request)
    {
        $usernames=session('username');
        $addcart = Addtocart::where('U_username',$usernames)->get();
        $countcart=$addcart->count();
        $id=$request->id;
        $product = Product::where('id',$id)->first();;
        $Systemuser = Systemuser::where('U_username',$usernames)->first();
        return view("userview.addtocarttwo",['product'=>$product,'Systemuser'=>$Systemuser,'countcart'=>$countcart]);
    }
}

