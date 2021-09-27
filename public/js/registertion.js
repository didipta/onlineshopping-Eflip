function password(){

    var x= document.getElementById("password");
    if(x.type==="password")
    {
        x.type="text";
        document.getElementById('eye').style.color="rgba(116, 116, 116, 0.781)";
     

    }
    else{
        x.type="password";
        document.getElementById('eye').style.color="rgba(43, 43, 43, 0.781)";
    }
    }

    function cpassword(){

        var y= document.getElementById("cpassword");
        if(y.type==="password")
        {
            y.type="text";
            document.getElementById('ceye').style.color="rgba(116, 116, 116, 0.781)";
         
    
        }
        else{
            y.type="password";
            document.getElementById('ceye').style.color="rgba(43, 43, 43, 0.781)";
        }
        }