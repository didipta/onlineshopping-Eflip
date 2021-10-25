@extends("userview.layout")
@section("content")
<div class="top-head">
    <p style=" margin-left:20px ;"> <a href="{{route('/Dashboardp')}}">Home</a>/ <a href="#" style="color:black;">Profile</a> </p>
</div>
<div class="item-list">
@foreach($product as $product)
<a href="">
<div class="items">
     <img src='/img/{{$product->P_img1}}'>
    <h3>{{$product->P_name}}</h3>
    <h4>Only {{$product->P_price}}Tk/-</h4>
    </div>
</a>
@endforeach
</div>

@endsection
@section("title")
Online Shopping | Dipta Saha
@endsection