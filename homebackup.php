<!DOCTYPE html>
<html>
 <head>
<!--
Project Title: Krackbot
Designed & Developed By : Krackbot
UI Design: Khaja
Started Date: 21 Sept 2020
-->
  <title> Krackbot </title>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <!-- bootstrap css  -->
  <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
  <!--  animate.css-->
  <link type="text/css" rel="stylesheet" href="css/animate.css">
  <!--  style.css-->
  <link type="text/css" rel="stylesheet" href="css/style.css">
<!------ Include the above in your HEAD tag ---------->
     <style>
         .carousel-inner,.carousel,.carousel-item,.fill {
    height:100%;
    min-height:580px;
    width:100%;
    background-position:center center;
    background-size:100% 100%;
}
.slide-wrapper{display:inline;}
.slide-wrapper .container{padding:0;}
         .carousel-indicators li{    width: 9px;border-radius: 50%;height: 9px;}


/*------------------------------ vertical bootstrap slider----------------------------*/

.carousel-inner> .carousel-item.carousel-item-next ,
.carousel-inner > .carousel-item.active.carousel-item-right{ 
    transform: translate3d(0, 100%, 0); -webkit-transform: translate3d(0, 100%, 0); -ms-transform: translate3d(0, 100%, 0); -moz-transform: translate3d(0, 100%, 0); -o-transform: translate3d(0, 100%, 0);  top: 0;
    
}
.carousel-inner > .carousel-item.carousel-item-prev ,
.carousel-inner > .carousel-item.active.carousel-item-left{ 
    transform: translate3d(0,-100%, 0); -webkit-transform: translate3d(0,-100%, 0);  -moz-transform: translate3d(0,-100%, 0);-ms-transform: translate3d(0,-100%, 0); -o-transform: translate3d(0,-100%, 0); top: 0;
    
}
.carousel-inner > .carousel-item.next.carousel-item-left ,
.carousel-inner > .carousel-item.carousel-item-prev.carousel-item-right ,
.carousel-inner > .carousel-item.active{
    transform:translate3d(0,0,0); -webkit-transform:translate3d(0,0,0);-ms-transform:translate3d(0,0,0);; -moz-transform:translate3d(0,0,0); -o-transform:translate3d(0,0,0); top:0;
    
}

