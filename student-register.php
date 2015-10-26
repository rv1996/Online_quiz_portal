<?php
include 'page-heading.php';
include 'bottom-label.php';
include 'core.php';
require 'connect.php';
	// header('Location: E:\xampp\htdocs\project\page1.php');

/*if(!is_user_loggedin_company()){
	header("Location: page2.php");
	}

if(!is_user_loggedin_student()){
	header("Location: page1.php");
	}*/

	
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
			 $number_error = "/Enter Student Number";
			 $field_count++;
			}
		else{
			$student_number = proper_input($student_number);
			if(preg_match("/\D/",$student_number)){
			   $number_error = "/Only Numbers";
			   $field_count++;
			   }
		    }
		
		if(empty($student_name)){
			 $name_error = "/Enter Student's Name";
			 $field_count++;
		     }
		else{
			$student_name = proper_input($student_name);
			if(!preg_match("/^[a-zA-Z ]*$/",$student_name)){
				$name_error = "/Only Letters & Whitespaces Allowed";
				$field_count++;
		    	}
		    }

		if(empty($student_year)){
			$year_error = '/Enter BTech Year';
			$field_count++;
		    }
		else{
			$student_year = proper_input($student_year);
			if(preg_match("/\D/",$student_year)){
				$year_error = '/Only No. in Year';
			    $field_count++;
				}
			
			if($student_year<1 && $student_year>4){
				 $year_error = '/Year only B/w 1 and 4';
				 $field_count++;
				 }
			}

		if(empty($student_email)){
			$email_error = "/Enter Email";
			$field_count++;
		    }
		else{
			$student_email = proper_input($student_email);
			$student_email = filter_var($student_email, FILTER_SANITIZE_EMAIL);
			if(!filter_var($student_email, FILTER_VALIDATE_EMAIL)){
				$email_error = "/Invalid Email";
				$field_count++;	  
				}
			}
		

		if(empty($student_password)){
			$password_error = "/Enter Password";
			$field_count++;
		}
		else{
			$student_password = proper_input($student_password);
			if(!preg_match("/\d/",$student_password)){
				$password_error ='/No Digits in Password';
				$field_count++;
				}
			if(!preg_match("/\W/",$student_password)){
				$password_error ='/No Special Chars in Password';
				$field_count++;
			    }
			}
		
		
		
	    // inserting the data in the data bas
		if(!$field_count){
			$student_password = md5($student_password);
			$sql_query = "INSERT INTO student_info(StudentNumber,Name,Btechyear,Email,Password)
			VALUES($student_number,'$student_name','$student_year','$student_email','$student_password')";
			//mysql_query($sql_query) or die(mysql_error());
			if(mysql_query($sql_query)){
				$record_added =  "records added to the data";
				$_SESSION['user_name'] = $student_name;
				$student_result = mysql_query("SELECT * FROM student_info WHERE StudentNumber='$student_number'");
				$_SESSION['student_data'] = mysql_fetch_array($student_result);
				header("Location: page1.php");
				}
			else{
				die(mysql_error());
				}
			}
		mysql_close();
		}
	
		//function made to check the data entered by the user 
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
		<link href="style.css" type = "text/css" rel= "stylesheet">
		<link href='https://fonts.googleapis.com/css?family=Exo:400,300' rel='stylesheet' type='text/css'>

	</head>
	<body>
	<?php include "navigation.php";?>

	<nav id="login_main_box">
		<form action = <?php echo $_SERVER['PHP_SELF'];?> method="POST" id="student_registration">
		
				<h2>Student Regitration Form</h2>
				<?= $record_added;?>
				<input class="form-input" type="text" name="student_number" placeholder="<?php echo 'Student Number'.$number_error;?>">
				<input class="form-input" type="text" name="student_name" placeholder="<?php echo 'Name'.$name_error ;?>">
				<input class="form-input" type="text"  name="student_year" placeholder="<?php echo 'BTech Year'.$year_error ;?>">
				<input class="form-input" type="text" name="student_email" placeholder="<?php echo 'Email'.$email_error ;?>">
				<input class="form-input" type="password" name="student_password" placeholder="<?php echo 'Password'.$password_error ;?>">
				
				<button type="submit" class= "form-input">Done</button>
					
		</form>
	</nav>
	</body>
</html>
