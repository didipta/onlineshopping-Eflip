@extends("userview.layout")
@section("content")
<div class="top-head">
    <p style=" margin-left:20px ;"> <a href="{{route('/Dashboardp')}}">Home</a> / <a href="#" style="color:black;">{{$categories}}</a> </p>
</div>
<a href="{{route('/Cartdetails')}}"><div class="cart-icon">
<i class="fa fa-cart-arrow-down" aria-hidden="true"><sup>{{$countcart}}</sup></i>
</div></a>
<div class="item-list">
@foreach($product as $product)
<a href="/addtocarttwo/{{$product->id}}">
<div class="items">
     <img src='/img/{{$product->P_img1}}'>
    <h3>{{$product->P_name}}</h3>
    <h4>id-{{$product->P_id}}</h4>
    <h4>Only-{{$product->P_price}}Tk/-</h4>
    </div>
</a>
@endforeach
</div>

@endsection
@section("title")
Online Shopping | {{$categories}}
@endsection