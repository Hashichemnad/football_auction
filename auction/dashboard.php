<?php 
/* Main page with two forms: Register and log in */
require '../db.php';
session_start();
?>
<!DOCTYPE html>
<style>

.button {
  background-color: transparent; /* Green */
  border: none;
  color: black;
  padding: 40px 80px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 25px;
  margin: 4px 2px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  color: black; 
  border: 7px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}

.button2 {
  color: black; 
  border: 7px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
}

.button3 {
  color: black; 
  border: 7px solid #f44336;
}

.button3:hover {
  background-color: #f44336;
  color: white;
}

.button4 {
  color: black; 
  border: 7px solid yellow;
}

.button4:hover {
  background-color: yellow;
  color: white;
}

</style>
<html>
<?php
if($_SESSION['logged_i'] != 1)
    header("location:index.php");
?>
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
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- //Custom Theme files -->
	<!-- web font -->
	<link href="//fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<!-- //web font -->
</head>
<?php
if($_SESSION['logged_i']!=1)
  {
  header("location:index.php");
  }
$pid=$_GET['id'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
  if(isset($_POST['tid'])) { //user registering
  $tid = $mysqli->escape_string($_POST['tid']);
  $pid = $mysqli->escape_string($_POST['pid']);
  $query="UPDATE players set tid='".$tid."', selected='1' where id=".$pid."";
  mysqli_query($connect,$query);
  header("location:sold.php?id=".$pid."");
 }}
?>
<body>
	<h1>PAPL AUCTION 2019</h1><br>
	<!-- copyright-w3ls -->
	
              <div class="right-grids-w3-agileits">
              <a href="category.php?a=defence">
                   <button class="button button1">
                  DEFENCE</button></a>
			  <a href="category.php?a=mid">
			  <button class="button button2">
			  MID</button></a>
			  <a href="category.php?a=gk">
			  <button class="button button3">
			  GOALKEEPER</button></a>
			  <a href="category.php?a=forward">
			  <button class="button button4">
			  FORWARD</button></a>
				</div>
				
				
	<!-- //copyright-w3ls -->
</body>

</html>