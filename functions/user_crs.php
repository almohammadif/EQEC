<?php

// add course to user by user ID & course ID
function addCrsToUser($user_id, $crs_id){
    
    include "$_SERVER[DOCUMENT_ROOT]/project/config.php";
    // Check connection
		if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
    $sql= "INSERT IGNORE  INTO users_has_courses1 (users_users_ID, courses_course_ID) VALUES ('$user_id', '$crs_id')";
    $result= $conn->query($sql);
    
    if ($conn->query($sql) === TRUE) {
        
        echo "<div class='w3-panel w3-pale-green w3-round-large' role='alert'>Course Added to User successfuly!</div>";
    } else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
   $conn->close();
     
}

function deleteUserCrs($user_id, $crs_id){
    include "$_SERVER[DOCUMENT_ROOT]/project/config.php";
    // Check connection
		if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
    
    $sql = "DELETE  FROM users_has_courses1 WHERE users_users_ID= '$user_id' AND courses_course_ID='$crs_id'";
    
    if ($conn->query($sql) === TRUE) {
        
        echo "<div class='w3-panel w3-pale-green w3-round-large' role='alert'>Course Deleted successfuly!</div>";
    } else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
   $conn->close();
    
    
    
}

function getUserCrs($user_id){
    
    include "$_SERVER[DOCUMENT_ROOT]/project/config.php";
    // Check connection
		if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
    
     $sql = "SELECT users_has_courses1.users_users_ID, courses.* FROM users_has_courses1 INNER JOIN courses ON users_has_courses1.courses_course_ID=courses.course_ID WHERE users_has_courses1.users_users_ID='$user_id'";
     
     
    $result= $conn->query($sql);
        
       return $result;
    
   $conn->close();
    
    
}





?>