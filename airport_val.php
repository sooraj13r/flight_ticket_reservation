    <?php include "conn.php" ?>
    <?php
$airport_id=$_POST['airport_id'];
$airport_name=$_POST['airport_name'];

session_start();

// Set session variables

			

  // Create connection
// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
} 
$sql = "INSERT INTO airport_details(Airport_Code,Airport_Name)
VALUES ('$airport_id','$airport_name')";


if ($connection->query($sql) === TRUE) {
echo ("<script LANGUAGE='JavaScript'>
          window.alert('Successfully Added!');
          window.location.href='airport.php';
       </script>");

    }else {
    echo "Error: " . $sql . "<br>" . $connection->error;
} ?>
