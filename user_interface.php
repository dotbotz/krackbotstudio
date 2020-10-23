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
         
.wrapper {
  width: 65%;
  overflow-x: hidden;
  overflow-y: hidden;
  white-space: nowrap;
/*  margin: 0 auto;*/
  position: relative;
}

li {
  display: inline-block;
  /* padding: 10px; */
}

.product-container {
/*  text-align: center;*/
  padding: 13px;
  background:rgba(187, 179, 179, 0.2);
/*  width: 200px;*/
 
    height: 160px;
    border-radius: 24px;    margin-right: 16px;
}
         .product-container h5{
                 font-size: 15px;
         }
         .product-container img{
             width: 62%;
             margin-bottom: 30px
         }

/*
img {
  width: 100px;
  height: 150px;
}
*/

/*
h5 {
  color: #0066c0;
  padding: 5px;
}
*/

/*
h3 {
  font-family: Arial, Helvetica, sans-serif;
  padding: 5px;
}
*/

.wrapper::-webkit-scrollbar {
  height: 7px;
}

.wrapper::-webkit-scrollbar-track {
  background: #eeeeee;
  border: 4px solid transparent; 
  background-clip: content-box;
}

.wrapper::-webkit-scrollbar-thumb {
  background: #888;
}

#click2 {
  position: absolute;
  top: 60%;
  left: 0%;
  width: 35px;
  height: 80px;
  background: white;
  border: 1px solid #888;
  border-left: none;
  border-top-right-radius: 3px;
  border-bottom-right-radius: 3px;
  opacity: 0.8;
  cursor: pointer;
}

#click {
  position: absolute;
  top: 63%;
  right: 27%;
  width: 56px;
  height: 80px;
/*  background: white;*/
/*
  border: 1px solid #888;
  border-right: none;
  border-top-left-radius: 3px;
  border-bottom-left-radius: 3px;
  opacity: 0.8;
*/
  cursor: pointer;
}

#click:hover, #click2:hover {
  opacity: 1;
}

.right-arrow {
  background: url(images/next.png) no-repeat;
  background-position: 50% 50%;
  display: inline-block;
  width: 100%;
  height: 100%;
  background-size: 40%;
}

.left-arrow {
  background: url(https://comunit.github.io/Product-slider/img/left.png) no-repeat;
  background-position: 50% 50%;
  display: inline-block;
  width: 100%;
  height: 100%;
  background-size: 40%;
}
         
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
            
            
               
          <h1><b> User Interface</b></h1>
          <p class="pt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                
            
               <div class="wrapper">
      <div class="products mt-5">
        <ul>
          <li>
               <a href="brand_booster.php"> 
            <div class="product-container">
              <img src="images/s1.png" class="img-fluid" alt="">
              <h5>Brand <br/> Boosters</h5>
             
            </div>
              </a>
          </li>
          <li>
               <a href="brand_essentials.php"> 
            <div class="product-container">
              <img src="images/s1.png" class="img-fluid" alt="">
              <h5>Brand <br/> Essentials</h5>
            
            </div>
              </a>
          </li>
          <li>
              <a href="info_graphics.php">
            <div class="product-container">
              <img src="images/s1.png" class="img-fluid" alt="">
              <h5>Info <br/> Graphics</h5>
          
            </div>
                  </a>
          </li>
          <li>
              <a href="user_interface.php">
            <div class="product-container product_container_active">
              <img src="images/s1.png" class="img-fluid" alt="">
              <h5>User <br/> Interface</h5>
            
            </div>
              </a>
          </li>
          <li>
              <a href="user_experience.php">
            <div class="product-container">
              <img src="images/s1.png" class="img-fluid" alt="">
              <h5>User <br/> Experience</h5>
             
            </div>
              </a>
          </li>
          <li>
              <a href="video_production.php">
            <div class="product-container">
              <img src="images/s1.png" class="img-fluid" alt="">
              <h5>Video <br/> Production</h5>
            
            </div>
              </a>
          </li>
        </ul>
      </div>
    </div>
    <div id="click2"><span class="left-arrow"></span></div>
            <div id="click"><span class="right-arrow"></span></div>
    
            </div> 
        
         </div>
         <div class="col-sm-6">
          <div class="col-sm-12 pt-5 brand_boosters">
              
  <ul class="nav nav-tabs nav-justified" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#logo">Logo Design</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#business">Business Cards</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#letter">Letter head/Envelope</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#stamps">Stamps</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#stickers">Stickers</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="logo" class="container tab-pane active"><br>
      <h3>Logo Design</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div id="business" class="container tab-pane fade"><br>
      <h3>Business Cards</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div id="letter" class="container tab-pane fade"><br>
      <h3>Letter head/Envelope</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div id="stamps" class="container tab-pane fade"><br>
      <h3>Stamps</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div id="stickers" class="container tab-pane fade"><br>
      <h3>Stickers</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
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
      <a class="nav-link" href="develop_website.php">
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
      <a class="nav-link" href="digital_seo.php">
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
      <a class="nav-link" href="motion_illustrate.php">
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
      <a class="nav-link" href="content_web.php">
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
 <script>
     
     const wrapper = document.getElementsByClassName('wrapper');
const button = document.getElementById('click');
const button2 = document.getElementById('click2');

button.addEventListener('click', clicked);
button2.addEventListener('click', clicked2);
let scroll = 0;

wrapper[0].addEventListener("scroll", function (event) {
  scroll = wrapper[0].scrollLeft;
});

function clicked () {
  scroll = scroll += 500;
  wrapper[0].scrollTo({
    left: scroll,
    behavior: 'smooth'
  });
  scroll = wrapper[0].scrollLeft + 50;
  console.log(wrapper[0].scrollLeft);
}

function clicked2 () {
  scroll = scroll -= 500;
  wrapper[0].scrollTo({
    left: scroll, 
    behavior: 'smooth' 
  });
  scroll = wrapper[0].scrollLeft + 50;
  console.log(wrapper[0].scrollLeft);
}


     </script>
 </body>
</html>