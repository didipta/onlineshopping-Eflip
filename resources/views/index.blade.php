<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css">
    <title>Index page</title>
</head>
<body>

    <div class="navigation">
        <div class="logo">
            <img src="/img/logo.png" alt="">
            <h1><span style="color: rgb(250, 3, 229); font-family: 'Lobster', cursive;">E</span>flip</h1>
        </div>
        <ul>
            <li><a href="">PRODUCTS</a></li>
            <li><a href="">COMPANY</a></li>
            <li><a href="">PARTNERS</a></li>
            <li><a href="">ABOUT US</a></li>
            <li><a href="">CONTACT US</a></li>
        </ul>
    </div>
    <div class="container">
      <div class="title">
          <h1>ONLINE SHOPPING</h1>
          <h3>ALL PRODUCT AVAILABLE</h3>
          <p>Online shopping is the process of buying goods and services
            from merchants who sell on the Internet. Since the emergence
            of the World Wide Web, merchants have sought to sell their 
            products to people who surf the Internet. Shoppers can visit web 
            stores from the comfort of their homes and shop as they sit in front 
            of the computer.</p>
            <a href="{{route('/signinpage')}}"><button>LOG IN</button></a>
      </div>
     
    </div>

    <div class="socail-app">
        <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
        <a href=""><i class="fa fa-google" aria-hidden="true"></i></a>
        <a href=""><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
        <a href=""><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
        <a href=""><i class="fa fa-phone" aria-hidden="true"></i></a>
    </div>
</body>
</html>