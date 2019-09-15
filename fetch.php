<?php
session_start();
$username=$_SESSION['uname'];
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "flight");
//$query2 = "SELECT * FROM passenger_contact";
$query ="SELECT passenger_contact.Contact_Id,passenger_contact.Passenger_Name,passenger_contact.Email_Address, passenger_contact.Phone_Number, passenger_contact.House_No,passenger_contact.Street,passenger_contact.City,passenger_contact.Country,user_details.User_Name,user_details.Password,user_details.Gender,user_details.Age FROM passenger_contact INNER JOIN user_details ON user_details.User_Id = passenger_contact.id where user_details.User_Name='$username'";
$result = mysqli_query($connect, $query);
$output = array();
while($row = mysqli_fetch_assoc($result))
{
 $output[] = $row;
}
echo json_encode($output);
?>