<?php 
/* Main page with two forms: sign up and log in */
require 'db.php';
session_start();
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Admin</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Esteem Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/component.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/export.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/flipclock.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/circles.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style_grid.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>
<?php
$cat = $_GET["cat"];
	if ( $_SESSION['logged_i'] != 0 ) {
	  header("location:index.php");
	  }
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
if(isset($_POST['submit'])) {
  $connect = mysqli_connect("localhost", "lassinca_cafe", "lassincafe@123", "lassinca_u581513764_cafe"); 
  $name = $mysqli->escape_string($_POST['name']);
  $price = $mysqli->escape_string($_POST['price']);
  $des = $mysqli->escape_string($_POST['des']);
   $cat = $mysqli->escape_string($_POST['cat']);
  $query="INSERT INTO product (name, price, cat, des) " 
  . "VALUES ('$name','$price','$cat','$des')";
  mysqli_query($connect,$query);
  echo '<script>alert("inserted successfully")</script>';
 }
 if(isset($_POST['delete'])) {
 $connect = mysqli_connect("localhost", "lassinca_cafe", "lassincafe@123", "lassinca_u581513764_cafe"); 
 $id = $mysqli->escape_string($_POST['id']);
 $query="delete from product where id=".$id;
 mysqli_query($connect,$query);
 echo '<script>alert("deleted")</script>';
 }
 }
 ?>
