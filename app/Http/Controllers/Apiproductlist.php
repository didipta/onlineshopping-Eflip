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


}
