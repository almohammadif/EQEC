<?php

function addExam($exam_type, $mid_high, $mid_avg, $mid_low, $mid_url, $user_id, $crs_id){
    
    include "$_SERVER[DOCUMENT_ROOT]/project/config.php";
    
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);}
    
    $sql = "INSERT INTO `exams`(`exam_type`,`exam_high_grade`, `exam_avg_grade`, `exam_low_grade`, `exam_high_url`, `exam_avg_url`, `exam_low_url`, `users_has_courses1_users_users_ID`, `users_has_courses1_courses_course_ID`) VALUES ('$exam_type', '$mid_high', '$mid_avg', '$mid_low', '$mid_url[0]', '$mid_url[1]', '$mid_url[2]', '$user_id', '$crs_id')";
    
    if ($conn->query($sql) === TRUE) {
        
        echo "<div class='w3-panel w3-pale-green w3-round-large' role='alert'>".$exam_type." Exam added successfuly!</div>";
    } else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
    
}


function getUserExam($user_id, $crs_id){
    
    include "$_SERVER[DOCUMENT_ROOT]/project/config.php";
    
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);}
    
    $sql = "SELECT * FROM `exams` INNER JOIN users_has_courses1 ON users_has_courses1.users_users_ID=exams.users_has_courses1_users_users_ID AND users_has_courses1.courses_course_ID=exams.users_has_courses1_courses_course_ID WHERE users_has_courses1.users_users_ID='$user_id' AND users_has_courses1.courses_course_ID='$crs_id'";
    
    $result = $conn->query($sql);
    
    
    
    return $result;
     
}



function deleteExam($exam_id){
    include "$_SERVER[DOCUMENT_ROOT]/project/config.php";
    
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
    
    $sql = "DELETE FROM exams WHERE exam_ID='$exam_id'";
    
    if ($conn->query($sql) === TRUE) {
        
        echo "<div class='w3-panel w3-pale-green w3-round-large' role='alert'>Exam Deleted successfuly!</div>";
    } else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
    
    
    
}


















?>