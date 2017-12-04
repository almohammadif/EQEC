<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<!-- Bootstrap core CSS -->
		<link href="../project/css/w3.css" rel="stylesheet">
		<link href="../project/css/font-awesome.min.css" rel="stylesheet">
		<script type="text/javascript">
  function resizeIframe(obj){
     obj.style.height = 0;
     obj.style.height = obj.contentWindow.document.body.scrollHeight+20 + 'px';
  }
</script>
	</head>
	<body style='background-color:#eee'>
	
       <?php
                //Start the session
                session_start();
        // Check user session and user role
        if ($_SESSION['authorized'] === true && $_SESSION['user_role'] == 1 && isset($_GET['crs_id'])){
	               
            $crs_id = $_GET['crs_id'];
		}else {
        header ('Location: index.php');
		}
        include "$_SERVER[DOCUMENT_ROOT]/project/functions/user_crs.php";
        include "$_SERVER[DOCUMENT_ROOT]/project/functions/course.php";
        include "$_SERVER[DOCUMENT_ROOT]/project/functions/dept.php";
        include "$_SERVER[DOCUMENT_ROOT]/project/functions/asgn.php";
        include "$_SERVER[DOCUMENT_ROOT]/project/functions/exam.php";
        
?>
		
        <!-- Page Content -->
        <div class="w3-container  w3-margin-top ">
		<h4 class='w3-left-align'><i class="fa fa-book fa-lg " aria-hidden="true"></i> Course</h4>
		<table class="w3-table-all w3-center">
           <tr>
           <th>Course CRN</th>
            <th>Course Title</th>
            <th>Course Code</th>
              <th>Credit Hours</th>
              <th>Contact Hours</th>
              <th>Department</th>
              <th>Semester</th>
              
            </tr>
		<?php
            $crs= getCrs($crs_id);
            $row=mysqli_fetch_assoc($crs);
                
                echo "<tr><td>".$row['course_ID']."</td><td>".$row['course_title']."</td><td>".$row['course_code']."</td><td>".$row['credit_hours']." Hours</td><td>".$row['contact_hours']." Hours</td><td>";echo displayDept($row['dept_dept_ID']);echo "</td><td>".$row['semster']."</td></tr>";
            echo "<a class=' w3-button w3-round-xxlarge w3-blue w3-section w3-margin-left'   href='asgn.php?crs_id=".$row['course_ID']."&user_id=".$_SESSION['user_id']."&crs_code=".$row['course_code']."' > <i class='fa fa-plus fa-lg ' aria-hidden='true'></i> Add Assigments</a>";
            echo "<a class=' w3-button w3-round-xxlarge w3-blue w3-section w3-margin-left'   href='add_exam.php?crs_id=".$row['course_ID']."&user_id=".$_SESSION['user_id']."&crs_code=".$row['course_code']."' ><i class='fa fa-plus fa-lg ' aria-hidden='true'></i> Add Exams Marks</a>";
             echo "<a class=' w3-button w3-round-xxlarge w3-blue w3-section w3-margin-left'   href='add_t5.php?crs_id=".$row['course_ID']."&user_id=".$_SESSION['user_id']."&crs_code=".$row['course_code']."&crs_title=".$row['course_title']."' ><i class='fa fa-plus fa-lg ' aria-hidden='true'></i> Add T5 Report</a>";
            
            ?>
            </table>
            
            <h4 class='w3-left-align'><i class="fa fa-file-word-o fa-lg " aria-hidden="true"></i> Assignments</h4>
            <table class="w3-table-all w3-center">
           <tr>
           
            <th>Assignment Number</th>
            <th>Assignment Highest Grade</th>
             <th>Assignment Average Grade</th>
             <th>Assignment Lowest Grade</th>
              <th>Assignment Highest Grade URL</th>
              <th>Assignment Average Grade URL</th>
              <th>Assignment Lowest Grade URL</th>
              <th>Uploaded Date</th>
              <th>Action</th>
            </tr>
            <?php
                
                $asgn = getUserAsgn($_SESSION['user_id'], $crs_id);
                
               
                
                 while($row = mysqli_fetch_assoc($asgn)){
                     
                     echo "<tr><td>".$row['asgn_no']."</td><td>".$row['asgn_high_grade']."</td><td>".$row['asgn_avg_grade']."</td><td>".$row['asgn_low_grade']."</td><td><a href='".$row['asgn_high_url']."'>".substr($row['asgn_high_url'],22)."</a></td><td><a href='".$row['asgn_avg_url']."'>".substr($row['asgn_avg_url'],22)."</a></td><td><a href='".$row['asgn_low_url']."'>".substr($row['asgn_low_url'],22)."</a></td><td>".date("d-M-Y", strtotime($row['asgn_date']))."</td><td> <a class=' w3-button w3-round-xxlarge w3-blue' id='del'  href='delete_asgn.php?asgn_id=".$row['asgn_ID'].'&crs_id='.$crs_id."' title='Delete'><i class='fa fa-times' aria-hidden='true'></i></a></td></tr>";
                     
                 
                }
                
                
                
                ?>
            
            </table>
            
            <h4 class='w3-left-align'><i class="fa fa-file-word-o fa-lg " aria-hidden="true"></i> Exams</h4>
            <table class="w3-table-all w3-center">
           <tr>
           
            <th>Exam</th>
            <th>Highest Grade</th>
             <th>Average Grade</th>
             <th>Lowest Grade</th>
              <th>Highest Grade URL</th>
              <th>Average Grade URL</th>
              <th>Lowest Grade URL</th>
              <th>Uploaded Date</th>
              <th>Action</th>
            </tr>
            <?php
                $exam = getUserExam($_SESSION['user_id'], $crs_id);
                
                while($row=mysqli_fetch_assoc($exam)){
                    
                    echo "<tr><td>".$row['exam_type']."</td><td>".$row['exam_high_grade']."</td><td>".$row['exam_avg_grade']."</td><td>".$row['exam_low_grade']."</td><td><a href='".$row['exam_high_url']."'>".end(explode('/',$row['exam_high_url']))."</td><td><a href='".$row['exam_avg_url']."'>".end(explode('/',$row['exam_avg_url']))."<td><a href='".$row['exam_low_url']."'>".end(explode('/',$row['exam_low_url']))."</td><td>".date("d-M-Y", strtotime($row['exam_date']))."</td><td> <a class=' w3-button w3-round-xxlarge w3-blue' id='del'  href='delete_exam.php?exam_id=".$row['exam_ID'].'&crs_id='.$crs_id."' title='Delete'><i class='fa fa-times' aria-hidden='true'></i></a></td></tr>";;
                    
                    
                }
                
                ?>
            
            
            
            
            
            
            
            
            
            </table>
            </div><!-- Page Content End -->
		<!-- Container End -->	
	</body>
</html>