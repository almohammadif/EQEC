<?php
// function to escape data and strip tags
function safestrip($string){
       $string = strip_tags($string);
       $string = mysql_real_escape_string($string);
       return $string;
}


// log user in function
function login($username, $password, $role_id){
    // Connect to DB
    include "./config.php";
		// Check connection
		if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
 //call safestrip function
 $user = safestrip($username);
 $pass = safestrip($password);

 //convert password to md5
 $pass = md5($pass);

  // check if the user id and password combination exist in database
  $sql = "SELECT * FROM users WHERE username = '$user' AND user_password = '$pass'";
  $result = $conn->query($sql);
  $row= $result->fetch_assoc();
  //if match is equal to 1 there is a match
  if ($result->num_rows == 1) {
        
        //set session
        $_SESSION['authorized'] = true;
        $_SESSION['userfname']= $row['first_name'];
        $_SESSION['user_id'] = $row['users_ID'];
     $_SESSION['user_role'] = $role_id;
      // Call getRole methode to check user role  
      include 'roles.php';
      $role_id_db= getRole($_SESSION['user_id']);
      
      if(is_array($role_id_db)){
          $count= count($role_id_db);
          $count--;
          for($i=0; $role_id_db[$i] != $role_id; $i++){
              $role_id_db[$i];
              if($count == $i){ 
                  echo "<div class='w3-panel w3-pale-red w3-round-large' role='alert'>Wrong role selected</div>";
                  
              exit; }
          }
          
              switch ($role_id_db[$i]){
              case "1":
                      header('Location: instructor.php');
                      break;
                  case "2":
                      header('Location: coordinator.php');
                      break;
                  case "3":
                      header('Location: qa_coordinator.php');
                      break;
                  case "4":
                      header('Location: admincp/');
                      break;
                  default:
                      echo "<div class='w3-panel w3-pale-red w3-round-large' role='alert'>Wrong role selected</div>";
          }
          
          
        exit;  
      }
      
      
      // Re-direct user to role page
      if($role_id_db == $role_id && $role_id_db == 1){
          
          header('Location: instructor.php');
          exit;
          
      }elseif ($role_id_db == 2 && $role_id_db== $role_id){
          
          header('Location: coordinator.php');
          exit;
          
      }elseif($role_id_db == 3 && $role_id_db== $role_id){
          
          header('Location: qa_coordinator.php');
          exit;
      }elseif($role_id_db == 4 && $role_id_db == $role_id){
          
          header('Location: admincp/');
          exit;
      }else{
          
          echo "<div class='w3-panel w3-pale-red w3-round-large' role='alert'>Wrong role selected</div>";
          
      }
      


   } else {
               // login failed 
               echo "<div class='w3-panel w3-pale-red w3-round-large' role='alert'>Wrong Password or Username !</div>";
  }
    $conn->close();
}

?>