@extends("Adminview.layout")
@section("content")
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://images.squarespace-cdn.com/content/v1/54341a03e4b08690c01bc8de/1532387244752-FWJ6L7D64US52U1PA26Z/blog_banner.jpg?format=1500w" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQygo7xToo_5_D3qzPpSegTlMWqX1ac_7WZqgpEM1T6WSCucyRQntv4rCsGgNhbMpIwhnI&usqp=CAU" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSTUeyt_Wl7UiJ0QHypw2Y6NhfKVLjDxNjNuO_HlnO7yC74EgSNKj4QWo4TVa-v12htOmw&usqp=CAU" class="d-block w-100" alt="...">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
@endsection
@section("title")
 home
@endsection