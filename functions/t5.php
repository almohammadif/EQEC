<?php

function addT5Part1($insitiution, $no_of_std_start, $no_of_std_comp, $t5_report_date, $user_id, $crs_id){
    
    
    include "$_SERVER[DOCUMENT_ROOT]/project/config.php";
    
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "INSERT INTO `t5_report`( `institution`, `no_of_students_start`, `no_of_students_finish`, `t5_date_report_comp`, `users_has_courses1_users_users_ID`, `users_has_courses1_courses_course_ID`) VALUES ('$insitiution', '$no_of_std_start', '$no_of_std_comp', '$t5_report_date', '$user_id', '$crs_id')";
    
    if($conn->query($sql) === TRUE){
        $t5_report_id = $conn->insert_id;
        return $t5_report_id;
    }
        else { echo "Error: " . $sql . "<br>" . $conn->error;}
       
}

function addT5Part2($lecture_ch, $tutorial_ch, $lab_ch, $prac_ch, $other_ch, $total_ch, $report_id){
    
        include "$_SERVER[DOCUMENT_ROOT]/project/config.php";
    
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    
    $sql= "INSERT INTO `t5_course_components_contact_hours`(`t5_lecture_ch`, `t5_tutorial_ch`, `t5_lab_ch`, `t5_prac_ch`, `t5_other_ch`, `t5_total_ch`, `t5_report_t5_report_ID`) VALUES ('$lecture_ch', '$tutorial_ch', '$lab_ch', '$prac_ch', '$other_ch', '$total_ch', '$report_id')";
    
    if($conn->query($sql) === TRUE){
       
        return true;
    }
        else { echo "Error: " . $sql . "<br>" . $conn->error;}
    
}

function addT5Part3($lecture_cr, $tutorial_cr, $lab_cr, $prac_cr, $other_cr, $total_cr, $report_id){
    
    include "$_SERVER[DOCUMENT_ROOT]/project/config.php";
    
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    
   $sql="INSERT INTO `t5_course_components_credit_hours`(`t5_lecture_credit_h`, `t5_tutorial_credit_h`, `t5_lab_credit_h`, `t5_prac_credit_h`, `t5_other_credit_h`, `t5_total_credit_h`, `t5_report_t5_report_ID`) VALUES ('$lecture_cr', '$tutorial_cr', '$lab_cr', '$prac_cr', '$other_cr', '$total_cr', '$report_id')";
    
     if($conn->query($sql) === TRUE){
       
        return true;
    }
        else { echo "Error: " . $sql . "<br>" . $conn->error;}
    
}


function addT5Part4($week, $topic_cover, $planned_ch, $actual_ch, $variation, $report_id){
    include "$_SERVER[DOCUMENT_ROOT]/project/config.php";
    
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    
    
    
    
        
    $sql="INSERT INTO `t5_cd_coverage_of_planned_prog`(`t5_cd_week`, `t5_cd_topics_covered`, `t5_cd_planned_ch`, `t5_cd_actual_ch`, `t5_cd_variation`, `t5_report_t5_report_ID`) VALUES ('$week', '$topic_cover', '$planned_ch', '$actual_ch', '$variation', '$report_id')";
      
        if($conn->query($sql) === TRUE){
       
        return true;
                }
        else { echo "Error: " . $sql . "<br>" . $conn->error;}
        
        
    
}

function addT5Part11($topic_not_cover, $effective_lrn_out, $possible_actio, $report_id){
    include "$_SERVER[DOCUMENT_ROOT]/project/config.php";
    
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    
    $sql="INSERT INTO `t5_cd_cons_of_non_cov_topics`(`t5_cd_topics_not_fully_covered`, `t5_cd_effected_lrn_out`, `t5_cd_possible_action`, `t5_report_t5_report_ID`) VALUES ('$topic_not_cover', '$effective_lrn_out', '$possible_actio', '$report_id')";
    
    if($conn->query($sql) === TRUE){
       
        return true;
                }
        else { echo "Error: " . $sql . "<br>" . $conn->error;}
      
}


