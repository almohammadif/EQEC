
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<!-- Bootstrap core CSS -->
		<link href="../../project/css/w3.css" rel="stylesheet">
		<link href="../../project/css/font-awesome.min.css" rel="stylesheet">
		<script type="text/javascript">
  function resizeIframe(obj){
     obj.style.height = 0;
     obj.style.height = obj.contentWindow.document.body.scrollHeight+20 + 'px';
  }
</script>
	</head>
	<body style='background-color:#eee; font-family:"Segoe UI"'>
       
        <div class="w3-bar w3-grey w3-padding-small">
            <img class='w3-img w3-bar-item' src="../../project/img/logo.png" alt="SEU" style="width:400px">
	<?php
//Start the session
session_start();
            include "$_SERVER[DOCUMENT_ROOT]/project/functions/roles.php";
        // Check user session and user role
        if ($_SESSION['authorized'] = true && $_SESSION['user_role'] == 4){
	?>
		<h6 class='w3-bar-item'>Welcome <?php echo $_SESSION['userfname']; ?></h6>		
    
    <?php
		}else {
        header ('Location: ../index.php');
		}
		 
            
?>
    <a href="../logout.php" class="w3-bar-item w3-right-align w3-right" ><h6><i class="fa fa-power-off fa-lg " aria-hidden="true"></i></h6></a>
		
		</div>	
        
        
	<!-- Container Begin -->
	<div class="w3-container">
	<div class="w3-sidebar w3-dark-gray w3-bar-block" style="width:20%">
  <h3 class="w3-bar-item">EQEC</h3>
  <a href="users.php" target="frame_" class="w3-bar-item w3-button w3-hover-blue" ><i class="fa fa-users" aria-hidden="true"></i> Users</a>
  <a href="courses.php" target="frame_" class="w3-bar-item w3-button w3-hover-blue" ><i class="fa fa-book" aria-hidden="true"></i> Courses</a>
  <a href="dept.php" target="frame_" class="w3-bar-item w3-button w3-hover-blue" ><i class="fa fa-university" aria-hidden="true"></i> Departments</a>
  
</div>
<div class="w3-container " style="margin-left:25%  ">
   
   <iframe  onload='resizeIframe(this)' name="frame_" scrolling="no"  style="   width:100%; border:none;  " ></iframe>

    
</div>



        </div><!-- Container End -->


    </body>
</html>