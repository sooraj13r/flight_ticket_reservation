    <?php include "conn.php" ?>
    <?php
$route_id=$_POST['route_id'];
$route_code=$_POST['route_code'];
$airline_id=$_POST['airline_id'];
$starting_airport=$_POST['starting_airport'];
$ending_airport=$_POST['ending_airport'];
session_start();

// Set session variables
		

  // Create connection
// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
} 
$sql = "INSERT INTO route_details(Start_Airport_Id,End_Airport_Id,Route_Code,Airline_Id,Route_Id)
VALUES ('$route_id','$route_code','$airline_id','$starting_airport','$ending_airport')";


if ($connection->query($sql) === TRUE) {
echo ("<script LANGUAGE='JavaScript'>
          window.alert('Added Successfully');
          window.location.href='route1.php';
       </script>");
} else{
echo ("<script LANGUAGE='JavaScript'>
          window.alert('Error occured during insertion');
          window.location.href='route1.php';
       </script>");
}
 
$connection->close();

?>