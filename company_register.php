<?php
include 'page-heading.php';
include 'bottom-label.php';
include 'core.php';
require 'connect.php';

/*if(!is_user_loggedin_company()){
	header("Location: page2.php");
	}

if(!is_user_loggedin_student()){
	header("Location: page1.php");
	}*/
	
	// variable to be be taken from the dom....
	//data variable
	$username = $company_name = $company_email =$company_password = '';
	$username_error = $name_error = $email_error = $password_error = '';
	//variable which decide to run the query..
	$field_count = 0;
	$record_added ='';

	if($_SERVER['REQUEST_METHOD'] == "POST"){
		@$username = $_POST['username']; //1
		@$company_name = $_POST['company_name']; //2
		@$company_email = $_POST['company_email']; //3
		@$company_password =$_POST['company_password']; //4
		 
		if(empty($username)){
			$username_error = "/Enter Username";
			$field_count++;
			}
		else{
			$username = proper_input($username);
			}
		
		if(empty($company_name)){
			 $name_error = "/Enter Company Name";
			 $field_count++;
			 }
		else{
			$company_name = proper_input($company_name);
			if(!preg_match("/^[a-zA-Z ]*$/",$company_name)){
				$name_error = "/Only Letters & Whitespaces Allowed";
				$field_count++;
				}
			}
		
		if(empty($company_email)){
			$email_error = "/Enter Company Email";
			$field_count++;
			}
		else{
			$company_email = proper_input($company_email);
			$company_email = filter_var($company_email, FILTER_SANITIZE_EMAIL);
			if(!filter_var($company_email, FILTER_VALIDATE_EMAIL)){
				$email_error = "/Invalid Email";
				$field_count++;	  
				}
			}
		
		if(empty($company_password)){
			$password_error = "/Enter Password";
			$field_count++;
			}
		else{
			$company_password = proper_input($company_password);
			if(!preg_match("/\d/",$company_password)){
				$password_error ='/No Digits in Password';
				$field_count++;
				}
			if(!preg_match("/\W/",$company_password)){
				$password_error ='/No Special Chars in Password';
				$field_count++;
				}
			}
		
		
	    // inserting the data in the data bas
		if(!$field_count){
			$company_password = md5($company_password);
			$sql_query = "INSERT INTO
			company_info(Username,Name,Email,Password)
			VALUES('$username','$company_name','$company_email','$company_password')";
			
			//mysql_query($sql_query) or die(mysql_error());
			if(mysql_query($sql_query)){
				$record_added =  "records added to the data";
				$_SESSION['company_name'] = $company_name;
				$company_result = mysql_query("SELECT * FROM company_info WHERE Username='$username'");
				$_SESSION['company_data'] = mysql_fetch_array($company_result);
				header("Location: page2.php");
				}
			else{
				die(mysql_error());
				}
			}
		mysql_close();
		}
		 
	function proper_input($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return($data);
		}
	
	?>
<html>
	<head>
		<script src="javascript.js"></script>
        <link href="login.css" type="text/css" rel="stylesheet">
		<link href='https://fonts.googleapis.com/css?family=Exo:400,300' rel='stylesheet' type='text/css'>
		<link href="style.css" type = "text/css" rel= "stylesheet">
		

	</head>
	<body>
	
	<?php include "navigation.php";?>

	<nav id="login_main_box">
		<form action = <?php echo htmlspecialchars($_SERVER['PHP_SELF']);?> method="POST" id="company_registration">
		
			
				<h2>Company Registration Form</h2>
				<?= $record_added;?>
				<br>
				<input class = "form-input" type="text" name="username" placeholder="<?php echo 'Username'.$username_error; ?>" >
				<input class = "form-input" type="text" name="company_name" placeHolder="<?php echo 'Company Name'.$name_error; ?>" >
                <input class ="form-input" type="text" name="company_email" placeHolder="<?php echo 'Company Email'.$email_error; ?>">
                <input class ="form-input" type="password" name="company_password" placeHolder="<?php echo 'Password'.$password_error;?>">			
				<button class="form-input" type="submit" >DONE</button>
					
				
			
		</form>
	</nav>
	</body>
</html>
