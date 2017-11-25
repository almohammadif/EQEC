<?php

function addCrsToUser($user_id, $crs_id){
    
    include "$_SERVER[DOCUMENT_ROOT]/project/config.php";
    // Check connection
		if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
    $sql= "INSERT INTO users_has_courses1 (users_users_ID, courses_course_ID) VALUES ('$user_id', '$crs_id')";
    $result= $conn->query($sql);
    
    if ($conn->query($sql) === TRUE) {
        
        echo "<div class='w3-panel w3-pale-green w3-round-large' role='alert'>Course Added to User successfuly!</div>";
    } else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
   $conn->close();
     
}





?>