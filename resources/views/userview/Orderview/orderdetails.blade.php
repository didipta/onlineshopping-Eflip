@extends("userview.layout")
@section("content")
<div class="top-head">
    <p style=" margin-left:20px ;"> <a href="{{route('/Dashboardp')}}">Home</a> / <a href="{{route('/Showalloders')}}" style="color:black;"> All order your</a> </p>
</div>
<div class="cartdetails">
    <h3 >Order Id is {{$Myorder->O_id}}</h3>
</div>
<div class="order_list">
@foreach($orderdetails as $orderdetails)
    <div class="order_details">
        <h1>{{$orderdetails->P_name}}</h1>
        <p>Price-{{$orderdetails->P_price}}</p>
        <p style=" width: 190px;">{{$orderdetails->P_categories}}</p>
        <p>Quantity-{{$orderdetails->P_quantity}}</p>
        <p>Total-{{$orderdetails->P_tprice}}</p>
        <p>{{$orderdetails->P_size}}</p>
        
    </div>
    @endforeach
    </div>
@endsection
@section("title")
Online Shopping |  {{$Myorder->O_id}}
@endsection
