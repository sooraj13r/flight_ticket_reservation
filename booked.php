<!DOCTYPE html>
<?php


session_start();
if(!isset($_SESSION["uname"])){
	header('Location: login.php');
}
?>
<html>
<head>
	<link href="css/gfont.css" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />
<style>
<STYLE>
            table {  
    color: #333;
    font-family: Helvetica, Arial, sans-serif;
    width: 640px; 
    border-collapse: 
    collapse; border-spacing:1	#9966cc; 
}

td, th {  
    border: 5px solid transparent; /* No more visible border */
    height: 31px; 
    transition: all 0.3s;  /* Simple transition for hover effect */
}

th {  
    background: #915c83;  /* Darken header a bit */
    font-weight: bold;
}

td {  
    background: #FAFAFA;
    text-align: center;
}

/* Cells in even rows (2,4,6...) are one color */        
     
tr:nth-child(1) td { background: 	#915c83; }  

tr td:hover { background: #666; color: #FFF; }  
h1{
 margin:0;
 padding:0 0 20px;
font-size: 22px;
color: #FFF;
}
            </style>
</style>
</head>
<body background="registration.jpg">
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
      
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
<center><h2 style="background:white;color:black;background-size: 43px">My Booking</h2><br><br><br>
	<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "flight";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$user_id=$_SESSION['user_id'];
$sql = "SELECT * from booking where User_Id='$user_id'";
$result = $conn->query($sql);
if(!$result){echo "null";
			}
if ($result->num_rows > 0) {
    echo "<table><tr><th>Booking Id</th><th>User Id</th><th>Starting Location</th><th>Destination</th><th>Passenger Count</th><th>Booking Date</th><th>Flight Id</th><th>Confirmation Status</th><th>Amount</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["Booking_Id"]. "</td><td>" . $row["User_Id"]. "</td><td>" . $row["Starting_Location"]. "</td><td>".$row["Destination"]. "</td><td>".$row["Passenger_Count"]. "</td><td>".$row["Booking_Date"]. "</td><td>".$row["Flight_Id"]. "</td><td>".$row["Confirmation_Status"]. "</td><td>".$row["Transaction"]. "</td><td>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?> 
	</center>
</body>
</html>