@extends("userview.layout")
@section("content")
<div class="top-head">
    <p style=" margin-left:20px ;"> <a href="{{route('/Dashboardp')}}">Home</a> / <a href="#" style="color:black;"></a> </p>
</div>
<div class="cartdetails">
    <h3>All Your Oder items</h3>
</div>
<div class="order_list">
@foreach($Myorder as $Myorder)
    <div class="order_details">
        <h1>{{$Myorder->O_id}}</h1>
        <p>Price-{{$Myorder->P_tprice}}</p>
        <p>{{$Myorder->Paymanttype}}</p>
        <h3 style=" width: 350px;">{{$Myorder->O_status}}</h3>
        <a href="/Showallodersdetails/{{$Myorder->id}}"><button style=" width: 150px;">Order Details</button></a>
    </div>
    @endforeach
    </div>
@endsection
@section("title")
Online Shopping | Cart iteam your
@endsection