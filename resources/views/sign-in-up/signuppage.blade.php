<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Registertion.css">
    <title>Registertion</title>
</head>
<body>
    <div class="contaner">
        <div class="regis-title">
            <h1>Registertion</h1>
            <div class="title-line"></div>
            <h3>This Will help you manage all your activities.</h3>
            <p>Let's get you set up you can verify your personal account and 
                setting up your profile.</p>
        </div>
        <form action="{{route('/Registertion')}}" method="POST" class="sign-up" >
        {{csrf_field()}}
            <div class="sign-up-form">
            <div>
            <div class="input-field">
                <i class="fa fa-user"></i>
                <input type="text" name="Firstname" id="Firstname" value="{{old('Firstname')}}" placeholder="First name" />
              </div>
              @error('Firstname')
                      <span class="error" style="position:absolute; top:20%;" >{{$message}}</span>
                    @enderror
              

              <div class="input-field">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <input type="tel" name="phone" id="phone" value="{{old('phone')}}" placeholder="Phone number"><br><span></span>
              </div>
              @error('phone')
                      <span class="error" style="position:absolute; top:38%;" >{{$message}}</span>
                    @enderror
              
              <div class="input-field">
                <i class="fa fa-user-o" aria-hidden="true"></i>
                <input type="text" name="username" id="username" value="{{old('username')}}"  placeholder="User name">
              </div>
              @error('username')
                      <span class="error" style="position:absolute; top:56%;" >{{$message}}</span>
                    @enderror
             
              <div class="input-field">
                <i class="fa fa-lock"></i>
                <input type="password" name="password" id="password" value="{{old('password')}}" placeholder="Password">
                <div class="eye" onclick="  password() "><i class="fa fa-eye" aria-hidden="true" id="eye"></i></div> 
              </div>
              @error('password')
                      <span class="error" style="position:absolute; top:74%;" >{{$message}}</span>
                    @enderror
           
             
            </div>


            <div style="margin-left: 20px;">

                <div class="input-field">
                    <i class="fa fa-user"></i>
                    <input type="text" name="LastName" id="Lastname" value="{{old('LastName')}}" placeholder="Last name" />
                  </div>
                  @error('LastName')
                      <span class="error" style="position:absolute; top:20%;" >{{$message}}</span>
                    @enderror
                   
                  <div class="input-field">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                      <input type="text" name="address" id="address" value="{{old('address')}}" placeholder="Address">
                    </div>
                    @error('address')
                      <span class="error" style="position:absolute; top:38%;" >{{$message}}</span>
                    @enderror
                    

                    <div class="input-field">
                        <i class="fa fa-envelope"></i>
                        <input type="email" name="email" id="email" value="{{old('email')}}" placeholder="Email">
                      </div>
                      @error('email')
                      <span class="error" style="position:absolute; top:56%;" >{{$message}}</span>
                    @enderror
  
                
              <div class="input-field">
                  <i class="fa fa-lock"></i>
                  <input type="password" name="cpassword" id="cpassword"  value="{{old('cpassword')}}" placeholder="Confirm Password">
                  <div class="eye" onclick=" cpassword() "><i class="fa fa-eye" aria-hidden="true" id="ceye" ></i></div> 
                </div>
            </div>
            @error('cpassword')
                      <span class="error" style="position:absolute; top:74%;" >{{$message}}</span>
                    @enderror
        </div>
        <div class="checkbox-form">
            <input type="Checkbox" required/><span style="margin-top: -5px;"> I agree to all <a href="">Teams</a> , <a href="">Privacy policy</a> and <a href="">Fees</span></a>.
        </div>
            
        <input type="submit"  id="submitreg"  class="btn" value="Create Account"/>
        </form>
        <div class="left-contaner">
        <a href="{{url('/')}}"><div class="logo">
            <img src="/img/logo.png" alt="">
            <h1><span style="color: rgb(250, 3, 229); font-family: 'Lobster', cursive;">E</span>flip</h1>
        </div></a>
            <div class="sing-in">
                <p>Already have an account?</p>
               <a href="{{route('/signinpage')}}"> <button>LOG IN</button></a>
            </div>

            <div class="reg-info">

                <p>1) Provide your <span style="color: #F77979;"> name</span>. Provide real <span style="color: #F77979;"> name</span> . 
                    Provide real <span style="color: #F77979;">phone number</span>.   Provide real <span style="color: #F77979;">Address</span>  .</p>
                   
                <p>2) Password must contain at least one number and one uppercase 
                      and lowercase letter, and at least 8 or more characters.</p>
            </div>

        </div>

        

    </div>



    <script src="js/registertion.js"></script>     
</body>
</html>