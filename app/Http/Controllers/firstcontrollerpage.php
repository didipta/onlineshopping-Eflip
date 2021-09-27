<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class firstcontrollerpage extends Controller
{
    public function signin()
    {
        return view("sign-in-up.signin");
    }
    public function loginform(Request $request)
    {
        $validate=$request->validate([

             'uname'=>'required',
             'password'=>'required'
        ],
        [
            'uname.required'=>'Please put your user id',
            'password.required'=>'Please put your password'
        ]
        
        );
        $userid=$request->uname;
        if(substr($userid,0,4)=="111-")
        {
            return view("userview.homepage");
        }
        elseif(substr($userid,0,4)=="110-")
        {
            return "110-";
        }
        else {
            return view("sign-in-up.signin");
        }
        
    }
}
