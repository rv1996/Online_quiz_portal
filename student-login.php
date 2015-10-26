<?php
	//require 'core.php';
	//echo $current_file;
	
	//this page contain the main login form...
	$entry_error = '';
	$combination_error = '';
		
	if($_SERVER["REQUEST_METHOD"]== "POST"){
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		
		
		if(!empty($user_name) && !empty($password)){
				
				
			$password = md5($password);
			// $query = "SELECT `user_name`, `password` FROM `student_info` WHERE StudentNumber = '$user_name' AND password = '$password' ";
			 $query = "SELECT * FROM `student_info` WHERE StudentNumber = '$user_name' AND password = '$password' ";
			 // echo mysql_query("use oqp");
			 // echo mysql_query($query); for testing of the query
			 $query_run = mysql_query($query);
			 $mysql_row =mysql_num_rows($query_run);
			 
			 
			 if($mysql_row == 0){
				 $combination_error =  "invalid entry combination of username and password";
			 }
			

				if($mysql_row == 1){
					$query_result = mysql_fetch_array($query_run);
					$_SESSION['user_name'] = $query_result['Name'];
					$_SESSION['student_data'] = $query_result;
					
					header("Location: page1.php");
					//print_r($query_result); check that we are getting the or not
				}
			
			
			
		}else{
			$entry_error = "Enter the Student Number and Password<br>";
		}
	}
	
	?>

<html>
<link href="style.css" type="text/css" rel="stylesheet">
<link href="login.css" type="text/css" rel="stylesheet">
<script src="javascript.js"></script>
<link href='https://fonts.googleapis.com/css?family=Exo:400,300' rel='stylesheet' type='text/css'>
<body>

<?php include "navigation.php";?>

<nav id="login_main_box">
	<form action="<?php echo $current_file?>" method="POST" id="student_login">
	
			<h2>Student Login</h2>
					
			<label><center><?php echo $entry_error.'<br>';?><?php echo $combination_error;?></center></label>
			<input class="form-input" type="text" name="user_name" placeHolder="Student Number"><br>
			<input class="form-input" type="password" name="password" placeHolder="Password"> <br> 
			
            <button  class="form-input" type="submit" name="submit">Sign In</button><br><br>
			<label class="form-input">Not a member, <a href="student-register.php">Register</a> Here</label>
	
	</form>
</nav>
</body>
</html>
