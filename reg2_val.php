    <?php include "conn.php" ?>
 <?php
session_start();
$uname=$_SESSION["uname"];
$user_id=$_SESSION["user_id"];

$age=$_POST['age'];
$gender=$_POST['gender'];
$country=$_POST['country'];
$hno=$_POST['hno'];
$street=$_POST['street'];
$city=$_POST['city'];
echo $user_id;	
            global $connection;

  // Create connection
// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
} 
$sql = "update passenger_contact set House_No='$hno',Street='$street',City='$city',Country='$country' where Contact_Id='$user_id'";

if ($connection->query($sql) === TRUE) {

} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}
$sql2 = "update user_details set Gender='$gender',Age='$age' where User_Id='$user_id'";

if ($connection->query($sql2) === TRUE) {
echo "updation successfully";
  //header('Location: user_home.php');
} else {
    echo "Error: " . $sql2 . "<br>" . $connection->error;
}

$connection->close();

?>