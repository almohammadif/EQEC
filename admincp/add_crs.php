
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
          
          <form action="add_crs.php" method="post"  >
                <div class="w3-row w3-section">
                    
                        <input class="w3-input w3-border w3-col" type="number" placeholder="Course ID" name="crs_id" required >
                    </div>
                    
                  <div class="w3-row w3-section">
                       
                            <input class="w3-input w3-border" type="text" placeholder="Course Title" name="crs_title" required>
                      </div>
                      
                <div class="w3-row w3-section">
                   
                        <input class="w3-input w3-border" type="text" placeholder="Course Code" required name="crs_code">
                    </div>
                
                <div class="w3-row w3-section">
                   
                        <input class="w3-input w3-border" type="number" placeholder="Credit Hours"  required name="credit_hours">
                    </div>
                    
                <div class="w3-row w3-section">
                   
                        <input class="w3-input w3-border" type="number" placeholder="Contact Hours" required name="contact_hours">
                    </div>

                          
               <div class="w3-row w3-section ">
               <select class="w3-select w3-border" name="dept" id='selopt' required>
                    
                    <option  value="1"  selected >Select A Department ...</option>
                    
                       </select>
              </div>
               <div class="w3-row w3-section">
                   
                        <input class="w3-input w3-border" type="text" placeholder="Semester" required name="semester">
                    </div>

              
              
        <?php
              if (isset($_POST['add'])){
                  
                  include "$_SERVER[DOCUMENT_ROOT]/project/functions/course.php";                  
                  addCrs($_POST['crs_id'], $_POST['crs_title'], $_POST['crs_code'], $_POST['credit_hours'], $_POST['contact_hours'], $_POST['dept'], $_POST['semester']);
                  
                  
              }
              ?>

           
                <button class="w3-margin-top w3-button w3-round-xlarge w3-blue " id='add' name="add" type="submit">Add</button>

        </form>
        
        </div><!-- Container End -->
        <!-- ajax to load dept name -->
                          <script>
                           $(document).ready(function(){
    $.get("../ajax/dept_ajax.php",function(data){
        var obj = jQuery.parseJSON(data);
        var len = data.length;
        var sel =$( "#selopt" );
    for( var i=0; i<len; i++){
        sel.append( '<option value="' + obj[i].dept_id + '">' + obj[i].dept_name + '</option>' ); 
    }
        
    });
},"json");
          
</script>
    </body>
</html>