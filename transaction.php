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
<center><h2 style="background:white;color:black;background-size: 43px">Registered Users</h2><br><br><br>
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
$sql = "SELECT * from transaction";
$result = $conn->query($sql);
if(!$result){echo "null";
			}
if ($result->num_rows > 0) {
    echo "<table><tr><th>Transaction Id</th><th>Payment Mode</th><th>Transaction Details</th><th>Passenger Contact</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["transaction_id"]. "</td><td>" . $row["Payment_Mode"]. "</td><td>" . $row["Transaction_Detail"]. "</td><td>".$row["Passenger_Contact"]. "</td><td>";
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