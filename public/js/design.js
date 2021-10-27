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