/*------------------------------- vertical carousel indicators ------------------------------*/
.carousel-indicators{
    position:absolute;
    top:40%;
    bottom:0;
    margin:0 auto;
    height:20px;
    left:-96%;
    width:100%;
    -webkit-transform: rotate(90deg);
    -moz-transform: rotate(90deg);
    -ms-transform: rotate(90deg);
    -o-transform: rotate(90deg);
    transform: rotate(90deg);
}
.carousel-indicators li{display:block; margin-bottom:5px; border:2px solid #212529; }
.carousel-indicators li.active{margin-bottom:5px; background:#212529;}
     </style>
 </head>
 <body style="overflow-y:hidden">
  <header class="menu">  
        
<?php include 'includes/header.php' ?>
      
      
  </header>
<!--     header closed   -->
     
<!-- banner section start-->
    
 <section class="d-none">
  <div class="container-fluid">
   <div class="container">
     <div class="row">
        <div class="col-sm-6 pt-sm-5 mt-sm-5 pt-3 mt-3">
        <div class="col-sm-12 ">
          <h1><b> Home</b></h1>
          <h6 class="pt-4"><b>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</b></h6>
          <h6 class="pt-3"><b>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</b></h6>
          <h6 class="pt-3"><b>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</b></h6>
            
         
        
         </div>
         </div>
         <div class="col-sm-6">
          <div class="col-sm-11  pt-5">
           <img src="images/peppa.png" alt="service" title="banner" class="img-fluid">   
          </div>
         </div>
     </div>  
    
     <div class="col-sm-12 sv-bg py-2 mt-4 bounceIn wow d-none">
      <div class="row">
        <div class="col-sm-3">
         <div class="col-sm-12 sv-bg-one">
          <div class="row">
           <div class="col-sm-3">
            <img src="images/design.png" class="img-fluid" alt="krackbot" title="krackbot">   
           </div>   
           <div class="col-sm-9 no-padd">  
           <div class="col-sm-12 no-padd">
               
               <a href="brand_booster.php">
             <h6 class="mb-1">Design</h6>
            <p class="mb-0"><small>Explore</small></p>
               </a>
               </div> 
              </div>   
          </div>   
         </div>
        </div>  
        <div class="col-sm-3">
         <div class="col-sm-12 sv-bg-one">
          <div class="row">
           <div class="col-sm-3">
            <img src="images/design.png" class="img-fluid" alt="krackbot" title="krackbot">   
           </div>   
           <div class="col-sm-9 no-padd">  
           <div class="col-sm-12 no-padd">
             <h6 class="mb-1">Devleopement</h6>
            <p class="mb-0"><small>Explore</small></p>
               </div> 
              </div>   
          </div>   
         </div>
        </div>  
        <div class="col-sm-3">
         <div class="col-sm-12 sv-bg-one">
          <div class="row">
           <div class="col-sm-3">
            <img src="images/design.png" class="img-fluid" alt="krackbot" title="krackbot">   
           </div>   
           <div class="col-sm-9 no-padd">  
           <div class="col-sm-12 no-padd">
             <h6 class="mb-1">Digital Marketing</h6>
            <p class="mb-0"><small>Explore</small></p>
               </div> 
              </div>   
          </div>   
         </div>
        </div>  
        <div class="col-sm-3">
         <div class="col-sm-12 sv-bg-one">
          <div class="row">
           <div class="col-sm-3">
            <img src="images/design.png" class="img-fluid" alt="krackbot" title="krackbot">   
           </div>   
           <div class="col-sm-9 no-padd">  
           <div class="col-sm-12 no-padd">
             <h6 class="mb-1">Design</h6>
            <p class="mb-0"><small>Explore</small></p>
               </div> 
              </div>   
          </div>   
         </div>
        </div>  
      </div> 
     </div>
   </div>   
  </div>
 </section>
     

<!--slider section start-->
 <section>
  <div class="container-fluid no-padd">
<!-- header include end-->
  
<div class="slide-wrapper">
	    <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="fill">
                      <img src="images/slide1.png" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="fill">
                        
                      <img src="images/slide2.png" class="img-fluid" alt="">
                    
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="fill">
                        
                      <img src="images/slide1.png" class="img-fluid" alt="">
                    
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="fill">
                        
                      <img src="images/slide2.png" class="img-fluid" alt="">
                    
                    </div>
                </div>
             
            </div>
        </div>
   
</div>

  </div>   
 </section>
<!--slider section end-->    
     

<!-- banner section end-->
     
     
     
     
 <!--   script tags  -->
 <script src="js/jquery.min.js"></script>
 <script src="js/popper.js"></script>
 <script src="js/bootstrap.min.js"></script>
 <script src="js/wow.min.js"></script>
 <script>
 new WOW().init();
 </script>
<script>
 $('#grayButton').click(switchGray);
$('#whiteButton').click(switchWhite);
$('#blueButton').click(switchBlue);
$('#yellowButton').click(switchYellow);

function switchGray() {
  $('body').attr('class', 'gray');
}

function switchWhite() {
  $('body').attr('class', 'white');
}

function switchBlue() {
  $('body').attr('class', 'blue');
}

function switchYellow() {
  $('body').attr('class', 'yellow');
}
</script>
 <script>
   function toggleMenu(e) {
  e.classList.toggle("active");
  document.querySelector("aside").classList.toggle("active");
}    
 </script>
<!--
 <script src="//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
<script>
 $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    dots:false,
    nav:true,
    mouseDrag:false,
    autoplay:true,
    animateOut: 'slideOutUp',
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});    
</script>
-->
 </body>
</html>