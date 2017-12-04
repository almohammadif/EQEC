
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
           
        include "$_SERVER[DOCUMENT_ROOT]/project/functions/dept.php";
        // Check user session and user role
        if ($_SESSION['authorized'] = true && $_SESSION['user_role'] == 4){		
    
		}else {
        header ('Location: ../index.php');
		}
		 
            
?>
        <div class="w3-container w3-margin-top ">
          <div class="w3-panel">
          <a class=' w3-button w3-round-xxlarge  w3-blue'  title='Add Department' href='add_dept.php'><i class='fa fa-university fa-lg' aria-hidden='true'></i> <i class='fa fa-plus' aria-hidden='true'></i></a>
          </div>
           <table class="w3-table-all w3-center">
           <tr>
           <th>Department ID</th>
            <th>Department Name</th>
              <th>Action</th>
            </tr>
    
    <?php
    
    $dept = getAlldept();
           
    while ($row = mysqli_fetch_assoc($dept)){
        
        echo "<tr><td>".$row['dept_ID']."</td><td>".$row['dept_name']."</td><td>
        <a class=' w3-button w3-round-xxlarge  w3-blue' href='edit_dept.php?dept_id=".$row['dept_ID']."'title='Edit'><i class='fa fa-edit' aria-hidden='true'></i></a>
        <a class=' w3-button w3-round-xxlarge w3-blue' id='del'  href='delete_dept.php?dept_id=".$row['dept_ID']."' title='Delete'><i class='fa fa-trash' aria-hidden='true'></i></a></td></tr>";
        
        
    }
 
    
    ?>
    

            </table>
            

        </div><!-- Container End -->
        
    </body>
</html>