<?php 
/* Main page with two forms: Register and log in */
require 'db.php';
session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<title>Player</title>
	<!-- Meta Tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8" />
	<meta name="keywords" content="Comely Profile Widget Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements"
	/>
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta Tags -->
	<!-- Custom Theme files -->
	<link href="auction/css/fontawesome-all.css" rel="stylesheet">
	<link href="auction/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- //Custom Theme files -->
	<!-- web font -->
	<link href="//fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<!-- //web font -->
</head>
<body>
	<h1>PAPL PLAYER PROFILE</h1><br>
	<div class="main-agileits">
	<?php
	$pid=$_GET['id'];
	    $query = "SELECT * FROM players where id=".$pid."";  
	    $result = mysqli_query($connect, $query);
	    $row = mysqli_fetch_array($result);
		echo'<div class="inner-w3-agile">
			<!-- left section -->
			<div class="left-section">
				<img src="../crop/'.$row['image'].'.jpg" width="250px" height="250px">
			</div>
			<!-- //left section -->
			<!-- right section -->
			<div class="right-w3-agile">
				<div class="right-info">
					<h2>'.$row['name'].'</h2>
					<span class="designation">'.$row['position'].'</span>
					<p class="para-wthree">'.
					$row['pposition'].'<br>'.$row['dob'].'<br>'.$row['usn'].'<br>'.$row['course'].'<br>'.$row['department'].'<br>'.$row['address'].'<br>'.$row['contact'].'</p>

				</div>
				
			</div>
			<!-- //right section -->
		</div>';?>
	</div>
	<!-- copyright-w3ls -->
	<br><br>
	<!-- //copyright-w3ls -->
</body>

</html>