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
            $role_id[] = "{$row['roles_role_ID']}";
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
    $sql="SELECT users.*, roles_has_users.roles_role_ID, roles.role_name FROM users INNER JOIN roles_has_users ON users.users_ID=roles_has_users.users_users_ID INNER JOIN roles ON roles_has_users.roles_role_ID=roles.role_ID WHERE users.users_ID='$user_id'";
    $result = $conn->query($sql);
    while($row= $result->fetch_assoc()){
    echo $row['role_name']."</br>";

    }
 
$conn->close();    
}

// set role to user by user ID 
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