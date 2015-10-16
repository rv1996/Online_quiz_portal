<?php
include 'page-heading.php';
include 'bottom-label.php';
	require 'connect.php';
	


	
	// variable to be be taken from the dom....
	//data variable
	$company_number = $company_name = $company_email =$company_password = ' ';
	$number_error = $name_error = $email_error = $password_error = '';
	//variable which decide to run the query..
	$field_count = 0;
	$record_added ='';

	if($_SERVER['REQUEST_METHOD'] == "POST"){
		
		 @$company_number = $_POST['company_number']; //1
		 @$company_name = $_POST['company_name']; //2
		 @$company_email = $_POST['company_email']; //4
		 @$company_password =$_POST['company_password']; //10
		 
		if(empty($company_number)){
			 $number_error = "Enter your number";
			 $field_count++;
			
		}else{
			if(preg_match("/\D/",$company_number)){
			$number_error = "Only number's";
			$field_count++;
			}
		}
		if(empty($company_name)){
			 $name_error = "Enter Your name";
			 $field_count++;
		}
		else{
			
		}
		
		if(empty($company_email)){
			$email_error = "Enter Your Email";
			 $field_count++;
		}
		if(empty($company_password)){
			$password_error = "enter Your password..";
			 $field_count++;
		}else{
			if(!preg_match("/\d/",$company_password)){
			$password_error ='No digits in Password';
			 $field_count++;
			}
			else 
				if(!preg_match("/\W/",$company_password)){
				$password_error ='No Special Chars in Password';
				 $field_count++;
			}else{
				$company_password = proper_input($company_password);
			}
		}
		
		
		 //echo "processing";
		//echo $field_count;                                 all for testing perpose...
	    // inserting the data in the data bas
		if(!$field_count){

			$company_password = md5($company_password);
			
			//echo "hello";
			$sql_query = "INSERT INTO company_info(Name,username,Email,Password) VALUES($company_number,'$company_name','$company_email','$company_password')";
			//echo "processing";

			if(mysql_query($sql_query)){
				$record_added =  "records added to the data";
			}
			else{
				echo 'could insert the data in the data <br> Error :'.mysql_error();
			}
			
			mysql_close();
			//function made to check the data entered by the user
		}else{
			//echo "123".mysql_error();
		}
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
		<link href='https://fonts.googleapis.com/css?family=Exo:400,300' rel='stylesheet' type='text/css'>
		<link href="style.css" type = "text/css" rel= "stylesheet">
		

	</head>
	<body>
	
	<?php include "navigation.php";?>

	<nav id="login_main_box">
		<form action = <?php echo $_SERVER['PHP_SELF'];?> method="POST" id="company_registration">
		
			
				<h2>Company Regitration Form</h2>
				<?= $record_added;?>
				<br>
				<input class = "f" type="text" name="company_number" placeholder="Company Number" value="<?php echo $number_error;?>" >
				<input class = "f" type="text" name="company_name" placeHolder="Name" value="<?php echo $name_error;?>">
				<input class ="f" type="text" name="company_email" placeHolder="Email"value="<?php echo $email_error;?>">
				<input class ="f" type="password" name="company_password" placeHolder="Password" >
				<br>
				<label class="f"><?php echo $password_error;?></label>
					
				<button class="f" type="submit" >Done</button>
					
				
			
			</form>
	</nav>
	</body>
</html>
