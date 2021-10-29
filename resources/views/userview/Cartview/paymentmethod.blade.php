<div id="orderconfirm">
<div class="orderconfirm">
        <div class="order-title">
            <h1>Order id-#OrdE{{$orderid}}</h1>
            <p>Total Item- {{$totalQuantity}}</p>
            <p>Delivery Charge-45 Tk</p>
            <h3>total price- {{$alltotalprice+45}} tk</h3>
            <hr>
            <p>Item Name:</p>
            @foreach($productname as $value)
            <li>{{$value}}</li>
            @endforeach
            <button class="btnorder" onclick="backclick()">BACK</button>
        </div>
        <div class="paymant">
            <h1>Payment Type</h1>
            <div class="payment_type">
                <img src="/img/Bkash.png" alt="" onclick="bkashclick()">
                <img src="/img/cart.png" alt="" onclick="cardclick()">
                <img src="/img/cash.png" alt="" onclick="cashclick()">
            </div>


            <form action=" {{route('/Bkashmethod')}}" class="paymentform" id="bkashback" method="post" >
            {{csrf_field()}}
                <input type="hidden" name="userid" value="{{$Systemuser->id}}">
                <input type="hidden" name="orderid" value="#OrdE{{$orderid}}">
                <input type="hidden" name="totaleprice" value="{{$alltotalprice+45}}">
                <input type="hidden" name="Paymenttype" value="Bkash">

                <h4>Bkash in Payment</h4>
                <input type="text" name="phonenu" id="" placeholder="Phone number" ><br>
                @error('phonenu')
                      <span class="error" style="position:absolute; top:20%;" >{{$message}}</span>
                    @enderror
                <input type="password" name="password" id="" placeholder="password">
                @error('password')
                      <span class="error" style="position:absolute; top:20%;" >{{$message}}</span>
                    @enderror
                <button class="btnorder">Confirm Order</button>
            </form>


            <form action=" {{route('/cartmethod')}}" class="paymentform" id="cardback" method="post">
            {{csrf_field()}}
                <input type="hidden" name="userid" value="{{$Systemuser->id}}">
                <input type="hidden" name="orderid" value="#OrdE{{$orderid}}">
                <input type="hidden" name="totaleprice" value="{{$alltotalprice+45}}">
                <input type="hidden" name="Paymenttype" value="card">
                <h4>Cart in Payment</h4>
                <input type="text" name="formid" id="" placeholder="User Id" ><br>
                @error('phonenu')
                      <span class="error" style="position:absolute; top:20%;" >{{$message}}</span>
                    @enderror
                <input type="password" name="password" id="" placeholder="password">
                @error('password')
                      <span class="error" style="position:absolute; top:20%;" >{{$message}}</span>
                    @enderror
                <button class="btnorder">Confirm Order</button>
            </form>



            <form action="{{route('/cashmethod')}}" class="paymentform" id="cashback" method="post" >
            {{csrf_field()}}
                <input type="hidden" name="userid" value="{{$Systemuser->id}}">
                <input type="hidden" name="orderid" value="#OrdE{{$orderid}}">
                <input type="hidden" name="totaleprice" value="{{$alltotalprice+45}}">
                <input type="hidden" name="Paymenttype" value="Cash">
                <h4>Cash in Payment</h4>
                <button class="btnorder">Confirm Order</button>
            </form>
        </div>
    </div>
</div>