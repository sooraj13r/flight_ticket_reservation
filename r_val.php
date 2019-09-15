<?php include "conn.php" ?>
    
<?php
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
} 
session_start();
$name=$_POST['name'];
$uname=$_POST['uname'];
$password=$_POST['pass'];
$email=$_POST['email'];
$phoneno=$_POST['phoneno'];
$gender=$_POST['gender'];
$age=$_POST['age'];
$hno=$_POST['hno'];
$street=$_POST['street'];
$city=$_POST['city'];
$country=$_POST['country'];
$_SESSION['username']=$uname;
$username=$_SESSION['username'];
//echo $username;
$sql = "INSERT INTO user_Details(User_Type,User_Name,Password,Email_Address,Phone_Number,Gender,Age)
VALUES ('user','$uname','$password','$email','$phoneno','$gender','$age')";
$sql3 = "SELECT * FROM user_details where User_Name='$uname'";
$result = $connection->query($sql3);
if ($connection->query($sql) === TRUE) {
//echo "inserted User<br>";

    }else {
    echo "Error: " . $sql . "<br>" . $connection->error;
} 
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $user_id=$row["User_Id"];
//echo $user_id;
} }else {
    echo "Error occured";
}










$sql2= "INSERT INTO passenger_contact(Contact_Id,Passenger_Name,Email_Address,Phone_Number,House_No,Street,City,Country)
VALUES ('$user_id','$name','$email','$phoneno','$hno','$street','$city','$country')";

if ($connection->query($sql2) === TRUE) {
echo ("<script LANGUAGE='JavaScript'>
          window.alert('Registration Successful');
          window.location.href='user_home.php';
       </script>");
    }else {
    echo "Error: " . $sql . "<br>" . $connection->error;
} 
$connection->close();


?>