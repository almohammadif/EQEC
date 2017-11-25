<?php
//connect to DB


// creat function to retrive all users table

function getAllUsers(){
    include "$_SERVER[DOCUMENT_ROOT]/project/config.php";

// Check connection
		if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
    
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);
    
    return $result;
    $conn->close();
    
}


function addUser($fName, $lName, $username, $pass, $email, $file_url){
    
    include "$_SERVER[DOCUMENT_ROOT]/project/config.php";
    include "$_SERVER[DOCUMENT_ROOT]/project/functions/safestrip.php";

// Check connection
		if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
   $username = safeString($username);
   $pass = safeString($pass);
    $pass = md5($pass);
    
    $sql= "INSERT INTO users (username, user_password, first_name, last_name, user_email, user_sign) VALUES ('$username', '$pass', '$fName', '$lName', '$email', '$file_url')";

    if ($conn->query($sql) === TRUE) {
        
        $lastuser_id = $conn->insert_id;
        
        echo "<div class='w3-panel w3-pale-green w3-round-large' role='alert'>User Created successfuly!</div>";
        return $lastuser_id;
    } else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
   $conn->close();
    
}

function getUser($user_id){
    include "$_SERVER[DOCUMENT_ROOT]/project/config.php";

// Check connection
		if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
    
    $sql = "SELECT * FROM users WHERE users_id = '$user_id'";
    $result = $conn->query($sql);
    
    return $result;
    $conn->close();
    
}


function editUser($user_id, $fName, $lName, $username, $pass, $email, $file_url){
    
    include "$_SERVER[DOCUMENT_ROOT]/project/config.php";
    include "$_SERVER[DOCUMENT_ROOT]/project/functions/safestrip.php";

// Check connection
		if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
    $username = safeString($username);
    
    // check if password field is empty
    if(empty($pass)){
        
        $sql= "UPDATE users SET username='$username', first_name='$fName', last_name='$lName', user_email='$email', user_sign='$file_url' WHERE users_id='$user_id'";
        if ($conn->query($sql) === TRUE) {
        
        $lastuser_id = $conn->insert_id;
        
        echo "<div class='w3-panel w3-pale-green w3-round-large' role='alert'>User Updated successfuly!</div>";
        
    } else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
 }else{
   
   $pass = safeString($pass);
    $pass = md5($pass);
    
    $sql= "UPDATE users SET username='$username', user_password='$pass', first_name='$fName', last_name='$lName', user_email='$email', user_sign='$file_url' WHERE users_id='$user_id'";

    if ($conn->query($sql) === TRUE) {
        
        $lastuser_id = $conn->insert_id;
        
        echo "<div class='w3-panel w3-pale-green w3-round-large' role='alert'>User Updated successfuly!</div>";
        
    } else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
    
   $conn->close();
    
}

function deleteUser($user_id){
    
        include "$_SERVER[DOCUMENT_ROOT]/project/config.php";
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

    $sql = "DELETE FROM users WHERE users_id='$user_id'";
    
    if ($conn->query($sql) === TRUE) {
        
        
        echo "<div class='w3-panel w3-pale-green w3-round-large' role='alert'>User Deleted successfuly! Rdirected in 5s...</div>";
        
    } else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}

    





?>