<?php
function uploadImg($userfname, $username){

if(isset($_FILES['image'])){
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152) {
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true) {
         move_uploaded_file($file_tmp,"$_SERVER[DOCUMENT_ROOT]/project/uploads/sign/".$userfname."-".$username.".".$file_ext);
          $file_url= "/project/uploads/sign/".$userfname."-".$username.".".$file_ext;

         echo "<div class='w3-panel w3-pale-green w3-round-large' role='alert'>Sign Uploaded Successfuly!</div>";
      }else{
         print_r($errors);
      }
   }
    return $file_url;
}


function uploadMultiAsgn($crs_code, $crs_id, $asgn_no){

if(isset($_FILES['file'])){
      $errors= array();
    $count = count($_FILES['file']['name']);
    
    for($i=0; $i<$count; $i++){
        
      $file_name = $_FILES['file']['name'][$i];
      $file_size = $_FILES['file']['size'][$i];
      $file_tmp = $_FILES['file']['tmp_name'][$i];
      $file_type = $_FILES['file']['type'][$i];
      $file_ext=strtolower(end(explode('.',$_FILES['file']['name'][$i])));
      
      $expensions= array("pdf","doc","docx");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a PDF or MS-Word file.";
      }
      
      if($file_size > 2097152) {
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true) {
          if($i == 0){ $asgn_gr="HighMark";}
          if($i == 1){ $asgn_gr="AverageMark";}
          if($i == 2){ $asgn_gr="LowMark";}
         move_uploaded_file($file_tmp,"$_SERVER[DOCUMENT_ROOT]/project/uploads/asgn/".$crs_code."-".$crs_id."assignment-".$asgn_no."-".$asgn_gr.".".$file_ext);
          $file_url[]= "/project/uploads/asgn/".$crs_code."-".$crs_id."assignment-".$asgn_no."-".$asgn_gr.".".$file_ext;

         echo "<div class='w3-panel w3-pale-green w3-round-large' role='alert'>Assignment Uploaded Successfuly!</div>";
      }else{
         print_r($errors);
      }
   }
    return $file_url;
    }
}
    


function uploadExam($crs_code, $crs_id, $exam_type){

if(isset($_FILES['file_mid'])){
      $errors= array();
    $count = count($_FILES['file_mid']['name']);
    
    for($i=0; $i<$count; $i++){
        
      $file_name = $_FILES['file_mid']['name'][$i];
      $file_size = $_FILES['file_mid']['size'][$i];
      $file_tmp = $_FILES['file_mid']['tmp_name'][$i];
      $file_type = $_FILES['file_mid']['type'][$i];
      $file_ext=strtolower(end(explode('.',$_FILES['file_mid']['name'][$i])));
      
      $expensions= array("pdf","doc","docx");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a PDF or MS-Word file.";
      }
      
      if($file_size > 2097152) {
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true) {
          if($i == 0){ $asgn_gr="HighMark";}
          if($i == 1){ $asgn_gr="AverageMark";}
          if($i == 2){ $asgn_gr="LowMark";}
         move_uploaded_file($file_tmp,"$_SERVER[DOCUMENT_ROOT]/project/uploads/exam/".$crs_code."-".$crs_id."-".$exam_type."-".$asgn_gr.".".$file_ext);
          $file_url[]= "/project/uploads/exam/".$crs_code."-".$crs_id."-".$exam_type."-".$asgn_gr.".".$file_ext;

         echo "<div class='w3-panel w3-pale-green w3-round-large' role='alert'>".$exam_type." Exam Uploaded Successfuly!</div>";
      }else{
         print_r($errors);
      }
   }
    return $file_url;
    }
}

function uploadFinalExam($crs_code, $crs_id){

if(isset($_FILES['file_final'])){
      $errors= array();
    $count = count($_FILES['file_final']['name']);
    
    for($i=0; $i<$count; $i++){
        
      $file_name = $_FILES['file_final']['name'][$i];
      $file_size = $_FILES['file_final']['size'][$i];
      $file_tmp = $_FILES['file_final']['tmp_name'][$i];
      $file_type = $_FILES['file_final']['type'][$i];
      $file_ext=strtolower(end(explode('.',$_FILES['file_final']['name'][$i])));
      
      $expensions= array("pdf","doc","docx");
      
      if(in_array($file_ext,$expensions)=== false){
         $errors[]="extension not allowed, please choose a PDF or MS-Word file.";
      }
      
      if($file_size > 2097152) {
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true) {
          if($i == 0){ $asgn_gr="HighMark";}
          if($i == 1){ $asgn_gr="AverageMark";}
          if($i == 2){ $asgn_gr="LowMark";}
         move_uploaded_file($file_tmp,"$_SERVER[DOCUMENT_ROOT]/project/uploads/exam/".$crs_code."-".$crs_id."-Final-".$asgn_gr.".".$file_ext);
          $file_url[]= "/project/uploads/exam/".$crs_code."-".$crs_id."-Final-".$asgn_gr.".".$file_ext;

         echo "<div class='w3-panel w3-pale-green w3-round-large' role='alert'>Final Exam Uploaded Successfuly!</div>";
      }else{
         print_r($errors);
      }
   }
    return $file_url;
    }
}
?>