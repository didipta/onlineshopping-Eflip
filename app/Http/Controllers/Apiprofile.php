<?php

namespace App\Http\Controllers;
use App\Models\Systemuser;
use Illuminate\Http\Request;

class Apiprofile extends Controller
{
    public function profile(Request $request)
    {   
        
        $usernames=$request->username;
        $Systemuser = Systemuser::where('U_username',$usernames)->first();
        return $Systemuser;
    }

    public function loginform(Request $request)
    {
        
        $userid=$request->uname;
        $password=$request->password;
        $Systemusers = Systemuser::select('*')->where('U_username',$userid)->where('U_password',$password)->first();
        return $Systemusers;
    }

    public function sigpupform(Request $request)
    {
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
        $username=$request->U_username;
       $data=["confirm"=>"block","username"=>$username];
       return $data;
        
    }
    
    public function profileEdite(Request $request)
    {
       
       $Systemuser =Systemuser::where('id',$request->id)->first();
       $Systemuser->U_Name= $request->name;
       $Systemuser->U_address= $request->address;
       $Systemuser->save();
       return "ok";
    }

    public function Changepassword(Request $request)
    {
     
        $Systemuser =Systemuser::where('id',$request->id)->first();
        $Systemuser->U_password=$request->newpassword;
        $Systemuser->save();
    }

    public function profileimg(Request $request)
    {
        $Systemuser =Systemuser::where('id',$request->id)->first();
        $Systemuser->U_profileimg=$request->imgfile;;
        $Systemuser->save();
        
    }
}
