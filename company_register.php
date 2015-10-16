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
			echo "123".mysql_error();
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

		<link href="style.css" type = "text/css" rel= "stylesheet">
		

	</head>
	<body>
	
	<?php include "navigation.php";?>

	<div id="company_main_box">
		<form action = <?php echo $_SERVER['PHP_SELF'];?> method="POST" id="company_registration">
		<ul>
			<fieldset>
				<legend style="font-size:2.5vw;text-align:left;"><b id="form_header">Company Regitration Form</b></legend>
				<?= $record_added;?>
				<li><span>company Number : </span><input type="text" name="company_number" ></li><label><?php echo $number_error.'<br>';?></label><br>
				<li><span>company Name :</span> <input type="text" name="company_name"></li><label><?php echo $name_error.'<br>';?></label><br>
				<li><span>Email Id : </span><input type="text" name="company_email"></li><label><?php echo $email_error.'<br>';?></label><br>
				<li><span>Pasword : </span><input type="password" name="company_password"></li><label><?php echo $password_error.'<br>';?></label><br>
					
				<input style="clear:both;margin-top:10px;" type="submit" value="Submit">
					
				</fieldset>
			</ul>
			</form>
			</div>
	</body>
</html>
