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
   
 <?php $contact="contactus" ?>      
<?php include 'includes/header.php' ?>
      
      
  </header>
<!--     header closed   -->
     
<!-- banner section start-->
    
 <section>
  <div class="container-fluid">
   <div class="container">
     <div class="row">
        <div class="col-sm-6 pt-sm-4 mt-sm-3 pt-3 mt-3">
            
        <div class="col-sm-12">
               
          <h1><b> We are located here</b></h1>
          <p class="pt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
          <p class="pt-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
               
         <div class="col-sm-12 pt-3">
          <div class="row">
           <div class="col-sm-3 col-4">
               <a href="contact_two.php">
            <div class="col-sm-12 bg-light pt-4 pb-1 br15">
              <img src="images/location.png" class="img-fluid col-sm-8 offset-sm-2 mb-4" alt="krackbot" title="services">
                <h6><b> Banglore </b></h6>
                <h6 class="f13"><b><small>Yelahanka <br/> NCC Urban</small> </b></h6>
             </div> 
               </a>
              
           </div> 
           <div class="col-sm-3 col-4">
               
               <a href="contact_one.php">
            <div class="col-sm-12 bg-light pt-4 pb-1 br15">
              <img src="images/feather-message.png" class="img-fluid col-sm-10 offset-sm-1 mb-4" alt="krackbot" title="services">
                        <h6><b> Query </b></h6>
                <h6 class="f13"><b><small>Send a message<br/> connect with us</small> </b></h6>
             </div>   
               </a>
           </div>  
           <div class="col-sm-3 col-4">
               
               <a href="contact_three.php">
            <div class="col-sm-12 bg-light pt-4 pb-1 br15">
              <img src="images/question-answer.png" class="img-fluid col-sm-10 offset-sm-1 mb-4" alt="krackbot" title="services">
                        <h6><b> Live Chat </b></h6>
                <h6 class="f13"><b><small>Instant <br/> Chat Connect</small> </b></h6>
             </div>
               </a>
           </div>   
              <div class="col-sm-12 mt-4 social">
               <h6><small><b>Follow us on</b></small></h6>
                <ul>
                 <li><a href="#"><img src="images/instagram.png" class="img-fluid" alt="instagram" title="instagram"></a></li>  
                 <li><a href="#"><img src="images/facebook.png" class="img-fluid" alt="facebook" title="facebook"></a></li>  
                 <li><a href="#"><img src="images/discord.png" class="img-fluid" alt="discord" title="discord"></a></li>  
                 <li><a href="#"><img src="images/twitter.png" class="img-fluid" alt="twitter" title="twitter"></a></li>  
                </ul>
              </div>
          </div>   
         </div>    
        
         </div>
         </div>
         <div class="col-sm-6">
          <div class="col-sm-6 offset-sm-3 bg-light py-5 mt-5 contactform">
              <img src="images/chat.png" class="img-fluid" alt="chat" title="chat">
          </div>
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