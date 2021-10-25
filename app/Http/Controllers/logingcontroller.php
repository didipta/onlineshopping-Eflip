<?php

namespace App\Http\Controllers;
use App\Models\Systemuser;

use Illuminate\Http\Request;

class logingcontroller extends Controller
{
    
    public function loginform(Request $request)
    {
        
        $validate=$request->validate([

             'uname'=>'required',
             'password'=>'required'
        ],
        [
            'uname.required'=>'Please put your user name',
            'password.required'=>'Please put your password'
        ]
        
        );
        $userid=$request->uname;
        $password=$request->password;
        $Systemusers = Systemuser::select('*')->where('U_username',$userid)->where('U_password',$password)->get();
        $count=$Systemusers->count();
        

        if ($count>0) {
        $Systemuser = Systemuser::select('*')->where('U_username',$userid)->where('U_password',$password)->first();
        $usertype=$Systemuser->Usertype;
        $user_name=$Systemuser->U_username;
        

        if($usertype=="Customer")
        {   
            
            $request->session()->put('username', $user_name);
            return view("userview.homepage",['Systemuser'=>$Systemuser]);
        }
        elseif($usertype=="Admin")
        {
            return view("Adminview.home");
        }
        elseif($usertype=="Staff")
        {
            return view("sign-in-up.signin");
        }
        elseif($usertype=="Delivaryman")
        {
            return view("sign-in-up.signin");
        }
        else {
            return view("sign-in-up.signin");
        }

        }
       else {
        return view("sign-in-up.signin");
       }
    }
    public function hopmepage(){
        $usernames=session('username');
        $Systemuser = Systemuser::where('U_username',$usernames)->first();
        return view("userview.homepage",['Systemuser'=>$Systemuser]);
    }

    public function logout(){
        session()->forget('username');
        return view("sign-in-up.signin");
    }
}
