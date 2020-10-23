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
 </head>
 <body>
  <header class="menu">  
<?php $index="indesx" ?>
<?php include 'includes/header.php' ?>
      
      
  </header>
<!--     header closed   -->
     
<!-- banner section start-->
    
 <section>
  <div class="container-fluid">
   <div class="container">
     <div class="row">
        <div class="col-sm-6 pt-sm-5 mt-sm-4 pt-3 mt-3">
        <div class="col-sm-12 css-typing">
            <h1 class="mb-0"><b> Oh hi there! </b></h1>
            <h1><b>I’m Krackbot &amp; welcome to my site!</b></h1>
          <h2 class="my-2"> Let me walk you around to know what’s in store for you.</h2>
           <h2> First, let’s get to know you.</h2>
<!--
            <h1 class="ml11">
  <span class="text-wrapper">
    <span class="line line1"></span>
    <span class="letters"> <b><h1> Hi, there.. talk to me, </h1><br/><br/>
        <h1> I am Krackbot..</h1>
      Tell me about  Yourself..</b>
      </span>
  </span>
</h1>
-->
          <form>
           <div class="form-group py-3">
            <input type="text" class="form-control form-control-lg wyn col-sm-10" placeholder="Whats Your Name?"> 
           </div>  
          </form>
          <h4> That’s a wonderful name!</h4>
          <h4>Now that your name is registered in my mind, let’s get going!</h4>
<!--
          <h4><b>What we do</b></h4>
          <h4><b>Let's go..</b></h4>
-->
         </div>
         </div>
         <div class="col-sm-6">
          <div class="col-sm-11 offset-sm-1 pt-5">
           <img src="images/peppa.png" alt="peppa pig" title="banner" class="img-fluid" style="z-index:-1">   
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