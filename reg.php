
<!DOCTYPE html>


<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Registration</title>

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

<body><nav class="navbar navbar-inverse">
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
      
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<form method="post" action="r_val.php">
							<div class="form-group">
									<span class="form-label"><h3>Registartion</h3></span>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Name</span>
										<input class="form-control" type="text" name="name" placeholder="Enter Your Name" required>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Username</span>
										<input class="form-control" type="text" name="uname" placeholder="Enter a username" required>
									</div>
								</div><div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Password</span>
										<input class="form-control" type="password" name="pass" placeholder="Enter a password" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Email</span>
										<input class="form-control" type="text" name="email" placeholder="Enter Email Id" required>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Phone Number</span>
										<input class="form-control" type="text" name="phoneno" placeholder="Enter Phone Number" required>
									</div>
								</div>
							<div class="col-md-2">
									<div class="form-group">
										<span class="form-label">Gender</span>
										<select class="form-control" name="gender">
<option>Select</option>
											<option value="male">Male</option>
											<option value="female">Female</option>
											
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<span class="form-label">Age</span>
										<input class="form-control" type="text" name="age" placeholder="Enter Your Age" required>
									</div>
								</div>
<div class="col-md-2">
									<div class="form-group">
										<span class="form-label">House Number</span>
										<input class="form-control" type="text" name="hno" placeholder="Enter House No" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Street</span>
										<input class="form-control" type="text" name="street" placeholder="Enter Street" required>
									</div>
								</div>
<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">City</span>
										<input class="form-control" type="text" name="city" placeholder="Enter City" required>
									</div>
								</div>


<div class="col-md-3">
									<div class="form-group">
										<span class="form-label">Country</span>
										<select class="form-control" name="country">
											<option value="India">India</option>
											<option value="USA">USA</option>
											<option value="Russia">First class</option>
										</select>
										<span class="select-arrow"></span>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-btn">
										<button class="submit-btn">Register</button>
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