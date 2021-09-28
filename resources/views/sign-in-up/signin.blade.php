<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/Login.css">
    <title>WELCOME BACK</title>
</head>
<body>
    <div class="contaner">


        <div class="left-contaner">
        <a href="{{url('/')}}"><div class="logo">
            <img src="/img/logo.png" alt="">
            <h1><span style="color: rgb(250, 3, 229); font-family: 'Lobster', cursive;">E</span>flip</h1>
        </div></a>
            <div class="left-info">
                <h1>Hello friend!!</h1>
                <p>Are you new to this website? Do you like what we 
                    offer ? you should totally join our website and experience
                    community.</p>
                <a href="Registertion.html"><button class="btn">Register....</button></a>
            </div>
            
        </div>
        <div class="signin-title">
            <h1>WELCOME BACK :)</h1>
            <p>To keep connected with us please login with your personal 
                information by user-name and password.</p>


                <form action="{{route('/Dashboard')}}" class="sign-in-form" method="POST" >
                  {{csrf_field()}}
                    <div class="input-field">
                        <i class="fa fa-user-o" aria-hidden="true"></i>
                        <input type="text" name="uname" id="uname" placeholder="user id"/>
                        
                    </div>
                    @error('uname')
                      <span style="color: rgb(224, 53, 90); margin-left:15px; font-size:0.8rem;">{{$message}}</span>
                    @enderror
                   
                    
                    <div class="input-field">
                        <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                        <input type="password" name="password" id="password" placeholder="password"/>
        
                       <div class="eye" onclick=" password() "><i class="fa fa-eye" aria-hidden="true" id="eye" ></i></div> 
        
                    </div>
                    @error('password')
                      <span style="color: rgb(224, 53, 90); margin-left:15px; font-size:0.8rem;">{{$message}}</span><br>
                    @enderror
                    
                    <a href="#" style="margin-left: 10px; font-size: 0.9rem; color: rgb(110, 110, 110);">Forgotten password?</a><br>
                    <input type="submit" value="Sign In" class="btn">
                    <p class="social-text">Or Sign in with social platforms</p>
                    <div class="social-media">
                      <a href="#" class="social-icon">
                        <i class="fa fa-facebook-f"></i>
                      </a>
                      <a href="#" class="social-icon">
                        <i class="fa fa-twitter"></i>
                      </a>
                      <a href="#" class="social-icon">
                        <i class="fa fa-google"></i>
                      </a>
                      <a href="#" class="social-icon">
                        <i class="fa fa-linkedin" aria-hidden="true"></i>
        
                      </a>
                    </div>
                  </form>
        </div>
        
    

    </div>
    <script src="js/registertion.js"></script>
</body>
</html>