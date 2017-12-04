<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<!-- Bootstrap core CSS -->
		<link href="../project/css/w3.css" rel="stylesheet">
		<link href="../project/css/font-awesome.min.css" rel="stylesheet">
		
	</head>
	<body style='background-color:#eee'>
	
       <?php
                //Start the session
                session_start();
        // Check user session and user role
        if ($_SESSION['authorized'] === true && $_SESSION['user_role'] == 1 && isset($_GET['crs_id'])){
	               
            $crs_id = $_GET['crs_id'];
            $user_id = $_GET['user_id'];
            $crs_code = $_GET['crs_code'];
            
		}else {
        header ('Location: index.php');
		}
     include "$_SERVER[DOCUMENT_ROOT]/project/functions/user_crs.php";
     include "$_SERVER[DOCUMENT_ROOT]/project/functions/course.php";
        include "$_SERVER[DOCUMENT_ROOT]/project/functions/dept.php";
        
?>
		
        <!-- Page Content -->
        <div class="w3-container  w3-margin-top ">
		<h4 class='w3-left-align'><i class="fa fa-file-word-o fa-lg " aria-hidden="true"></i> Assigments</h4>
		
		<form action="asgn.php?crs_id=<?php echo $crs_id;?>&user_id=<?php echo $user_id;?>&crs_code=<?php echo $crs_code;?>" method="post" enctype="multipart/form-data" >
           
           <div class="w3-row w3-panel">
                    
                        
                    
                        <input class="w3-input w3-border w3-col m4 l1" type="number" placeholder="Highest Mark" name="asgn_high_gr" required>
                        <input  class=" w3-col m4 l2" type="file" name="file[]" required>
                        <input class="w3-input w3-border w3-col m4 l1" type="number" placeholder="Average Mark" name="asgn_avg_gr" required>
                        <input class=" w3-col m4 l2" type="file" name="file[]" required>
                        <input class="w3-input w3-border w3-col m4 l1" type="number" placeholder="Lowest Mark" name="asgn_low_gr" required>
                        <input class=" w3-col m4 l2" type="file" name="file[]" required>
                        
                   
                  </div>
                  <div class="w3-row w3-section">
                  <label>Choose Assignment Number: </label>
                  <input class="w3-check" type="radio" value="1" name="asgn_no">
                        <label>1st Assignment </label>
                        <input class="w3-check" type="radio" value="2" name="asgn_no">
                        <label>2nd Assignment </label>
                        <input class="w3-check" type="radio" value="3" name="asgn_no">
                        <label>3rd Assignment </label>
                        <input class="w3-check" type="radio" value="4" name="asgn_no">
                        <label>4th Assignment </label>
            </div>
            <button class="w3-margin-top w3-button w3-round-xlarge w3-blue  " id='add' name="add" type="submit">Add</button>
            </form>
            
            
            <?php
            if(isset($_POST['add'])){
                include "$_SERVER[DOCUMENT_ROOT]/project/functions/asgn.php";
                include "$_SERVER[DOCUMENT_ROOT]/project/functions/upload_img.php";
                
                $asgn_url= uploadMultiAsgn($crs_code, $crs_id, $_POST['asgn_no']);
                
                //addAsgn($_POST['asgn_no'], $_POST['asgn_gr'], $asgn_url, $user_id, $crs_id);
                
                addAsgn2($_POST['asgn_no'], $_POST['asgn_high_gr'], $_POST['asgn_avg_gr'], $_POST['asgn_low_gr'], $asgn_url, $user_id, $crs_id);

                
                
            }
            
            
            
            
            
            ?>
		
            </div><!-- Page Content End -->
	</body>
</html>