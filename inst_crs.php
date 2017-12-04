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
        if ($_SESSION['authorized'] = true && $_SESSION['user_role'] == 1){
	
		}else {
        header ('Location: ../index.php');
		}
     include "$_SERVER[DOCUMENT_ROOT]/project/functions/user_crs.php";
?>
		
        <!-- Page Content -->
        <div class="w3-container w3-center">
		<h6><i class="fa fa-book fa-lg " aria-hidden="true"></i> Choose Course:</h6>
		<?php
            $crs= getUserCrs($_SESSION['user_id']);
            while($row=mysqli_fetch_assoc($crs)){
                
                echo "<a class=' w3-button w3-round-xxlarge w3-blue w3-section w3-margin-left'   href='crs.php?crs_id=".$row['course_ID']."' >".$row['course_code']." - ".$row['course_title']." - ".$row['course_ID']."</a>";
            }
            ?>
            </div><!-- Page Content End -->
		<!-- Container End -->	
	</body>
</html>