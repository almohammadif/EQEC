<?php


    include "$_SERVER[DOCUMENT_ROOT]/project/config.php";

// Check connection
		if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
    
    $sql = "SELECT * from dept ";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()){

    $dept_arr[]= array('dept_id'=>$row['dept_ID'],'dept_name'=>$row['dept_name']);
    }
    echo json_encode($dept_arr);
    
    
    








?>