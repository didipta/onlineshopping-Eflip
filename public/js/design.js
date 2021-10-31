function myFunction() {
    document.getElementById("profileimg").style. display = "block";
  }
  function myFunction2() {
    document.getElementById("profileimg").style. display = "none";
  }

  function firstimg(){
    document.getElementById("first-img").style.display = "none";
    document.getElementById("second-img").style.display = "block";
    document.getElementById("three-img").style.display = "none";
}
function secondimg(){
    document.getElementById("first-img").style.display = "none";
    document.getElementById("second-img").style.display = "none";
    document.getElementById("three-img").style.display = "block";
}
function threedimg(){
    document.getElementById("first-img").style.display = "block";
    document.getElementById("second-img").style.display = "none";
    document.getElementById("three-img").style.display = "none";
}

$(function(){

  $('input[type="number"]').niceNumber();

  });

  function bkashclick(){
             
    document.getElementById("bkashback").style.display = "block";
    document.getElementById("cardback").style.display = "none";
    document.getElementById("cashback").style.display = "none";
  }
  function cashclick(){
    document.getElementById("bkashback").style.display = "none";
    document.getElementById("cashback").style.display = "block";
    document.getElementById("cardback").style.display = "none";
  }
  function cardclick(){
    document.getElementById("bkashback").style.display = "none";
    document.getElementById("cashback").style.display = "none";
    document.getElementById("cardback").style.display = "block";
  }
  function backclick(){
    document.getElementById("orderconfirm").style.display = "none";
   
  }
  function checkclick()
  {
    document.getElementById("orderconfirm").style.display = "block";
  }


  let star = document.querySelectorAll('input');
  let showValue = document.querySelector('#rating-value');
  
  for (let i = 0; i < star.length; i++) {
    star[i].addEventListener('click', function() {
      i = this.value;
  
      showValue.innerHTML = i + "/5";
    });
  }