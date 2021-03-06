<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Systemuser;
use App\Models\Addtocart;

use Illuminate\Http\Request;

class firstcontrollerpage extends Controller
{
    
    public function signin()
    {
        return view("sign-in-up.signin");
    }
    

    public function signup()
    {
        $confirm="";
        $username="";
        return view("sign-in-up.signuppage",['username'=>$username,'confirm'=>$confirm]);
    }

    public function sigpupform(Request $request)
    {
        $validate=$request->validate([

            'Firstname'=>'required|regex:/^[a-zA-Z]+$/u|max:20',
            'LastName'=>'required|regex:/^[a-zA-Z]+$/u|max:20',
            'U_phone'=>'required|digits:11|numeric|unique:systemusers',
            'address'=>'required',
            'U_username'=>'required|max:10|unique:systemusers',
            'U_email'=>'required|email|unique:systemusers',
            'password'=>'required|min:8|regex:/^.*(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x]).*$/',
            'cpassword'=>'required_with:password|same:password'
            
       ],
       [
           'Firstname.required'=>'Please put your First name',
           'Firstname.regex'=>'Please put Only letter',
           'LastName.required'=>'Please put your Lastname',
           'LastName.regex'=>'Please put Only letter',
           'U_phone.required'=>'Please put your Phone number',
           'U_phone.unique'=>'Phone is alrealy exists',
           'U_phone.numeric'=>'Please put Number',
           'U_phone.digits'=>'Please put only 11 digits',
           'address.required'=>'Please put your Address',
           'U_username.required'=>'Please put your username',
           'U_username.min'=>'username is only 10 character',
           'U_username.unique'=>'username is alrealy exists',
           'U_email.required'=>'Please put your Email',
           'U_email.unique'=>'Email is alrealy exists',
           'password.min'=>'Please least 8 or more characters',
           'password.regex'=>'number,uppercase,lowercase letter must',
           'password.required'=>'Please put 8 special character password',
           'cpassword.same'=>'confirm Password not match',
           

           
           
       ]
       
       );
       $var = new Systemuser();
       $var->U_Name= $request->Firstname." ".$request->LastName;
       $var->U_phone= $request->U_phone;
       $var->U_address= $request->address;
       $var->U_username= $request->U_username;
       $var->U_email= $request->U_email;
       $var->U_password= $request->password;
       $var->Usertype=$request->usertype;
       $var->U_profileimg=$request->profileimg;
       $var->save();
       

        $confirm="block";
        $username=$request->U_username;
        return view("sign-in-up.signuppage",['username'=>$username,'confirm'=>$confirm]);
        
    }


    public function profile()
    {   
        
        
        $usernames=session('username');
        $Systemuser = Systemuser::where('U_username',$usernames)->first();
        return view("userview.profile",['Systemuser'=>$Systemuser]);
    }

    public function Homepage(Request $request)
    {

        $usernames=session('username');
        $addcart = Addtocart::where('U_username',$usernames)->get();
         $countcart=$addcart->count();
        $Systemuser = Systemuser::where('U_username',$usernames)->first();
        return view("userview.homepage",['Systemuser'=>$Systemuser,'countcart'=>$countcart]);
    }

    public function signupimg()
    {

        $Systemuser = Systemuser::where('U_username',$use_id)->first();
        $confirm="";
        $username="";
        return view("sign-in-up.signuppage",['username'=>$username,'confirm'=>$confirm]);
    }

    
}
