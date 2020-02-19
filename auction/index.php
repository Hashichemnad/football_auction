<?php 
/* Main page with two forms: Register and log in */
require '../db.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>PA PREMIER LEAGUE 2K19</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="../fonts/icomoon/style.css">

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link rel="stylesheet" href="../css/jquery-ui.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">


    <link rel="stylesheet" href="../css/aos.css">

    <link rel="stylesheet" href="../css/style.css">
    <style>
    body{
       background-image: url("bg.jpg");
       }
     </style>
  </head>
  <?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') 
  {
  $check="password";
  $pass = $mysqli->escape_string($_POST['pass']);
  if ($check==$pass) {
  echo '<script>alert("logged in successfully")</script>';
  $_SESSION['logged_i'] = true;
  header("location:dashboard.php");
  // This is how we'll know the user is logged in
  }}?>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-logo">
          <a href="#"><img src="logo.png" alt="Image"></a>
        </div>
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <header class="site-navbar absolute transparent" role="banner">
    <div class="py-3">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-6 col-md-3"    style="font-weight: 400;">FOLLOW US ON
           <a href="https://www.instagram.com/__zesteins__/" class="text-secondary px-2"><span class="icon-instagram"></span></a>
            </div>
            <div class="col-6 col-md-9 text-right">
              <div class="d-inline-block"><a href="mailto:zesteins@gmail.com" class="text-secondary p-2 d-flex align-items-center"><span class="icon-envelope mr-3"></span> <span class="d-none d-md-block">zesteins@gmail.com</span></a></div>
              <div class="d-inline-block"><a href="tel:9567956773" class="text-secondary p-2 d-flex align-items-center"><span class="icon-phone mr-0 mr-md-3"></span> <span class="d-none d-md-block">+91 9567 9567 73</span></a></div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <br><br><br>
<section>
<div align="center">
<form action="#" method="post">
<input type="password" name="pass" placeholder="Security Code">
<input type="submit" value="LOGIN">
</form>
</div></section>
<br><br><br>
    <footer class="site-footer border-top " style="background:black; padding-bottom:0px;">
      <div class="container">
        <div class="row mt-5 text-center">
          <div class="col-md-12">
            <p>
                      Copyright &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | By <a href="http://spidev.in" target="_blank" >SPIDEV</a>

            </p>
          </div>
          
        </div>
      </div>
    </footer>
  </div>

  <script src="../js/jquery-3.3.1.min.js"></script>
  <script src="../js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../js/jquery-ui.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/jquery.stellar.min.js"></script>
  <script src="../js/jquery.countdown.min.js"></script>
  <script src="../js/jquery.magnific-popup.min.js"></script>
  <script src="../js/aos.js"></script>

  <script src="../js/main.js"></script>
    
  </body>
</html>