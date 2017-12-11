<link href="/css/w3.css" rel="stylesheet">
               <?php
                //Start the session
                session_start();
        // Check user session and user role
        if ($_SESSION['authorized'] === true && $_SESSION['user_role'] == 1 && isset($_GET['report_id']) ){
	               
            $crs_id = $_GET['crs_id'];
            $report_id= $_GET['report_id'];
            include "$_SERVER[DOCUMENT_ROOT]/project/functions/t5.php";

            deleteT5($report_id);

            header('refresh: 4; url=crs.php?crs_id='.$crs_id);
        
            
		}else {
        header ('Location: index.php');
		}
     
?>