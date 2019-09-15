    <?php include "conn.php" ?>
    <?php
$route_id=$_POST['route_id'];
$flight_id=$_POST['flight_id'];
$flight_name=$_POST['flight_name'];
$start_date=$_POST['start_date'];
$end_date=$_POST['end_date'];
$start_time=$_POST['start_time'];
$end_time=$_POST['end_time'];
$airline_id=$_POST['airline_id'];
session_start();

// Set session variables
		

  // Create connection
// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
} 
$sql = "INSERT INTO flight_schedule(Route_Id,Flight_Id,Flight_Name,Start_Date,End_Date,Start_Time,End_Time,Airline_Id)
VALUES ('$route_id','$flight_id','$flight_name','$start_date','$end_date','$start_time','$end_time','$airline_id')";


if ($connection->query($sql) === TRUE) {
echo ("<script LANGUAGE='JavaScript'>
          window.alert('Added Successfully');
          window.location.href='flight_schedule.php';
       </script>");
} else{
echo ("<script LANGUAGE='JavaScript'>
          window.alert('Error occured during insertion');
          window.location.href='flight_schedule.php'';
       </script>");
}
 
$connection->close();

?>