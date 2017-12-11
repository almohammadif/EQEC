<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<!-- Bootstrap core CSS -->
		<link href="../project/css/w3.css" rel="stylesheet">
		<link href="../project/css/font-awesome.min.css" rel="stylesheet">
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/project.js"></script>

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
		<button class="w3-margin-top w3-button w3-round-xlarge w3-blue  " id='show_1' name="show_1" > 1</button>
		<button class="w3-margin-top w3-button w3-round-xlarge w3-blue  " id='show_2' name="show_2" > 2</button>
		<button class="w3-margin-top w3-button w3-round-xlarge w3-blue  " id='show_3' name="show_3" > 3</button>
		<button class="w3-margin-top w3-button w3-round-xlarge w3-blue  " id='show_4' name="show_2" > 4</button>
		<button class="w3-margin-top w3-button w3-round-xlarge w3-blue  " id='show_5' name="show_2" > 5</button>
		<button class="w3-margin-top w3-button w3-round-xlarge w3-blue  " id='show_6' name="show_2" > 6</button>
		<button class="w3-margin-top w3-button w3-round-xlarge w3-blue  " id='show_7' name="show_2" > 7</button>
		<button class="w3-margin-top w3-button w3-round-xlarge w3-blue  " id='show_8' name="show_2" > 8</button>
		<button class="w3-margin-top w3-button w3-round-xlarge w3-blue  " id='show_9' name="show_2" > 9</button>
		<button class="w3-margin-top w3-button w3-round-xlarge w3-blue  " id='show_10' name="show_2" > 10</button>
		<button class="w3-margin-top w3-button w3-round-xlarge w3-blue  " id='show_11' name="show_2" > 11</button>
		<button class="w3-margin-top w3-button w3-round-xlarge w3-blue  " id='show_12' name="show_2" > 12</button>
		<button class="w3-margin-top w3-button w3-round-xlarge w3-blue  " id='show_13' name="show_2" > 13</button>
		<button class="w3-margin-top w3-button w3-round-xlarge w3-blue  " id='show_14' name="show_2" > 14</button>
		<button class="w3-margin-top w3-button w3-round-xlarge w3-blue  " id='show_15' name="show_2" > 15</button>
		<button class="w3-margin-top w3-button w3-round-xlarge w3-blue  " id='show_16' name="show_2" > 16</button>
		<button class="w3-margin-top w3-button w3-round-xlarge w3-blue  " id='show_17' name="show_2" > 17</button>
		<button class="w3-margin-top w3-button w3-round-xlarge w3-blue  " id='show_18' name="show_2" > 18</button>
		<button class="w3-margin-top w3-button w3-round-xlarge w3-blue  " id='show_19' name="show_2" > 19</button>
		<button class="w3-margin-top w3-button w3-round-xlarge w3-blue  " id='show_20' name="show_2" > 20</button>
		<button class="w3-margin-top w3-button w3-round-xlarge w3-blue  " id='show_21' name="show_2" > 21</button>
		
				
		<form action="add_t5.php?crs_id=<?php echo $crs_id;?>&user_id=<?php echo $user_id;?>&crs_code=<?php echo $crs_code;?>&crs_title=<?php echo $crs_title;?>" method="post" enctype="multipart/form-data" id="form_" > <!--  T5 FORM Start-->
           <div id="part_1"><!--  PART 1 START-->
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
                        <input class="w3-input w3-border w3-col  " type="text" value=" Suadi Electronic University" name="institution" required >
                        </div>

                        <div class="w3-row w3-panel ">
                        <div class="w3-half">
                        <label class=" w3-col "> Numer of students starting the course:</label>
                        <input class="w3-input w3-border w3-col required" type="number"  name="no_of_std_start" id="part_1_field" required>
                        </div>
                        <div class="w3-half">
                        <label class=" w3-col "> Numer of students completing the course:</label>
                        <input class="w3-input w3-border w3-col " type="number"  name="no_of_std_comp" required id="part_1_field">
                        </div>
               </div>
							 
            <div class="w3-row w3-panel ">
                <label class=" w3-col "> Date of CR:</label>
                <input class="w3-input w3-border w3-col " type="date"  name="date_comp" required >
            </div>



            <button class="w3-margin-top w3-button w3-round-xlarge w3-blue w3-right" id='next_1' name="next" > Next</button>
            
			
			</div><!--  PART 1 END-->
            

          <div id="part_2" > <!--  PART 2 START-->
		 
            <label class=" w3-margin-left "> PART 2 </label>
            

           <div class="w3-row w3-panel">


                        <label class=" w3-margin-left "> Course Code: </label>
                        <label class="w3-large"> <?php echo $crs_code;?> </label>
                        <label class=" w3-margin-left "> Course Tiltle: </label>
                        <label class="w3-large"> <?php echo $crs_title;?> </label>
                        <label class=" w3-margin-left "> Course CRN: </label>
                        <label class="w3-large" > <?php echo $crs_id;?> </label>
                        </div>
           <div class="w3-row w3-panel">

                        <h5 class=" w3-col "> Course components ( actual total contact hours and credits per semester):</h5>
                        <h4 class=" w3-col "> Contact Hours</h4>
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



            <button class="w3-margin-top w3-button w3-round-xlarge w3-blue w3-right " id='next_2' name="next_2" >Next </button>
			<button class="w3-margin-top w3-button w3-round-xlarge w3-blue" id='back_1' name="back_1" >Back</button>
            </div>
            <!--  PART 2 END-->

             <div id="part_3" ><!--  PART 3 START-->
            <label class=" w3-margin-left "> PART 3 </label>
            

           <div class="w3-row w3-panel">


                        <label class=" w3-margin-left "> Course Code: </label>
                        <label class="w3-large"> <?php echo $crs_code;?> </label>
                        <label class=" w3-margin-left "> Course Tiltle: </label>
                        <label class="w3-large"> <?php echo $crs_title;?> </label>
                        <label class=" w3-margin-left "> Course CRN: </label>
                        <label class="w3-large" > <?php echo $crs_id;?> </label>
                        </div>
           <div class="w3-row w3-panel">

                        <h5 class=" w3-col "> Course components ( actual total contact hours and credits per semester):</h5>
                        <h4 class=" w3-col "> Credit Hours</h4>
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



            <button class="w3-margin-top w3-button w3-round-xlarge w3-blue w3-right  " id='next_3' name="next_3" >Next</button>
			<button class="w3-margin-top w3-button w3-round-xlarge w3-blue" id='back_2' name="back_2" >Back</button>
            
            </div><!--  PART  3 END-->

            <div id="part_4" ><!--  PART 4 START-->
            <label class=" w3-margin-left "> PART 4 </label>

           <div class="w3-row w3-panel">


                        <label class=" w3-margin-left "> Course Code: </label>
                        <label class="w3-large"> <?php echo $crs_code;?> </label>
                        <label class=" w3-margin-left "> Course Tiltle: </label>
                        <label class="w3-large"> <?php echo $crs_title;?> </label>
                        <label class=" w3-margin-left "> Course CRN: </label>
                        <label class="w3-large" > <?php echo $crs_id;?> </label>
                        </div>
           <div class="w3-row w3-panel">

                        <h5 class=" w3-col "> Course Delivery </h5>
                        <h5 class=" w3-col "> Coverage of Planned Program</h5>

                        <h4 class=" w3-col "> Week 1</h4>
						<input type="hidden" name="cd_week[]" value= "week-1">
                        <label class=" w3-col "> Topics Covered:</label>
                            <textarea class="w3-input w3-border w3-col  "   name="topic_cover[]" required></textarea>

                        </div>

                        <div class="w3-row w3-panel ">
                        <div class="w3-half">
                        <label class=" w3-col "> Planned Contact Hours:</label>
                        <input class="w3-input w3-border w3-col " type="number"  name="plan_ch[]" required>
                        </div>
                        <div class="w3-half">
                        <label class=" w3-col ">Actual Contact Hours:</label>
                        <input class="w3-input w3-border w3-col " type="number"  name="act_ch[]" required>
                        </div>
               </div>
            <div class="w3-row w3-panel ">

                <label class=" w3-col "> Reason for Variations if there is a diffrence of more than 25% of the hours planned:</label>
                <textarea class="w3-input w3-border w3-col "  name="variation[]" required></textarea>

            </div>


                        <div class="w3-row w3-panel">
                        <h4 class=" w3-col "> Week 2</h4>
						<input type="hidden" name="cd_week[]" value= "week-2">
                        <label class=" w3-col "> Topics Covered:</label>
                            <textarea class="w3-input w3-border w3-col  "   name="topic_cover[]" required></textarea>

                        </div>

                        <div class="w3-row w3-panel ">
                        <div class="w3-half">
                        <label class=" w3-col "> Planned Contact Hours:</label>
                        <input class="w3-input w3-border w3-col " type="number"  name="plan_ch[]" required>
                        </div>
                        <div class="w3-half">
                        <label class=" w3-col ">Actual Contact Hours:</label>
                        <input class="w3-input w3-border w3-col "  name="act_ch[]" required>
                        </div>
               </div>
            <div class="w3-row w3-panel ">

                <label class=" w3-col "> Reason for Variations if there is a diffrence of more than 25% of the hours planned:</label>
                <textarea class="w3-input w3-border w3-col " type="text"  name="variation[]" required></textarea>

            </div>





            <button class="w3-margin-top w3-button w3-round-xlarge w3-blue w3-right " id='next_4' name="next_4" >Next</button>
			<button class="w3-margin-top w3-button w3-round-xlarge w3-blue" id='back_3' name="back_3" >Back</button>
			
            
            </div><!--  PART  4 END-->
			
			 <div id="part_5" ><!--  PART 5 START-->
            <label class=" w3-margin-left "> PART 5 </label>

           <div class="w3-row w3-panel">


                        <label class=" w3-margin-left "> Course Code: </label>
                        <label class="w3-large"> <?php echo $crs_code;?> </label>
                        <label class=" w3-margin-left "> Course Tiltle: </label>
                        <label class="w3-large"> <?php echo $crs_title;?> </label>
                        <label class=" w3-margin-left "> Course CRN: </label>
                        <label class="w3-large" > <?php echo $crs_id;?> </label>
                        </div>
           <div class="w3-row w3-panel">

                        <h5 class=" w3-col "> Course Delivery </h5>
                        <h5 class=" w3-col "> Coverage of Planned Program</h5>

                        <h4 class=" w3-col "> Week 3</h4>
						<input type="hidden" name="cd_week[]" value= "week-3">
                        <label class=" w3-col "> Topics Covered:</label>
                            <textarea class="w3-input w3-border w3-col  "   name="topic_cover[]" required></textarea>

                        </div>

                        <div class="w3-row w3-panel ">
                        <div class="w3-half">
                        <label class=" w3-col "> Planned Contact Hours:</label>
                        <input class="w3-input w3-border w3-col " type="number"  name="plan_ch[]" required>
                        </div>
                        <div class="w3-half">
                        <label class=" w3-col ">Actual Contact Hours:</label>
                        <input class="w3-input w3-border w3-col " type="number"  name="act_ch[]" required>
                        </div>
               </div>
            <div class="w3-row w3-panel ">

                <label class=" w3-col "> Reason for Variations if there is a diffrence of more than 25% of the hours planned:</label>
                <textarea class="w3-input w3-border w3-col "  name="variation[]" required></textarea>

            </div>


                        <div class="w3-row w3-panel">
                        <h4 class=" w3-col "> Week 4</h4>
						<input type="hidden" name="cd_week[]" value= "week-4">
                        <label class=" w3-col "> Topics Covered:</label>
                            <textarea class="w3-input w3-border w3-col  "   name="topic_cover[]" required></textarea>

                        </div>

                        <div class="w3-row w3-panel ">
                        <div class="w3-half">
                        <label class=" w3-col "> Planned Contact Hours:</label>
                        <input class="w3-input w3-border w3-col " type="number"  name="plan_ch[]" required>
                        </div>
                        <div class="w3-half">
                        <label class=" w3-col ">Actual Contact Hours:</label>
                        <input class="w3-input w3-border w3-col "  name="act_ch[]" required>
                        </div>
               </div>
            <div class="w3-row w3-panel ">

                <label class=" w3-col "> Reason for Variations if there is a diffrence of more than 25% of the hours planned:</label>
                <textarea class="w3-input w3-border w3-col " type="number"  name="variation[]" required></textarea>

            </div>

      
            <button class="w3-margin-top w3-button w3-round-xlarge w3-blue w3-right " id='next_5' name="next_5" >Next</button>
			<button class="w3-margin-top w3-button w3-round-xlarge w3-blue" id='back_4' name="back_4" >Back</button>
			
            
            </div><!--  PART  5 END-->
			
			 <div id="part_6" ><!--  PART 6 START-->
            <label class=" w3-margin-left "> PART 6 </label>

           <div class="w3-row w3-panel">


                        <label class=" w3-margin-left "> Course Code: </label>
                        <label class="w3-large"> <?php echo $crs_code;?> </label>
                        <label class=" w3-margin-left "> Course Tiltle: </label>
                        <label class="w3-large"> <?php echo $crs_title;?> </label>
                        <label class=" w3-margin-left "> Course CRN: </label>
                        <label class="w3-large" > <?php echo $crs_id;?> </label>
                        </div>
           <div class="w3-row w3-panel">

                        <h5 class=" w3-col "> Course Delivery </h5>
                        <h5 class=" w3-col "> Coverage of Planned Program</h5>

                        <h4 class=" w3-col "> Week 5</h4>
						<input type="hidden" name="cd_week[]" value= "week-5">
                        <label class=" w3-col "> Topics Covered:</label>
                            <textarea class="w3-input w3-border w3-col  "   name="topic_cover[]" required></textarea>

                        </div>

                        <div class="w3-row w3-panel ">
                        <div class="w3-half">
                        <label class=" w3-col "> Planned Contact Hours:</label>
                        <input class="w3-input w3-border w3-col " type="number"  name="plan_ch[]" required>
                        </div>
                        <div class="w3-half">
                        <label class=" w3-col ">Actual Contact Hours:</label>
                        <input class="w3-input w3-border w3-col " type="number"  name="act_ch[]" required>
                        </div>
               </div>
            <div class="w3-row w3-panel ">

                <label class=" w3-col "> Reason for Variations if there is a diffrence of more than 25% of the hours planned:</label>
                <textarea class="w3-input w3-border w3-col "  name="variation[]" required></textarea>

            </div>


                        <div class="w3-row w3-panel">
                        <h4 class=" w3-col "> Week 6</h4>
						<input type="hidden" name="cd_week[]" value= "week-6">
                        <label class=" w3-col "> Topics Covered:</label>
                            <textarea class="w3-input w3-border w3-col  "   name="topic_cover[]" required></textarea>

                        </div>

                        <div class="w3-row w3-panel ">
                        <div class="w3-half">
                        <label class=" w3-col "> Planned Contact Hours:</label>
                        <input class="w3-input w3-border w3-col " type="number"  name="plan_ch[]" required>
                        </div>
                        <div class="w3-half">
                        <label class=" w3-col ">Actual Contact Hours:</label>
                        <input class="w3-input w3-border w3-col "  name="act_ch[]" required>
                        </div>
               </div>
            <div class="w3-row w3-panel ">

                <label class=" w3-col "> Reason for Variations if there is a diffrence of more than 25% of the hours planned:</label>
                <textarea class="w3-input w3-border w3-col " type="number"  name="variation[]" required></textarea>

            </div>

      
            <button class="w3-margin-top w3-button w3-round-xlarge w3-blue w3-right " id='next_6' name="next_6" >Next</button>
			<button class="w3-margin-top w3-button w3-round-xlarge w3-blue" id='back_5' name="back_5" >Back</button>
			
            
            </div><!--  PART  6 END-->
			
			
			<div id="part_7" ><!--  PART 7 START-->
            <label class=" w3-margin-left "> PART 7 </label>

           <div class="w3-row w3-panel">


                        <label class=" w3-margin-left "> Course Code: </label>
                        <label class="w3-large"> <?php echo $crs_code;?> </label>
                        <label class=" w3-margin-left "> Course Tiltle: </label>
                        <label class="w3-large"> <?php echo $crs_title;?> </label>
                        <label class=" w3-margin-left "> Course CRN: </label>
                        <label class="w3-large" > <?php echo $crs_id;?> </label>
                        </div>
           <div class="w3-row w3-panel">

                        <h5 class=" w3-col "> Course Delivery </h5>
                        <h5 class=" w3-col "> Coverage of Planned Program</h5>

                        <h4 class=" w3-col "> Week 7</h4>
						<input type="hidden" name="cd_week[]" value= "week-7">
                        <label class=" w3-col "> Topics Covered:</label>
                            <textarea class="w3-input w3-border w3-col  "   name="topic_cover[]" required></textarea>

                        </div>

                        <div class="w3-row w3-panel ">
                        <div class="w3-half">
                        <label class=" w3-col "> Planned Contact Hours:</label>
                        <input class="w3-input w3-border w3-col " type="number"  name="plan_ch[]" required>
                        </div>
                        <div class="w3-half">
                        <label class=" w3-col ">Actual Contact Hours:</label>
                        <input class="w3-input w3-border w3-col " type="number"  name="act_ch[]" required>
                        </div>
               </div>
            <div class="w3-row w3-panel ">

                <label class=" w3-col "> Reason for Variations if there is a diffrence of more than 25% of the hours planned:</label>
                <textarea class="w3-input w3-border w3-col "  name="variation[]" required></textarea>

            </div>


                        <div class="w3-row w3-panel">
                        <h4 class=" w3-col "> Week 8</h4>
						<input type="hidden" name="cd_week[]" value= "week-8">
                        <label class=" w3-col "> Topics Covered:</label>
                            <textarea class="w3-input w3-border w3-col  "   name="topic_cover[]" required></textarea>

                        </div>

                        <div class="w3-row w3-panel ">
                        <div class="w3-half">
                        <label class=" w3-col "> Planned Contact Hours:</label>
                        <input class="w3-input w3-border w3-col " type="number"  name="plan_ch[]" required>
                        </div>
                        <div class="w3-half">
                        <label class=" w3-col ">Actual Contact Hours:</label>
                        <input class="w3-input w3-border w3-col "  name="act_ch[]" required>
                        </div>
               </div>
            <div class="w3-row w3-panel ">

                <label class=" w3-col "> Reason for Variations if there is a diffrence of more than 25% of the hours planned:</label>
                <textarea class="w3-input w3-border w3-col " type="number"  name="variation[]" required></textarea>

            </div>

      
            <button class="w3-margin-top w3-button w3-round-xlarge w3-blue w3-right " id='next_7' name="next_7" >Next</button>
			<button class="w3-margin-top w3-button w3-round-xlarge w3-blue" id='back_6' name="back_6" >Back</button>
			
            
            </div><!--  PART 7 END-->
			
			
			<div id="part_8" ><!--  PART 8 START-->
            <label class=" w3-margin-left "> PART 8 </label>

           <div class="w3-row w3-panel">


                        <label class=" w3-margin-left "> Course Code: </label>
                        <label class="w3-large"> <?php echo $crs_code;?> </label>
                        <label class=" w3-margin-left "> Course Tiltle: </label>
                        <label class="w3-large"> <?php echo $crs_title;?> </label>
                        <label class=" w3-margin-left "> Course CRN: </label>
                        <label class="w3-large" > <?php echo $crs_id;?> </label>
                        </div>
           <div class="w3-row w3-panel">

                        <h5 class=" w3-col "> Course Delivery </h5>
                        <h5 class=" w3-col "> Coverage of Planned Program</h5>

                        <h4 class=" w3-col "> Week 9</h4>
						<input type="hidden" name="cd_week[]" value= "week-9">
                        <label class=" w3-col "> Topics Covered:</label>
                            <textarea class="w3-input w3-border w3-col  "   name="topic_cover[]" required></textarea>

                        </div>

                        <div class="w3-row w3-panel ">
                        <div class="w3-half">
                        <label class=" w3-col "> Planned Contact Hours:</label>
                        <input class="w3-input w3-border w3-col " type="number"  name="plan_ch[]" required>
                        </div>
                        <div class="w3-half">
                        <label class=" w3-col ">Actual Contact Hours:</label>
                        <input class="w3-input w3-border w3-col " type="number"  name="act_ch[]" required>
                        </div>
               </div>
            <div class="w3-row w3-panel ">

                <label class=" w3-col "> Reason for Variations if there is a diffrence of more than 25% of the hours planned:</label>
                <textarea class="w3-input w3-border w3-col "  name="variation[]" required></textarea>

            </div>


                        <div class="w3-row w3-panel">
                        <h4 class=" w3-col "> Week 10</h4>
						<input type="hidden" name="cd_week[]" value= "week-10">
                        <label class=" w3-col "> Topics Covered:</label>
                            <textarea class="w3-input w3-border w3-col  "   name="topic_cover[]" required></textarea>

                        </div>

                        <div class="w3-row w3-panel ">
                        <div class="w3-half">
                        <label class=" w3-col "> Planned Contact Hours:</label>
                        <input class="w3-input w3-border w3-col " type="number"  name="plan_ch[]" required>
                        </div>
                        <div class="w3-half">
                        <label class=" w3-col ">Actual Contact Hours:</label>
                        <input class="w3-input w3-border w3-col "  name="act_ch[]" required>
                        </div>
               </div>
            <div class="w3-row w3-panel ">

                <label class=" w3-col "> Reason for Variations if there is a diffrence of more than 25% of the hours planned:</label>
                <textarea class="w3-input w3-border w3-col " type="number"  name="variation[]" required></textarea>

            </div>

      
            <button class="w3-margin-top w3-button w3-round-xlarge w3-blue w3-right " id='next_8' name="next_8" >Next</button>
			<button class="w3-margin-top w3-button w3-round-xlarge w3-blue" id='back_7' name="back_7" >Back</button>
			
            
            </div><!--  PART 8 END-->
			
			<div id="part_9" ><!--  PART 9 START-->
            <label class=" w3-margin-left "> PART 9 </label>

           <div class="w3-row w3-panel">


                        <label class=" w3-margin-left "> Course Code: </label>
                        <label class="w3-large"> <?php echo $crs_code;?> </label>
                        <label class=" w3-margin-left "> Course Tiltle: </label>
                        <label class="w3-large"> <?php echo $crs_title;?> </label>
                        <label class=" w3-margin-left "> Course CRN: </label>
                        <label class="w3-large" > <?php echo $crs_id;?> </label>
                        </div>
           <div class="w3-row w3-panel">

                        <h5 class=" w3-col "> Course Delivery </h5>
                        <h5 class=" w3-col "> Coverage of Planned Program</h5>

                        <h4 class=" w3-col "> Week 11</h4>
						<input type="hidden" name="cd_week[]" value= "week-11">
                        <label class=" w3-col "> Topics Covered:</label>
                            <textarea class="w3-input w3-border w3-col  "   name="topic_cover[]" required></textarea>

                        </div>

                        <div class="w3-row w3-panel ">
                        <div class="w3-half">
                        <label class=" w3-col "> Planned Contact Hours:</label>
                        <input class="w3-input w3-border w3-col " type="number"  name="plan_ch[]" required>
                        </div>
                        <div class="w3-half">
                        <label class=" w3-col ">Actual Contact Hours:</label>
                        <input class="w3-input w3-border w3-col " type="number"  name="act_ch[]" required>
                        </div>
               </div>
            <div class="w3-row w3-panel ">

                <label class=" w3-col "> Reason for Variations if there is a diffrence of more than 25% of the hours planned:</label>
                <textarea class="w3-input w3-border w3-col "  name="variation[]" required></textarea>

            </div>


                        <div class="w3-row w3-panel">
                        <h4 class=" w3-col "> Week 12</h4>
						<input type="hidden" name="cd_week[]" value= "week-12">
                        <label class=" w3-col "> Topics Covered:</label>
                            <textarea class="w3-input w3-border w3-col  "   name="topic_cover[]" required></textarea>

                        </div>

                        <div class="w3-row w3-panel ">
                        <div class="w3-half">
                        <label class=" w3-col "> Planned Contact Hours:</label>
                        <input class="w3-input w3-border w3-col " type="number"  name="plan_ch[]" required>
                        </div>
                        <div class="w3-half">
                        <label class=" w3-col ">Actual Contact Hours:</label>
                        <input class="w3-input w3-border w3-col "  name="act_ch[]" required>
                        </div>
               </div>
            <div class="w3-row w3-panel ">

                <label class=" w3-col "> Reason for Variations if there is a diffrence of more than 25% of the hours planned:</label>
                <textarea class="w3-input w3-border w3-col " type="number"  name="variation[]" required></textarea>

            </div>

      
            <button class="w3-margin-top w3-button w3-round-xlarge w3-blue w3-right " id='next_9' name="next_9" >Next</button>
			<button class="w3-margin-top w3-button w3-round-xlarge w3-blue" id='back_8' name="back_8" >Back</button>
			
            
            </div><!--  PART 9 END-->
			
			
			<div id="part_10" ><!--  PART 10 START-->
            <label class=" w3-margin-left "> PART 10 </label>

           <div class="w3-row w3-panel">


                        <label class=" w3-margin-left "> Course Code: </label>
                        <label class="w3-large"> <?php echo $crs_code;?> </label>
                        <label class=" w3-margin-left "> Course Tiltle: </label>
                        <label class="w3-large"> <?php echo $crs_title;?> </label>
                        <label class=" w3-margin-left "> Course CRN: </label>
                        <label class="w3-large" > <?php echo $crs_id;?> </label>
                        </div>
           <div class="w3-row w3-panel">

                        <h5 class=" w3-col "> Course Delivery </h5>
                        <h5 class=" w3-col "> Coverage of Planned Program</h5>

                        <h4 class=" w3-col "> Week 13</h4>
						<input type="hidden" name="cd_week[]" value= "week-13">
                        <label class=" w3-col "> Topics Covered:</label>
                            <textarea class="w3-input w3-border w3-col  "   name="topic_cover[]" required></textarea>

                        </div>

                        <div class="w3-row w3-panel ">
                        <div class="w3-half">
                        <label class=" w3-col "> Planned Contact Hours:</label>
                        <input class="w3-input w3-border w3-col " type="number"  name="plan_ch[]" required>
                        </div>
                        <div class="w3-half">
                        <label class=" w3-col ">Actual Contact Hours:</label>
                        <input class="w3-input w3-border w3-col " type="number"  name="act_ch[]" required>
                        </div>
               </div>
            <div class="w3-row w3-panel ">

                <label class=" w3-col "> Reason for Variations if there is a diffrence of more than 25% of the hours planned:</label>
                <textarea class="w3-input w3-border w3-col "  name="variation[]" required></textarea>

            </div>


                        <div class="w3-row w3-panel">
                        <h4 class=" w3-col "> Week 14</h4>
						<input type="hidden" name="cd_week[]" value= "week-14">
                        <label class=" w3-col "> Topics Covered:</label>
                            <textarea class="w3-input w3-border w3-col  "   name="topic_cover[]" required></textarea>

                        </div>

                        <div class="w3-row w3-panel ">
                        <div class="w3-half">
                        <label class=" w3-col "> Planned Contact Hours:</label>
                        <input class="w3-input w3-border w3-col " type="number"  name="plan_ch[]" required>
                        </div>
                        <div class="w3-half">
                        <label class=" w3-col ">Actual Contact Hours:</label>
                        <input class="w3-input w3-border w3-col "  name="act_ch[]" required>
                        </div>
               </div>
            <div class="w3-row w3-panel ">

                <label class=" w3-col "> Reason for Variations if there is a diffrence of more than 25% of the hours planned:</label>
                <textarea class="w3-input w3-border w3-col " type="number"  name="variation[]" required></textarea>

            </div>

      
            <button class="w3-margin-top w3-button w3-round-xlarge w3-blue w3-right " id='next_10' name="next_10" >Next</button>
			<button class="w3-margin-top w3-button w3-round-xlarge w3-blue" id='back_9' name="back_9" >Back</button>
			
            
            </div><!--  PART 10 END-->
			
			<div id="part_11" ><!--  PART 11 START-->
            <label class=" w3-margin-left "> PART 11 </label>

           <div class="w3-row w3-panel">


                        <label class=" w3-margin-left "> Course Code: </label>
                        <label class="w3-large"> <?php echo $crs_code;?> </label>
                        <label class=" w3-margin-left "> Course Tiltle: </label>
                        <label class="w3-large"> <?php echo $crs_title;?> </label>
                        <label class=" w3-margin-left "> Course CRN: </label>
                        <label class="w3-large" > <?php echo $crs_id;?> </label>
                        </div>
           <div class="w3-row w3-panel">

                        <h5 class=" w3-col "> Course Delivery </h5>
                        <h5 class=" w3-col "> Consequences of Non Coverage of Topics</h5>

                        <h4 class=" w3-col "> For any topics where the topics was not taught or practically delivered, comment on how significant you believe the lack of coverage is for the course learning outcomes or for later courses in the program. Suggest possible compensating action.</h4>
                        <label class=" w3-col "> Topics ( if any )not Fully Covered:</label>
                            <textarea class="w3-input w3-border w3-col  "   name="topic_not_cover" required></textarea>

                        </div>

                        <div class="w3-row w3-panel ">
                        
                        <label class=" w3-col "> Effected Learning Outcomes:</label>
                        <textarea class="w3-input w3-border w3-col " type="text"  name="eff_lrn_out" required></textarea>
                        
                        
                        <label class=" w3-col ">Possible Compensating Action:</label>
                        <textarea class="w3-input w3-border w3-col " type="text"  name="possible_action" required></textarea>
                        
               </div>
           
            

      
            <button class="w3-margin-top w3-button w3-round-xlarge w3-blue w3-right " id='next_11' name="next_11" >Next</button>
			<button class="w3-margin-top w3-button w3-round-xlarge w3-blue" id='back_10' name="back_10" >Back</button>
			
            
            </div><!--  PART 11 END-->
			
			
			
			<div id="part_12" ><!--  PART 12 START-->
            <label class=" w3-margin-left "> PART 12 </label>

           <div class="w3-row w3-panel">


                        <label class=" w3-margin-left "> Course Code: </label>
                        <label class="w3-large"> <?php echo $crs_code;?> </label>
                        <label class=" w3-margin-left "> Course Tiltle: </label>
                        <label class="w3-large"> <?php echo $crs_title;?> </label>
                        <label class=" w3-margin-left "> Course CRN: </label>
                        <label class="w3-large" > <?php echo $crs_id;?> </label>
                        </div>
           <div class="w3-row w3-panel">

                        <h5 class=" w3-col "> Course Delivery </h5>
                        <h5 class=" w3-col "> Course Learning Outcome assessment</h5>

                        <label class=" w3-col "> List course learning outcomes:</label>
                            <textarea class="w3-input w3-border w3-col  "   name="list_lrn_out" required></textarea>

                        </div>

                <div class="w3-row w3-panel ">
                        
                        <label class=" w3-col "> List methods od assessment for each LO:</label>
                        <textarea class="w3-input w3-border w3-col " type="text"  name="list_assess_lo" required></textarea>
                        
                        
                        <label class=" w3-col ">Summry analysis of assessment results for each LO:</label>
                        <textarea class="w3-input w3-border w3-col " type="text"  name="summ_lo" required></textarea>
						
						<label class=" w3-col ">Summarize any actions you recommend for improving teaching strategies as a result of evaluations in the table above:</label>
                        <textarea class="w3-input w3-border w3-col " type="text"  name="summ_recomm" required></textarea>
                        
               </div>

            <button class="w3-margin-top w3-button w3-round-xlarge w3-blue w3-right " id='next_12' name="next_12" >Next</button>
			<button class="w3-margin-top w3-button w3-round-xlarge w3-blue" id='back_11' name="back_11" >Back</button>
			
            
            </div><!--  PART 12 END-->
			
			<div id="part_13" ><!--  PART 13 START-->
            <label class=" w3-margin-left "> PART 13 </label>

           <div class="w3-row w3-panel">


                        <label class=" w3-margin-left "> Course Code: </label>
                        <label class="w3-large"> <?php echo $crs_code;?> </label>
                        <label class=" w3-margin-left "> Course Tiltle: </label>
                        <label class="w3-large"> <?php echo $crs_title;?> </label>
                        <label class=" w3-margin-left "> Course CRN: </label>
                        <label class="w3-large" > <?php echo $crs_id;?> </label>
						<h5 class=" w3-col "> Course Delivery </h5>
                        <h5 class=" w3-col "> Effectiveness of planned teaching strategies for intended learning outcomes set out in the course specification. ( Refer to planned teaching strategies in course specification and description of domains of learning outcomes in the national qualifications framework)</h5>
                        </div>
           <div class="w3-row w3-panel">
					
					
                        <table class="w3-table-all w3-center">
							<tr>
                        <th>List teaching methods set out in course specification: </th>
						<th>Were they effective ? YES or NO: </th>
						<th>Difficulties experienced ( if any )in using the strategy and suggested action to deal with those difficulties: </th>
						</tr>
							<tr>
                            <td><input class="w3-input w3-border w3-col  "  type="text" name="list_teach_method[]" required></td>
							 <td><input class="w3-input w3-border w3-col " type="text"  name="were_they_eff[]" required></td>
							 <td><input class="w3-input w3-border w3-col " type="text"  name="diff_action[]" required></td>
							</tr>
							<tr>
                            <td><input class="w3-input w3-border w3-col  "  type="text" name="list_teach_method[]" required></td>
							 <td><input class="w3-input w3-border w3-col " type="text"  name="were_they_eff[]" required></td>
							 <td><input class="w3-input w3-border w3-col " type="text"  name="diff_action[]" required></td>
							</tr>
							<tr>
                            <td><input class="w3-input w3-border w3-col  "  type="text" name="list_teach_method[]" required></td>
							 <td><input class="w3-input w3-border w3-col " type="text"  name="were_they_eff[]" required></td>
							 <td><input class="w3-input w3-border w3-col " type="text"  name="diff_action[]" required></td>
							</tr>
							<tr>
                            <td><input class="w3-input w3-border w3-col  "  type="text" name="list_teach_method[]" required></td>
							 <td><input class="w3-input w3-border w3-col " type="text"  name="were_they_eff[]" required></td>
							 <td><input class="w3-input w3-border w3-col " type="text"  name="diff_action[]" required></td>
							</tr>
							<tr>
                            <td><input class="w3-input w3-border w3-col  "  type="text" name="list_teach_method[]" required></td>
							 <td><input class="w3-input w3-border w3-col " type="text"  name="were_they_eff[]" required></td>
							 <td><input class="w3-input w3-border w3-col " type="text"  name="diff_action[]" required></td>
							</tr>
							
						</table>
					</div>
                

            <button class="w3-margin-top w3-button w3-round-xlarge w3-blue w3-right " id='next_13' name="next_13" >Next</button>
			<button class="w3-margin-top w3-button w3-round-xlarge w3-blue" id='back_12' name="back_12" >Back</button>
			
            
            </div><!--  PART 13 END-->
			
			<div id="part_14" ><!--  PART 14 START-->
            <label class=" w3-margin-left "> PART 14 </label>

           <div class="w3-row w3-panel">


                        <label class=" w3-margin-left "> Course Code: </label>
                        <label class="w3-large"> <?php echo $crs_code;?> </label>
                        <label class=" w3-margin-left "> Course Tiltle: </label>
                        <label class="w3-large"> <?php echo $crs_title;?> </label>
                        <label class=" w3-margin-left "> Course CRN: </label>
                        <label class="w3-large" > <?php echo $crs_id;?> </label>
						<h5 class=" w3-col "> Results </h5>
                        <h5 class=" w3-col "> Distribution of grades</h5>
                        </div>
           <div class="w3-row w3-panel">
					
					<table class="w3-table-all w3-center">
						<tr>
                        <th>Letter Grade</th>
						<th>Number Of Students</th>
						<th>Student Percentage</th>
						<th>Analysis of distirbution of grades</th>
						</tr>
                        <tr>
						<td><input class="w3-input w3-border w3-col " type="text"  name="gd_lg[]"  value="A+"></td>
						<td><input class="w3-input w3-border w3-col " type="number"  name="dg_no_of_std[]" required></td>
						<td><input class="w3-input w3-border w3-col " type="number"  name="dg_std_per[]" required></td>
						<td><input class="w3-input w3-border w3-col " type="text"  name="dg_analysis[]" required></td>
						</tr>
						<tr>
						<td><input class="w3-input w3-border w3-col " type="text"  name="gd_lg[]"  value="A"></td>
						<td><input class="w3-input w3-border w3-col " type="number"  name="dg_no_of_std[]" required></td>
						<td><input class="w3-input w3-border w3-col " type="number"  name="dg_std_per[]" required></td>
						<td><input class="w3-input w3-border w3-col " type="text"  name="dg_analysis[]" required></td>
						</tr>
						<tr>
						<td><input class="w3-input w3-border w3-col " type="text"  name="gd_lg[]"  value="B+"></td>
						<td><input class="w3-input w3-border w3-col " type="number"  name="dg_no_of_std[]" required></td>
						<td><input class="w3-input w3-border w3-col " type="number"  name="dg_std_per[]" required></td>
						<td><input class="w3-input w3-border w3-col " type="text"  name="dg_analysis[]" required></td>
						</tr>
						<tr>
						<td><input class="w3-input w3-border w3-col " type="text"  name="gd_lg[]"  value="B"></td>
						<td><input class="w3-input w3-border w3-col " type="number"  name="dg_no_of_std[]" required></td>
						<td><input class="w3-input w3-border w3-col " type="number"  name="dg_std_per[]" required></td>
						<td><input class="w3-input w3-border w3-col " type="text"  name="dg_analysis[]" required></td>
						</tr>
						<tr>
						<td><input class="w3-input w3-border w3-col " type="text"  name="gd_lg[]"  value="C+"></td>
						<td><input class="w3-input w3-border w3-col " type="number"  name="dg_no_of_std[]" required></td>
						<td><input class="w3-input w3-border w3-col " type="number"  name="dg_std_per[]" required></td>
						<td><input class="w3-input w3-border w3-col " type="text"  name="dg_analysis[]" required></td>
						</tr>
                        <tr>
						<td><input class="w3-input w3-border w3-col " type="text"  name="gd_lg[]"  value="C"></td>
						<td><input class="w3-input w3-border w3-col " type="number"  name="dg_no_of_std[]" required></td>
						<td><input class="w3-input w3-border w3-col " type="number"  name="dg_std_per[]" required></td>
						<td><input class="w3-input w3-border w3-col " type="text"  name="dg_analysis[]" required></td>
						</tr>
                        <tr>
						<td><input class="w3-input w3-border w3-col " type="text"  name="gd_lg[]"  value="D+"></td>
						<td><input class="w3-input w3-border w3-col " type="number"  name="dg_no_of_std[]" required></td>
						<td><input class="w3-input w3-border w3-col " type="number"  name="dg_std_per[]" required></td>
						<td><input class="w3-input w3-border w3-col " type="text"  name="dg_analysis[]" required></td>
						</tr>
                        <tr>
						<td><input class="w3-input w3-border w3-col " type="text"  name="gd_lg[]"  value="D"></td>
						<td><input class="w3-input w3-border w3-col " type="number"  name="dg_no_of_std[]" required></td>
						<td><input class="w3-input w3-border w3-col " type="number"  name="dg_std_per[]" required></td>
						<td><input class="w3-input w3-border w3-col " type="text"  name="dg_analysis[]" required></td>
						</tr>
                        <tr>
						<td><input class="w3-input w3-border w3-col " type="text"  name="gd_lg[]"  value="F"></td>
						<td><input class="w3-input w3-border w3-col " type="number"  name="dg_no_of_std[]" required></td>
						<td><input class="w3-input w3-border w3-col " type="number"  name="dg_std_per[]" required></td>
						<td><input class="w3-input w3-border w3-col " type="text"  name="dg_analysis[]" required></td>
						</tr>
                        <tr>
						<td><input class="w3-input w3-border w3-col " type="text"  name="gd_lg[]"  value="Denied Entry"></td>
						<td><input class="w3-input w3-border w3-col " type="number"  name="dg_no_of_std[]" required></td>
						<td><input class="w3-input w3-border w3-col " type="number"  name="dg_std_per[]" required></td>
						<td><input class="w3-input w3-border w3-col " type="text"  name="dg_analysis[]" required></td>
						</tr>
                        <tr>
						<td><input class="w3-input w3-border w3-col " type="text"  name="gd_lg[]"  value="In progress"></td>
						<td><input class="w3-input w3-border w3-col " type="number"  name="dg_no_of_std[]" required></td>
						<td><input class="w3-input w3-border w3-col " type="number"  name="dg_std_per[]" required></td>
						<td><input class="w3-input w3-border w3-col " type="text"  name="dg_analysis[]" required></td>
						</tr>
                         <tr>
						<td><input class="w3-input w3-border w3-col " type="text"  name="gd_lg[]"  value="Incomplete"></td>
						<td><input class="w3-input w3-border w3-col " type="number"  name="dg_no_of_std[]" required></td>
						<td><input class="w3-input w3-border w3-col " type="number"  name="dg_std_per[]" required></td>
						<td><input class="w3-input w3-border w3-col " type="text"  name="dg_analysis[]" required></td>
						</tr>
                        <tr>
						<td><input class="w3-input w3-border w3-col " type="text"  name="gd_lg[]"  value="Pass"></td>
						<td><input class="w3-input w3-border w3-col " type="number"  name="dg_no_of_std[]" required></td>
						<td><input class="w3-input w3-border w3-col " type="number"  name="dg_std_per[]" required></td>
						<td><input class="w3-input w3-border w3-col " type="text"  name="dg_analysis[]" required></td>
						</tr>
                        <tr>
						<td><input class="w3-input w3-border w3-col " type="text"  name="gd_lg[]"  value="Fail"></td>
						<td><input class="w3-input w3-border w3-col " type="number"  name="dg_no_of_std[]" required></td>
						<td><input class="w3-input w3-border w3-col " type="number"  name="dg_std_per[]" required></td>
						<td><input class="w3-input w3-border w3-col " type="text"  name="dg_analysis[]" required></td>
						</tr>
                        <tr>
						<td><input class="w3-input w3-border w3-col " type="text"  name="gd_lg[]"  value="Withdrawn"></td>
						<td><input class="w3-input w3-border w3-col " type="number"  name="dg_no_of_std[]" required></td>
						<td><input class="w3-input w3-border w3-col " type="number"  name="dg_std_per[]" required></td>
						<td><input class="w3-input w3-border w3-col " type="text"  name="dg_analysis[]" required></td>
						</tr>
                        
					</table>	
					
					 <h5 class=" w3-col "> Analysis of special factors (if any) affecting the results:</h5>
					 <textarea class="w3-input w3-border w3-col "   name="dg_special_factors" required></textarea>
					</div>
                

            <button class="w3-margin-top w3-button w3-round-xlarge w3-blue w3-right " id='next_14' name="next_14" >Next</button>
			<button class="w3-margin-top w3-button w3-round-xlarge w3-blue" id='back_13' name="back_13" >Back</button>
			
            
            </div><!--  PART 14 END-->
			
			<div id="part_15" ><!--  PART 15 START-->
            <label class=" w3-margin-left "> PART 15 </label>

           <div class="w3-row w3-panel">


                        <label class=" w3-margin-left "> Course Code: </label>
                        <label class="w3-large"> <?php echo $crs_code;?> </label>
                        <label class=" w3-margin-left "> Course Tiltle: </label>
                        <label class="w3-large"> <?php echo $crs_title;?> </label>
                        <label class=" w3-margin-left "> Course CRN: </label>
                        <label class="w3-large" > <?php echo $crs_id;?> </label>
						<h5 class=" w3-col "> Results </h5>
                        <h5 class=" w3-col "> Variations from planned students assessment processes (if any) (see course specification)</h5>
                        </div>
           <div class="w3-row w3-panel">
					<h5>a.Variations (if any) from planned assessment schedule (see course specification) </h5>
					<input type="hidden" name="dg_vari_process[]" value="a.Variations (if any) from planned assessment schedule (see course specification)" >
					<table class="w3-table-all w3-center">
						<tr>
                        <th>Variation</th>
						<th>Reason</th>
						
						</tr>
                        <tr>
						<td><input class="w3-input w3-border w3-col " type="text"  name="dg_variation[]" required></td>
						<td><input class="w3-input w3-border w3-col " type="text"  name="dg_vari_reason[]" required></td>
						</tr>
						</table>
						<h5>b. Variations (if any) from planned assessment processes in domains of learning (see course specification) </h5>
						<input type="hidden" name="dg_vari_process[]" value="b. Variations (if any) from planned assessment processes in domains of learning (see course specification)" >
						<table class="w3-table-all w3-center">
						<tr>
                        <th>Variation</th>
						<th>Reason</th>
						</tr>
                        <tr>
						<td><input class="w3-input w3-border w3-col " type="text"  name="dg_variation[]" required></td>
						<td><input class="w3-input w3-border w3-col " type="text"  name="dg_vari_reason[]" required></td>
						</tr>
						
                        
					</table>	
					
					</div>
                

            <button class="w3-margin-top w3-button w3-round-xlarge w3-blue w3-right " id='next_15' name="next_15" >Next</button>
			<button class="w3-margin-top w3-button w3-round-xlarge w3-blue" id='back_14' name="back_14" >Back</button>
			
            
            </div><!--  PART 15 END-->
			
			<div id="part_16" ><!--  PART 16 START-->
            <label class=" w3-margin-left "> PART 16 </label>

           <div class="w3-row w3-panel">


                        <label class=" w3-margin-left "> Course Code: </label>
                        <label class="w3-large"> <?php echo $crs_code;?> </label>
                        <label class=" w3-margin-left "> Course Tiltle: </label>
                        <label class="w3-large"> <?php echo $crs_title;?> </label>
                        <label class=" w3-margin-left "> Course CRN: </label>
                        <label class="w3-large" > <?php echo $crs_id;?> </label>
						<h5 class=" w3-col "> Results </h5>
                        <h5 class=" w3-col "> Students grades achievement verification (eg. cross-check of grade validity by independent evaluator). </h5>
                        </div>
           <div class="w3-row w3-panel">
					
					<table class="w3-table-all w3-center">
						<tr>
                        <th>Methode(s) of verification </th>
						<th>Conclusion</th>
						
						</tr>
                        <tr>
						<td><textarea class="w3-input w3-border w3-col " type="text"  name="method_of_ver" required></textarea></td>
						<td><textarea class="w3-input w3-border w3-col " type="text"  name="dg_conclusion" required></textarea></td>
						</tr>
               </table>
							
					
					</div>
                

            <button class="w3-margin-top w3-button w3-round-xlarge w3-blue w3-right " id='next_16' name="next_16" >Next</button>
			<button class="w3-margin-top w3-button w3-round-xlarge w3-blue" id='back_15' name="back_15" >Back</button>
			
            
            </div><!--  PART 16 END-->
            
            <div id="part_17" ><!--  PART 17 START-->
            <label class=" w3-margin-left "> PART 17 </label>

           <div class="w3-row w3-panel">


                        <label class=" w3-margin-left "> Course Code: </label>
                        <label class="w3-large"> <?php echo $crs_code;?> </label>
                        <label class=" w3-margin-left "> Course Tiltle: </label>
                        <label class="w3-large"> <?php echo $crs_title;?> </label>
                        <label class=" w3-margin-left "> Course CRN: </label>
                        <label class="w3-large" > <?php echo $crs_id;?> </label>
						<h5 class=" w3-col "> Resources and Facilities </h5>
                        </div>
           <div class="w3-row w3-panel">
					
					<table class="w3-table-all w3-center">
						<tr>
                        <th>Difficulties in access to resources or facilities (if any) </th>
						<th>Consequences of any difficulities experienced for student learning in the course</th>
						
						</tr>
                        <tr>
						<td><textarea class="w3-input w3-border w3-col " type="text"  name="diff_in_access" required></textarea></td>
						<td><textarea class="w3-input w3-border w3-col " type="text"  name="rf_con_diff" required></textarea></td>
						</tr>
               </table>
							
					
					</div>
                

            <button class="w3-margin-top w3-button w3-round-xlarge w3-blue w3-right " id='next_17' name="next_17" >Next</button>
			<button class="w3-margin-top w3-button w3-round-xlarge w3-blue" id='back_16' name="back_16" >Back</button>
			
            
            </div><!--  PART 17 END-->
            
            <div id="part_18" ><!--  PART 18 START-->
            <label class=" w3-margin-left "> PART 18 </label>

           <div class="w3-row w3-panel">


                        <label class=" w3-margin-left "> Course Code: </label>
                        <label class="w3-large"> <?php echo $crs_code;?> </label>
                        <label class=" w3-margin-left "> Course Tiltle: </label>
                        <label class="w3-large"> <?php echo $crs_title;?> </label>
                        <label class=" w3-margin-left "> Course CRN: </label>
                        <label class="w3-large" > <?php echo $crs_id;?> </label>
						<h5 class=" w3-col "> Administrative Issues </h5>
                        </div>
           <div class="w3-row w3-panel">
					
					<table class="w3-table-all w3-center">
						<tr>
                        <th>Organizational or administrative difficulities encountered (if any) </th>
						<th>Consequences of any difficulities experienced for student learning in the course</th>
						
						</tr>
                        <tr>
						<td><textarea class="w3-input w3-border w3-col " type="text"  name="admin_diff_enc" required></textarea></td>
						<td><textarea class="w3-input w3-border w3-col " type="text"  name="admin_con_diff" required></textarea></td>
						</tr>
               </table>
							
					
					</div>
                

            <button class="w3-margin-top w3-button w3-round-xlarge w3-blue w3-right " id='next_18' name="next_18" >Next</button>
			<button class="w3-margin-top w3-button w3-round-xlarge w3-blue" id='back_17' name="back_17" >Back</button>
			
            
            </div><!--  PART 18 END -->
            
            <div id="part_19" ><!--  PART 19 START-->
            <label class=" w3-margin-left "> PART 19 </label>

           <div class="w3-row w3-panel">


                        <label class=" w3-margin-left "> Course Code: </label>
                        <label class="w3-large"> <?php echo $crs_code;?> </label>
                        <label class=" w3-margin-left "> Course Tiltle: </label>
                        <label class="w3-large"> <?php echo $crs_title;?> </label>
                        <label class=" w3-margin-left "> Course CRN: </label>
                        <label class="w3-large" > <?php echo $crs_id;?> </label>
						<h5 class=" w3-col "> Course Evaluation </h5>
                        </div>
				<div class="w3-row w3-panel">
					<h5 class=" w3-col "> 1. Students evaluation of the course ( Attach summry of survey result) </h5>
					<table class="w3-table-all w3-center">
						<tr>
                        <th>List the most important recommendations for improvement and strengths </th>
						<th>Response of instructor or course team to this evaluation</th>
						
						</tr>
                        <tr>
						<td><textarea class="w3-input w3-border w3-col " type="text"  name="ce_list_imp" required></textarea></td>
						<td><textarea class="w3-input w3-border w3-col " type="text"  name="ce_response" required></textarea></td>
						</tr>
                    </table>
                    
                    <h5 class=" w3-col "> 2. Other evaluation (eg. by head of department, peer observations, accrediation review, other stakeholders) </h5>
					<table class="w3-table-all w3-center">
						<tr>
                        <th>List the most important recommendations for improvement and strengths </th>
						<th>Response of instructor or course team to this evaluation</th>
						
						</tr>
                        <tr>
						<td><textarea class="w3-input w3-border w3-col " type="text"  name="other_ce_imp" required></textarea></td>
						<td><textarea class="w3-input w3-border w3-col " type="text"  name="other_ce_response" required></textarea></td>
						</tr>
                    </table>
							
					
					</div>
                

				<button class="w3-margin-top w3-button w3-round-xlarge w3-blue w3-right " id='next_19' name="next_19" >Next</button>
				<button class="w3-margin-top w3-button w3-round-xlarge w3-blue" id='back_18' name="back_18" >Back</button>
			
            
            </div><!--  PART 19 END -->
            
            
            <div id="part_20" ><!--  PART 20 START-->
            <label class=" w3-margin-left "> PART 20 </label>

           <div class="w3-row w3-panel">


                        <label class=" w3-margin-left "> Course Code: </label>
                        <label class="w3-large"> <?php echo $crs_code;?> </label>
                        <label class=" w3-margin-left "> Course Tiltle: </label>
                        <label class="w3-large"> <?php echo $crs_title;?> </label>
                        <label class=" w3-margin-left "> Course CRN: </label>
                        <label class="w3-large" > <?php echo $crs_id;?> </label>
						<h5 class=" w3-col "> Planning for improvement </h5>
                        </div>
				<div class="w3-row w3-panel">
					<h5 class=" w3-col "> 1. Progress on actions proposed for improvement the course in previous course reports (if any) </h5>
					<table class="w3-table-all w3-center">
						<tr>
                        <th>Action recommended from the most recent report(s) </th>
						<th>Action taken</th>
						<th>Action results</th>
						<th>Action analysis</th>
						
						</tr>
                        <tr>
						<td><textarea class="w3-input w3-border w3-col " type="text"  name="poi_action_recom[]" required></textarea></td>
						<td><textarea class="w3-input w3-border w3-col " type="text"  name="poi_action_taken[]" required></textarea></td>
						<td><textarea class="w3-input w3-border w3-col " type="text"  name="poi_action_result[]" required></textarea></td>
						<td><textarea class="w3-input w3-border w3-col " type="text"  name="poi_action_analy[]" required></textarea></td>
						</tr>
                   <tr>
						<td><textarea class="w3-input w3-border w3-col " type="text"  name="poi_action_recom[]" required></textarea></td>
						<td><textarea class="w3-input w3-border w3-col " type="text"  name="poi_action_taken[]" required></textarea></td>
						<td><textarea class="w3-input w3-border w3-col " type="text"  name="poi_action_result[]" required></textarea></td>
						<td><textarea class="w3-input w3-border w3-col " type="text"  name="poi_action_analy[]" required></textarea></td>
						</tr>
                   <tr>
						<td><textarea class="w3-input w3-border w3-col " type="text"  name="poi_action_recom[]" required></textarea></td>
						<td><textarea class="w3-input w3-border w3-col " type="text"  name="poi_action_taken[]" required></textarea></td>
						<td><textarea class="w3-input w3-border w3-col " type="text"  name="poi_action_result[]" required></textarea></td>
						<td><textarea class="w3-input w3-border w3-col " type="text"  name="poi_action_analy[]" required></textarea></td>
						</tr>
                   <tr>
						<td><textarea class="w3-input w3-border w3-col " type="text"  name="poi_action_recom[]" required></textarea></td>
						<td><textarea class="w3-input w3-border w3-col " type="text"  name="poi_action_taken[]" required></textarea></td>
						<td><textarea class="w3-input w3-border w3-col " type="text"  name="poi_action_result[]" required></textarea></td>
						<td><textarea class="w3-input w3-border w3-col " type="text"  name="poi_action_analy[]" required></textarea></td>
						</tr>
                   
                    </table>
                    
                    <h5 class=" w3-col "> 2. List what other actions have been taken to improve the course (based on pervious CR, surveys, independent opinin, or course evaluation) </h5>
					<textarea class="w3-input w3-border w3-col " type="text"  name="poi_list_other_action" required></textarea>
							
					
					</div>
                

				<button class="w3-margin-top w3-button w3-round-xlarge w3-blue w3-right " id='next_20' name="next_20" >Next</button>
				<button class="w3-margin-top w3-button w3-round-xlarge w3-blue" id='back_19' name="back_19" >Back</button>
			
            
            </div><!--  PART 20 END -->
            
             <div id="part_21" ><!--  PART 21 START-->
            <label class=" w3-margin-left "> PART 21 </label>

           <div class="w3-row w3-panel">


                        <label class=" w3-margin-left "> Course Code: </label>
                        <label class="w3-large"> <?php echo $crs_code;?> </label>
                        <label class=" w3-margin-left "> Course Tiltle: </label>
                        <label class="w3-large"> <?php echo $crs_title;?> </label>
                        <label class=" w3-margin-left "> Course CRN: </label>
                        <label class="w3-large" > <?php echo $crs_id;?> </label>
						<h5 class=" w3-col "> Planning for improvement </h5>
                        </div>
				<div class="w3-row w3-panel">
					<h5 class=" w3-col "> 3. Action plan for next semester/year </h5>
					<table class="w3-table-all w3-center">
						<tr>
                        <th>Action recommended for further improvement </th>
						<th>Intended action points (should be measurable)</th>
						<th>Start date</th>
						<th>Completion date</th>
						<th>Person resposible</th>
						
						</tr>
                        <tr>
						<td><textarea class="w3-input w3-border w3-col " type="text"  name="poi_action_recom_imp[]" required></textarea></td>
						<td><textarea class="w3-input w3-border w3-col " type="text"  name="poi_intent_action[]" required></textarea></td>
						<td><input class="w3-input w3-border w3-col " type="date"  name="poi_start_date[]" required></td>
						<td><input class="w3-input w3-border w3-col " type="date"  name="poi_comp_date[]" required></td>
						<td><input class="w3-input w3-border w3-col " type="text"  name="poi_person_resp[]" required></td>
						</tr>
                 <tr>
						<td><textarea class="w3-input w3-border w3-col " type="text"  name="poi_action_recom_imp[]" required></textarea></td>
						<td><textarea class="w3-input w3-border w3-col " type="text"  name="poi_intent_action[]" required></textarea></td>
						<td><input class="w3-input w3-border w3-col " type="date"  name="poi_start_date[]" required></td>
						<td><input class="w3-input w3-border w3-col " type="date"  name="poi_comp_date[]" required></td>
						<td><input class="w3-input w3-border w3-col " type="text"  name="poi_person_resp[]" required></td>
						</tr>
                 <tr>
						<td><textarea class="w3-input w3-border w3-col " type="text"  name="poi_action_recom_imp[]" required></textarea></td>
						<td><textarea class="w3-input w3-border w3-col " type="text"  name="poi_intent_action[]" required></textarea></td>
						<td><input class="w3-input w3-border w3-col " type="date"  name="poi_start_date[]" required></td>
						<td><input class="w3-input w3-border w3-col " type="date"  name="poi_comp_date[]" required></td>
						<td><input class="w3-input w3-border w3-col " type="text"  name="poi_person_resp[]" required></td>
						</tr>
                 <tr>
						<td><textarea class="w3-input w3-border w3-col " type="text"  name="poi_action_recom_imp[]" required></textarea></td>
						<td><textarea class="w3-input w3-border w3-col " type="text"  name="poi_intent_action[]" required></textarea></td>
						<td><input class="w3-input w3-border w3-col " type="date"  name="poi_start_date[]" required></td>
						<td><input class="w3-input w3-border w3-col " type="date"  name="poi_comp_date[]" required></td>
						<td><input class="w3-input w3-border w3-col " type="text"  name="poi_person_resp[]" required></td>
						</tr>
                 <tr>
						<td><textarea class="w3-input w3-border w3-col " type="text"  name="poi_action_recom_imp[]" required></textarea></td>
						<td><textarea class="w3-input w3-border w3-col " type="text"  name="poi_intent_action[]" required></textarea></td>
						<td><input class="w3-input w3-border w3-col " type="date"  name="poi_start_date[]" required></td>
						<td><input class="w3-input w3-border w3-col " type="date"  name="poi_comp_date[]" required></td>
						<td><input class="w3-input w3-border w3-col " type="text"  name="poi_person_resp[]" required></td>
						</tr>
                 
                  
                   
                    </table>
                    
							
					
					</div>
                

				<button class="w3-margin-top w3-button w3-round-xlarge w3-blue w3-right " id='add' name="add"  type="submit" >Submit Report</button>
				<button class="w3-margin-top w3-button w3-round-xlarge w3-blue" id='back_20' name="back_20" >Back</button>
			
            
            </div><!--  PART 21 END -->
            
	
