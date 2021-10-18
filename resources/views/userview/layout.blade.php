<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/PROfile-User.css">
    <title> @yield("title")</title>

</head>
<body>


@include('userview.navigation.topnav')



@yield("content")
        
    

@include('userview.navigation.footer')


    <script src="js/slider.js"></script>
    
</body>
</html>