<?php 
/* Main page with two forms: sign up and log in */
require 'db.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title> PA PREMIER LEAGUE 2K19</title>
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
    <style>
    table {
    border-collapse: collapse;
    width: 100%;
    
    }
    
    th, td {
    text-align: center;
    padding: 8px;
    }
    
    tr:nth-child(even) {background-color: #f2f2f2;}
    </style>
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-logo">
          <a href="#"><img src="images/logo1.png" alt="Image"></a>
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
            <div class="col-6 col-md-3"     style="font-weight: 400;">FOLLOW US ON
           <a href="https://www.instagram.com/__zesteins__/" class="text-secondary px-2"><span   style="font-weight: 600;" class="icon-instagram"></span></a>
            </div>
            <div class="col-6 col-md-9 text-right">
              <div class="d-inline-block"><a href="mailto:zesteins@gmail.com" class="text-secondary p-2 d-flex align-items-center"><span class="icon-envelope mr-3"></span> <span class="d-none d-md-block">zesteins@gmail.com</span></a></div>
              <div class="d-inline-block"><a href="tel:9567956773" class="text-secondary p-2 d-flex align-items-center"><span class="icon-phone mr-0 mr-md-3"></span> <span class="d-none d-md-block">+91 9567 9567 73</span></a></div>
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
			   <li><a href="teams.php">Team</a></li>
			     
			    <li><a href="score.php">ScoreBoard</a></li>
            <li class="has-children">
              <a href="fix.php">Matches</a>
              <ul class="dropdown arrow-top">
                <li><a href="live.php">LiveScore</a></li>
                <li><a href="fix.php">Fixture</a></li>
                
		
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    


     <div class="slide-one-item home-slider owl-carousel">
      <div class="site-blocks-cover overlay" style="background-image: url(images/hero_bg_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-start">
            <div class="col-md-6 text-center text-md-left" style="margin-top:100px;" data-aos="fade-up" data-aos-delay="400">
              <h1 class="bg-text-line">PA PREMIER LEAGUE IS COMING BACK!</h1>
              <!--p><a href="#" class="btn btn-primary btn-sm rounded-0 py-3 px-5">Read More</a></p-->
            </div>
          </div>
        </div>
      </div>  

      <div class="site-blocks-cover overlay" style="background-image: url(images/hero_bg_4.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-start">
            <div class="col-md-6 text-center text-md-left" style="margin-top:100PX;" data-aos="fade-up" data-aos-delay="400">
              <h1 class="bg-text-line">THE WAIT IS <BR>FINALLY OVER</h1>
              <!--p><a href="#" class="btn btn-primary btn-sm rounded-0 py-3 px-5">Read More</a></p-->
            </div>
          </div>
        </div>
      </div>  

      <div class="site-blocks-cover overlay" style="background-image: url(images/hero_bg_3.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-start">
            <div class="col-md-6 text-center text-md-left" style="margin-top:100px;" data-aos="fade-up" data-aos-delay="400">
              <h1 class="bg-text-line">BRACE YOURSELF FOR A FOOTBALLING SPECTACLE</h1>
            <!--p><a href="#" class="btn btn-primary btn-sm rounded-0 py-3 px-5">Read More</a></p-->
            </div>
          </div>
        </div>
      </div>  
    </div>
    
    

    <div class="site-section pt-0 feature-blocks-1" data-aos="fade" data-aos-delay="100">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4" >
            <div class="p-3 p-md-5 feature-block-1 mb-5 mb-lg-0 bg" style="background-image: url('images/img_1.jpg');">
              <div class="text">
                <h2 class="h5 text-white">PA PREMIER LEAUE IS COMING BACK!</h2>
                <p>BRACE YOURSELF FOR A FOOTBALLING SPECTACLE</p>
                <p class="mb-0"><a href="#" class="btn btn-primary btn-sm px-4 py-2 rounded-0">Read More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="p-3 p-md-5 feature-block-1 mb-5 mb-lg-0 bg" style="background-image: url('images/img_2.jpg');">
              <div class="text">
                <h2 class="h5 text-white">PA PREMIER LEAUE IS COMING BACK!</h2>
                <p>BRACE YOURSELF FOR A FOOTBALLING SPECTACLE!</p>
                <p class="mb-0"><a href="#" class="btn btn-primary btn-sm px-4 py-2 rounded-0">Read More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="p-3 p-md-5 feature-block-1 mb-5 mb-lg-0 bg" style="background-image: url('images/img_3.jpg');">
              <div class="text">
                <h2 class="h5 text-white">PA PREMIER LEAUE IS COMING BACK</h2>
                <p>BRACE YOURSELF FOR A FOOTBALLING SPECTACLE!</p>
                <p class="mb-0"><a href="#" class="btn btn-primary btn-sm px-4 py-2 rounded-0">Read More</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="container">
    
    <div class="row">
    <div class="col-md-12">
    
    <div class="bg-image overlay-success rounded mb-5" style="background-image: url('images/hero_bg_1.jpg');" data-stellar-background-ratio="0.5">
      
      <!-- END row -->
      <?php
      $query = "SELECT * from (SELECT * FROM fixture order by id desc limit 3 ) as r order by id";  
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
      <img src="data:image/jpeg;base64,'.base64_encode($row1['image'] ).'" alt="Image" class="img-fluid" width="150px" height="150px">
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
      <div class="bg-black py-2 px-4 mb-2 text-white d-inline-block rounded"><span class="h5">'.$row['pt1'].' - '.$row['pt2'].'</span></div>
      </div>
      </div>
      
      <div class="col-md-4 col-lg-4 text-center text-lg-right">
      <div class="">
      <div class="d-block d-lg-flex align-items-center">
      <div class="image image-small ml-lg-3 mb-3 mb-lg-0 order-2">
      <img src="data:image/jpeg;base64,'.base64_encode($row2['image'] ).'" alt="Image" class="img-fluid" width="150px" height="150px">
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
    </div></div></div>
    
    
    <div style="overflow-x:auto;">
    <table>
    <tr><th colspan="6">POOL A</th></tr>
    <tr>
    <th>TEAM</th>
    <th>M</th>
    <th>W</th>
    <th>D</th>
    <th>L</th>
    <th>P</th>
    </tr>
    <tr>
    <td>GUNNERS</td>
    <td>3</td>
    <td>1</td>
    <td>2</td>
    <td>0</td>
    <td>5</td>
    </tr>
    <tr>
    <td>NARCOS</td>
    <td>3</td>
    <td>0</td>
    <td>3</td>
    <td>0</td>
    <td>3</td>
    </tr>
    <tr>
    <td>ADHOLOGAM</td>
    <td>3</td>
    <td>0</td>
    <td>3</td>
    <td>0</td>
    <td>3</td>
    </tr>
    <tr>
    <td>STIBLOTIEZ</td>
    <td>3</td>
    <td>0</td>
    <td>2</td>
    <td>1</td>
    <td>2</td>
    </tr>
    </table>
    </div>
    
    <div style="overflow-x:auto;">
    <table>
    <tr><th colspan="6">POOL B</th></tr>
    <tr>
    <th>TEAM</th>
    <th>M</th>
    <th>W</th>
    <th>D</th>
    <th>L</th>
    <th>P</th>
    </tr>
    <tr>
    <td>RAPTORS</td>
    <td>3</td>
    <td>2</td>
    <td>0</td>
    <td>1</td>
    <td>6</td>
    </tr>
    <tr>
    <td>BAYHAWKS</td>
    <td>3</td>
    <td>1</td>
    <td>1</td>
    <td>1</td>
    <td>4</td>
    </tr>
    <tr>
    <td>TEAMOUT</td>
    <td>3</td>
    <td>1</td>
    <td>1</td>
    <td>1</td>
    <td>4</td>
    </tr>
    <tr>
    <td>77 STRIKERS</td>
    <td>3</td>
    <td>1</td>
    <td>0</td>
    <td>2</td>
    <td>3</td>
    </tr>
    </table>
    </div>
    
	<div class="site-section" data-aos="fade-up">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <img src="images/about_1.jpg" alt="Image" class="img-fluid" style="box-shadow: 0px 2px 10px rgb(0,0,0,.6);">
          </div>
          <div class="col-md-6 pl-md-5">
            <h2 class="text-black" style="text-align: center;font-weight: 600;text-shadow: 0px 2px 6px rgb(0,0,0,.6);"> P A PREMIER LEAGUE 2K19</h2>
            <p class="lead">PA Premier League is one of the events of the year at PA College, Mangaluru. Football fans and others all gather for what is guaranteed to be an exciting event with students from PA College of Engineering, PA Pharmacy , PA Polytechnic and PA First Grade College all invited to participate for the first time. To make things more unpredictable, this year the teams are made through a round of player auctions.<br>Be sure you do not miss out on what is bound to be an  amazing display of passion for the beautiful game.</p>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section block-13 bg-primary fixed overlay-primary bg-image" style="background-image: url('images/hero_bg_3.jpg');"  data-stellar-background-ratio="0.5">

      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12 text-center">
            <h2 class="text-white">THE TEAMS</h2>
          </div>
        </div>

        <div class="row">
          <div class="nonloop-block-13 owl-carousel">
        <div class="item" style="margin-right:20px;">
          <!-- uses .block-12 -->
          <div class="block-12" >
            <figure>
              <img src="images/NARCOS.jpg" alt="Image" class="img-fluid">
            </figure>
            <div class="text">
              <!--span class="meta">May 20th 2018</span-->
              <div class="text-inner" >
                <h2 class="heading mb-3"><a href="#" style="font-size:30px;font-weight:400;" class="text-black">NARCOS FC</a></h2>
                <p> YOU'll NEVER WALK ALONE </p>
              </div>
            </div>
          </div>
        </div>
          <div class="item" style="margin-right:20px;">
          <!-- uses .block-12 -->
          <div class="block-12" >
            <figure>
              <img src="images/TEAMOUT.jpg" alt="Image" class="img-fluid">
            </figure>
            <div class="text">
              <!--span class="meta">May 20th 2018</span-->
              <div class="text-inner" >
                <h2 class="heading mb-3"><a href="#" style="font-size:30px;font-weight:400;" class="text-black">TEAM OUT</a></h2>
                <p>WE ALWAYS PLAY TO WIN !!</p>
              </div>
            </div>
          </div>
        </div>  <div class="item"  style="margin-right:20px;">
          <!-- uses .block-12 -->
          <div class="block-12" >
            <figure>
              <img src="images/ADHOLOGAM.jpg" alt="Image" class="img-fluid">
            </figure>
            <div class="text">
              <!--span class="meta">May 20th 2018</span-->
              <div class="text-inner" >
                <h2 class="heading mb-3"><a href="#" style="font-size:30px;font-weight:400;" class="text-black">ADHOLOGAM</a></h2>
                <p>WE ALWAYS PLAY TO WIN !!</p>
              </div>
            </div>
          </div>
        </div>  <div class="item"  style="margin-right:20px;">
          <!-- uses .block-12 -->
          <div class="block-12" >
            <figure>
              <img src="images/STIBOLTIEZ.jpg" alt="Image" class="img-fluid">
            </figure>
            <div class="text">
              <!--span class="meta">May 20th 2018</span-->
              <div class="text-inner" >
                <h2 class="heading mb-3"><a href="#" style="font-size:30px;font-weight:400;" class="text-black">STIBOLTIEZ</a></h2>
                <p>WE ALWAYS PLAY TO WIN !!</p>
              </div>
            </div>
          </div>
        </div>  <div class="item"  style="margin-right:20px;">
          <!-- uses .block-12 -->
          <div class="block-12" >
            <figure>
              <img src="images/RAPTORS.jpg" alt="Image" class="img-fluid">
            </figure>
            <div class="text">
              <!--span class="meta">May 20th 2018</span-->
              <div class="text-inner" >
                <h2 class="heading mb-3"><a href="#" style="font-size:30px;font-weight:400;" class="text-black">RAPTORS</a></h2>
                <p>WE ALWAYS PLAY TO WIN !!</p>
              </div>
            </div>
          </div>
        </div>  <div class="item"  style="margin-right:20px;">
          <!-- uses .block-12 -->
          <div class="block-12" >
            <figure>
              <img src="images/STRIKERS.jpg" alt="Image" class="img-fluid">
            </figure>
            <div class="text">
              <!--span class="meta">May 20th 2018</span-->
              <div class="text-inner" >
                <h2 class="heading mb-3"><a href="#" style="font-size:30px;font-weight:400;" class="text-black">77 STRIKERS</a></h2>
                <p>RISE AND ROAR!!</p>
              </div>
            </div>
          </div>
        </div>
        
<div class="item"  style="margin-right:20px;">
          <!-- uses .block-12 -->
          <div class="block-12" >
            <figure>
              <img src="images/GUNNERS.jpg" alt="Image" class="img-fluid">
            </figure>
            <div class="text">
              <!--span class="meta">May 20th 2018</span-->
              <div class="text-inner" >
                <h2 class="heading mb-3"><a href="#" style="font-size:30px;font-weight:400;" class="text-black">GUNNERS FC</a></h2>
                <p>WE ALWAYS PLAY TO WIN !!</p>
              </div>
            </div>
          </div>
        </div>

       <div class="item"  style="margin-right:20px;">
          <!-- uses .block-12 -->
          <div class="block-12" >
            <figure>
              <img src="images/BAYHAWKS.jpg" alt="Image" class="img-fluid">
            </figure>
            <div class="text">
              <!--span class="meta">May 20th 2018</span-->
              <div class="text-inner" >
                <h2 class="heading mb-3"><a href="#" style="font-size:30px;font-weight:400;" class="text-black">BAYHAWKS</a></h2>
                <p>WE ALWAYS PLAY TO WIN !!</p>
              </div>
            </div>
          </div>
        </div>
      
        
      </div>
        </div>
      </div>
      
    </div>

    <!--div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12 text-center">
            <h2 class="text-black">Latest News</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <div class="post-entry">
              <div class="image">
                <img src="images/img_1.jpg" alt="Image" class="img-fluid">
              </div>
              <div class="text p-4">
                <h2 class="h5 text-black"><a href="#">RealMad vs Striker Who Will Win?</a></h2>
                <span class="text-uppercase date d-block mb-3"><small>By Colorlib &bullet; Sep 25, 2018</small></span>
                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat beatae doloremque, ex corrupti perspiciatis.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="post-entry">
              <div class="image">
                <img src="images/img_2.jpg" alt="Image" class="img-fluid">
              </div>
              <div class="text p-4">
                <h2 class="h5 text-black"><a href="#">RealMad vs Striker Who Will Win?</a></h2>
                <span class="text-uppercase date d-block mb-3"><small>By Colorlib &bullet; Sep 25, 2018</small></span>
                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat beatae doloremque, ex corrupti perspiciatis.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="post-entry">
              <div class="image">
                <img src="images/img_3.jpg" alt="Image" class="img-fluid">
              </div>
              <div class="text p-4">
                <h2 class="h5 text-black"><a href="#">RealMad vs Striker Who Will Win?</a></h2>
                <span class="text-uppercase date d-block mb-3"><small>By Colorlib &bullet; Sep 25, 2018</small></span>
                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat beatae doloremque, ex corrupti perspiciatis.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div-->

    
    
    <footer class="site-footer border-top " style="background:black;">
      <div class="container">
          <div class="row">
          <div class="col-lg-4">
            <div class="mb-5">
              <h3 class="footer-heading mb-4">PA Premier League</h3>
                <p style="text-align:justify;">PA Premier League 2K19 is organised by Zesteins (16s Batch, PACE).<br> All students from PAPT, PAFGC, PA Pharmacy and PACE are invited to participate. </p></div>

          
          </div>
      
 <div class="col-6 col-md-3"    style="font-weight: 600;">FOLLOW US ON
           <a href="https://www.instagram.com/__zesteins__/" class="text-secondary px-2"><span style="font-weight: 600;color:white;" class="icon-instagram"></span></a>
            </div>
       
  <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="mb-5">
              <h3 class="footer-heading mb-4">AUCTION </h3>

              <div class="block-16">
                <figure>
                  <img src="images/AUCTION.jpg" alt="Image placeholder" class="img-fluid rounded" style=" box-shadow: 0px 2px 18px rgb(255,255,255,0.6);">
                  <a href="https://www.youtube.com/watch?v=KwdCOTkfsFs&feature=youtu.be" class="play-button"><span class="icon-play"></span></a>
                </figure>
              </div>

            </div>

   
          
        </div>
        <div class="row mt-5 text-center">
          <div class="col-md-12">
            <p>
                      Copyright &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | By <a href="http://spidev.in" target="_blank" ><svg viewBox="0 0 960 300">
	<symbol id="s-text">
		<text text-anchor="middle" x="50%" y="80%">SPIDEV</text>
	</symbol>

	<g class = "g-ants">
		<use xlink:href="#s-text" class="text-copy"></use>
		<use xlink:href="#s-text" class="text-copy"></use>
		<use xlink:href="#s-text" class="text-copy"></use>
		<use xlink:href="#s-text" class="text-copy"></use>
		<use xlink:href="#s-text" class="text-copy"></use>
	</g>
</svg></a>

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