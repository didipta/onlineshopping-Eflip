<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Systemuser;
use App\Models\Addtocart;
use App\Models\Myorder;
use App\Models\Orderdetail;
use Illuminate\Http\Request;

class paymentmethod extends Controller
{
    public function Bkashmethod(Request $request)
    {
        $validate=$request->validate([

            'phonenu'=>'required|numeric|min:11',
            'password'=>'required|min:4',
            
            
       ],
       [
           'phonenu.required'=>'Please put your Phone number',
           'phonenu.numeric'=>'Please put Number',
           'phonenu.min'=>'Please put only 11 digits',
           'password.required'=>'Please put 4 special character password',

           

           
           
       ]
       
       );
        $usernames=session('username');
        $addcart = Addtocart::select('*')->where('U_username',$usernames)->get();
        $var = new Myorder();
        $var->O_id= $request->orderid;
        $var->user_id= $request->userid;
        $var->U_username= $usernames;
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
           
             
           
           return redirect()->route('/Cartdetails');
    }
    public function cartmethod(Request $request)
    {
        $validate=$request->validate([

            'formid'=>'required|numeric|min:8',
            'password'=>'required|min:4',
            
            
       ],
       [
           'formid.required'=>'Please put your Phone number',
           'formid.numeric'=>'Please put Number',
           'formid.min'=>'Please put only 8 digits',
           'password.required'=>'Please put 4 special character password',


           
       ]
       
       );

       $usernames=session('username');
       $addcart = Addtocart::select('*')->where('U_username',$usernames)->get();
       $var = new Myorder();
       $var->O_id= $request->orderid;
       $var->user_id= $request->userid;
       $var->U_username= $usernames;
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
           
             
           
           return redirect()->route('/Cartdetails');
    }
    public function cashmethod(Request $request)
    {
       
        $usernames=session('username');
        $addcart = Addtocart::select('*')->where('U_username',$usernames)->get();
        $var = new Myorder();
        $var->O_id= $request->orderid;
        $var->user_id= $request->userid;
        $var->U_username= $usernames;
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
           
             
           
           return redirect()->route('/Cartdetails');
    }

    public function Showalloders()
    {
        $usernames=session('username');
        $Myorder = Myorder::select('*')->where('U_username',$usernames)->orderBy('created_at')->get();
        $Systemuser = Systemuser::where('U_username',$usernames)->first();
        return view("userview.Orderview.myorders",['Systemuser'=>$Systemuser,'Myorder'=>$Myorder]);
    }

    public function Showallodersdetails(Request $request)
    {
        $id=$request->id;
        $usernames=session('username');
        $Myorder = Myorder::select('*')->where('id',$id)->first();
        $Systemuser = Systemuser::where('U_username',$usernames)->first();
        $orderdetails=$Myorder->assignedinfo();
        return view("userview.Orderview.orderdetails",['Systemuser'=>$Systemuser,'Myorder'=>$Myorder,'orderdetails'=>$orderdetails]);
    }
    


    public function search(Request $request)
    {
    $output="";
    $products=Product::where('P_name','LIKE','%'.$request->search."%")->get();
    if($products)
    {
        foreach ($products as $key => $product) {
            if($product->P_categories=="Men Fashion" || $product->P_categories=="Women Fashion" )
            {
                $output.='<tr>'.
                '<td><a href="/fashionaddtocart/'.$product->id.'">'.$product->P_name.'</a></td>'.
                '</tr>';
            }
            else {
                $output.='<tr>'.
                '<td><a href="/addtocarttwo/'.$product->id.'">'.$product->P_name.'</a></td>'.
                '</tr>';
            }
        
        }
    return response($output);
    }
    }


}
