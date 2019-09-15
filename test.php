<!DOCTYPE html>
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
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>
      <li><a href="#">Page 2</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="registration.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
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

$sql = "SELECT * from passenger_contact";
$result = $conn->query($sql);
if(!$result){echo "null";
			}
if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>House No</th><th>Street</th><th>City</th><th>Country</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["Contact_Id"]. "</td><td>" . $row["Passenger_Name"]. "</td><td>" . $row["Email_Address"]. "</td><td>".$row["Phone_Number"]. "</td><td>".$row["House_No"]. "</td><td>".$row["Street"]. "</td><td>".$row["City"]. "</td><td>".$row["Country"]. "</td><td>";
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