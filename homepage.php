</body>
<!DOCTYPE html>
<html>
<title>Home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



<?php
  session_start();
  $con=mysqli_connect("localhost","root","","gps");



  ?>
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding{
  text-align: center;
  position:relative;
  margin-left: 30px;
}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #222;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
</style>
<body class="w3-black">

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <!-- Avatar image in top left corner -->

  <a href="#" class="w3-bar-item w3-button w3-padding-large w3-black">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>HOME</p>
  </a>
  <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-user w3-xxlarge"></i>
    <p>SERVICES</p>
  </a>
  <a href="#devices" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-eye w3-xxlarge"></i>
    <p>DEVICES</p>
  </a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-envelope w3-xxlarge"></i>
    <p>CONTACT US</p>
  </a>
</nav>

<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->
  <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
    <h1 class="w3-jumbo"><span class="w3-hide-small"><font face="verdana"><b>Welcome <?php if(isset($_SESSION['name'])){echo $_SESSION['name'];} ?></b></font></h1>

  </header>

  <!-- About Section -->
  <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
    <h2 class="w3-text-light-grey">SERVICES:</h2>
    <hr style="width:200px" class="w3-opacity">


    <h3 class="w3-padding-16 w3-text-light-grey" align="center">HOW CAN WE HELP YOU?</h3>
    <div class="w3-row-padding" style="margin:0 -16px" align="center">
      <div class="w3-margin-bottom" >
        <ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off" style = "margin-left:40px;"align="center">
          <li class="w3-dark-grey w3-xlarge w3-padding-32"align="center">SELECT THE SERVICE NEEDED</li>
          <li class="w3-padding-16"><a href="find.php"align="center"><a href = "Lat&Lon.html">TRACK THE PHONE LOCATION </a></li>
          <li class="w3-padding-16"><a href="lock.php"align="center"> LOCK YOUR PHONE </a></li>
          <li class="w3-padding-16"align="center"><a href="https://www.google.co.in/maps?source=tldsi&hl=en">GOOGLE MAPS</a></li>

        </ul>
      </div>

    <!-- End Grid/service tables -->
    </div>
<br><br><br>

  </div>

  <!-- Portfolio Section -->
  <div class="w3-padding-64 w3-content">
    <h2 class="w3-text-light-grey" id = "devices"><center>MY DEVICES</center></h2>
<br><br>
<table cellpadding="20px" align="center"><tr><td align="center"><img src="register.png" width = "40%" height = "20%"></td><td align="center"><span></span><img src="adddevice.png" style="width:40%; margin-right:12%" height = "20%" o></td>
  <td align="center"><img src="delete.png" style="width:50%" ></td><td align="center"><img src="logout.png" style="width:60%"></td>
</tr><tr><td align="center"><button class="w3-button w3-white w3-padding-large w3-hover-black" ><a href = "regdev.php">REGISTERED DEVICES</a></button></td>
  <td align="center"><button class="w3-button w3-white w3-padding-large w3-hover-black"><a href="changedet.php">ADD NEW DEVICE</a></button></td>
<td align="center"><button class="w3-button w3-white w3-padding-large w3-hover-black" onclick="delete.php">DELETE A DEVICE</button></td>
<td align="center"><button class="w3-button w3-white w3-padding-large w3-hover-black" onclick="mainpage.html"><a href = "login.php">LOG OUT</a></button></td>

</tr></table>
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-half">
<br /><br />

      <div class="w3-half">
      </div>
    </div>

  </div>

  <!-- Contact Section -->
  <div class="w3-padding-64 w3-content w3-text-grey" id="contact">
    <h2 class="w3-text-light-grey">Contact US</h2>
    <hr style="width:200px" class="w3-opacity">

    <div class="w3-section">
      <p><i class="fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Chennai, Tamilnadu, India</p>
      <p><i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Phone: +91 9087004783</p>
      <p><i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i> Email: gpstracker@gmail.com</p>
    </div><br>
    <p>Any Problem? We are here:</p>

    <form action="contact.php" target="_blank">
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Email" required name="Email"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Subject" required name="Subject"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Message" required name="Message"></p>
      <p>
        <button class="w3-button w3-light-grey w3-padding-large" type="submit">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </p>
    </form>
  <!-- End Contact Section -->
  </div>

    <!-- Footer -->
  <footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  <!-- End footer -->
  </footer>

<!-- END PAGE CONTENT -->
</div>

</html>
