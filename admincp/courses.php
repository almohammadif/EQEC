
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
        include "$_SERVER[DOCUMENT_ROOT]/project/functions/dept.php";
        // Check user session and user role
        if ($_SESSION['authorized'] = true && $_SESSION['user_role'] == 4){		
    
		}else {
        header ('Location: ../index.php');
		}
		 
            
?>
        <div class="w3-container w3-margin-top ">
          <div class="w3-panel">
          <a class=' w3-button w3-round-xxlarge  w3-blue'  title='Add Course' href='add_crs.php'><i class='fa fa-book fa-lg' aria-hidden='true'></i> <i class='fa fa-plus' aria-hidden='true'></i></a>
          </div>
           <table class="w3-table-all w3-center">
           <tr>
           <th>Course ID</th>
            <th>Course Title</th>
            <th>Course Code</th>
              <th>Credit Hours</th>
              <th>Contact Hours</th>
              <th>Department</th>
              <th>Semester</th>
              <th>Action</th>
            </tr>
    
    <?php
    include "../functions/course.php";
    $crs = getAllcrs();
           
    while ($row = mysqli_fetch_assoc($crs)){
        
        echo "<tr><td>".$row['course_ID']."</td><td>".$row['course_title']."</td><td>".$row['course_code']."</td><td>".$row['credit_hours']." Hours</td><td>".$row['contact_hours']." Hours</td><td>";echo displayDept($row['dept_dept_ID']);echo "</td><td>".$row['semster']."</td><td>
        <a class=' w3-button w3-round-xxlarge  w3-blue' href='edit_crs.php?crs_id=".$row['course_ID']."'title='Edit'><i class='fa fa-edit' aria-hidden='true'></i></a>
        <a class=' w3-button w3-round-xxlarge w3-blue' id='del'  href='delete_crs.php?crs_id=".$row['course_ID']."' title='Delete'><i class='fa fa-trash' aria-hidden='true'></i></a></td</tr>";
        
        
    }
 
    
    ?>
    

            </table>
            

        </div><!-- Container End -->
        
    </body>
</html>