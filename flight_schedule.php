
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

	<title>Flight Schedule</title>

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
						<form method="post" action="flight_schedule_val.php">
							<div class="form-group">
									<span class="form-label"><h3>Schedule Flights</h3></span>
							</div>
							<div class="row">
								
<?php
$connt=mysqli_connect("localhost", "root","","flight") or die(mysqli_error());

$query3 = "SELECT * from route_details";
$result = mysqli_query($connt,$query3) or die(mysql_error()."[".$query3."]");
?>

	<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Route ID</span>
										<select class="form-control" name="route_id" required>
<?php 
while ($row = mysqli_fetch_array($result))
{
    echo "<option value=".$row['Route_Id'].">".$row['Route_Id']."</option>";
}
?>  </select>
	<span class="select-arrow"></span>
									</div>
								</div>
							
								
<?php
$connt=mysqli_connect("localhost", "root","","flight") or die(mysqli_error());

$query4 = "SELECT * from aircraft_details";
$result = mysqli_query($connt,$query4) or die(mysql_error()."[".$query4."]");
?>

	<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Flight Id</span>
										<select class="form-control" name="flight_id" required>
<?php 
while ($row = mysqli_fetch_array($result))
{
    echo "<option value=".$row['Aircraft_Id'].">".$row['Aircraft_Id']."</option>";
}
?>  </select>
	<span class="select-arrow"></span>
									</div>
								</div>
							<div class="col-md-3">
							<div class="form-group">
										<span class="form-label">Flight Name</span>
										<input class="form-control" type="text" name="flight_name" placeholder="Enter Flight Name" required>
									</div>
								</div>
<?php
$query7 = "SELECT * from airline_details";
$result = mysqli_query($connt,$query7) or die(mysql_error()."[".$query7."]");
?>

	<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Airline_ID</span>
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


<div class="row">
		<div class="col-md-3">
							<div class="form-group">
										<span class="form-label">Start Date</span>
										<input class="form-control" type="date" name="start_date" placeholder="Enter Start Date" required>
									</div>
								</div>

									<div class="col-md-3">
							<div class="form-group">
										<span class="form-label">Start Time</span>
										<input class="form-control" type="time" name="start_time" placeholder="Enter Start Time" required>
									</div>
								</div>
	<div class="col-md-3">
							<div class="form-group">
										<span class="form-label">End Date</span>
										<input class="form-control" type="date" name="end_date" placeholder="Enter End Date" required>
									</div>
								</div>
	<div class="col-md-3">
							<div class="form-group">
										<span class="form-label">End Time</span>
										<input class="form-control" type="time" name="end_time" placeholder="Enter End Time" required>
									</div>
								</div>
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