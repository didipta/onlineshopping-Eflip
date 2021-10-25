<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class pagecontroller extends Controller
{
    public function productaddpage()
    {
        $product = Product::all();
        return view("Adminview.productadd")->with('product',$product);
    }

    public function productadd(Request $request)
    {
        $validate=$request->validate([

            'p_name'=>'required',
            'p_id'=>'required',
            'p_desc'=>'required',
            'p_price'=>'required',
            'p_quantity'=>'required',
            'p_category'=>'required',
            
       ],
       [
           'p_name.required'=>'Please put your p_name',
           'p_code.required'=>'Please put your p_code',
           'p_desc.required'=>'Please put your p_desc',
           'p_price.required'=>'Please put your p_price',
           'p_quantity.required'=>'Please put your p_quantity',
           'p_category.required'=>'Please put your p_category',
           

           
           
       ]);
       
       $var = new Product();
        $var->P_name= $request->p_name;
        $var->P_id= $request->p_id;
        $var->P_details= $request->p_desc;
        $var->P_price= $request->p_price;
        $var->P_quantity= $request->p_quantity;
        $var->P_img1=$request->imgfile1;
        $var->P_img2=$request->imgfile2;
        $var->P_img3=$request->imgfile3;
        $var->P_categories= $request->p_category;
        $var->save();
        $product = Product::all();
        return view("Adminview.productadd")->with('product',$product);
        
    }



    public function productedit(Request $request){
        //
        $id = $request->id;
        $product = product::where('id',$id)->first();
        return view('productedit')->with('product', $product);

    }

    public function productdelete(Request $request){
        $var = product::where('id',$request->id)->first();
        $var->delete();
        $product = product::all();
        return view("productadd")->with('product',$product);

    }

    public function producteditSubmit(Request $request){
        $validate=$request->validate([

            'p_name'=>'required',
            'p_code'=>'required',
            'p_desc'=>'required',
            'p_price'=>'required',
            'p_quantity'=>'required',
            'p_stock_date'=>'required',
            'p_purchased'=>'required',
            'p_ratig'=>'required',
            'p_category'=>'required'
            
       ],
       [
           'p_name.required'=>'Please put your p_name',
           'p_code.required'=>'Please put your p_code',
           'p_desc.required'=>'Please put your p_desc',
           'p_price.required'=>'Please put your p_price',
           'p_quantity.required'=>'Please put your p_quantity',
           'p_stock_date.required'=>'Please put your p_stock_date',
           'p_purchased.required'=>'Please put yourr p_purchased',
           'p_ratig.required'=>'Please put your p_ratig',
           'p_category.required'=>'Please put your p_category',
           

           
           
       ]
       
       );
        $var = product::where('id',$request->id)->first();
        $var->p_name= $request->p_name;
        $var->p_code= $request->p_code;
        $var->p_desc= $request->p_desc;
        $var->p_price= $request->p_price;
        $var->p_quantity= $request->p_quantity;
        $var->p_stock_date= $request->p_stock_date;
        $var->p_purchased= $request->p_purchased;
        $var->p_ratig= $request->p_ratig;
        $var->p_category= $request->p_category;
        $var->save();
        $product = product::all();
        return view("productedit")->with('product',$product);

    }

    public function productdetails(Request $request){
        $product = product::all();
        return view("productdetails")->with('product',$product);

    }
}
