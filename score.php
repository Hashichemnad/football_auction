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
       <br><br>
       <div style="overflow-x:auto;">
       <table>
       <tr><th colspan="6">GOALS</th></tr>
       <tr>
       <th>Sl.No</th>
       <th>Name</th>
       <th>Team</th>
       <th>Matches</th>
       <th>Goals</th>
       </tr>
       <tr>
       <td>1</td>
       <td>NAWAS</td>
       <td>gunners</td>
       <td>3</td>
       <td>2</td>
       </tr>
       <tr>
       <td>2</td>
       <td>Jilas</td>
       <td>Teamout</td>
       <td>2</td>
       <td>1</td>
       </tr>
       <tr>
       <td>3</td>
       <td>Nazeem</td>
       <td>bayhawks</td>
       <td>3</td>
       <td>1</td>
       </tr>
       <tr>
       <td>4</td>
       <td>Sadiq</td>
       <td>Raptors</td>
       <td>3</td>
       <td>1</td>
       </tr>
       <tr>
       <td>5</td>
       <td>akif</td>
       <td>Stibliotez</td>
       <td>3</td>
       <td>1</td>
       </tr>
       <tr>
       <td>6</td>
       <td>Chola</td>
       <td>Gunners</td>
       <td>3</td>
       <td>1</td>
       </tr>
       <tr>
       <td>7</td>
       <td>Sufyan</td>
       <td>Gunners</td>
       <td>3</td>
       <td>1</td>
       </tr>
       <tr>
       <td>8</td>
       <td>Sahil</td>
       <td>77strikers</td>
       <td>3</td>
       <td>1</td>
       </tr>
       <tr>
       <td>9</td>
       <td>Afsal</td>
       <td>Raptors</td>
       <td>3</td>
       <td>1</td>
       </tr>
       <tr>
       <td>10</td>
       <td>jaseem</td>
       <td>Raptors</td>
       <td>3</td>
       <td>1</td>
       </tr>
       </table>
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