<?php


    include "$_SERVER[DOCUMENT_ROOT]/project/config.php";

// Check connection
		if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
    
    $sql = "SELECT * from courses ";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()){

    $crs_arr[]= array('crs_id'=>$row['course_ID'],'crs_name'=>$row['course_title']);
    }
    echo json_encode($crs_arr);
    
    
    








?>