<?php

namespace App\Http\Controllers;
use App\Models\Systemuser;
use App\Models\Orderdetail;
use App\Models\Product;
use App\Models\Myorder;

use Illuminate\Http\Request;

class Delivarymanapicontroller extends Controller
{
    public function APIList(){
        return Myorder::all();
    }

    function edit($id)
    {
        return Myorder::find($id);
    }

    public function update(Request $request){

        $var = Myorder::where('id',$request->id)->first();
        $var->O_status=$request->O_status;
        $var->save();

        return $request;
    }
    public function APILists(){

        return Orderdetail::all();

    }
    public function APIListproduct(){

        return Product::all();

    }
}
