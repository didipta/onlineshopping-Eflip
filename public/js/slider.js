var sliders=document.querySelectorAll('.slider');
var btns= document.querySelectorAll('.btn');
let currentslider=1;


//javascript for image slider manual navigation

var manualnav =function(manual){

    sliders.forEach((slide)=>{
        slide.classList.remove('active');

    btns.forEach((btn)=>{
        btn.classList.remove('active');
    });

    });

    sliders[manual].classList.add('active');
    btns[manual].classList.add('active');
}


btns.forEach((btn,i) => {

    btn.addEventListener("click",() =>{
        manualnav(i);
        currentslider=i;
    });

});

//javaacript for image slider autoplay navigation

let repeat = function(activeclass){
    let active=document.getElementsByClassName('active');
    let i=1;

    var repeater=()=>
    {
        setTimeout(function(){
        
            [...active].forEach((activeslider)=>{
               activeslider.classList.remove('active');
            });

         sliders[i].classList.add('active');
         btns[i].classList.add('active');
         i++;
         

         if(sliders.length==i)
         {
             i=0;
         }
         if(i>= sliders.length)
         {
             return;
         }
         repeater();
        },6000);
        
    }
    repeater();
}
repeat();



window.addEventListener("scroll",function(){
    var header=document.querySelector("header");
    var head=document.querySelector('.header');
    var CATAGORIES=document.querySelector('.c-nav-2');
    header.classList.toggle("sticky", window.scrollY > 0 );
    head.classList.toggle("nonehead", window.scrollY > 0 );
    CATAGORIES.classList.toggle("CAT-nav", window.scrollY > 0 );
});


$(document).ready(function(){
    $(".contant .CATAGORIES-nav li, .c-nav-2").hover(function(){
      $(".c-nav-2").css("display", "block");
      }, function(){
      $(".c-nav-2").css("display", "none");
    } ,1000);
  });



