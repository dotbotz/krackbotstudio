
    <nav class="navbar navbar-expand-md navbar-dark">
     <div class="container">
  <!-- Brand -->
  <a class="navbar-brand" href="index.php">
   <img src="images/logo.png" alt="logo" title="krackbot" class="img-fluid logo">      
  </a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link <?php if(isset($index)) echo '' ?>" href=""></a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if(isset($index)) echo 'active' ?>" href="index.php"><span>Home</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if(isset($service)) echo 'active' ?>" href="services.php"><span>Services</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if(isset($casestudy)) echo 'active' ?>" href="case_study.php"><span>Case Studies</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if(isset($about)) echo 'active' ?>" href="about.php"><span>About Us</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if(isset($contact)) echo 'active' ?>" href="contact_one.php"><span>Contact Us</span></a>
      </li>
<!--
      <li class="nav-item d-none d-sm-block">
        <a class="nav-link toggle-wrap"  href="#"><img src="images/bars.png" alt="" title="" onclick="toggleMenu(this)" class="img-fluid toggle-bar bars float-right"></a>
      </li>
-->
        <li class="navopen">
  <div class="toggle-wrap" onclick="toggleMenu(this)">
    <span class="toggle-bar"></span>
  </div>
</li>
        <aside>
    <ul id="switcher">
        <h4>Lorum ipsum</h4>
        <p>This color combo available inside whole template. You can change on your wish, Even you can create your own with limitless possibilities!</p>
    
  <li id="whiteButton" class="border"></li>
  <li id="grayButton"></li>
  <li id="blueButton"></li>
  <li id="yellowButton"></li>
</ul>
</aside>
    </ul>
  </div>
         </div>
</nav>  