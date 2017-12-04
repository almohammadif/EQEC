
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<!-- Bootstrap core CSS -->
		<link href="../../project/css/w3.css" rel="stylesheet">
		<link href="../../project/css/font-awesome.min.css" rel="stylesheet">
		<script src="../../project/js/jquery-3.2.1.min.js"></script>
		
	</head>
	<body style='background-color:#eee; font-family:"Segoe UI"'>
      <?php
//Start the session
session_start();
            include "$_SERVER[DOCUMENT_ROOT]/project/functions/roles.php";
        include "$_SERVER[DOCUMENT_ROOT]/project/functions/course.php";
        include "$_SERVER[DOCUMENT_ROOT]/project/functions/user_crs.php";
        // Check user session and user role
        if ($_SESSION['authorized'] = true && $_SESSION['user_role'] == 4){		
    
		}else {
        header ('Location: ../index.php');
		}
		$user_id= $_GET['user_id'];
        include "../functions/users.php";
        $user= getUser($user_id);
        $row= mysqli_fetch_assoc($user);
            
?>
       
        <div class="w3-container w3-margin-top">
          
          <form action="edit_user.php?user_id=<?php echo $user_id;?>" method="post" enctype="multipart/form-data" >
                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:50px">
                        <i class="fa fa-id-card-o fa-fw fa-2x w3-text-blue" aria-hidden="true"></i>
                    </div>
                    <div class='w3-rest '>
                        <input class="w3-input w3-border w3-col" type="text" value='<?php echo $row['first_name'];?>' name="fname" style="width:50%">
                        <input class="w3-input w3-border w3-col" type="text"  value='<?php echo $row['last_name'];?>' name="lname" style="width:50%">
                    </div>
                  </div>
<!--
                  <div class="w3-row w3-section">
                       <div class="w3-col" style="width:50px">
                            <i class="fa fa-id-card fa-fw fa-2x w3-text-blue" aria-hidden="true"></i>
                       </div>
                        <div class='w3-rest'>
                            <input class="w3-input w3-border" type="text" placeholder="Last Name" name="lname">
                      </div>
                  </div>
-->
                <div class="w3-row w3-section">
                   <div class="w3-col" style="width:50px">
                            <i class="fa fa-user-o fa-fw fa-2x w3-text-blue" aria-hidden="true"></i>
                    </div>
                    <div class='w3-rest'>
                        <input class="w3-input w3-border" type="text"  value='<?php echo $row['username'];?>'  name="username">
                    </div>
                </div>
                
                <div class="w3-row w3-section">
                   <div class="w3-col" style="width:50px">
                            <i class="fa fa-lock fa-fw fa-2x w3-text-blue" aria-hidden="true"></i>
                   </div>
                    <div class='w3-rest'>
                        <input class="w3-input w3-border" type="password" placeholder="Password" id="password"  name="pass">
                    </div>
               </div>
                <div class="w3-row w3-section">
                   <div class="w3-col" style="width:50px">
                            <i class="fa fa-envelope-o fa-fw fa-2x w3-text-blue" aria-hidden="true"></i>
                   </div>
                    <div class='w3-rest'>
                        <input class="w3-input w3-border" type="E-mail" placeholder="E-mail" value='<?php echo $row['user_email'];?>'  name="email">
                    </div>
               </div>
               <div class="w3-row w3-section">
                   <div class="w3-col" style="width:50px">
                            <i class="fa fa-pencil fa-fw fa-2x w3-text-blue" aria-hidden="true"></i>
                   </div>
                    <div class='w3-rest'>
                       Upload Signture
                        <input type="file" name="image" >
                        <img style='width:100%;max-width:200px' src="<?php echo $row['user_sign']?>">
                    </div>
               </div>
               <div class="w3-row w3-section ">
               <label>User Role:</label>
               <input class="w3-check" type="checkbox" value="1" name="roles[]">
                <label>Instructor </label>

                <input class="w3-check" type="checkbox" value="2"name="roles[]">
                <label>Cooedinator </label>
                <input class="w3-check" type="checkbox" value="3"name="roles[]">
                <label>Quality assurance coordinator </label>
                <input class="w3-check" type="checkbox" value="4"name="roles[]">
                <label>Admin</label>
              </div>
              
              <div class="w3-row w3-section ">
                  <label>User Courses: </label>
                  <?php 
                            $crs=getUserCrs($user_id); 
                        while($row_crs= mysqli_fetch_assoc($crs)){
                            
                            echo "&#32;".$row_crs['course_title']."-".$row_crs['course_ID']."&#32;";
                            
                            echo "<a class=' w3-button w3-round-xxlarge w3-blue' id='del'  href='delete_user_crs.php?crs_id=".$row_crs['course_ID']."&user_id=".$row_crs['users_users_ID']."' title='Delete Course'><i class='fa fa-trash' aria-hidden='true'></i></a>";
                        }
                  
                  ?>
                  
                  
              </div>
              <div class="w3-row w3-section ">
               <select class="w3-select w3-border" name="crs[]" id='selopt' required multiple>
                    
                    <option disabled selected >Select A Course ...</option>
                    
                       </select>
              </div>
              <?php
              if (isset($_POST['edit'])){
                  include "$_SERVER[DOCUMENT_ROOT]/project/functions/upload_img.php";
                  
                  
                  // CHECK IF IMAGE UPDATED
                  if($_FILES['image']['error']==0){    
                      
                  $img_url= uploadImg($_POST['fname'],$_POST['username']);                 
                  }else{$img_url= $row['user_sign'];}
                  
                   editUser($user_id,$_POST['fname'], $_POST['lname'], $_POST['username'], $_POST['pass'], $_POST['email'], $img_url);
                  
                  if(isset($_POST['crs'])){
                      $crs_id=$_POST['crs'];
                      $count_crs= count($crs_id);
                      //add mutliple courses
                      for($i=0; $i<$count_crs; $i++){
                          addCrsToUser($user_id, $crs_id[$i]);
                      }
                  } 

                  
              }
              ?>

           
                <button class="w3-margin-top w3-button w3-round-xlarge w3-blue " id='add' name="edit" type="submit">Edit</button>

        </form>
        
        </div><!-- Container End -->
        
       <script>
                           $(document).ready(function(){
    $.get("../ajax/crs_ajax.php",function(data){
        var obj = jQuery.parseJSON(data);
        var len = data.length;
        var sel =$( "#selopt" );
    for( var i=0; i<len; i++){
        sel.append( '<option value="' + obj[i].crs_id + '">' + obj[i].crs_name + '-' + obj[i].crs_id + '</option>' ); 
    }
        
    });
},"json");
          
</script>
    </body>
</html>