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
	
		<!-- Container Begin -->
		<!-- Sidebar -->
		<div class="w3-sidebar w3-bar-block w3-dark-gray" style="width:10%" >
       <?php
                //Start the session
                session_start();
        // Check user session and user role
        if ($_SESSION['authorized'] = true && $_SESSION['user_role'] == 1){
	?>
        <div class="w3-bar-item">	
		<h6 >Welcome <?php echo $_SESSION['userfname']; ?></h6>
		<div class="w3-row w3-center">
   <a href="logout.php"  title="Logout" class="w3-col" ><h6><i class="fa fa-power-off fa-lg " aria-hidden="true"></i></h6></a>
              <a href="instructor.php"  title="Home" class="w3-col" ><h6><i class="fa fa-home fa-lg " aria-hidden="true"></i></h6></a>
               </div>
               
                
   </div>
   <a href="inst_crs.php" target='frame_'  class="w3-bar-item w3-button w3-hover-blue" ><i class="fa fa-book" aria-hidden="true"></i> Courses</a>
   
    <?php
		}else {
        header ('Location: ../index.php');
		}
     include "$_SERVER[DOCUMENT_ROOT]/project/functions/user_crs.php";
?>
        </div><!-- Sidebar End -->
		
        <!-- Page Content -->
        <div class="w3-container w3-center " style="margin-left:10%">
		<iframe  onload="resizeIframe(this)" name="frame_" scrolling="yes"  style="   width:100%; border:none;  " ></iframe>
            </div><!-- Page Content End -->
		<!-- Container End -->	
		
	</body>
</html>