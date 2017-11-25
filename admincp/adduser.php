
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
        // Check user session and user role
        if ($_SESSION['authorized'] = true && $_SESSION['user_role'] == 4){		
    
		}else {
        header ('Location: ../index.php');
		}
		 
            
?>
       
        <div class="w3-container w3-margin-top">
          
          <form action="adduser.php" method="post" enctype="multipart/form-data" >
                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:50px">
                        <i class="fa fa-id-card-o fa-fw fa-2x w3-text-blue" aria-hidden="true"></i>
                    </div>
                    <div class='w3-rest '>
                        <input class="w3-input w3-border w3-col" type="text" placeholder="First Name" name="fname" style="width:50%">
                        <input class="w3-input w3-border w3-col" type="text" placeholder="Last Name" name="lname" style="width:50%">
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
                        <input class="w3-input w3-border" type="text" placeholder="Username" required name="username">
                    </div>
                </div>
                
                <div class="w3-row w3-section">
                   <div class="w3-col" style="width:50px">
                            <i class="fa fa-lock fa-fw fa-2x w3-text-blue" aria-hidden="true"></i>
                   </div>
                    <div class='w3-rest'>
                        <input class="w3-input w3-border" type="password" placeholder="Password" id="password" required name="pass">
                    </div>
               </div>
                <div class="w3-row w3-section">
                   <div class="w3-col" style="width:50px">
                            <i class="fa fa-envelope-o fa-fw fa-2x w3-text-blue" aria-hidden="true"></i>
                   </div>
                    <div class='w3-rest'>
                        <input class="w3-input w3-border" type="E-mail" placeholder="E-mail" required name="email">
                    </div>
               </div>
               <div class="w3-row w3-section">
                   <div class="w3-col" style="width:50px">
                            <i class="fa fa-pencil fa-fw fa-2x w3-text-blue" aria-hidden="true"></i>
                   </div>
                    <div class='w3-rest'>
                       Upload Signture
                        <input type="file" name="image" required>
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
               <select class="w3-select w3-border" name="crs[]" id='selopt' required multiple>
                    
                    <option disabled selected >Select A Course ...</option>
                    
                       </select>
              </div>
              <?php
              if (isset($_POST['add'])){
                  include "$_SERVER[DOCUMENT_ROOT]/project/functions/upload_img.php";
                  include "$_SERVER[DOCUMENT_ROOT]/project/functions/user_crs.php";
                      $img_url= uploadImg($_POST['fname'],$_POST['username']);
                  include "$_SERVER[DOCUMENT_ROOT]/project/functions/users.php";                  
                  $lastuser_id= addUser($_POST['fname'], $_POST['lname'], $_POST['username'], $_POST['pass'], $_POST['email'], $img_url);
                  
                  if(isset($_POST['crs'])){
                      $crs_id=$_POST['crs'];
                      $count_crs= count($crs_id);
                      
                      for($i=0; $i<$count_crs; $i++){
                          addCrsToUser($lastuser_id, $crs_id[$i]);
                      }
                  } 
                  
                  //add multiple roles
                  if(isset($_POST['roles'])){
                    $role_id= $_POST['roles'];
                      $count = count($role_id);
                      for($i=0; $i<$count; $i++){
                  
                          setRole($lastuser_id, $role_id[$i]);
                    }
                  }
                  
              }
              ?>

           
                <button class="w3-margin-top w3-button w3-round-xlarge w3-blue " id='edit' name="add" type="submit">Add</button>

        </form>
        
        </div><!-- Container End -->
        
        <script>
                           $(document).ready(function(){
    $.get("../ajax/crs_ajax.php",function(data){
        var obj = jQuery.parseJSON(data);
        var len = data.length;
        var sel =$( "#selopt" );
    for( var i=0; i<len; i++){
        sel.append( '<option value="' + obj[i].crs_id + '">' + obj[i].crs_name + '</option>' ); 
    }
        
    });
},"json");
          
</script>
    </body>
</html>