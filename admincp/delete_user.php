<link href="../../project/css/w3.css" rel="stylesheet">
<?php
session_start();

include "$_SERVER[DOCUMENT_ROOT]/project/functions/roles.php";

if($_SESSION['authorized'] = true && $_SESSION['user_role'] == 4){
    
    include "$_SERVER[DOCUMENT_ROOT]/project/functions/users.php";
    
    
    
    deleteUser($_GET['user_id']);
    
    header('refresh: 4; url=users.php');
    
    
    
} else{
    
   header('Location: ../index.php');
}









?>