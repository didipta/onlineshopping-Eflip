<?php

namespace App\Http\Controllers;
use App\Models\Systemuser;
use App\Models\Orderdetail;
use App\Models\Product;
use App\Models\Myorder;
use Illuminate\Http\Request;

class adminapicontroller extends Controller
{
    public function userAPIList(){
        return Systemuser::all();
    }

    public function userAPIPost(Request $request){
        $var = new Systemuser();
        $var->U_Name= $request->Name;
        $var->U_phone= $request->Phone;
        $var->U_address= $request->Address;
        $var->U_username= $request->Username;
        $var->U_email= $request->Email;
        $var->U_password= $request->Password;
        $var->Usertype= $request->Usertype;
        $var->U_profileimg= $request->Profileimg;
        $var->save();

        return $request;
    }
   
    public function orderdetailAPIList(){
        return Orderdetail::all();
    }

    public function productAPIList(){
        return Product::all();
    }
    public function productAPIPost(Request $request){
        $var = new Product();
        $var->P_id= $request->P_id;
        $var->P_name = $request->P_name;
        $var->P_price = $request->P_price;
        $var->P_categories=$request->P_categories;
        $var->P_quantity = $request->P_quantity;
        $var->P_details = $request->P_details;
        $var->P_img1=$request->P_img1;
        $var->P_img2=$request->P_img2;
        $var->P_img3=$request->P_img3;
        $var->save();

        return $request;
    }
    public function orderAPIList(){
        return Myorder::all();
    }

}
