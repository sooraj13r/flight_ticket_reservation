<?php include "conn.php" ?>
    <?php
$uname=$_POST['uname'];
$pass=$_POST['pass'];
session_start();

$_SESSION["uname"] ="$uname";

global $connection;

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
$sql="select * from user_details where User_Name='$uname' and Password='$pass'";
$result = $connection->query($sql);
if ($result->num_rows > 0){
//echo "login successful";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $user_type=$row["User_Type"];
	$user_id=$row["User_Id"];
		

} }
$_SESSION[user_id]=$user_id;
if ($user_type==='user')
{
//echo "login successful user";
header('Location: user_home.php');
}
else{
	
//echo "admin login successful ";
header('Location: admin_home.php');
}
}
else{
//echo "incorrect username or password";
	echo ("<script LANGUAGE='JavaScript'>
          window.alert('Incorrect Username or Password');
          window.location.href='login.php';
       </script>");
}
$connection->close();

?>