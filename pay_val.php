<?php include "conn.php" ?>
    
<?php
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
} 
session_start();
$payment_mode=$_POST['payment_mode'];
$card_number=$_POST['card_number'];
$mobile_no=$_POST['mobile_no'];
$user_id=$_SESSION['user_id'];
$amount=$_SESSION['amount'];
//echo $username;
$sql = "INSERT INTO transaction(Payment_Mode,Transaction_Detail,Passenger_Contact)
VALUES ('$payment_mode','$card_number','$mobile_no')";
$sql2="update booking set Confirmation_Status='ok',Transaction='$amount' where User_Id='$user_id'";
$connection->query($sql2);
if ($connection->query($sql) === TRUE) {
echo ("<script LANGUAGE='JavaScript'>
          window.alert('Booking Successful');
          window.location.href='user_home.php';
       </script>");
    }else {
    echo "Error: " . $sql . "<br>" . $connection->error;
} 
$connection->close();


?>