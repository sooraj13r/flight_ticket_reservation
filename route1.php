
<!DOCTYPE html>

<?php


session_start();
if(!isset($_SESSION["uname"])){
	header('Location: login.php');
}
?>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Routes</title>

	<!-- Google font -->
	<link href="css/gfont.css" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="js/html5shiv.min.js"></script>
		  <script src="js/respond.min.js"></script>
		<![endif]-->

</head>

<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.html">BookMyFlight</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="admin_home.php">Back</a></li>
       <li><a href="index.html">Home</a></li>
           <li><a href="about.html">About Us</a></li>
      <li><a href="contact.html">Contact Us</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<form method="post" action="route_val.php">
							<div class="form-group">
									<span class="form-label"><h3>Add Route Details</h3></span>
							</div>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Route ID</span>
										<input class="form-control" type="text" name="route_id" placeholder="Enter Route Id" required>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Route Code</span>
										<input class="form-control" type="text" name="route_code" placeholder="Enter Route Code" required>
									</div>
								</div>


<?php
$connt=mysqli_connect("localhost", "root","","flight") or die(mysqli_error());

$query2 = "SELECT * from airline_details";
$result = mysqli_query($connt,$query2) or die(mysql_error()."[".$query2."]");
?>

	<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Airline Id</span>
										<select class="form-control" name="airline_id" required>
<?php 
while ($row = mysqli_fetch_array($result))
{
    echo "<option value=".$row['Airline_Name'].">".$row['Airline_Name']."</option>";
}
?>  </select>
	<span class="select-arrow"></span>
									</div>
								</div>
							</div>



<?php
$connt=mysqli_connect("localhost", "root","","flight") or die(mysqli_error());


$query = "SELECT * from airport_details";
$result = mysqli_query($connt,$query) or die(mysql_error()."[".$query."]");
?>
<div class="row">
	<div class="col-md-5">
									<div class="form-group">
										<span class="form-label">Start Airport Id</span>
										<select class="form-control" name="starting_airport" required>
<?php 
while ($row = mysqli_fetch_array($result))
{
    echo "<option value=".$row['Airport_Name'].">".$row['Airport_Name']."</option>";
}
?>  </select>
	<span class="select-arrow"></span>
									</div>
								</div>


<?php

$result = mysqli_query($connt,$query) or die(mysql_error()."[".$query."]");
?>

	<div class="col-md-5">
									<div class="form-group">
										<span class="form-label">End Airport ID</span>
										<select class="form-control" name="ending_airport" required>
<?php 
while ($row = mysqli_fetch_array($result))
{
    echo "<option value=".$row['Airport_Name'].">".$row['Airport_Name']."</option>";
}
?>  </select>
	<span class="select-arrow"></span>
									</div>
								</div>


</div>
							<div class="row">
								
								<div class="col-md-3">
									<div class="form-btn">
										<button class="submit-btn">Add Route</button>
									</div>


								
							<br><span class="form-label" id="msg_label"><i style="color:#00FF00;font-size:15px"><b></b></i></span></div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>			