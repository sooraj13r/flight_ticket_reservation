
	<!DOCTYPE html><?php


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

		<title>Booking Form HTML Template</title>

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
      <li class="active"><a href="login.php">Back</a></li>
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
							
								<div class="form-group">
										<span class="form-label"><h3>Admin Panel</h3></span>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-btn">
											<button onclick="location.href='users.php'" type="button" class="submit-btn">View Users</button>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-btn">
											<button onclick="location.href='view_user.php'" type="button" class="submit-btn">View Booking</button>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-btn">
											<button onclick="location.href='flight_details.php'" type="button" class="submit-btn">Aircraft Details</button>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-btn">
											<button onclick="location.href='flight_schedule.php'" type="button" class="submit-btn">Flight Schedule</button>
										</div>
									</div>

									<div class="col-md-2">

									</div>
								</div>
								<div class="row">
										<div class="col-md-3">
										<div class="form-btn">
											<button onclick="location.href='airline.php'" type="button" class="submit-btn">Add Aircraft</button>
										</div>

								</div>
										<div class="col-md-3">
										<div class="form-btn">
											<button onclick="location.href='route1.php'" type="button" class="submit-btn">Add Route</button>
										</div>

								</div>
									<div class="col-md-3">
										<div class="form-btn">
											<button onclick="location.href='airport.php'" class="submit-btn">Add Airport</button>
										</div>

								</div>	<div class="col-md-3">
										<div class="form-btn">
											<button onclick="location.href='transaction.php'"class="submit-btn">View Transaction</button>
										</div>

								</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

	</html>			