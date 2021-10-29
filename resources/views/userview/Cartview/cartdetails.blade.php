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
$productname=[];
$orderid=0;
$id=0;
$countcart=$cartproduct->count();
@endphp
<div class="order_list">
@foreach($cartproduct as $cartproduct)
    <div class="order_details">
        <h1>{{$cartproduct->P_name}}</h1>
        <p>Quantity-{{$cartproduct->P_quantity}}</p>
        <p>Price-{{$cartproduct->P_price}}</p>
        <p>{{$cartproduct->P_quantity}}*{{$cartproduct->P_price}}</p>
        <h3>total price-{{$cartproduct->P_tprice}} tk</h3>
        <a href="/cartiteamdelet/{{$cartproduct->id}}"><button>delete</button></a>
        @php
        $id +=$cartproduct->id;
        $totalQuantity +=$cartproduct->P_quantity;
        $totalprices +=$cartproduct->P_price;
        $alltotalprice +=$cartproduct->P_tprice;
        $productname[]=$cartproduct->P_name;
        $orderid=(($totalQuantity*1000)+( $alltotalprice*10))*($countcart+$id);
        @endphp
    </div>
    @endforeach
    </div>
    @if($countcart>0)
    <div class="totalprice">
    <p>Quantity-{{$totalQuantity}}</p>
    <p>Price-{{ $totalprices}}</p>
    <p>{{$totalQuantity}}*{{ $totalprices}}</p>
    <h3>total price-{{$alltotalprice}} tk</h3>
    </div>
    <input type="submit" value="Checkout" class="btnorder" onclick="checkclick()">
    @else
    <h1 style="margin:10px; font-size:1.3rem; text-align:center; ">No Products have been added form add to cart</h1>
    @endif
    @include('userview.Cartview.paymentmethod')
    
@endsection
@section("title")
Online Shopping | Cart iteam your
@endsection