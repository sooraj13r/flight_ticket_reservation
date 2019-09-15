<?php include "conn.php" ?>
    
<?php
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
} 
session_start();
$starting=$_POST['starting'];
$destination=$_POST['destination'];
$date=$_POST['date'];
$seat_count=$_POST['seat_count'];
$flight_name=$_POST['flight_name'];

$username=$_SESSION['uname'];
$user_id=$_SESSION['user_id'];
$amount=$seat_count*1500;
$_SESSION['amount']=$amount;
$sql = "INSERT INTO booking(User_Id,Starting_Location,Destination,Passenger_Count,Booking_Date,Flight_Id,Confirmation_Status)
VALUES ('$user_id','$starting','$destination','$seat_count','$date','$flight_name','Pending')";
if ($connection->query($sql) === TRUE) {

echo ("<script LANGUAGE='JavaScript'>
          //window.alert('Registration Successful');
          window.location.href='pay.php';
       </script>");
    }else {
    echo "Error: " . $sql . "<br>" . $connection->error;
} 
$connection->close();


?>