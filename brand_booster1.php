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
     <style>
         .carousel-item img {width:100%;height: 200px}
         .carousel-inner p{margin-top: 15px}
         .carousel-indicators{left: 60%;bottom:77% !important}
         .carousel-indicators li{background-color: #c1c1c1;border-radius: 10px}
     </style>
 </head>
 <body>
  <header class="menu">  
   
 <?php $service="services" ?>      
<?php include 'includes/header.php' ?>
      
      
  </header>
<!--     header closed   -->
     
<!-- banner section start-->
    
 <section>
  <div class="container-fluid">
   <div class="container">
     <div class="row">
        <div class="col-sm-6 pt-sm-4 mt-sm-3 pt-3 mt-3">
            
        <div class="col-sm-12 no-padd">
            <div class="tab-content">
            
           <div id="home" class="container tab-pane active"><br>
               
          <h1><b> Brand boosters</b></h1>
          <p class="pt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>
                <div id="menu1" class="container tab-pane fade"><br>
      
          <h1><b> Brand Essetials</b></h1>
          <p class="pt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
    </div>
    <div id="menu2" class="container tab-pane fade"><br>
        
          <h1><b> Info Graphics</b></h1>
          <p class="pt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
    </div>
            </div>
         <div class="col-sm-12 pt-3 sv-tabset no-padd">
             <ul class="nav nav-tabs" style="border:none">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#home">
            <div class="col-sm-12 py-4">
              <img src="images/s1.png" class="img-fluid mb-3" alt="krackbot" title="services">
              <h6><small><b> Brand <br/>Boosters</b></small></h6>
             </div>   
            </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#menu1">
      
            <div class="col-sm-12 py-4">
              <img src="images/s1.png" class="img-fluid mb-3" alt="krackbot" title="services">
              <h6><small><b> Brand <br/>Essetinals</b></small></h6>
             </div>   
            </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#menu2">
    
            <div class="col-sm-12 py-4">
              <img src="images/s1.png" class="img-fluid  mb-3" alt="krackbot" title="services">
                <h6><small><b> Info <br/>Graphics</b></small></h6></div>
        
      </a>
  </li>
</ul>
            
    
        
         </div>    
        
         </div>
         </div>
         <div class="col-sm-6">
          <div class="col-sm-10 pt-3">
              
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner mt-4 pt-5">
    <div class="carousel-item active">
      <h4>Social Media Ads</h4>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
      <img src="images/onion.png" alt="Los Angeles" class="img-fluid mt-5">
    </div>
    <div class="carousel-item">
        
      <h4>Science Media Ads</h4>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
      <img src="images/onion.png" alt="Chicago" class="img-fluid mt-5">
    </div>
    <div class="carousel-item">
        
      <h4>Maths Media Ads</h4>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
      <img src="images/onion.png" alt="New York" class="img-fluid mt-5">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
          </div>
         </div>
         
         
     <div class="col-sm-12 sv-bg slideInUp wow">
      <ul class="nav nav-tabs nav-justified">
    <li class="nav-item">
      <a class="nav-link" href="brand_booster.php">
       <div class="col-sm-12 sactive ">
          <div class="row">
           <div class="col-sm-4">
            <img src="images/design.png" class="img-fluid" alt="krackbot" title="krackbot">   
           </div>   
           <div class="col-sm-8 no-padd">  
            <div class="col-sm-12 no-padd text-left">
             <h6 class="mb-1">Design</h6>
             <p class="mb-0"><small>Explore</small></p>
               </div> 
              </div>   
          </div>   
         </div>   
     </a>
    </li>
          
    <li class="nav-item">
      <a class="nav-link" href="brand_booster.php">
       <div class="col-sm-12 sv-bg-one">
          <div class="row">
           <div class="col-sm-4">
            <img src="images/design.png" class="img-fluid" alt="krackbot" title="krackbot">   
           </div>   
           <div class="col-sm-8 no-padd">  
            <div class="col-sm-12 no-padd text-left">
             <h6 class="mb-1">Development</h6>
             <p class="mb-0"><small>Explore</small></p>
               </div> 
              </div>   
          </div>   
         </div>   
     </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="brand_booster.php">
       <div class="col-sm-12 sv-bg-one">
          <div class="row">
           <div class="col-sm-4">
            <img src="images/design.png" class="img-fluid" alt="krackbot" title="krackbot">   
           </div>   
           <div class="col-sm-8 no-padd">  
            <div class="col-sm-12 no-padd text-left">
             <h6 class="mb-1">Digital Marketing</h6>
             <p class="mb-0"><small>Explore</small></p>
               </div> 
              </div>   
          </div>   
         </div>   
     </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="brand_booster.php">
       <div class="col-sm-12 sv-bg-one">
          <div class="row">
           <div class="col-sm-4">
            <img src="images/design.png" class="img-fluid" alt="krackbot" title="krackbot">   
           </div>   
           <div class="col-sm-8 no-padd">  
            <div class="col-sm-12 no-padd text-left">
             <h6 class="mb-1">Motion Graphics</h6>
             <p class="mb-0"><small>Explore</small></p>
               </div> 
              </div>   
          </div>   
         </div>   
     </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="brand_booster.php">
       <div class="col-sm-12 sv-bg-one">
          <div class="row">
           <div class="col-sm-4">
            <img src="images/design.png" class="img-fluid" alt="krackbot" title="krackbot">   
           </div>   
           <div class="col-sm-8 no-padd">  
            <div class="col-sm-12 no-padd text-left">
             <h6 class="mb-1">Content Writing</h6>
             <p class="mb-0"><small>Explore</small></p>
               </div> 
              </div>   
          </div>   
         </div>   
     </a>
    </li>
  </ul>  
     </div>
         
     </div>  
    
   </div>   
  </div>
    
 </section>
    
     
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
 
 </body>
</html>