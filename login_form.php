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
			
				if($mysql_row ==1){
					$query_result = mysql_fetch_array($query_run);
					$_SESSION['user_name'] = $query_result['Name'];
					$_SESSION['student_data'] = $query_result;
					//echo 'hello'.$_SESSION['user_name'];
					header("Location: page1.php");
					//print_r($query_result); check that we are getting the or not
				}
			
			
			
		}else{
			$entry_error = "enter the username and password<br>";
		}
	}
	
	?>

<html>
<link href="style.css" type="text/css" rel="stylesheet">
<script src="javascript.js"></script>
<link href='https://fonts.googleapis.com/css?family=Exo:400,300' rel='stylesheet' type='text/css'>
<body>

<?php include "navigation.php";?>

<nav id="login_main_box">
	<form action="<?php echo $current_file?>" method="POST" id="student_login">
	
			<h2>Sign In.. </h2>
			<label><?= $entry_error.'<br>';?></label>
			<input class="f" type="text" name="user_name" placeHolder="Username"><br>
			<input class="f" type="password" name="password" placeHolder="Password"> <br> 
			<?php echo $combination_error;?><br>
			<button  class="f" type="submit" name="submit">Submit</button><br>
			<label class="f"><a href="Student.php">Sign Up</a></span>
	
	</form>
</nav>
</body>
</html>
