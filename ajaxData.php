<?php
//Include the database configuration file

$db = mysqli_connect('localhost', 'root', '','flight');


if(!empty($_POST["User_Id"])){
    //Fetch all state data
    $query = $db->query("SELECT * FROM passenger_contacts WHERE Contact_Id = ".$_POST['User_Id']");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //State option list
    if($rowCount > 0){
        echo '<option value="">Select state</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['Contact_Id'].'">'.$row['Phone_Number'].'</option>';
        }
    }else{
        echo '<option value="">State not available</option>';
    }
}elseif(!empty($_POST["state_id"])){
    //Fetch all city data
    $query = $db->query("SELECT * FROM passenger_contacts WHERE Contact_Id = ".$_POST['Contact_Id']");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //City option list
    if($rowCount > 0){
        echo '<option value="">Select city</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['Contact_Id'].'">'.$row['Phone_Number'].'</option>';
        }
    }else{
        echo '<option value="">City not available</option>';
    }
}
?>