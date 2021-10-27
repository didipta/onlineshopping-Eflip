<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Systemuser;
use App\Models\Addtocart;
use Illuminate\Http\Request;

class Orderpage extends Controller
{
    public function Addtocart(Request $request)
    {

        $price=$request->item_price;
        $quantity=$request->item_quantity;
        $total=($quantity)*($price);
        $var = new Addtocart();
        $var->P_name= $request->iteam_name;
        $var->P_price= $request->item_price;
        $var->P_categories= $request->item_categories;
        $var->P_quantity= $request->item_quantity;
        $var->P_tprice=  $total;
        $var->P_size="No size";
        $var->U_username=$request->user_name;
        $var->save();
        $id=$request->id;
        $product = Product::where('id',$id)->first();;
        $usernames=session('username');
        $Systemuser = Systemuser::where('U_username',$usernames)->first();
        return view("userview.addtocarttwo",['product'=>$product,'Systemuser'=>$Systemuser]);
        
       
      
    }
    public function Addtocartfashion(Request $request)
    {

        $price=$request->item_price;
        $quantity=$request->item_quantity;
        $total=($quantity)*($price);
        $var = new Addtocart();
        $var->P_name= $request->iteam_name;
        $var->P_price= $request->item_price;
        $var->P_categories= $request->item_categories;
        $var->P_quantity= $request->item_quantity;
        $var->P_tprice=  $total;
        $var->P_size=$request->item_size;
        $var->U_username=$request->user_name;
        $var->save();
        $id=$request->id;
        $product = Product::where('id',$id)->first();;
        $usernames=session('username');
        $Systemuser = Systemuser::where('U_username',$usernames)->first();
        return view("userview.addtocart",['product'=>$product,'Systemuser'=>$Systemuser]);
        
       
      
    }
}
