@extends("userview.layout")
@section("content")

<div class="profile">
<div class="top-head">
    <p style=" margin-left:20px ;"> <a href="{{route('/Dashboardh')}}">Home</a>/ <a href="#" style="color:black;">Profile</a> </p>
</div>
<section>
    <section id="profile-info">

        <form action="#" method="Post" class="profile-form" enctype="multipart/form-data">
              
          <div class="img">

            <img src="img/pro.png" alt="" id="blah">

            <label for="imgfile" class="Add-file"><i type="file" class="fa fa-plus" aria-hidden="true"></i></label>
            <div class="file-style"> <input type="file" name="imgfile" id="imgfile" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])" ></div>
        </div>
     </form>

        <form action="" method="Post" class="profile-form">
            <fieldset>
                <legend><p>Username</p></legend> 
                <div class="input-file">
                    <input type="text" id="username" value="" name="username" placeholder="username" pattern="[A-Za-z\s]+" title="Only letter support"><br>
                </div>
                
            </fieldset>

            <fieldset>
                <legend><p>Address</p></legend> 
                <div class="input-file">
                    <input type="text" id="username" value="" name="address" placeholder="Address" required="" ><br>
                </div>
                
            </fieldset>

            <fieldset>
                <legend><p>Email</p></legend> 
                <div class="input-file">
                    <input type="text" id="username" value="" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Wrong email format"><br>
                </div>
                
            </fieldset>

            <fieldset>
                <legend><p>User Id</p></legend> 
                <div class="input-file">
                    <input type="text" id="username" value="" name="useid" placeholder="User Id" readonly><br>
                </div>
                
            </fieldset>

            <fieldset>
                <legend><p>Phone Number</p></legend> 
                <div class="input-file">
                    <input type="text" id="username" value="" name="phone" placeholder="Phone Number"  pattern="[0-9]{11}" title="Wrong phone number"><br>
                </div>
               
            </fieldset>
        

            <input type="submit" name="submit" value="Save" class="btn" >
        
           
        </form>

    </section>

    <section id="Change-password">
        <div class="head">
            <h1>
                PASSWORD
            </h1>
        </div>
        <form action="" method="Post" class="Changepassword">

           
                <div class="input-file-cp" >
                    <input type="password" id="password"  name="thispass" placeholder="Current password"><br>
                    <div class="eye eyes" onclick=" myFunction() " style=" position:absolute; left:35vw; top:7.5vw;  cursor: pointer;"><i class="fa fa-eye" aria-hidden="true" ></i></div> 
                </div>
               
          
                <div class="input-file-cp">
                    <input type="password" id="cpassword" name="newpass" placeholder="New password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase 
                        and lowercase letter, and at least 8 or more characters">
              <div class="eye eyes" onclick=" myFunction() " style=" position:absolute; left:35vw; top:12vw;  cursor: pointer;"><i class="fa fa-eye" aria-hidden="true" ></i></div> 
                </div>

                <button class="btn">
                    Save
                    </button>
               
         <p>  </p>

        </form>
    </section>
</div>

@endsection
@section("title")
Online Shopping | Dipta Saha
@endsection