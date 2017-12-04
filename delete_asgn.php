<link href="/css/w3.css" rel="stylesheet">
               <?php
                //Start the session
                session_start();
        // Check user session and user role
        if ($_SESSION['authorized'] === true && $_SESSION['user_role'] == 1 && isset($_GET['crs_id']) ){
	               
            $asgn_id= $_GET['asgn_id'];
            $crs_id= $_GET['crs_id'];
            include "$_SERVER[DOCUMENT_ROOT]/project/functions/asgn.php";

            deleteAsgn($asgn_id);

            header('refresh: 4; url=crs.php?crs_id='.$crs_id);
        
            
		}else {
        header ('Location: index.php');
		}
     
?>