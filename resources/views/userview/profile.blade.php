@extends("userview.layout")
@section("content")

<div class="profile">
<div class="top-head">
    <p style=" margin-left:20px ;"> <a href="/Dashboardh/{{$Systemuser->id}}">Home</a>/ <a href="#" style="color:black;">Profile</a> </p>
</div>
<section>
    <section id="profile-info">

        <form action="#" method="Post" class="profile-form" enctype="multipart/form-data">
              
          <div class="img">

            <img src="/img/pro.png" alt="" id="blah">

            <label for="imgfile" class="Add-file"><i type="file" class="fa fa-plus" aria-hidden="true"></i></label>
            <div class="file-style"> <input type="file" name="imgfile" id="imgfile" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])" ></div>
        </div>
     </form>

        <form action="{{route('/profileEdite')}}" method="Post" class="profile-form">
        
        {{csrf_field()}}
        <input type="hidden" name="id"  value="{{$Systemuser->id}}">
            <fieldset>
                <legend><p>Username</p></legend> 
                <div class="input-file">
                    <input type="text" id="name" value="{{$Systemuser->U_Name}}" name="name" placeholder="username" ><br>
                </div>
                
            </fieldset>
            @error('name')
                      <span class="error" style="position:absolute; top:74%;" >{{$message}}</span>
                    @enderror
            <fieldset>
                <legend><p>Address</p></legend> 
                <div class="input-file">
                    <input type="text" id="address" value="{{$Systemuser->U_address}}" name="address" placeholder="Address" ><br>
                </div>
                
            </fieldset>
            @error('address')
                      <span class="error" style="position:absolute; top:74%;" >{{$message}}</span>
                    @enderror
            <fieldset>
                <legend><p>Email</p></legend> 
                <div class="input-file">
                    <input type="text" id="U_email" value="{{$Systemuser->U_email}}" name="U_email" placeholder="Email" readonly><br>
                </div>
                
            </fieldset>

            <fieldset>
                <legend><p>User Name</p></legend> 
                <div class="input-file">
                    <input type="text" id="U_username" value="{{$Systemuser->U_username}}" name="U_username" placeholder="User Id" readonly><br>
                </div>
                
            </fieldset>

            <fieldset>
                <legend><p>Phone Number</p></legend> 
                <div class="input-file">
                    <input type="text" id="U_phone" value="{{$Systemuser->U_phone}}" name="U_phone" placeholder="Phone Number"  readonly><br>
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
        <form action="{{route('/Changepassword')}}" method="Post" class="Changepassword">
        {{csrf_field()}}
        <input type="hidden" name="id"  value="{{$Systemuser->id}}">
           
                <div class="input-file-cp" >
                    <input type="password" id="password"  name="thispassword" placeholder="Current password"><br>
                    <div class="eye eyes" onclick=" password() " style=" position:absolute; left:35vw; top:7.5vw;  cursor: pointer;"><i class="fa fa-eye" aria-hidden="true" ></i></div> 
                </div>
               
          
                <div class="input-file-cp">
                    <input type="password" id="cpassword" name="newpassword" placeholder="New password" >
              <div class="eye eyes" onclick=" cpassword() " style=" position:absolute; left:35vw; top:12vw;  cursor: pointer;"><i class="fa fa-eye" aria-hidden="true" ></i></div> 
                </div>
                @error('newpassword')
                      <span class="error" style="position:absolute; top:74%;" >{{$message}}</span>
                    @enderror
                <button class="btn">
                    Save </button>
               
         <p>  </p>

        </form>
    </section>
</div>

@endsection
@section("title")
Online Shopping | Dipta Saha
@endsection