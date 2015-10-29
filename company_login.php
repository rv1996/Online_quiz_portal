<?php
	//require 'core.php';
	//echo $current_file;
	
	//this page contain the main login form...
	
	//----these variable will hold error occurred if the invalid entries are made
	$entry_error = '';
	$combination_error = '';
	
	//-----	validation of the the form..
	//----- creation of the session
	//----- redirect to the dash-board of student..
	
	if($_SERVER["REQUEST_METHOD"]== "POST"){
		
		//----- variable taken from the form....
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		//----- check if the variable or the text filed is empty or not
		//----- if yes the genrate the error....
	
		if(!empty($username) && !empty($password)){
			$password = md5($password);
			$query = "SELECT * FROM company_info WHERE Username='$username' AND Password='$password' ";
			
			//---- testing of the sql working
			// echo mysql_query("use oqp");
			// echo mysql_query($query); for testing of the query
			
			
			$query_run = mysql_query($query);
			@$mysql_row =mysql_num_rows($query_run);
			 
			 
			if($mysql_row == 0){
				$combination_error =  "invalid entry combination";
			 	}
			
			if($mysql_row ==1){
				
				$query_result = mysql_fetch_array($query_run);
				$_SESSION['company_name'] = $query_result['Name'];
				$_SESSION['company_data'] = $query_result;
				//echo 'hello'.$_SESSION['user_name'];
				header("Location: page2.php");
				//print_r($query_result); check that we are getting the or not
				}
			
		}
		else{
			$entry_error = "enter the username and password<br>";
			}
		}
?>

<html>
	<head>
		<link href="style.css" type="text/css" rel="stylesheet">
		<link href="login.css" type="text/css" rel="stylesheet">
		<script src="javascript.js"></script>
		<link href='https://fonts.googleapis.com/css?family=Exo:400,300' rel='stylesheet' type='text/css'>
	</head>
	
	<body>
	
		<?php include "navigation.php";?>
		<nav id="login_main_box">
			<form action="<?php echo $current_file?>" method="POST" id="student_login">
			
				<h2>Company Login</h2>
				<br>
			
				<label class="form-input"><?php echo $entry_error.'<br>';?></label>
				<input class = "form-input" type="text" name="username" placeholder="Username"><br>
				<input class = "form-input" type="password" name="password" placeholder="Password"> <br> 
				<label class="form-input"><?php  echo $combination_error;?></label><br><br>
				<button class="form-input"  type="submit" name="submit">Sign In</button><br><br>
				<label class="form-input">Not a member, <a href="company_register.php">Register</a> Here</label>
			
			</form>
		</nav>
		
	</body>
</html>
