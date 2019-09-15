    <?php include "conn.php" ?>
    <?php
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$password=$_POST['pass'];
$username=$_POST['uname'];
session_start();

// Set session variables
$_SESSION["uname"] = "$username";
			

  // Create connection
// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
} 
$sql = "INSERT INTO user_Details(User_Type,User_Name,Password,Email_Address,Phone_Number)
VALUES ('user','$username','$password','$email','$phone')";


if ($connection->query($sql) === TRUE) {
echo "inserted<br>";
//header('Location: trail.php');
    }else {
    echo "Error: " . $sql . "<br>" . $connection->error;
} 
$sql2 = "SELECT * FROM user_details where User_Name='$uname'";
$result = $connection->query($sql2);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $user_id=$row["User_Id"];
echo $user_id;
} }else {
    echo "Error occured";
}
$_SESSION["user_id"] = "$user_id";
//Inserting Contact_Id
$sql3= "INSERT INTO passenger_contact(Contact_Id,Passenger_Name,Email_Address,Phone_Number)
VALUES ('$user_id','$name','$email','$phone')";
if ($connection->query($sql3) === TRUE) {
echo "inserted Passenger<br>";
//header('Location: registration2.php');
    }else {
    echo "Error: " . $sql . "<br>" . $connection->error;
} 
$connection->close();

?>