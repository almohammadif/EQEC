<?php

function getAllCrs(){
    include "$_SERVER[DOCUMENT_ROOT]/project/config.php";

// Check connection
		if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
    
    $sql = "SELECT * FROM courses";
    $result = $conn->query($sql);
    
    return $result;
    $conn->close();
      
}


function addCrs($crs_id, $crs_title, $crs_code, $credit_hrs, $contact_hrs, $dept_id, $semster){
    
    include "$_SERVER[DOCUMENT_ROOT]/project/config.php";
    // Check connection
		if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
    
     $sql = "INSERT INTO courses (course_ID, course_title, course_code, credit_hours, contact_hours, dept_dept_ID, semster) VALUES ('$crs_id', '$crs_title', '$crs_code', '$credit_hrs', '$contact_hrs', '$dept_id', '$semster')";
    
    if ($conn->query($sql) === TRUE) {
        
        echo "<div class='w3-panel w3-pale-green w3-round-large' role='alert'>Course Added successfuly!</div>";
    } else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
   $conn->close();
    
    
    
}

function getCrs($crs_id){
    
    include "$_SERVER[DOCUMENT_ROOT]/project/config.php";
    // Check connection
		if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
    $sql = "SELECT * FROM courses WHERE course_ID= '$crs_id'";
    $result = $conn->query($sql);
    
    return $result;
    $conn->close();
    
    
}


function updateCrs($crs_id, $crs_title, $crs_code, $credit_hrs, $contact_hrs, $dept_id, $semster){
    
    include "$_SERVER[DOCUMENT_ROOT]/project/config.php";
    // Check connection
		if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
    
    $sql = "UPDATE  courses SET  course_title='$crs_title', course_code='$crs_code', credit_hours='$credit_hrs', contact_hours='$contact_hrs', dept_dept_ID='$dept_id', semster='$semster'WHERE course_ID='$crs_id' ";
    
    
    if ($conn->query($sql) === TRUE) {
        
        echo "<div class='w3-panel w3-pale-green w3-round-large' role='alert'>Course Updated successfuly!</div>";
    } else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
   $conn->close();
    
    
}

function deleteCrs($crs_id){
    
    include "$_SERVER[DOCUMENT_ROOT]/project/config.php";
    // Check connection
		if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
    $sql = "DELETE  FROM courses WHERE course_ID= '$crs_id'";
    
    if ($conn->query($sql) === TRUE) {
        
        echo "<div class='w3-panel w3-pale-green w3-round-large' role='alert'>Course Deleted successfuly!</div>";
    } else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
   $conn->close();
    
    
}

// get user's courses
function displayCrs($user_id){
    
    include "$_SERVER[DOCUMENT_ROOT]/project/config.php";
    // Check connection
		if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
    
    $sql = "SELECT courses_course_ID FROM users_has_courses1 WHERE users_users_ID = '$user_id'";
    $result = $conn->query($sql);
//    echo $result->num_rows;
    while($row= $result->fetch_assoc()){
    
    $sql_ = "SELECT course_title FROM courses WHERE course_ID = '".$row['courses_course_ID']."'";
    $result_ = $conn->query($sql_);
    $row_= $result_->fetch_assoc();
    echo $row_['course_title']."</br>";

    }
    
    
$conn->close();    
}





?>