
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
		 
        $dept_id = $_GET['dept_id'];
        $dept= getDept($dept_id);
        $row= mysqli_fetch_assoc($dept);
            
?>
       
        <div class="w3-container w3-margin-top">
          
          <form action="edit_dept.php?dept_id=<?php echo $dept_id;?>" method="post"  >
                <div class="w3-row w3-section">
                    
                        <label class="w3-text-blue">Department ID</label>
                    
                        <input class="w3-input w3-border w3-col" type="number" placeholder="Department ID" name="dept_id" required value='<?php echo $row['dept_ID'];?>' disabled>
                  </div>
                  <div class="w3-row w3-section">
                            <label class="w3-text-blue">Department Name</label>
                       
                            <input class="w3-input w3-border" type="text" placeholder="Department Name" name="dept_name" required value='<?php echo $row['dept_name'];?>'>
                  </div>
                  
               
              <?php
              if (isset($_POST['update'])){
                                   
                  updateDept($dept_id, $_POST['dept_name']);
                  
                  
              }
              ?>

           
                <button class="w3-margin-top w3-button w3-round-xlarge w3-blue " id='add' name="update" type="submit">Update</button>

        </form>
        
        </div><!-- Container End -->
    </body>
</html>