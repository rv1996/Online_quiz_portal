<?php
include 'page-heading.php';
include 'bottom-label.php';
include 'core.php';
require 'connect.php';
	// header('Location: E:\xampp\htdocs\project\page1.php');


	
	// variable to be be taken from the dom....
	//data variable
	$student_number = $student_name = $student_year = $student_email =$student_password = '';
	$number_error = $name_error = $year_error = $email_error = $password_error = '';
	//variable which decide to run the query..
	$field_count = 0;
	$record_added ='';


	if($_SERVER['REQUEST_METHOD'] == "POST"){
		
		 @$student_number = $_POST['student_number']; //1
		 @$student_name = $_POST['student_name']; //2
		 @$student_year = $_POST['student_year']; //3
		 @$student_email = $_POST['student_email']; //4
		 @$student_password =$_POST['student_password']; //5
		 
		if(empty($student_number)){
			 $number_error = "Enter your number";
			 $field_count++;
			}
		else{
			$student_number = proper_input($student_number);
			if(preg_match("/\D/",$student_number)){
			   $number_error = "Only number's";
			   $field_count++;
			   }
		    }
		
		if(empty($student_name)){
			 $name_error = "Enter Your name";
			 $field_count++;
		     }
		else{
			$student_name = proper_input($student_name);
			if(!preg_match("/^[a-zA-Z ]*$/",$student_name)){
				$name_error = "Only letters whitespaces allowed";
				$field_count++;
		    	}
		    }

		if(empty($student_year)){
			$year_error = 'Enter Your Year';
			$field_count++;
		    }
		else{
			$student_year = proper_input($student_year);
			if(preg_match("/\D/",$student_year)){
				$year_error = 'Only no. in year';
			    $field_count++;
				}
			
			if($student_year<1 && $student_year>4){
				 $year_error = 'Wrong year';
				 $field_count++;
				 }
			}

		if(empty($student_email)){
			$email_error = "Enter Your Email";
			$field_count++;
		    }
		else{
			$student_email = proper_input($student_email);
			$student_email = filter_var($student_email, FILTER_SANITIZE_EMAIL);
			if(!filter_var($student_email, FILTER_VALIDATE_EMAIL)){
				$email_error = "Invalid Email";
				$field_count++;	  
				}
			}
		

		if(empty($student_password)){
			$password_error = "enter Your password..";
			$field_count++;
		}
		else{
			if(!preg_match("/\d/",$student_password)){
				$password_error ='No digits in Password';
				$field_count++;
				}
			else 
				if(!preg_match("/\W/",$student_password)){
					$password_error ='No Special Chars in Password';
					$field_count++;
			    	}
			    else{
				    $student_password = proper_input($student_password);
					}
			}
		
		
		 //echo "processing";
		//echo $field_count;                                 all for testing perpose...
	    // inserting the data in the data bas
		if(!$field_count){
			$student_password = md5($student_password);
			$sql_query = "INSERT INTO student_info(StudentNumber,Name,Btechyear,Email,Password)
			VALUES($student_number,'$student_name','$student_year','$student_email','$student_password')";
			//mysql_query($sql_query) or die(mysql_error());
			if(mysql_query($sql_query)){
				$record_added =  "records added to the data";
				$_SESSION['user_name'] = $student_name;
				header("Location: page1.php");
				}
					
			}
		else{
			echo 'could not insert the data in the data <br> Error :'.mysql_error();
			}
			
		mysql_close();
			//function made to check the data entered by the user
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
	<?php include "navigation.php"; ?>
    
    <div id="student_main_box">
		<form action = <?php echo htmlspecialchars($_SERVER['PHP_SELF']);?> method="POST" id="student_registration" autocomplete="off">
		<ul>
			<fieldset>
				<legend style="font-size:2.5vw;text-align:left;"><b id="form_header">Student Regitration Form</b></legend>
				<?php //echo $record_added;?>
				<li><span>Student Number : </span><input type="text" name="student_number" ></li><label><?php echo $number_error."<br>";?></label><br>
				<li><span>Student Name :</span> <input type="text" name="student_name"></li><label><?php echo $name_error.'<br>';?></label><br>
				<li><span>B-Tech Year :</span> <input type="text"  name="student_year"></li><label><?php echo $year_error.'<br>';?></label><br>
				<li><span>Email Id : </span><input type="text" name="student_email" autocomplete="off"></li><label><?php 
				echo $email_error.'<br>';?></label><br>
				<li><span>Password : </span><input type="password" name="student_password" autocomplete="off"></li><label><?php 
				echo $password_error.'<br>';?></label><br>
					
				<input style="clear:both;margin-top:10px;" type="submit" value="Submit">
					
				</fieldset>
			</ul>
			</form>
			</div>

	


	
	</body>
</html>
