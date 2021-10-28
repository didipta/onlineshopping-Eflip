$(function(){
    $('#forms').submit(function(){
        $.ajaxSetup({
            headers: {'X-CSRF-Token' : '{{csrf_token()}}'}
        });
        $.ajax({
            url:"{{route('/Addtocart')}}",
            type:"POST",
            data:{id:1}
          });
 
    })
})
 
var cartitem={};
cartitem.username=document.getElementById("user_name").innerHTML;
cartitem.itemcategories=document.getElementById("item_categories").innerHTML;
cartitem.iteamname=document.getElementById("iteam_name").innerHTML;
cartitem.itemprice=document.getElementById("item_price").innerHTML;
cartitem.itemquantity=document.getElementById("item_quantity").innerHTML;
var quantity=document.getElementById("item_quantity").value;
var price=document.getElementById("item_price").innerHTML;
cartitem.itemtotalprice=quantity*price;
$.ajaxSetup({
    headers: {'X-CSRF-Token' : '{{csrf_token()}}'}
});
$.ajax({
    url:"{{route('/Addtocart')}}",
    type:"POST",
    data:cartitem
  });


  
