@extends("Adminview.layout")
@section("content")
<h1 class="card-title">Product Add</h1>
<form class=" g-3 needs-validation" action="{{route('/productadd')}}" method="POST">
{{csrf_field()}}
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Product Name</label>
    <input type="text" class="form-control" name="p_name"  >
    @error('p_name')
    <span style="color:red;" >{{$message}}</span>
  @enderror
  </div>
  
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Product Id</label>
    <input type="text" class="form-control" name="p_id"  >
    @error('_code')
    <span style="color:red;" >{{$message}}</span>
  @enderror
  </div>
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Product Description</label>
    <input type="text" class="form-control" name="p_desc"  >
    @error('p_desc')
    <span style="color:red;" >{{$message}}</span>
  @enderror
  </div>

  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Product Price</label>
    <input type="text" class="form-control" name="p_price"  >
    @error('p_price')
    <span style="color:red;" >{{$message}}</span>
  @enderror
  </div>
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Product Quantity</label>
    <input type="text" class="form-control" name="p_quantity"  >
    @error('p_quantity')
    <span style="color:red;" >{{$message}}</span>
  @enderror
  </div>
  <div class="col-md-4">
    <label>Product img1</label>
    <input type="file" name="imgfile1" id="imgfile">
    @error('fileimg_1')
    <span style="color:red;" >{{$message}}</span>
  @enderror
  </div>

  <div class="col-md-4">
    <label>Product img2</label>
    <input type="file" name="imgfile2" id="imgfile">
    @error('fileimg_2')
    <span style="color:red;" >{{$message}}</span>
  @enderror
  </div>

  <div class="col-md-4">
    <label>Product img3</label>
    <input type="file" name="imgfile3" id="imgfile">
    @error('fileimg_3')
    <span style="color:red;" >{{$message}}</span>
  @enderror
  </div>


  <div class="col-md-4">
    <label for="validationCustom04" class="form-label">Product Category</label><br>
    <select class="form-select" name="p_category" >
      <option selected disabled >Choose...</option>
      <option>Laptops</option>
      <option>Desktops</option>
      <option>Watchs</option>
      <option>Smart phone</option>
      <option>Motor Bikes</option>
      <option>Smart & Android tvs</option>
      <option>Speakers</option>
      <option>Headphones</option>
      <option>Refrigerators</option>
      <option>Split Ac</option>
      <option>Men Fashion</option>
      <option>Women Fashion</option>

    </select>
    @error('p_category')
    <span style="color:red;" >{{$message}}</span>
  @enderror
    <div>
  <div class="col-12">
   <br> <button class="btn btn-primary" type="submit">Submit form</button>
  </div>
</form><br>


<table class="table" style="width:1400px; font-size:0.9rem;">
        <tr>
            <th>Id</th>
            <th>P_Name</th>
            <th>P_Id</th>
            <th>P_Description</th>
            <th>P_Price</th>
            <th>P_Quantity</th>
            <th>P_img1</th>
            <th>P_img2</th>
            <th>P_img3</th>
            <th>P_Category</th>
            <th>Edit</th>
            <th>Delete</th>

        </tr>
        @foreach($product as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->P_name}}</td>
                <td>{{$product->P_id}}</td>
                <td>{{$product->P_details}}</td>
                <td>{{$product->P_price}}</td>
                <td>{{$product->P_quantity}}</td>
                <td>{{$product->P_img1}}</td>
                <td>{{$product->P_img2}}</td>
                <td>{{$product->P_img3}}</td>
                <td>{{$product->P_categories}}</td>
                <td><a href=""class="btn btn-primary">Edit</a></td>
                <td><a href="" class="btn btn-danger">Delete</a></td>
            </tr>
        @endforeach
      
@endsection
@section("title")
 Product Add
@endsection