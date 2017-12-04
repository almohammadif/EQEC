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
		<h4 class='w3-left-align'><i class="fa fa-file-word-o fa-lg " aria-hidden="true"></i> Exams</h4>
		
		<form action="add_exam.php?crs_id=<?php echo $crs_id;?>&user_id=<?php echo $user_id;?>&crs_code=<?php echo $crs_code;?>" method="post" enctype="multipart/form-data" >
           
           <div class="w3-row w3-panel">
                    
                        <select class="w3-input w3-border w3-col m4 l2" name="exam_type"  required>
                    
                    <option disabled selected >Choose Exam ...</option>
                    <option value="Midterm">Midterm Exam</option>
                    <option value="Final">Final Exam</option>
                    
                       </select>
                    
                        <input class="w3-input w3-border w3-col m4 l1" type="number" placeholder="Highest Mark" name="mid_high_gr" required>
                        <input  class=" w3-col m4 l2" type="file" name="file_mid[]" required>
                        <input class="w3-input w3-border w3-col m4 l1" type="number" placeholder="Average Mark" name="mid_avg_gr" required>
                        <input class=" w3-col m4 l2" type="file" name="file_mid[]" required>
                        <input class="w3-input w3-border w3-col m4 l1" type="number" placeholder="Lowest Mark" name="mid_low_gr" required>
                        <input class=" w3-col m4 l2" type="file" name="file_mid[]" required>
                        
                   
                  </div>
                  
            <button class="w3-margin-top w3-button w3-round-xlarge w3-blue  " id='add' name="add" type="submit">Add</button>
            </form>
            
           
            
            <?php
                include "$_SERVER[DOCUMENT_ROOT]/project/functions/exam.php";
                include "$_SERVER[DOCUMENT_ROOT]/project/functions/upload_img.php";
            if(isset($_POST['add'])){
                
                
                $exam_url= uploadExam($crs_code, $crs_id, $_POST['exam_type']);
                
                
                addExam($_POST['exam_type'],$_POST['mid_high_gr'], $_POST['mid_avg_gr'], $_POST['mid_low_gr'], $exam_url, $user_id, $crs_id);

            }
            
            
            
            
            
            
            ?>
		
            </div><!-- Page Content End -->
	</body>
</html>