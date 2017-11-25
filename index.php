<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<!-- Bootstrap core CSS -->
		<link href="../project/css/w3.css" rel="stylesheet">
		<link href="../project/css/font-awesome.min.css" rel="stylesheet">
<!--		<link href="../project/css/signin.css" rel="stylesheet">-->
	</head>
	<body style='background-color:#eee'>
		<!-- Container Begin -->
		<div class="w3-container w3-col s4 w3-display-middle w3-center">
			<form class="form-signin" action="index.php" method="POST">
			<div class="w3-panel w3-white w3-card-4 w3-padding w3-round-xlarge">
			<?php
                //Start the session
			session_start();
            // Check if the login button clicked
	   if (isset($_POST["login"])){
           
           if(!isset($_POST["role"])){
               echo "<div class='w3-panel w3-pale-red w3-round-large' role='alert'>No role selected! </div>";
               
           }else{
           // call the login function
           include "functions/login.php";
           login($_POST["username"],$_POST["password"],$_POST["role"]);   
       }
       }
           ?>
				<img class="w3-image" src="../project/img/logo.png" alt="SEU">
				<div class="w3-row w3-section">
                <div class="w3-col" style="width:50px"><i class="fa fa-user-o fa-fw fa-2x w3-text-blue" aria-hidden="true"></i></div>
                <div class="w3-rest">
                   <input type="text" id="inputEmail" class="w3-input w3-border" placeholder="Username" required autofocus name="username">
                    </div>
                </div>
				<div class="w3-row w3-section">
                <div class="w3-col" style="width:50px"><i class="fa fa-lock fa-fw fa-2x w3-text-blue" aria-hidden="true"></i></div>
                <div class="w3-rest">
				<input type="password" id="inputPassword" class="w3-input w3-border" placeholder="Password" required name="password">
				 </div>
                </div>
                <div class="w3-row w3-section">
                   <div class="w3-col" style="width:50px"><i class="fa fa-list fa-fw fa-2x w3-text-blue" aria-hidden="true"></i></div>
                   <div class="w3-rest">
                    <select class="w3-select w3-border" name="role"  required>
                    
                    <option disabled selected >Log in as ...</option>
                    <option value="1">Instructor</option>
                    <option value="2">Coordinator</option>
                    <option value="3">Quality Assurance Coordinator</option>
                    <option value="4">Admin</option>
                       </select></div>
                
                </div>
				<button class="w3-margin-top w3-button w3-round-xlarge w3-blue w3-block" type="submit" name="login">Login</button>
			</form>
                </div>
		<!-- Container End -->	
        </div>
	</body>
</html>