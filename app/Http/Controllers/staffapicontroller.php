<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Myorder;

class staffapicontroller extends Controller
{
    public function APIProList(){
        return Product::all();
        
    }
    function add(Request $request)
    {
        $validator= Validator:: make ($request->all(),[
            'P_id'=>'required',
            'name'=>'required|min:5|max:30',
            'price'=>'required|min:2|max:10',
            'category'=>'required',
            'quantity'=>'required|min:1',
            'details'=>'required|min:10|max:30'
        ]);
        if($validator->fails()){
            return response()->json([
                'status'=>422,
                'errors'=>$validator->messages(),

            ]);
        }
        else 
        {
            $product=new Product;
            $product->P_id= $request->input('P_id');
        $product->P_name= $request->input('name');
        $product->P_price= $request->input('price');
        $product->P_categories= $request->input('category');
        $product->P_quantity= $request->input('quantity');
        $product->P_details= $request->input('details');
        if($request->hasFile('P_img1'))
        {
            $file1=$request->file('P_img1');
            $ext1=$file1->getClientOriginalExtension();
            $filename1=time().'.'.$ext1;
            $file1->move('assets/uploads/product/image1/',$filename1);
            $product->P_img1=$filename1;
        }
        if($request->hasFile('P_img2'))
        {
            $file2=$request->file('P_img2');
            $ext2=$file2->getClientOriginalExtension();
            $filename2=time().'.'.$ext2;
            $file2->move('assets/uploads/product/image2/',$filename2);
            $product->P_img2=$filename2;
        }
        if($request->hasFile('P_img3'))
        {
            $file3=$request->file('P_img3');
            $ext3=$file3->getClientOriginalExtension();
            $filename3=time().'.'.$ext3;
            $file3->move('assets/uploads/product/image3/',$filename3);
            $product->P_img3=$filename3;
        }
        $product->save();
        return response()->json([
            'status'=>200,
            'message'=>'product added successfully',
        ]);
        }
    }
    function edit($id)
    {
        
        return Product::find($id);
        
        
    }
    function update(Request $request,$id)
    {
        $validator= Validator:: make ($request->all(),[
            'P_id'=>'required',
            'P_name'=>'required|min:5|max:30',
            'P_price'=>'required|min:2|max:10',
            'P_categories'=>'required',
            'P_quantity'=>'required|min:1',
            'P_details'=>'required|min:10|max:30'
        ]);
        if($validator->fails()){
            return response()->json([
                'status'=>422,
                'errors'=>$validator->messages(),

            ]);
        }
        else 
        {
            $product= Product::find($id);
            $product->P_id= $request->input('P_id');
        $product->P_name= $request->input('P_name');
        $product->P_price= $request->input('P_price');
        $product->P_categories= $request->input('P_categories');
        $product->P_quantity= $request->input('P_quantity');
        $product->P_details= $request->input('P_details');
        if($request->hasFile('P_img1'))
        {
            $path='assests/uploads/product/image1/'.$product->P_img1;
            if(File::exists($path))
            {
               File::delete($path);
            }
            $file1=$request->file('P_img1');
            $ext1=$file1->getClientOriginalExtension();
            $filename1=time().'.'.$ext1;
            $file1->move('assets/uploads/product/image1/',$filename1);
            $product->P_img1=$filename1;
        }
        if($request->hasFile('P_img2'))
        {
            $path1='assests/uploads/product/image1/'.$product->P_img2;
            if(File::exists($path1))
            {
               File::delete($path1);
            }
            $file2=$request->file('P_img2');
            $ext2=$file2->getClientOriginalExtension();
            $filename2=time().'.'.$ext2;
            $file2->move('assets/uploads/product/image2/',$filename2);
            $product->P_img2=$filename2;
        }
        if($request->hasFile('P_img3'))
        {
            $path2='assests/uploads/product/image1/'.$product->P_img3;
            if(File::exists($path2))
            {
               File::delete($path2);
            }
            $file3=$request->file('P_img3');
            $ext3=$file3->getClientOriginalExtension();
            $filename3=time().'.'.$ext3;
            $file3->move('assets/uploads/product/image3/',$filename3);
            $product->P_img3=$filename3;
        }
        $product->update();
        return response()->json([
            'status'=>200,
            'message'=>'product updated successfully',
        ]);
        }
    }
    function delete($id){
        $product = Product::find($id);
        if($product){
       $product->delete();
       return response()->json([
           'status'=>'200',
           'message'=>'Product Deleted Successfully',
       ]);
        }
        else 
        {
            return response()->json([
                'status'=>'404',
                'message'=>'no',
            ]);

        }
    
        

    }
    public function order()
    {
        return Myorder::all();
        
    }


}
