<?php

    require 'config.php';

    $classIds = implode(',', $_POST['classId']);

    $stmt = "select * from passenger_contacts where Contact_Id IN ($classIds)";

    $query = $dbcon->query($stmt);
    $results = ( $query ) ? $query->fetchAll(PDO::FETCH_ASSOC) : '';

    echo json_encode($results);
?>