</form> <!-- FORM END -->
           
           <?php
            if(isset($_POST['add'])){
                
                include "$_SERVER[DOCUMENT_ROOT]/project/functions/t5.php";
                
                $report_id = addT5Part1($_POST['institution'], $_POST['no_of_std_start'], $_POST['no_of_std_comp'], $_POST['date_comp'], $user_id, $crs_id);
                
               $part2=  addT5Part2($_POST['lecture_ch'], $_POST['tutorial_ch'], $_POST['lab_ch'], $_POST['practical_ch'], $_POST['other_ch'], $_POST['total_ch'], $report_id);
                
                $part3 = addT5Part3($_POST['lecture_credit'], $_POST['tutorial_credit'], $_POST['lab_credit'], $_POST['practical_credit'], $_POST['other_credit'], $_POST['total_credit'], $report_id);
                
                //-------------------------------
                $count = count($_POST['cd_week']);
                
                for($i=0; $i<$count; $i++){
                    
                $part4= addT5Part4($_POST['cd_week'][$i], $_POST['topic_cover'][$i], $_POST['plan_ch'][$i], $_POST['act_ch'][$i], $_POST['variation'][$i], $report_id);
                                                    
                
                }
                //--------------------------------
                
                
                $part11 = addT5Part11($_POST['topic_not_cover'], $_POST['eff_lrn_out'], $_POST['possible_action'], $report_id);
                
                $part12 = addT5Part12($_POST['list_lrn_out'], $_POST['list_assess_lo'], $_POST['summ_lo'], $_POST['summ_recomm'], $report_id);
                
                //---------------------------------
                
                $count = count($_POST['list_teach_method']);
                
                for($i=0; $i<$count; $i++){
                    
                $part13 = addT5Part13($_POST['list_teach_method'][$i], $_POST['were_they_eff'][$i], $_POST['diff_action'][$i], $report_id);
                
                }
                //---------------------------------
                
                $count = count($_POST['gd_lg']);
                
                for($i=0; $i<$count; $i++){
                $part14 = addT5Part14($_POST['gd_lg'][$i], $_POST['dg_no_of_std'][$i], $_POST['dg_std_per'][$i], $_POST['dg_analysis'][$i], $_POST['dg_special_factors'], $report_id);
                
                
                }
                //---------------------------------
                $count = count($_POST['dg_vari_process']);
                
                for($i=0; $i<$count; $i++){
                $part15 = addT5Part15($_POST['dg_vari_process'][$i], $_POST['dg_variation'][$i], $_POST['dg_vari_reason'][$i], $report_id);
                
                }
                //---------------------------------
                
                $part16 = addT5Part16($_POST['method_of_ver'], $_POST['dg_conclusion'], $report_id);
                
                $part17 = addT5Part17($_POST['diff_in_access'], $_POST['rf_con_diff'], $report_id);
                
                $part18 = addT5Part18($_POST['admin_diff_enc'], $_POST['admin_con_diff'], $report_id);
                
                $part19 = addT5Part19($_POST['ce_list_imp'], $_POST['ce_response'], $_POST['other_ce_imp'], $_POST['other_ce_response'], $report_id);
                //------------------------------------
                
                $count = count($_POST['poi_action_recom']);
                for($i=0; $i<$count; $i++){
                $part20 = addT5Part20($_POST['poi_action_recom'][$i], $_POST['poi_action_taken'][$i], $_POST['poi_action_result'][$i], $_POST['poi_action_analy'][$i], $report_id);
                
                }
                //----------------------------------
                $part20pt2 = addT5Part20pt2($_POST['poi_list_other_action'], $report_id);
                //-----------------------------------
                 $count = count($_POST['poi_action_recom_imp']);
                for($i=0; $i<$count; $i++){
                $part21 = addT5Part21($_POST['poi_action_recom_imp'][$i], $_POST['poi_intent_action'][$i], $_POST['poi_start_date'][$i], $_POST['poi_comp_date'][$i], $_POST['poi_person_resp'][$i], $report_id);
                
                
                }
                
                //-----------------------------------
                
                if ( $part2 && $part3 && $part4 && $part11 && $part12 && $part13 && $part14 && $part15 && $part16 && $part17 && $part18 && $part19 && $part20 && $part20pt2 && $part21 === true){
                    
                    echo "<div class='w3-panel w3-pale-green w3-round-large' role='alert'>T5 report Added successfuly!</div>";
                }  
                
            } 
            
            
            
            ?>
            

            </div><!-- Page Content End -->
          
	</body>
</html>
