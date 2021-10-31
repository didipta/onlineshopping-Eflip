@extends("userview.layout")
@section("content")
<div class="top-head">
    <p style=" margin-left:20px ;"> <a href="{{route('/Dashboardp')}}">Home</a> / <a href="#" style="color:black;">$FINANCIALS</a> </p>
</div>
<div class="cartdetails">
    <h3>Your $FINANCIALS </h3>
</div>
@php
$totalitem = 0;
$alltotalprice = 0;
@endphp
<div class="order_list">
@foreach($Myorder as $Myorder)
    <div class="order_details">
        <h1>{{$Myorder->O_id}}</h1>
        <p style=" width: 250px;">{{$Myorder->O_status}}</p>
        <p >{{$Myorder->Paymanttype}}</p>
        <h3>Amount-{{$Myorder->P_tprice}} tk</h3>
        <a href="/Showallodersdetails/{{$Myorder->id}}"><button style=" width: 150px;">Order Details</button></a>
        @php
        $totalitem ++;
        $alltotalprice +=$Myorder->P_tprice;
        @endphp
    </div>
    @endforeach
    </div>
    <div class="totalprice">
    <h3 style=" width: 750px;">Your only order {{$totalitem}} items. Your total Amount is - {{$alltotalprice}} tk . Thank you</h3>
    </div>
    
@endsection
@section("title")
Online Shopping | Cart iteam your
@endsection