@extends("userview.layout")
@section("content")
<div class="addtocart">
<div class="top-head">
    <p style=" margin-left:20px ;"> <a href="{{route('/Dashboardp')}}">Home</a>/<a href="/fashionproductlist/{{$product->P_categories}}">{{$product->P_categories}}</a>/<a href="#" style="color:black;">{{$product->P_name}}</a> </p>
</div>
<div class="cart-icon">
<i class="fa fa-cart-arrow-down" aria-hidden="true"><sup>{{$countcart}}</sup></i>
</div>
<form action="{{route('/Addtocartfashion')}}"  method="post">
{{csrf_field()}}
<div class="content-item">
        <div>

            <div class="item-img">
                <img src="/img/{{$product->P_img1}}" id="first-img" alt="" >
                <img src="/img/{{$product->P_img2}}" id="second-img" alt="" style="display: none;" >
                <img src="/img/{{$product->P_img3}}" id="three-img" alt="" style="display: none;">
                
            </div>
            <div class="three-img">
                <img src="/img/{{$product->P_img2}}" onclick="firstimg()" alt="" >
                <img src="/img/{{$product->P_img3}}" onclick="secondimg()" alt="">
                <img src="/img/{{$product->P_img1}}" onclick="threedimg()" alt="">
            </div>

        </div>
        

        <div class="item-card">
        <input type="hidden" name="id" value="{{$product->id}}">
           <input type="hidden" name="user_name" value="{{$Systemuser->U_username}}">
           <input type="hidden" name="item_categories" value="{{$product->P_categories}}">
            <div class="item-title">
                <h2>{{$product->P_name}}</h2>
                <input type="hidden" name="iteam_name" value="{{$product->P_name}}">
                <p>{{$product->P_details}}</p>
            </div>
            
            <div style="display: inline-flex; margin: 10px; ">
                <div class="item-color">
                    <h2>color</h2>
                    <select onclick="">
                        <option value="" >--Select--</option>
                    <option value="#dd5b1e" style="background-color: #dd5b1e;"></option>
                    <option value="#f0cb36" style="background-color: #f0cb36 ;"></option>
                    <option value="#252525" style="background-color: #252525 ;"></option>
                </select>
                </div>
                <div class="item-size" style="  margin-left: 10px;">
                    <h2>Size</h2>
                    <select name="item_size" required>
                        <option value="" >--Select--</option>
                        <option value="L" id="M" name="L">L</option>
                        <option  value="M" >M</option>
                        <option  value="XL">XL</option>
                        <option value="XXL">XXL</option>
                        <option value="XXXL">XXXL</option>
                    </select>
            </div>
        </div>

        <div class="input">
            <h2></h2>
            <input type="number" name="item_quantity"  value="1" min="1" >
            <p >Price:<span id="price">{{$product->P_price}}</span>/-</p>
            <input type="hidden" name="item_price" value="{{$product->P_price}}">
        </div>
        <input type="submit" value="Add to cart " class="btn-add" onclick= " clicked()" >
    </div>
</div>
</form>
@endsection
@section("title")
Online Shopping | {{$product->P_categories}} | {{$product->P_name}}
@endsection