function addT5Part12($list_lrn_out, $list_asses_lo, $cd_summ, $summ_recom, $report_id){
    include "$_SERVER[DOCUMENT_ROOT]/project/config.php";
    
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    
    $sql="INSERT INTO `t5_cd_course_lrn_out_asses`(`t5_cd_list_lrn_out`, `t5_cd_list_asses_lo`, `t5_cd_summ`, `t5_cd_summ_recom`, `t5_report_t5_report_ID`) VALUES ('$list_lrn_out', '$list_asses_lo', '$cd_summ', '$summ_recom', '$report_id')";
    
    if($conn->query($sql) === TRUE){
       
        return true;
                }
        else { echo "Error: " . $sql . "<br>" . $conn->error;}
    
}

function addT5Part13($list_teach_method, $were_they_eff, $diff_action, $report_id){
    include "$_SERVER[DOCUMENT_ROOT]/project/config.php";
    
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    
    
    
    
    
        $sql="INSERT INTO `t5_cd_effc_teach_stra`(`t5_cd_list_teach_methods`, `t5_cd_were_they_effc`, `t5_cd_diff_action`, `t5_report_t5_report_ID`) VALUES ('$list_teach_method', '$were_they_eff', '$diff_action', '$report_id')";
    
        if($conn->query($sql) === TRUE){
       
        return true;
                }
        else { echo "Error: " . $sql . "<br>" . $conn->error;}
    
    
}

function addT5Part14($dg_lg, $no_of_std, $std_per, $dg_analysis, $special_factor, $report_id){
    include "$_SERVER[DOCUMENT_ROOT]/project/config.php";
    
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
     
       
        $sql="INSERT INTO `t5_dis_grades`(`t5_dg_lg`, `t5_dg_no_of_students`, `t5_dg_students_per`, `t5_dg_analysis`, `t5_dg_special_factors`, `t5_report_t5_report_ID`) VALUES ('$dg_lg', '$no_of_std', '$std_per', '$dg_analysis', '$special_factor', '$report_id')";
        
        if($conn->query($sql) === TRUE){
       
        return true;
                }
        else { echo "Error: " . $sql . "<br>" . $conn->error;}
    
}

function addT5Part15($vari_process, $vari, $vari_reson, $report_id){
    include "$_SERVER[DOCUMENT_ROOT]/project/config.php";
    
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    
        
        $sql="INSERT INTO `t5_dg_variation_students_asses_process`(`t5_dg_variation_process`, `t5_dg_variation`, `t5_dg_variation_reason`, `t5_report_t5_report_ID`) VALUES ('$vari_process', '$vari', '$vari_reson', '$report_id')";
        
        if($conn->query($sql) === TRUE){
       
        return true;
                }
        else { echo "Error: " . $sql . "<br>" . $conn->error;}
     
}

function addT5Part16($method_ver, $dg_conclusion, $report_id){
    include "$_SERVER[DOCUMENT_ROOT]/project/config.php";
    
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    
    $sql="INSERT INTO `t5_dg_students_grade_ver`(`t5_dg_method_of_ver`, `t5_dg_conclusion`, `t5_report_t5_report_ID`) VALUES ('$method_ver', '$dg_conclusion', '$report_id')";
    
     if($conn->query($sql) === TRUE){
       
        return true;
                }
        else { echo "Error: " . $sql . "<br>" . $conn->error;}
     
}

function addT5Part17($diff_in_access, $cons_diff, $report_id){
     include "$_SERVER[DOCUMENT_ROOT]/project/config.php";
    
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    
    $sql="INSERT INTO `t5_resource_facilities`(`t5_rf_diff_in_access`, `t5_rf_cons_diff`, `t5_report_t5_report_ID`) VALUES ('$diff_in_access', '$cons_diff', '$report_id')";
    
    if($conn->query($sql) === TRUE){
       
        return true;
                }
        else { echo "Error: " . $sql . "<br>" . $conn->error;}
    
}


