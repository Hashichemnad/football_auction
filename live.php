<?php 
/* Main page with two forms: sign up and log in */
require 'db.php';
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

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-logo">
          <a href="#"><img src="images/logo.png" alt="Image"></a>
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
            <div class="col-6 col-md-3">FOLLOW US ON
           <a href="https://www.instagram.com/__zesteins__/" class="text-secondary px-2"><span class="icon-instagram"></span></a>
            </div>
            <div class="col-6 col-md-9 text-right">
              <div class="d-inline-block"><a href="#" class="text-secondary p-2 d-flex align-items-center"><span class="icon-envelope mr-3"></span> <span class="d-none d-md-block">youremail@domain.com</span></a></div>
              <div class="d-inline-block"><a href="#" class="text-secondary p-2 d-flex align-items-center"><span class="icon-phone mr-0 mr-md-3"></span> <span class="d-none d-md-block">+1 232 3532 321</span></a></div>
            </div>
          </div>
        </div>
      </div>
          <nav class="site-navigation position-relative text-right bg-black text-md-right" role="navigation">
        <div class="container position-relative">
          <div class="site-logo">
            <a href="index.php"><img src="images/logo.png" alt=""></a>
          </div>

          <div class="d-inline-block d-md-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

          <ul class="site-menu js-clone-nav d-none d-md-block">
            <li>
              <a href="index.php">Home</a>
            
            </li>
			   <li><a href="score.php">ScoreBoard</a></li>
			   <li><a href="teams.php">Team</a></li>
            <li class="has-children">
              <a href="">Matches</a>
              <ul class="dropdown arrow-top">
                <li><a href="live.php">LiveScore</a></li>
            
                <li><a href="fix.php">Fixture</a></li>
				<li><a href="details.php">Details</a></li>
              </ul>
            </li>
      
        
            
          </ul>
        </div>
      </nav>
    </header>
  
    <div class="site-blocks-cover overlay" style="background-image: url(images/hero_bg_3.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-start">
          <div class="col-md-6 text-center text-md-left" data-aos="fade-up" data-aos-delay="400">
            <h1 class="bg-text-line">LIVE updates</h1>
            <p class="mt-4">Live score and Results of all matches </p>
          </div>
        </div>
      </div>
    </div>

    
    <div class="site-section site-blocks-vs">
      <div class="container">
      
        <div class="row">
          <div class="col-md-12">
          
            <div class="bg-image overlay-success rounded mb-5" style="background-image: url('images/hero_bg_1.jpg');" data-stellar-background-ratio="0.5">
          <?php
          $query = "SELECT * FROM fixture where status=1";  
          $result = mysqli_query($connect, $query);
          $row = mysqli_fetch_array($result);
          $query1 = "SELECT * FROM teams where tid=".$row['team1']."";  
          $result1 = mysqli_query($connect, $query1);
          $row1 = mysqli_fetch_array($result1);
          $query2 = "SELECT * FROM teams where tid=".$row['team2']."";  
          $result2 = mysqli_query($connect, $query2);
          $row2 = mysqli_fetch_array($result2);
          if($row!=NULL){
          echo'<div class="row align-items-center">
            <div class="col-md-12 col-lg-4 mb-4 mb-lg-0">

              <div class="text-center text-lg-left">
                <div class="d-block d-lg-flex align-items-center">
                  <div class="image mx-auto mb-3 mb-lg-0 mr-lg-3">
                    <img src="data:image/jpeg;base64,'.base64_encode($row1['image'] ).'" alt="Image" class="img-fluid">
                  </div>
                  <div class="text">
                    <h3 class="h5 mb-0 text-black">'.$row1['name'].'</h3>
                    <span class="text-uppercase small country text-black">'.$row['detail1'].'</span>
                  </div>
                </div>
              </div>

            </div>
            <div class="col-md-12 col-lg-4 text-center mb-4 mb-lg-0">
              <div class="d-inline-block">
                <div class="bg-black py-2 px-4 mb-2 text-white d-inline-block rounded"><span class="h3">'.$row['pt1'].' - '.$row['pt2'].'</span></div>
              </div>
            </div>

            <div class="col-md-12 col-lg-4 text-center text-lg-right">
              <div class="">
                <div class="d-block d-lg-flex align-items-center">
                  <div class="image mx-auto ml-lg-3 mb-3 mb-lg-0 order-2">
                    <img src="data:image/jpeg;base64,'.base64_encode($row2['image'] ).'" alt="Image" class="img-fluid">
                  </div>
                  <div class="text order-1">
                    <h3 class="h5 mb-0 text-black">'.$row2['name'].'</h3>
                    <span class="text-uppercase small country text-black">'.$row['detail2'].'</span>
                  </div>
                </div>
              </div>
            </div>';}?>

          </div>
        </div>
          </div>
        </div>
        
        <div class="row mb-5">
          <div class="col-md-12">
  <div class="col-md-12 text-center mb-5">
  <h2 class="text-black">UPCOMING MATCHES</h2>
  </div>
  
  <!-- END row -->
  <?php
  $query = "SELECT * FROM fixture where status=0";  
  $result = mysqli_query($connect, $query);
  while($row = mysqli_fetch_array($result))
  {
  $query1 = "SELECT * FROM teams where tid=".$row['team1']."";  
  $result1 = mysqli_query($connect, $query1);
  $row1 = mysqli_fetch_array($result1);
  $query2 = "SELECT * FROM teams where tid=".$row['team2']."";  
  $result2 = mysqli_query($connect, $query2);
  $row2 = mysqli_fetch_array($result2);
  echo'
  
  <div class="row bg-white align-items-center ml-0 mr-0 py-4 match-entry">
  <div class="col-md-4 col-lg-4 mb-4 mb-lg-0">
  
  <div class="text-center text-lg-left">
  <div class="d-block d-lg-flex align-items-center">
  <div class="image image-small text-center mb-3 mb-lg-0 mr-lg-3">
  <img src="data:image/jpeg;base64,'.base64_encode($row1['image'] ).'" alt="Image" class="img-fluid">
  </div>
  <div class="text">
  <h3 class="h5 mb-0 text-black">'.$row1['name'].'</h3>
  <span class="text-uppercase small country"></span>
  </div>
  </div>
  </div>
  
  </div>
  <div class="col-md-4 col-lg-4 text-center mb-4 mb-lg-0">
  <div class="d-inline-block">
  <div class="bg-black py-2 px-4 mb-2 text-white d-inline-block rounded"><span class="h5">'.$row['date'].' / '.$row['time'].'</span></div>
  </div>
  </div>
  
  <div class="col-md-4 col-lg-4 text-center text-lg-right">
  <div class="">
  <div class="d-block d-lg-flex align-items-center">
  <div class="image image-small ml-lg-3 mb-3 mb-lg-0 order-2">
  <img src="data:image/jpeg;base64,'.base64_encode($row2['image'] ).'" alt="Image" class="img-fluid">
  </div>
  <div class="text order-1 w-100">
  <h3 class="h5 mb-0 text-black">'.$row2['name'].'</h3>
  <span class="text-uppercase small country"></span>
  </div>
  </div>
  </div>
  </div>
  </div>';
  }
  ?>
            
          </div>
        </div>
        
        
        <div class="row align-items-center mb-5">
          <div class="col-md-12">


    <div class="col-md-12 text-center mb-5">
    <h2 class="text-black">FINISHED MATCHES</h2>
    </div>
    
    <!-- END row -->
    <?php
    $query = "SELECT * FROM fixture where status=2";  
    $result = mysqli_query($connect, $query);
    while($row = mysqli_fetch_array($result))
    {
    $query1 = "SELECT * FROM teams where tid=".$row['team1']."";  
    $result1 = mysqli_query($connect, $query1);
    $row1 = mysqli_fetch_array($result1);
    $query2 = "SELECT * FROM teams where tid=".$row['team2']."";  
    $result2 = mysqli_query($connect, $query2);
    $row2 = mysqli_fetch_array($result2);
    echo'
    
    <div class="row bg-white align-items-center ml-0 mr-0 py-4 match-entry">
    <div class="col-md-4 col-lg-4 mb-4 mb-lg-0">
    
    <div class="text-center text-lg-left">
    <div class="d-block d-lg-flex align-items-center">
    <div class="image image-small text-center mb-3 mb-lg-0 mr-lg-3">
    <img src="data:image/jpeg;base64,'.base64_encode($row1['image'] ).'" alt="Image" class="img-fluid">
    </div>
    <div class="text">
    <h3 class="h5 mb-0 text-black">'.$row1['name'].'</h3>
    <span class="text-uppercase small country">'.$row['detail1'].'</span>
    </div>
    </div>
    </div>
    
    </div>
    <div class="col-md-4 col-lg-4 text-center mb-4 mb-lg-0">
    <div class="d-inline-block">
    <div class="bg-black py-2 px-4 mb-2 text-white d-inline-block rounded"><span class="h5">'.$row['pt1'].' - '.$row['pt2'].'</span></div>
    </div>
    </div>
    
    <div class="col-md-4 col-lg-4 text-center text-lg-right">
    <div class="">
    <div class="d-block d-lg-flex align-items-center">
    <div class="image image-small ml-lg-3 mb-3 mb-lg-0 order-2">
    <img src="data:image/jpeg;base64,'.base64_encode($row2['image'] ).'" alt="Image" class="img-fluid">
    </div>
    <div class="text order-1 w-100">
    <h3 class="h5 mb-0 text-black">'.$row2['name'].'</h3>
    <span class="text-uppercase small country">'.$row['detail2'].'</span>
    </div>
    </div>
    </div>
    </div>
    </div>';
    }
    ?>

            <!-- END row -->

          </div>

        </div>
        
      </div>
    </div>

    <footer class="site-footer border-top " style="background:black;">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="mb-5">
              <h3 class="footer-heading mb-4">PA Premier League</h3>
                          <p>PA Premier League 2K19 is organised by Zesteins (16s Batch, PACE).<br> All students from PAPT, PAFGC, PA Pharmacy and PACE are invited to participate. </p></div>


          
          </div>
      

            <div class="row align-items-center" style="padding-left:49px;">
              <div class="col-md-12" >
                <h3 class="footer-heading mb-4">Follow Us</h3>

                <div>
<a href="https://www.instagram.com/__zesteins__/" class="text-secondary px-2"><span class="icon-instagram"></span></a>
              
                </div>
              </div>
            </div>

       

   
          
        </div>
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

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>