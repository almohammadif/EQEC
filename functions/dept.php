<?php

function displayDept($dept_id){
    include "$_SERVER[DOCUMENT_ROOT]/project/config.php";

// Check connection
		if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
    
    $sql = "SELECT dept_name from dept WHERE dept_ID= '$dept_id'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $dept_name= $row['dept_name'];
    return $dept_name;
    
    
    
    
}

function getAllDept(){
    
    include "$_SERVER[DOCUMENT_ROOT]/project/config.php";

// Check connection
		if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
    
    $sql = "SELECT * from dept ";
    $result = $conn->query($sql);
    
    return $result;
    
    
}



function addDept($dept_name){
    
    include "$_SERVER[DOCUMENT_ROOT]/project/config.php";
    // Check connection
		if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
    
     $sql = "INSERT INTO dept (dept_name) VALUES ('$dept_name')";
    
    if ($conn->query($sql) === TRUE) {
        
        echo "<div class='w3-panel w3-pale-green w3-round-large' role='alert'>Department Added successfuly!</div>";
    } else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
   $conn->close();
    
    
    
}

function getDept($dept_id){
    
    include "$_SERVER[DOCUMENT_ROOT]/project/config.php";
    // Check connection
		if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
    $sql = "SELECT * FROM dept WHERE dept_ID= '$dept_id'";
    $result = $conn->query($sql);
    
    return $result;
    $conn->close();
    
    
}

function updateDept($dept_id, $dept_name){
    
    include "$_SERVER[DOCUMENT_ROOT]/project/config.php";
    // Check connection
		if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
    
    $sql = "UPDATE  dept SET  dept_name='$dept_name' WHERE dept_ID='$dept_id' ";
    
    
    if ($conn->query($sql) === TRUE) {
        
        echo "<div class='w3-panel w3-pale-green w3-round-large' role='alert'>Department Updated successfuly!</div>";
        header('refresh: 4; url=edit_dept.php?dept_id='.$dept_id);
    } else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
   $conn->close();
    
    
}

function deleteDept($dept_id){
    
    include "$_SERVER[DOCUMENT_ROOT]/project/config.php";
    // Check connection
		if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
    $sql = "DELETE  FROM dept WHERE dept_ID= '$dept_id'";
    
    if ($conn->query($sql) === TRUE) {
        
        echo "<div class='w3-panel w3-pale-green w3-round-large' role='alert'>Department Deleted successfuly!</div>";
    } else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
   $conn->close();
    
    
}



?>