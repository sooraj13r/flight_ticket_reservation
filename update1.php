<?php
//update.php
$connect = mysqli_connect("localhost", "root", "", "flight");
$query = "
 UPDATE user_details SET ".$_POST["name"]." = '".$_POST["value"]."' 
 WHERE id = '".$_POST["pk"]."'";
mysqli_query($connect, $query);
?>	