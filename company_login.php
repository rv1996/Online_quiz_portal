<?php
	//require 'core.php';
	//echo $current_file;
	
	//this page contain the main login form...
	$entry_error = '';
	$combination_error = '';
		
	if($_SERVER["REQUEST_METHOD"]== "POST"){
		$company_number = $_POST['company_number'];
		$password = $_POST['password'];
		
		
		if(!empty($company_number) && !empty($password)){
				
				
			$password = md5($password);
			 $query = "SELECT * FROM company_info WHERE Name = $company_number AND Password = '$password' ";
			 // echo mysql_query("use oqp");
			 // echo mysql_query($query); for testing of the query
			$query_run = mysql_query($query);
			@$mysql_row =mysql_num_rows($query_run);
			 
			 
			 if($mysql_row == 0){
				 $combination_error =  "invalid entry combination";
			 }
			
				if($mysql_row ==1){
					$query_result = mysql_fetch_array($query_run);
					$_SESSION['company_name'] = $query_result['Username'];
					$_SESSION['company_data'] = $query_result;
					//echo 'hello'.$_SESSION['user_name'];
					header("Location: page2.php");
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
	
		<h2> Sign in..</h1>
		<br>
	
		<label class="f"><?= $entry_error.'<br>';?></label>
		<input class = "f" type="text" name="company_number" placeholder="Username"><br>
		<input class = "f" type="password" name="password" placeholder="Password"> <br> 
		<label class="f"><?php  echo $combination_error;?></label><br><br>
		<button class="f"  type="submit" name="submit">Sign in</button><br><br>
		<label class="f"><a href="company_register.php">Registration form</a></span>
	
	</form>
</nav>
</body>
</html>
