
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

	<title>Booking</title>

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
						<form method="post" action="book_val.php">
							<div class="form-group">
									<span class="form-label"><h3>Book Flights</h3></span>
							</div>
							<div class="row">
								
								
<?php
$connt=mysqli_connect("localhost", "root","","flight") or die(mysqli_error());

$query3 = "SELECT * from route_details";
$result = mysqli_query($connt,$query3) or die(mysql_error()."[".$query3."]");
?>

	<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Starting</span>
										<select class="form-control" name="starting" required>
<?php 
while ($row = mysqli_fetch_array($result))
{
    echo "<option value=".$row['Start_Airport_Id'].">".$row['Start_Airport_Id']."</option>";
}
?>  </select>
	<span class="select-arrow"></span>
									
								</div>
								</div>
								<div class="col-md-3">
							
								
<?php
$connt=mysqli_connect("localhost", "root","","flight") or die(mysqli_error());

$query3 = "SELECT * from route_details";
$result = mysqli_query($connt,$query3) or die(mysql_error()."[".$query3."]");
?>

	
									<div class="form-group">
										<span class="form-label">Destination</span>
										<select class="form-control" name="destination" required>
<?php 
while ($row = mysqli_fetch_array($result))
{
    echo "<option value=".$row['End_Airport_Id'].">".$row['End_Airport_Id']."</option>";
}
?>  </select>
	<span class="select-arrow"></span>
									
								</div>
								</div>
											<div class="col-md-3">
							
								
<?php
$connt=mysqli_connect("localhost", "root","","flight") or die(mysqli_error());

$query8 = "SELECT * from flight_schedule";
$result = mysqli_query($connt,$query8) or die(mysql_error()."[".$query8."]");
?>

	
									<div class="form-group">
										<span class="form-label">Flight</span>
										<select class="form-control" name="flight_name" required>
<?php 
while ($row = mysqli_fetch_array($result))
{
    echo "<option value=".$row['Flight_Name'].">".$row['Flight_Name']."</option>";
}
?>  </select>
	<span class="select-arrow"></span>
									
								</div>
								</div>
		<div class="col-md-3">
							<div class="form-group">
										<span class="form-label">Seat Count</span>
										<input class="form-control" type="text" name="seat_count" placeholder="Enter Ticket Count" required>
									</div>
								</div>

							</div>
							<div class="row">		<div class="col-md-3">
							<div class="form-group">
										<span class="form-label">Date</span>
										<input class="form-control" type="date" name="date" placeholder="Date" required>
									</div>
								</div>

								
								<div class="col-md-3">
									<div class="form-btn">
										<button class="submit-btn">Book Flight</button>
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