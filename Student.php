<?php
include 'page-heading.php';
include 'bottom-label.php';
	include 'connect.php';
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
		 @$student_password =$_POST['student_password']; //10
		 
		if(empty($student_number)){
			 $number_error = "Enter your number";
			 $field_count++;
			
		}else{
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
			
		}
		if(empty($student_year)){
			$year_error = 'Enter Your Year';
			 $field_count++;
		}
		if(empty($student_email)){
			$email_error = "Enter Your Email";
			 $field_count++;
		}

		if(empty($student_password)){
			$password_error = "enter Your password..";
			 $field_count++;
		}else{
			if(!preg_match("/\d/",$student_password)){
			$password_error ='No digits in Password';
			 $field_count++;
			}
			else 
				if(!preg_match("/\W/",$student_password)){
				$password_error ='No Special Chars in Password';
				 $field_count++;
			}else{
				$student_password = proper_input($student_password);
			}
		}
		
		
		 //echo "processing";
		//echo $field_count;                                 all for testing perpose...
	    // inserting the data in the data bas
		if(!$field_count){

			$student_password = md5($student_password);
			//mysql_query("USE OQP");
			$sql_query = "INSERT INTO student_info(StudentNumber,Name,Btech_year,Email,Password) VALUES($student_number,'$student_name','$student_year','$student_email','$student_password')";
			//echo "processing";

			if(mysql_query($sql_query)){
				$record_added =  "records added to the data";
			}
			else{
				echo 'could not insert the data in the data <br> Error :'.mysql_error();
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

		<link href="style.css" type = "text/css" rel= "stylesheet">
		

	</head>
	<body>
	<hr>
	<div id="nav">
		<ul>
			<li onClick="return home();">Home</li>
			<li onClick="return about();">About</li>
			<li onClick="return developer();">Developer's</li>
		</ul>
	</div>

	<div id="student_main_box">
		<form action = <?php echo $_SERVER['PHP_SELF'];?> method="POST" id="student_registration">
		<ul>
			<fieldset>
				<legend style="font-size:2.5vw;text-align:left;"><b>Student Regitration Form</b></legend>
				<?= $record_added;?>
				<li><span>Student Number : </span><input type="text" name="student_number" ></li><label><?php echo $number_error.'<br>';?></label><br>
				<li><span>Student Name :</span> <input type="text" name="student_name"></li><label><?php echo $name_error.'<br>';?></label><br>
				<li><span>B-Tech Year :</span> <input type="text"  name="student_year"></li><label><?php echo $year_error.'<br>';?></label><br>
				<li><span>Email Id : </span><input type="text" name="student_email"></li><label><?php echo $email_error.'<br>';?></label><br>
				<li><span>Pasword : </span><input type="password" name="student_password"></li><label><?php echo $password_error.'<br>';?></label><br>
					
				<input style="clear:both;margin-top:10px;" type="submit" value="Submit">
					
				</fieldset>
			</ul>
			</form>
			</div>
	</body>
</html>
