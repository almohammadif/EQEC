<?php

// function to retrive user role ID by user ID
function getRole($user_id){
    // Connect to DB
    include "$_SERVER[DOCUMENT_ROOT]/project/config.php";
    // Check connection
		if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
    
    $sql = "SELECT * FROM roles_has_users WHERE users_users_ID = '$user_id'";
    $result = $conn->query($sql);
//    $row= $result->fetch_assoc();
//    $role_id = $row['roles_role_ID'];
    
    if($result->num_rows > 1){
        while($row= $result->fetch_assoc()){
            $i=1;
            $role_id[] = "{$row['roles_role_ID']}";
            $i++;
        }
        
    }else{
       $row= $result->fetch_assoc();
        $role_id = $row['roles_role_ID']; 
    }
    return $role_id; 
    $conn->close();
}

//Display user's role string by user ID
function displayRole($user_id){
    
    include "$_SERVER[DOCUMENT_ROOT]/project/config.php";
    // Check connection
		if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
    
    $sql = "SELECT * FROM roles_has_users WHERE users_users_ID = '$user_id'";
    $result = $conn->query($sql);
//    echo $result->num_rows;
    while($row= $result->fetch_assoc()){
    $role_id = $row['roles_role_ID'];
    $sql_ = "SELECT role_name FROM roles WHERE role_ID = '".$row['roles_role_ID']."'";
    $result_ = $conn->query($sql_);
    $row_= $result_->fetch_assoc();
    echo $row_['role_name']."</br>";

    }
    
    
$conn->close();    
}

function setRole($user_id, $role_id){
    
    include "$_SERVER[DOCUMENT_ROOT]/project/config.php";
    // Check connection
		if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
    
$sql= "INSERT INTO roles_has_users (roles_role_ID, users_users_ID) VALUES ('$role_id', '$user_id')";
    
    if($conn->query($sql) === TRUE){
        
        echo "<div class='w3-panel w3-pale-green w3-round-large' role='alert'>Role Set Successfuly!</div>";
    }
        else { echo "Error: " . $sql . "<br>" . $conn->error;}
    

    
    
}



?>