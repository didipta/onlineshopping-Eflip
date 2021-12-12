<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Addtocart;
use App\Models\Myorder;
use App\Models\Orderdetail;
use Illuminate\Http\Request;

class Apiproductlist extends Controller
{
    public function productlist(Request $request)
    {
        $id=$request->id;
        $product = Product::select('*')->where('P_categories',$id)->get();
        return $product;
    }
    public function addtocarttwo(Request $request)
    {
        $id=$request->id;
        $product = Product::where('id',$id)->first();;
        return $product;
    }

    public function search(Request $request)
    {
    $output="";
    $products=Product::where('P_name','LIKE','%'.$request->search."%")->get();
    if($products)
    {
        foreach ($products as $key => $product) {
           
                $output.='<tr>'.
                '<td><a href="/addtocarttwo/'.$product->id.'">'.$product->P_name.'</a></td>'.
                '</tr>';
        
        }
    return response($output);
    }
    }

    public function Showalloders(Request $request )
    {
        $usernames=$request->usename;
        $Myorder = Myorder::select('*')->where('U_username',$usernames)->orderby('id','desc')->get();
        return $Myorder;
    }
    public function Showallodersdetails(Request $request)
    {
        $id=$request->id;
        $Myorder = Myorder::select('*')->where('id',$id)->first();
        $orderdetails=$Myorder->assignedinfo();
        return $orderdetails;
    }


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
        $var->P_size=$request->item_size;
        $var->U_username=$request->user_name;
        $var->save();
    }


    public function Addtocartdetalis(Request $request)
    {
        $usernames=$request->id;
        $addcart = Addtocart::where('U_username',$usernames)->get();
        return $addcart;
        
    }

    public function cartiteamdelete(Request $request)
    {
       $id=$request->id;
       $cartproduct = Addtocart::where('id',$id)->first();
       $cartproduct->delete();
       
    }

    public function Paymentadd(Request $request)
    {
        
       $usernames=$request->username;
       $addcart = Addtocart::select('*')->where('U_username',$usernames)->get();
       $var = new Myorder();
       $var->O_id= $request->orderid;
       $var->user_id= $request->userid;
       $var->U_username= $request->username;
       $var->P_tprice= $request->totaleprice;
       $var->O_status= "Your Order is processing";
       $var->Paymanttype= $request->Paymenttype;
       $var->save();

       foreach($addcart as $addcart)
          {
              $orderdetail=new Orderdetail();
              $orderdetail->order_id= $var->id;
              $orderdetail->P_name= $addcart->P_name;
              $orderdetail->P_price= $addcart->P_price;
              $orderdetail->P_categories= $addcart->P_categories;
              $orderdetail->P_quantity= $addcart->P_quantity;
              $orderdetail->P_tprice= $addcart->P_tprice;
              $orderdetail->P_size= $addcart->P_size;
              $orderdetail->U_username= $addcart->U_username;
              $orderdetail->save();
              $addcart->delete();
          }
    }



}