function addT5Part18($admin_org_diff, $admin_cons_diff, $report_id){
    include "$_SERVER[DOCUMENT_ROOT]/project/config.php";
    
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    
    $sql="INSERT INTO `t5_admin_issues`(`t5_admin_org_diff`, `t5_admin_cons_diff`, `t5_report_t5_report_ID`) VALUES ('$admin_org_diff', '$admin_cons_diff', '$report_id')";
    
    if($conn->query($sql) === TRUE){
       
        return true;
                }
        else { echo "Error: " . $sql . "<br>" . $conn->error;}
    
}

function addT5Part19($ce_list_imp, $ce_response, $ce_other_imp, $ce_other_response, $report_id){
    include "$_SERVER[DOCUMENT_ROOT]/project/config.php";
    
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    
    $sql="INSERT INTO `t5_ce_students_eva`(`t5_ce_list_imp_recom`, `t5_ce_response`, `t5_report_t5_report_ID`) VALUES ('$ce_list_imp', '$ce_response', '$report_id');";
    $sql .= "INSERT INTO `t5_ce_other_eva`(`t5_ce_list_imp_recom`, `t5_ce_response`, `t5_report_t5_report_ID`) VALUES ('$ce_other_imp', '$ce_other_response', '$report_id')";
    
   if( $conn->multi_query($sql) === TRUE){
       
        return true;
                }
        else { echo "Error: " . $sql . "<br>" . $conn->error;}
   
}

function addT5Part20($action_recom, $action_taken, $action_result, $action_analy, $report_id){
    
    include "$_SERVER[DOCUMENT_ROOT]/project/config.php";
    
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    
    
    
        
        $sql="INSERT INTO `t5_poi_prog_on_actions`(`t5_poi_action_recom`, `t5_poi_action_taken`, `t5_poi_action_results`, `t5_poi_action_analysis`, `t5_report_t5_report_ID`) VALUES ('$action_recom', '$action_taken', '$action_result', '$action_analy', '$report_id')";
        
        if($conn->query($sql) === TRUE){
       
        return true;
                }
        else { echo "Error: " . $sql . "<br>" . $conn->error;}
  
}

function addT5Part20pt2($poi_other_action, $report_id){
    
    include "$_SERVER[DOCUMENT_ROOT]/project/config.php";
    
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    
    $sql="INSERT INTO `t5_poi_other_actions`(`t5_poi_list_other_actions`, `t5_report_t5_report_ID`) VALUES ('$poi_other_action', '$report_id')";
    
    if($conn->query($sql) === TRUE){
       
        return true;
                }
        else { echo "Error: " . $sql . "<br>" . $conn->error;}
    
}

function addT5Part21($poi_action_recom, $poi_intent_action, $poi_start_date, $poi_comp_date, $poi_per_resp, $report_id){
    
    include "$_SERVER[DOCUMENT_ROOT]/project/config.php";
    
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
        
        $sql="INSERT INTO `t5_poi_action_plan_for_nxt_sem`(`t5_poi_action_recom_imp`, `t5_poi_intent_action`, `t5_poi_start_date`, `t5_poi_comp_date`, `t5_poi_person_resp`, `t5_report_t5_report_ID`) VALUES ('$poi_action_recom', '$poi_intent_action', '$poi_start_date', '$poi_comp_date', '$poi_per_resp', '$report_id')";
        
        if($conn->query($sql) === TRUE){
       
        return true;
                }
        else { echo "Error: " . $sql . "<br>" . $conn->error;}
      
}

function getT5($user_id, $crs_id){
    
    include "$_SERVER[DOCUMENT_ROOT]/project/config.php";
    
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    
    $sql= "SELECT * FROM `t5_report` WHERE t5_report.users_has_courses1_users_users_ID = '$user_id' AND t5_report.users_has_courses1_courses_course_ID='$crs_id'";
    
    $result= $conn->query($sql);
    
    return $result;
    
}


function deleteT5($report_id){
    include "$_SERVER[DOCUMENT_ROOT]/project/config.php";
    
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "DELETE FROM `t5_report` WHERE t5_report_ID = '$report_id'";
    
    if($conn->query($sql) === TRUE){
       
       echo "<div class='w3-panel w3-pale-green w3-round-large' role='alert'>T5 Report Deleted successfuly!</div>";
        
                }
        else { echo "Error: " . $sql . "<br>" . $conn->error;}
    
}


?>