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
        return redirect()->route('/Cartdetails');
       
      
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
        return redirect()->route('/Cartdetails');
       
      
    }

    public function Cartdetails()
    {
        $usernames=session('username');
        $Systemuser = Systemuser::where('U_username',$usernames)->first();
        $cartproduct = Addtocart::where('U_username',$usernames)->get();
        return view("userview.Cartview.cartdetails",['Systemuser'=>$Systemuser,'cartproduct'=>$cartproduct]);

    }

    public function cartiteamdelete(Request $request)
    {
       $id=$request->id;
       $cartproduct = Addtocart::where('id',$id)->first();
       $cartproduct->delete();
       return redirect()->route('/Cartdetails');
    }


}
