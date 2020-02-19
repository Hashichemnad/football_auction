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
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link rel="stylesheet" href="../css/jquery-ui.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">


    <link rel="stylesheet" href="../css/aos.css">

    <link rel="stylesheet" href="../css/style.css">
    
  </head>
  <?php
  if($_SESSION['logged_i']!=1)
  {
  header("location:index.php");
  }
  ?>
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
  
    <div class="site-blocks-cover1 overlay1" style="background-image: url(../images/hero_bg_3.jpg); height:200px;" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-start">
          <div class="col-md-6 text-center text-md-left" data-aos="fade-up" data-aos-delay="400">
            <h1 class="bg-text-line">Meet The Players</h1>
            
          </div>
        </div>
      </div>
    </div>
    
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center mb-5">
            <h2 class="text-black">Players</h2>
          </div>
        </div>
        <div class="row">
        <?php
        $a=$_GET['a'];
        $query = "SELECT * FROM players where position like '".$a."' and selected = 0 order by name asc";  
        $result = mysqli_query($connect, $query);
        while($row = mysqli_fetch_array($result))
        {
        echo'
        
          <div class="mb-4 mb-lg-0 col-6 col-md-4 col-lg-2 text-center">
            <div class="player mb-5"><a href="profile.php?id='.$row['id'].'" target="_blank">
              <img src="../crop/'.$row['image'].'.jpg" alt="Image" class="img-fluid image ">
              <h2>'.$row['name'].'</h2>
              <span class="position">'.$row['position'].'</span></a>
            </div>
          </div>';
          }?>
        </div>

      </div>
    </div>
  

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