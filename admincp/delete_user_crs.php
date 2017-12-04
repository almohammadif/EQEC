<link href="../../project/css/w3.css" rel="stylesheet">
<?php
session_start();


if($_SESSION['authorized'] = true && $_SESSION['user_role'] == 4){
    
    include "$_SERVER[DOCUMENT_ROOT]/project/functions/user_crs.php";
    
    $user_id = $_GET['user_id'];
    
    deleteUserCrs($_GET['user_id'],$_GET['crs_id']);
    
    header("refresh: 4; url=edit_user.php?user_id=$user_id");
    
    
    
} else{
    
   header('Location: ../index.php');
}









?>