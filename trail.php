<!DOCTYPE html>
<html>
<body>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "flight";
session_start();
//$uname=$_SESSION["uname"];
$uname="ms";
echo $uname;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM user_details where User_Name='$uname'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       echo "<br> id: ". $row["User_Id"];
}
} else {
    echo "0 results";
}

$conn->close();
?> 

</body>
</html>