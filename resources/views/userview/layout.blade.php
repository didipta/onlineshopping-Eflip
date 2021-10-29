<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/PROfile-User.css">
    <link rel="stylesheet" href="/css/addtocart.css">
    <link rel="stylesheet" href="/css/jquery.nice-number.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   
    <title> @yield("title")</title>

</head>
<body>


@include('userview.navigation.topnav')



@yield("content")
        
    

@include('userview.navigation.footer')


    <script src="/js/slider.js"></script>
    <script src="/js/registertion.js"></script>  
    <script src="/js/design.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
     <script src="/js/jquery.nice-number.js"></script> 
    
</body>
</html>