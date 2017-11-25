
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<!-- Bootstrap core CSS -->
		<link href="../../project/css/w3.css" rel="stylesheet">
		<link href="../../project/css/font-awesome.min.css" rel="stylesheet">
		<script src="../../project/js/jquery-3.2.1.min.js"></script>
		
	</head>
	<body style='background-color:#eee; font-family:"Segoe UI"'>
       <?php
//Start the session
session_start();
            include "$_SERVER[DOCUMENT_ROOT]/project/functions/roles.php";
        // Check user session and user role
        if ($_SESSION['authorized'] = true && $_SESSION['user_role'] == 4){		
    
		}else {
        header ('Location: ../index.php');
		}
		 
            
?>
        <div class="w3-container w3-margin-top ">
          <div class="w3-panel">
          <a class=' w3-button w3-round-xxlarge  w3-blue'  title='Add User' href='adduser.php'><i class='fa fa-user-plus' aria-hidden='true'></i></a>
          </div>
           <table class="w3-table-all w3-center">
           <tr>
           <th>User ID</th>
            <th>First Name</th>
            <th>Last Name</th>
              <th>Username</th>
              <th>E-mail</th>
              <th>User Role</th>
              <th>User Courses</th>
              <th>User Signture</th>
              <th>Action</th>
            </tr>
    
    <?php
    include "../functions/users.php";
    include "../functions/course.php";
    $users = getAllUsers();
           
    while ($row = mysqli_fetch_assoc($users)){
        
        echo "<tr><td>".$row['users_ID']."</td><td>".$row['first_name']."</td><td>".$row['last_name']."</td><td>".$row['username']."</td><td>".$row['user_email']."</td><td>";displayRole($row['users_ID']);echo "</td><td>";displayCrs($row['users_ID']); echo "</td><td><img style='width:100%;max-width:200px' src='".$row['user_sign']."'></td><td>
        <a class=' w3-button w3-round-xxlarge  w3-blue' href='edit_user.php?user_id=".$row['users_ID']."'title='Edit'><i class='fa fa-edit' aria-hidden='true'></i></a>
        <a class=' w3-button w3-round-xxlarge w3-blue' id='del'  href='delete_user.php?user_id=".$row['users_ID']."' title='Delete'><i class='fa fa-user-times' aria-hidden='true'></i></a></td</tr>";
        
        
    }
 
    
    ?>
    

            </table>
            

        </div><!-- Container End -->
        
    </body>
</html>