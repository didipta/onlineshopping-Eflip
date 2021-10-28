@extends("userview.layout")
@section("content")
<div class="top-head">
    <p style=" margin-left:20px ;"> <a href="{{route('/Dashboardp')}}">Home</a> / <a href="#" style="color:black;"></a> </p>
</div>
<div class="cartdetails">
    <h3>All Cart iteam your</h3>
</div>
@php
$totalQuantity = 0;
$totalprices = 0;
$alltotalprice = 0;
@endphp
<div class="order_list">
@foreach($cartproduct as $cartproduct)
    <div class="order_details">
        <h1>{{$cartproduct->P_name}}</h1>
        <p>Quantity-{{$cartproduct->P_quantity}}</p>
        <p>Price-{{$cartproduct->P_price}}</p>
        <p>{{$cartproduct->P_quantity}}*{{$cartproduct->P_price}}</p>
        <h3>total price-{{$cartproduct->P_tprice}} tk</h3>
        <button>delete</button>
        @php
        $totalQuantity +=$cartproduct->P_quantity;
        $totalprices +=$cartproduct->P_price;
        $alltotalprice +=$cartproduct->P_tprice;
        @endphp
    </div>
    @endforeach
    </div>
    
    <div class="totalprice">
    <p>Quantity-{{$totalQuantity}}</p>
    <p>Price-{{ $totalprices}}</p>
    <p>{{$totalQuantity}}*{{ $totalprices}}</p>
    <h3>total price-{{$alltotalprice}} tk</h3>
    </div>

    <form action="">
    <input type="submit" value="Checkout" class="btnorder">
    </form>
@endsection
@section("title")
Online Shopping |
@endsection