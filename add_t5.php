<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<!-- Bootstrap core CSS -->
		<link href="../project/css/w3.css" rel="stylesheet">
		<link href="../project/css/font-awesome.min.css" rel="stylesheet">
		<script src="js/jquery-3.2.1.min.js"></script>
		
	</head>
	<body style='background-color:#eee'>
	
       <?php
                //Start the session
                session_start();
        // Check user session and user role
        if ($_SESSION['authorized'] === true && $_SESSION['user_role'] == 1 && isset($_GET['crs_id'])){
	               
            $crs_id = $_GET['crs_id'];
            $user_id = $_GET['user_id'];
            $crs_code = $_GET['crs_code'];
            $crs_title = $_GET['crs_title'];
            
		}else {
        header ('Location: index.php');
		}
        include "$_SERVER[DOCUMENT_ROOT]/project/functions/user_crs.php";
        include "$_SERVER[DOCUMENT_ROOT]/project/functions/course.php";
        include "$_SERVER[DOCUMENT_ROOT]/project/functions/dept.php";
        
?>
		
        <!-- Page Content -->
        <div class="w3-container  w3-margin-top ">
		<h4 class='w3-left-align'><i class="fa fa-pie-chart fa-lg " aria-hidden="true"></i> T5 Report</h4>
		
		<form action="add_t5.php?crs_id=<?php echo $crs_id;?>&user_id=<?php echo $user_id;?>&crs_code=<?php echo $crs_code;?>" method="post" enctype="multipart/form-data" id="part_1" >
           <!--  PART 1 START-->
           <div class="w3-row w3-panel">
                    
                        
                        <label class=" w3-margin-left "> Course Code: </label>
                        <label class="w3-large"> <?php echo $crs_code;?> </label>
                        <label class=" w3-margin-left "> Course Tiltle: </label>
                        <label class="w3-large"> <?php echo $crs_title;?> </label>
                        <label class=" w3-margin-left "> Course CRN: </label>
                        <label class="w3-large" > <?php echo $crs_id;?> </label>
                        </div>
           <div class="w3-row w3-panel">
                    
                        
                        <label class=" w3-col "> Institution:</label>
                        <input class="w3-input w3-border w3-col  " type="text" value=" Suadi Electronic University" name="institution" required>
                        </div>
                        
                        <div class="w3-row w3-panel ">
                        <div class="w3-half">
                        <label class=" w3-col "> Numer of students starting the course:</label>
                        <input class="w3-input w3-border w3-col " type="number"  name="no_of_std_start" required>
                        </div>
                        <div class="w3-half">
                        <label class=" w3-col "> Numer of students completing the course:</label>
                        <input class="w3-input w3-border w3-col " type="number"  name="no_of_std_comp" required>
                        </div>
               </div>
            <div class="w3-row w3-panel ">
                <label class=" w3-col "> Date of CR:</label>
                <input class="w3-input w3-border w3-col " type="date"  name="date_comp" required>
            </div>
                   
                  
                  
            <button class="w3-margin-top w3-button w3-round-xlarge w3-blue" id='add' name="next" type="submit">Next - Save</button>
            </form>
            <!--  PART 1 END-->
            
          <div id="part_2"> <!--  PART 2 START-->
            <label class=" w3-margin-left "> PART 2 </label>
            <form action="add_t5.php?crs_id=<?php echo $crs_id;?>&user_id=<?php echo $user_id;?>&crs_code=<?php echo $crs_code;?>" method="post" enctype="multipart/form-data"  id="form_2">
           
           <div class="w3-row w3-panel">
                    
                        
                        <label class=" w3-margin-left "> Course Code: </label>
                        <label class="w3-large"> <?php echo $crs_code;?> </label>
                        <label class=" w3-margin-left "> Course Tiltle: </label>
                        <label class="w3-large"> <?php echo $crs_title;?> </label>
                        <label class=" w3-margin-left "> Course CRN: </label>
                        <label class="w3-large" > <?php echo $crs_id;?> </label>
                        </div>
           <div class="w3-row w3-panel">
                    
                        <label class=" w3-col "> Course components ( actual total contact hours and credits per semester):</label>
                        <label class=" w3-col "> Contact Hours</label>
                        <div class="w3-half">
                        <label class=" w3-col "> Lecture:</label>
                        <input class="w3-input w3-border w3-col  " type="number"  name="lecture_ch" required>
                           </div>
                        <div class="w3-half">
                        <label class=" w3-col "> Tutorial:</label>
                        <input class="w3-input w3-border w3-col " type="number"  name="tutorial_ch" required>
                        </div>
                        </div>
                        
                        <div class="w3-row w3-panel ">
                        <div class="w3-half">
                        <label class=" w3-col "> Laboratory/Studio:</label>
                        <input class="w3-input w3-border w3-col " type="number"  name="lab_ch" required>
                        </div>
                        <div class="w3-half">
                        <label class=" w3-col ">Practical:</label>
                        <input class="w3-input w3-border w3-col " type="number"  name="practical_ch" required>
                        </div>
               </div>
            <div class="w3-row w3-panel ">
               <div class="w3-half">
                <label class=" w3-col "> Other:</label>
                <input class="w3-input w3-border w3-col " type="number"  name="other_ch" required>
                </div>
                <div class="w3-half">
                <label class=" w3-col ">Total:</label>
                        <input class="w3-input w3-border w3-col " type="number"  name="total_ch" required>
                </div>
            </div>
                   
                  
                  
            <button class="w3-margin-top w3-button w3-round-xlarge w3-blue  " id='add_2' name="next_2" type="submit">Next - Save</button>
            </form>
            </div>
            <!--  PART 2 END-->
            
             <div id="part_3"><!--  PART 3 START-->
            <label class=" w3-margin-left "> PART 3 </label>
            <form action="add_t5.php?crs_id=<?php echo $crs_id;?>&user_id=<?php echo $user_id;?>&crs_code=<?php echo $crs_code;?>" method="post" enctype="multipart/form-data"  id="form_2">
           
           <div class="w3-row w3-panel">
                    
                        
                        <label class=" w3-margin-left "> Course Code: </label>
                        <label class="w3-large"> <?php echo $crs_code;?> </label>
                        <label class=" w3-margin-left "> Course Tiltle: </label>
                        <label class="w3-large"> <?php echo $crs_title;?> </label>
                        <label class=" w3-margin-left "> Course CRN: </label>
                        <label class="w3-large" > <?php echo $crs_id;?> </label>
                        </div>
           <div class="w3-row w3-panel">
                    
                        <label class=" w3-col "> Course components ( actual total contact hours and credits per semester):</label>
                        <label class=" w3-col "> Credit Hours</label>
                        <div class="w3-half">
                        <label class=" w3-col "> Lecture:</label>
                        <input class="w3-input w3-border w3-col  " type="number"  name="lecture_credit" required>
                           </div>
                        <div class="w3-half">
                        <label class=" w3-col "> Tutorial:</label>
                        <input class="w3-input w3-border w3-col " type="number"  name="tutorial_credit" required>
                        </div>
                        </div>
                        
                        <div class="w3-row w3-panel ">
                        <div class="w3-half">
                        <label class=" w3-col "> Laboratory/Studio:</label>
                        <input class="w3-input w3-border w3-col " type="number"  name="lab_credit" required>
                        </div>
                        <div class="w3-half">
                        <label class=" w3-col ">Practical:</label>
                        <input class="w3-input w3-border w3-col " type="number"  name="practical_credit" required>
                        </div>
               </div>
            <div class="w3-row w3-panel ">
               <div class="w3-half">
                <label class=" w3-col "> Other:</label>
                <input class="w3-input w3-border w3-col " type="number"  name="other_credit" required>
                </div>
                <div class="w3-half">
                <label class=" w3-col ">Total:</label>
                        <input class="w3-input w3-border w3-col " type="number"  name="total_credit" required>
                </div>
            </div>
                   
                  
                  
            <button class="w3-margin-top w3-button w3-round-xlarge w3-blue  " id='add_3' name="next_3" type="submit">Next - Save</button>
            </form>
            </div><!--  PART  3 END-->
            
            <div id="part_4"><!--  PART 4 START-->
            <label class=" w3-margin-left "> PART 4 </label>
            <form action="add_t5.php?crs_id=<?php echo $crs_id;?>&user_id=<?php echo $user_id;?>&crs_code=<?php echo $crs_code;?>" method="post" enctype="multipart/form-data"  id="form_2">
           
           <div class="w3-row w3-panel">
                    
                        
                        <label class=" w3-margin-left "> Course Code: </label>
                        <label class="w3-large"> <?php echo $crs_code;?> </label>
                        <label class=" w3-margin-left "> Course Tiltle: </label>
                        <label class="w3-large"> <?php echo $crs_title;?> </label>
                        <label class=" w3-margin-left "> Course CRN: </label>
                        <label class="w3-large" > <?php echo $crs_id;?> </label>
                        </div>
           <div class="w3-row w3-panel">
                    
                        <label class=" w3-col "> Course Delivery </label>
                        <label class=" w3-col "> Coverage of Planned Program</label>
                        
                        <label class=" w3-col "> Week 1</label>
                        <label class=" w3-col "> Topics Covered:</label>
                            <textarea class="w3-input w3-border w3-col  "   name="lecture_credit" required></textarea>
                           
                        </div>
                        
                        <div class="w3-row w3-panel ">
                        <div class="w3-half">
                        <label class=" w3-col "> Planned Contact Hours:</label>
                        <input class="w3-input w3-border w3-col " type="number"  name="lab_credit" required>
                        </div>
                        <div class="w3-half">
                        <label class=" w3-col ">Actual Contact Hours:</label>
                        <input class="w3-input w3-border w3-col " type="number"  name="practical_credit" required>
                        </div>
               </div>
            <div class="w3-row w3-panel ">
               
                <label class=" w3-col "> Reason for Variations if there is a diffrence of more than 25% of the hours planned:</label>
                <textarea class="w3-input w3-border w3-col " type="number"  name="other_credit" required></textarea>
                
            </div>
                 
                 
                        <div class="w3-row w3-panel">
                        <label class=" w3-col "> Week 2</label>
                        <label class=" w3-col "> Topics Covered:</label>
                            <textarea class="w3-input w3-border w3-col  "   name="lecture_credit" required></textarea>
                           
                        </div>
                        
                        <div class="w3-row w3-panel ">
                        <div class="w3-half">
                        <label class=" w3-col "> Planned Contact Hours:</label>
                        <input class="w3-input w3-border w3-col " type="number"  name="lab_credit" required>
                        </div>
                        <div class="w3-half">
                        <label class=" w3-col ">Actual Contact Hours:</label>
                        <input class="w3-input w3-border w3-col " type="number"  name="practical_credit" required>
                        </div>
               </div>
            <div class="w3-row w3-panel ">
               
                <label class=" w3-col "> Reason for Variations if there is a diffrence of more than 25% of the hours planned:</label>
                <textarea class="w3-input w3-border w3-col " type="number"  name="other_credit" required></textarea>
                
            </div>
                  
                  
                   
                  
                  
            <button class="w3-margin-top w3-button w3-round-xlarge w3-blue  " id='add_3' name="next_3" type="submit">Next - Save</button>
            </form>
            </div><!--  PART  4 END-->
            
            <?php
                include "$_SERVER[DOCUMENT_ROOT]/project/functions/exam.php";
                include "$_SERVER[DOCUMENT_ROOT]/project/functions/upload_img.php";
            if(isset($_POST['add'])){
                
                
                $exam_url= uploadExam($crs_code, $crs_id, $_POST['exam_type']);
                
                
                addExam($_POST['exam_type'],$_POST['mid_high_gr'], $_POST['mid_avg_gr'], $_POST['mid_low_gr'], $exam_url, $user_id, $crs_id);

            }
            
            
            
            
            
            
            ?>
		
            </div><!-- Page Content End -->
            <script>
        $(document).ready(function(){
            $("#part_2").hide();
            $("#part_3").hide();
            $("#part_4").hide();
    $("#add").click(function(){
        $("#part_2").show();
        $("#part_1").slideUp();
    });
    $("#add_2").click(function(){
        $("#part_3").show();
        $("#part_2").slideUp();
    });
             $("#add_3").click(function(){
        $("#part_4").show();
        $("#part_3").slideUp();
    });
});
        </script>
	</body>
</html>