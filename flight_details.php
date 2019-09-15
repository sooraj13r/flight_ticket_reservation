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
      <a class="navbar-brand" href="#">BookMyTrip</a>
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
      
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>
<center><h2 style="background:white;color:black;background-size: 43px">Aircraft Details</h2><br><br><br>
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

$sql = "SELECT * from aircraft_details";
$result = $conn->query($sql);
if(!$result){echo "null";
			}
if ($result->num_rows > 0) {
    echo "<table><tr><th>Aircraft Id</th><th>Company</th><th>Model</th><th>Seat SCount</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["Aircraft_Id"]. "</td><td>" . $row["Manufacture_Name"]. "</td><td>" . $row["Model"]. "</td><td>".$row["Seat_Count"]. "</td><td>";
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