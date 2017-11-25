<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<!-- Bootstrap core CSS -->
		<link href="../project/css/w3.css" rel="stylesheet">
		<link href="../project/css/font-awesome.min.css" rel="stylesheet">
<!--		<link href="../project/css/signin.css" rel="stylesheet">-->
	</head>
	<body style='background-color:#eee'>
		<!-- Container Begin -->
		<div class="w3-container w3-col s4 w3-display-middle w3-center">
			<?php
                //Start the session
                session_start();
        // Check user session and user role
        if ($_SESSION['authorized'] = true && $_SESSION['user_role'] == 1){
	?>
		<h4 class='w3-bar-item'>Welcome <?php echo $_SESSION['userfname']; ?></h4>		
    
    <?php
		}else {
        header ('Location: ../index.php');
		}         
?>
		<!-- Container End -->	
        </div>
	</body>
</html>