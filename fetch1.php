<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "flight");
//$columns = array('first_name', 'last_name',);

$query = "SELECT * FROM passenger_contact";

if(isset($_POST["search"]["value"]))
{
 $query .= '
 WHERE Contact_Id LIKE "%'.$_POST["search"]["value"].'%" 
 OR Passenger_Name LIKE "%'.$_POST["search"]["value"].'%" 
 ';
}

if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$columns[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' 
 ';
}
else
{
 $query .= 'ORDER BY id ';
}

$query1 = '';

if($_POST["length"] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$number_filter_row = mysqli_num_rows(mysqli_query($connect, $query));

$result = mysqli_query($connect, $query . $query1);

$data = array();

while($row = mysqli_fetch_array($result))
{
 $sub_array = array();
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="id">' . $row["id"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="Contact_Id">' . $row["Contact_Id"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="Passenger_Name">' . $row["Passenger_Name"] . '</div>';
$sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="Email_Address">' . $row["Email_Address"] . '</div>';
$sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="Phone_Number">' . $row["Phone_Number"] . '</div>';
$sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="House_No">' . $row["House_No"] . '</div>';
$sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="Street">' . $row["Street"] . '</div>';
$sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="City">' . $row["City"] . '</div>';
$sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="Country">' . $row["Country"] . '</div>';
 $sub_array[] = '<button type="button" name="delete" class="btn btn-danger btn-xs delete" data-id="'.$row["id"].'">Delete</button>';
 $data[] = $sub_array;
}

function get_all_data($connect)
{
 $query = "SELECT * FROM passenger_contact";
 $result = mysqli_query($connect, $query);
 return mysqli_num_rows($result);
}

$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  get_all_data($connect),
 "recordsFiltered" => $number_filter_row,
 "data"    => $data
);

echo json_encode($output);

?>