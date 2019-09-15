  <?php include "conn.php";
session_start();
$uname=$_SESSION["uname"];    
            global $connection;
$aircraft_id=$_POST['aircraft_id'];
$manufacture_name=$_POST['manufacture_name'];
$airline_name=$_POST['airline_name'];
$registration=$_POST['registration'];
$window_seat_count=$_POST['window_seat_count'];
$middle_seat_count=$_POST['middle_seat_count'];

$total_seat_count=$window_seat_count+$middle_seat_count;


$model=$_POST['model'];
//$msg_label = $_POST['msg_label'];

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
} 
$sql = "INSERT INTO aircraft_details(Aircraft_Id,Manufacture_Name,Model,Seat_Count)
VALUES ('$aircraft_id','$manufacture_name','$model','$total_seat_count')";
$sql2="insert into airline_details(Aircraft_ID,Airline_Name,Registration) VALUES ('$aircraft_id','$airline_name','$registration')";
$sql3="insert into seat_details(Aircraft_ID,Class_Type,Window_Seat_Count,Middle_Seat_Count) VALUES ('$aircraft_id','Class A','$window_seat_count','$middle_seat_count')";
$connection->query($sql);
$connection->query($sql3);

if ($connection->query($sql2) === TRUE) {

echo ("<script LANGUAGE='JavaScript'>
          window.alert('Adding Successful!');
          window.location.href='airline.php';
       </script>");
}
else{
echo ("<script LANGUAGE='JavaScript'>
          window.alert('Error ocured during insertion!');
          //window.location.href='airline.php';
       </script>");
}

$connection->close();
?>