<body>
<!-- banner -->
<div class="wthree_agile_admin_info">
		  <!-- /w3_agileits_top_nav-->
		  <!-- /nav-->
		  <div class="w3_agileits_top_nav">
			<ul id="gn-menu" class="gn-menu-main">
			  		 <!-- /nav_agile_w3l -->
			  		 <li class="gn-trigger">
			  		 <a class="gn-icon gn-icon-menu"><i class="fa fa-bars" aria-hidden="true"></i><span>Menu</span></a>
			  		 <nav class="gn-menu-wrapper">
			  		 <div class="gn-scroller scrollbar1">
			  		 <ul class="gn-menu agile_menu_drop">
			  		 <li><a href="main-page.php"> <i class="fa fa-tachometer"></i> Dashboard</a></li>
			  		 <li><a href="cat.php"> <i class="fa fa-table" aria-hidden="true"></i> Category</a></li>
			  		 <li>
			  		 <a href="#"><i class="fa fa-cogs" aria-hidden="true"></i>Products upload<i class="fa fa-angle-down" aria-hidden="true"></i></a> 
			  		 <ul class="gn-submenu">
			  		 <?php        
			  		 $connect = mysqli_connect("localhost", "lassinca_cafe", "lassincafe@123", "lassinca_u581513764_cafe"); 
			  		 $query = "SELECT * FROM category";  
			  		 $result = mysqli_query($connect, $query);  
			  		 while($row = mysqli_fetch_array($result))  
			  		 {
			  		 $id=$row['id'];
			  		 echo'<li class="mini_list_agile"><a href="product.php?cat='.$id.'"><i class="fa fa-caret-right" aria-hidden="true"></i>'.$row['name'].'</a></li>';
			  		 }?>
			  		 </ul>
			  		 </li>
			  		 <li><a href="menu.php"> <i class="fa fa-table" aria-hidden="true"></i> Menu</a></li>
			  		 <li><a href="gallery.php"> <i class="fa fa-table" aria-hidden="true"></i> Gallery upload</a></li>
			  		 <li><a href="video.php"> <i class="fa fa-table" aria-hidden="true"></i> video upload</a></li>
			  		 <li><a href="review.php"> <i class="fa fa-table" aria-hidden="true"></i> Reviews</a></li>
			  		 <li><a href="franchise.php"> <i class="fa fa-table" aria-hidden="true"></i> Franchise</a></li>
			  		 <li><a href="work.php"> <i class="fa fa-table" aria-hidden="true"></i> Work</a></li>
			  		 <li><a href="enquiry.php"> <i class="fa fa-table" aria-hidden="true"></i> Enquiry</a></li>
			  		 
			  		 </ul>
			  		 </div><!-- /gn-scroller -->
			  		 </nav>
			  		 </li>
			  		 <!-- //nav_agile_w3l -->
				<li class="second logo"><h1><a href="main-page.php"><i class="fa fa-graduation-cap" aria-hidden="true"></i>Admin Panel </a></h1></li>
					<li class="second admin-pic">
				       <ul class="top_dp_agile">
									<li class="dropdown profile_details_drop">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<div class="profile_img">	
												<span class="prfil-img"><img src="images/admin.jpg" alt=""> </span> 
											</div>	
										</a>
										<ul class="dropdown-menu drp-mnu">
											<li> <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
										</ul>
									</li>
									
						</ul>
				</li>
				
				<li class="second full-screen">
					<section class="full-top">
						<button id="toggle"><i class="fa fa-arrows-alt" aria-hidden="true"></i></button>	
					</section>
				</li>

			</ul>
			<!-- //nav -->
			
		</div>
		<div class="clearfix"></div>
		<!-- //w3_agileits_top_nav-->
		
		<!-- /inner_content-->
				<div class="inner_content">
				    <!-- /inner_content_w3_agile_info-->

					<!-- breadcrumbs -->
						<div class="w3l_agileits_breadcrumbs">
							<div class="w3l_agileits_breadcrumbs_inner">
								<ul>
									<li><a href="main-page.php">Home</a><span>«</span></li>
									<li>Forms <span>«</span></li>
									<li>Inputs</li>
								</ul>
							</div>
						</div>
					<!-- //breadcrumbs -->

					<div class="inner_content_w3_agile_info two_in">

							<!--/forms-->
													<div class="forms-main_agileits">
														
															<div class="graph-form agile_info_shadow">
															 <h3 class="w3_inner_tittle two">Drinks upload</h3>
																	<div class="form-body">
																		<form action="#" method="post" enctype="multipart/form-data">
																	    <div class="form-group"> <label for="exampleInputEmail1">Name</label> <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Product name"> </div> 
																		<div class="form-group"> <label for="exampleInputPassword1">Price</label> <input type="text" name="price" class="form-control" id="exampleInputPassword1" placeholder="Product price"> </div> 
																		<div class="form-group"> <label for="exampleInputPassword1">Description</label> <input type="text" name="des" class="form-control" id="exampleInputPassword1" placeholder="Short desc"> </div> 
																	    <input type="hidden" name="cat" value="<?php echo $cat; ?>"> </div> 
																	    <button type="submit" name="submit" class="btn btn-default">Submit</button> </form> 
																	</div>

															</div>
					<!-- //inner_content_w3_agile_info-->
				</div>
		<!-- //inner_content-->
		<?php        
		$connect = mysqli_connect("localhost", "lassinca_cafe", "lassincafe@123", "lassinca_u581513764_cafe"); 
		$query = "SELECT * FROM product where cat=".$cat."";  
		$result = mysqli_query($connect, $query);  
		while($row = mysqli_fetch_array($result))  
		{
		echo'
		<p>'.$row['name'].'<br>'.$row['price'].'<br><br>
		<form action="#" method="post" enctype="multipart/form-data"><input type="hidden" name="id" value="'.$row['id'].'"><button type="submit" name="delete" class="btn btn-default">Delete</button> </form> 
		';}?>
		</div>
	</div>
<!-- banner -->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2018 lassincafe. All Rights Reserved | Design by  <a href="http://addwiser.in/" target="_blank">addwiser</a> </p>
</div>	
<!--copy rights end here-->
<!-- js -->

          <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
		  <script src="js/modernizr.custom.js"></script>
		
		   <script src="js/classie.js"></script>
		  <script src="js/gnmenu.js"></script>
		  <script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		 </script>

<!-- //js -->
<script src="js/screenfull.js"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});	
		});
		</script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>

<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>


</body>
</html>