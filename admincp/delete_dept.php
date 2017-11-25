<link href="../../project/css/w3.css" rel="stylesheet">
<?php
session_start();



if($_SESSION['authorized'] = true && $_SESSION['user_role'] == 4){
    
    include "$_SERVER[DOCUMENT_ROOT]/project/functions/dept.php";
    
    
    
    deleteDept($_GET['dept_id']);
    
    header('refresh: 4; url=dept.php');
    
    
    
} else{
    
   header('Location: ../index.php');
}









?>