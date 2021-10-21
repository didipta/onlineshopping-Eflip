<?php

namespace App\Http\Controllers;
use App\Models\Systemuser;
use Illuminate\Http\Request;

class profileedite extends Controller
{
    public function profileEdite(Request $request)
    {
        $validate=$request->validate([

            'name'=>'required',
            'address'=>'required',
       ],
       [
           'name.required'=>'Please put your name',
           'name.regex'=>'Please put Only letter',
           'address.required'=>'Please put your Address',

       ]
       
       );
       $Systemuser =Systemuser::where('id',$request->id)->first();
       $Systemuser->U_Name= $request->name;
       $Systemuser->U_address= $request->address;
       $Systemuser->save();
       return view("userview.profile",['Systemuser'=>$Systemuser]);
    }

    public function Changepassword(Request $request)
    {
        $validate=$request->validate([

            'newpassword'=>'required|min:8|regex:/^.*(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x]).*$/',
            
       ],
       [
            'newpassword.min'=>'Please least 8 or more characters',
            'newpassword.regex'=>'number,uppercase,lowercase letter must',
            'newpassword.required'=>'Please put 8 special character New password',

       ]
       
       );
       $Systemuser =Systemuser::where('id',$request->id)->first();
       if($Systemuser->U_password==$request->thispassword)
       {
        $Systemuser->U_password=$request->newpassword;
        $Systemuser->save();
        session()->forget('username');
        return view("sign-in-up.signin");
       }
       
        

    }
}
