<header>
    <div class="search-logo-prfile">
        <div class="logo">
            <img src="/img/logo.png" alt="">
            <h1><span style="color: rgb(250, 3, 229); font-family: 'Lobster', cursive;">E</span>flip</h1>
        </div>
        <div class="search-box">
           
                
                <input type="text" name="search" placeholder="Search for....." id="search-live">
                
                <button><i class="fa fa-search" aria-hidden="true"></i>
               
                </button>
                
                
        </div>
        
        <div class="profile">
        @if($countcart==0)
        <a href="{{route('/Cartdetails')}}"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>
        @else
        <a href="{{route('/Cartdetails')}}"><i class="fa fa-cart-plus" aria-hidden="true"><sup style="color:red;">{{$countcart}}</sup></i></a>
        @endif
            
            <i class="fa fa-comment-o" aria-hidden="true"></i>
            <a href="{{route('/profile')}}">  <i class="fa fa-user-o" aria-hidden="true"></i></a>
        </div>
    </div>


    <div class="navigation">
        <div class="CATAGORIES">
            <p>
            <i class="fa fa-bars" aria-hidden="true"></i>
            <p>CATAGORIES</p>
            <span style="margin-left : 30px;"><i class="fa fa-chevron-down" aria-hidden="true"></i></span>
        </p>
        </div>
        <div class="nav">
            <ul>
                <li><a href="">HOME</a></li>
                <li><a href="{{route('/financial')}}">$FINANCIALS</a></li>
                <li><a href="{{route('/Showalloders')}}">MY ORDERS</a></li>
                <li><a href="">SHOP</a></li>
            </ul>
        </div>
        <div class="nav-2">
        <ul>
            <li><a href="">ADOUT</a></li>
            <li><a href="">NEWS FEED</a></li>
            <li><a href="">HELP</a></li>
            </div>
        </ul>
    </div>
    <table class="results"  id="result-search" ></table>
</header>


<script type="text/javascript">
$("#search-live").on('keyup',function(){
     $value=$(this).val();
     if($value!="")
     {
     $.ajax({
          url:'{{URL::to("/search")}}',
          type:"GET",
          data:{'search':$value},
          success:function(data)
          {
            $('#result-search').html(data);
          }
        });
     }
     else
     {
      $('#result-search').html('');
     }
     
  });

    </script>
