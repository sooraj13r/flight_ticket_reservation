<?php
$connect = mysqli_connect("localhost", "root", "", "flight");

if(isset($_POST["id"]))
{
 $query = "DELETE FROM passenger_contact WHERE id = '".$_POST["id"]."'";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Deleted';
 }

}else{
$var1=$_POST["id"];
echo $var1;
}
?>