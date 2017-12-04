<?php

function addAsgn($asgn_no, $asgn_gr, $asgn_url, $user_id, $crs_id){
    include "$_SERVER[DOCUMENT_ROOT]/project/config.php";
    
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
    
    $sql = "INSERT INTO `asgn_high`( `asgn_high_no`, `asgn_high_grade`, `asgn_high_url`, `users_has_courses1_users_users_ID`, `users_has_courses1_courses_course_ID`) VALUES ('$asgn_no', '$asgn_gr[0]', '$asgn_url[0]', '$user_id', '$crs_id')";
    
    if ($conn->query($sql) === TRUE) {
        
        echo "<div class='w3-panel w3-pale-green w3-round-large' role='alert'>Highest Mark added successfuly!</div>";
    } else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
     $sql = "INSERT INTO `asgn_avg`( `asgn_avg_no`, `asgn_avg_grade`, `asgn_avg_url`, `users_has_courses1_users_users_ID`, `users_has_courses1_courses_course_ID`) VALUES ('$asgn_no', '$asgn_gr[1]', '$asgn_url[1]', '$user_id', '$crs_id')";
    
    if ($conn->query($sql) === TRUE) {
        
        echo "<div class='w3-panel w3-pale-green w3-round-large' role='alert'>Average Mark added successfuly!</div>";
    } else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $sql = "INSERT INTO `asgn_low`( `asgn_low_no`, `asgn_low_grade`, `asgn_low_url`, `users_has_courses1_users_users_ID`, `users_has_courses1_courses_course_ID`) VALUES ('$asgn_no', '$asgn_gr[2]', '$asgn_url[2]', '$user_id', '$crs_id')";
    
    if ($conn->query($sql) === TRUE) {
        
        echo "<div class='w3-panel w3-pale-green w3-round-large' role='alert'>Lowest Mark added successfuly!</div>";
    } else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
}


function getUserAsgn($user_id, $crs_id){
    
    include "$_SERVER[DOCUMENT_ROOT]/project/config.php";
    
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);}
    
    $sql = "SELECT asgn.* FROM asgn INNER JOIN users_has_courses1 ON users_has_courses1.courses_course_ID=asgn.users_has_courses1_courses_course_ID WHERE users_has_courses1.users_users_ID='$user_id' AND users_has_courses1.courses_course_ID='$crs_id'";
    
    $result = $conn->query($sql);
    
    
     if($result === FALSE){
         echo "No Assignments !";
     }else{
    return $result;
     }
}


function addAsgn2($asgn_no, $asgn_high_gr,$asgn_avg_gr, $asgn_low_gr,  $asgn_url, $user_id, $crs_id){
    include "$_SERVER[DOCUMENT_ROOT]/project/config.php";
    
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
    
    
    $sql = "INSERT INTO `asgn`( `asgn_no`, `asgn_high_grade`, asgn_avg_grade, asgn_low_grade, `asgn_high_url`, `asgn_avg_url`, `asgn_low_url`, `users_has_courses1_users_users_ID`, `users_has_courses1_courses_course_ID`) VALUES ('$asgn_no', '$asgn_high_gr', '$asgn_avg_gr', $asgn_low_gr, '$asgn_url[0]', '$asgn_url[1]', '$asgn_url[2]', '$user_id', '$crs_id')";
    
    if ($conn->query($sql) === TRUE) {
        
        echo "<div class='w3-panel w3-pale-green w3-round-large' role='alert'>Assignment  added successfuly!</div>";
    } else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
}

function deleteAsgn($asgn_id){
    include "$_SERVER[DOCUMENT_ROOT]/project/config.php";
    
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
    
    $sql = "DELETE FROM asgn WHERE asgn_ID='$asgn_id'";
    
    if ($conn->query($sql) === TRUE) {
        
        echo "<div class='w3-panel w3-pale-green w3-round-large' role='alert'>Assignment Deleted successfuly!</div>";
    } else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
    
    
    
}




?>