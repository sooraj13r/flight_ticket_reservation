
<?php include "conn.php" ?>


$query = "select * from passenger_contacts";
?>

<html>
<head>
<title> php test script - hope this works </title>
</head>
<body>
<h1>php & mysql connection</h1>
<hr>
<table border = '2'>
<tr>
<th>id</th>
<th>name</th>
</tr>

<?php
$result=$connection->query($sql);
if ($result->num_rows > 0){
while ($row = $query->fetch()) 
{
    echo "<tr>";
    echo "<td>" . $row['Contact_id'] ."</td>";
    echo "<td>" . $row['Passenger_Name'] . "</td>";
    echo "<td>" . $row['Email_Address'] . "</td>";
    echo "</tr>";
}
}
?>

</table>
</body>
</html>