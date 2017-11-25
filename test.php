
<?php

////echo md5("123");
////
//include "$_SERVER[DOCUMENT_ROOT]/project/functions/roles.php"; 
////
//var_dump(getRole('1'));
//$test = getRole('1');
//
//
//echo implode(",",$test);

//echo displayRole('1');

 
    include "$_SERVER[DOCUMENT_ROOT]/project/config.php";
    // Check connection
		if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
    $user_id ="1";
    $sql = "SELECT courses_course_ID FROM users_has_courses1 WHERE users_users_ID = '1'";
    $result = $conn->query($sql);
//    echo $result->num_rows;
    while($row= $result->fetch_assoc()){
    
    $sql_ = "SELECT course_title FROM courses WHERE course_ID = '".$row['courses_course_ID']."'";
    $result_ = $conn->query($sql_);
    $row_= $result_->fetch_assoc();
    echo $row_['course_title']."</br>";
    }


//$sql = "SELECT * FROM roles_has_users WHERE users_users_ID = '1'";
//    $result = $conn->query($sql);
////    echo $result->num_rows;
//    while($row= $result->fetch_assoc()){
//    
//    $sql_ = "SELECT role_name FROM roles WHERE role_ID = '".$row['roles_role_ID']."'";
//    $result_ = $conn->query($sql_);
//    $row_= $result_->fetch_assoc();
//    echo $row_['role_name']."</br>";
//    }
?>
<!--
<script src="../project/js/jquery-3.2.1.min.js"></script>
<body>
<select class="w3-select w3-border" name="dept" id='selopt' required>
                    
                    
                    
                       </select>
                       <script>
                           $(document).ready(function(){
    $.get("ajax/dept_ajax.php",function(data){
        var obj = jQuery.parseJSON(data);
        var len = data.length;
        var sel =$( "#selopt" );
    for( var i=0; i<len; i++){
        sel.append( '<option value="' + obj[i].dept_id + '">' + obj[i].dept_name + '</option>' ); 
    }
        
    });
},"json");
          
</script>
</body>-->
