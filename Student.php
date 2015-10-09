<?php
include 'page-heading.php';
include 'bottom-label.php';
	include 'configuration_file.php';
	// header('Location: E:\xampp\htdocs\project\page1.php');


	
	// variable to be be taken from the dom....
	//data variable
	$student_number = $student_name = $student_year = $student_email = $student_mobile_no =$student_password = ' ';
	$number_error = $name_error = $year_error = $email_error =$mobile_error= $password_error = '';
	//variable which decide to run the query..
	$query_boolean = true;

	if($_SERVER['REQUEST_METHOD'] == "POST"){
		
		 @$student_number = $_POST['student_number']; //1
		 @$student_name = $_POST['student_name']; //2
		 @$student_year = $_POST['student_year']; //3
		 @$student_email = $_POST['student_email']; //4
		 @$student_mobile_no = $_POST['student_mobile_no']; //5
		 @$student_password =$_POST['student_password']; //10
		 
		if(empty($student_number)){
			 $number_error = "Enter your number";
			 $query_boolean = true;
			
		}
		if(empty($student_name)){
			 $name_error = "Enter Your name";
			 $query_boolean = true;
		}
		if(empty($student_year)){
			$year_error = 'Enter Your Year';
			$query_boolean = true;
		}
		if(empty($student_email)){
			$email_error = "Enter Your Email";
			$query_boolean = true;
		}
		if(empty($student_mobile_no)){
			$mobile_error = "Enter Your mobile no..";
			$query_boolean = true;
		}
		if(empty($student_password)){
			$password_error = "enter Your password..";
			$query_boolean = true;
		}
	}
		 
	
	// inserting the data in the datat base'
		if(!$query_boolean){
			$id = '';
			$sql_query = "INSERT INTO student_info VALUES('',$student_number,'$student_name','$student_year','$student_email',$student_mobile_no,'$student_city','$student_DOB','$student_gender','$student_skills','$student_password')";
			mysql_query("USE OQP");
			
			if(mysql_query($sql_query)){
				echo "records added to the data";
			}
			else{
				echo 'could insert the data in the data <br> Error :'.mysql_error();
			}
			
			mysql_close();
			//function made to check the data entered by the user
		}
	
	?>
<html>
	<head>
		<script src="javascript.js"></script>

		<link href="style.css" type = "text/css" rel= "stylesheet">
		

	</head>
	<body>
	<hr>
	<div id="student_main_box">
		<form action = <?php echo $_SERVER['PHP_SELF'];?> method="POST" id="student_registration">
		<ul>
			<fieldset>
				<legend style="font-size:35px;text-align:left;"><b>Student Regitration Form</b></legend><br><br>
				
				<li><span>Student Number : </span><input type="text" name="student_number" ></li><label><?php echo $number_error.'<br>';?></label><br>
				<li><span>Student Name :</span> <input type="text" name="student_name"></li><label><?php echo $name_error.'<br>';?></label><br>
				<li><span>B-Tech Year :</span> <input type="text"  name="student_year"></li><label><?php echo $year_error.'<br>';?></label><br>
				<li><span>Email Id : </span><input type="text" name="student_email"></li><label><?php echo $email_error.'<br>';?></label><br>
				<li><span>Mobile No : </span><input type="text" name="student_mobile_no"></li><label><?php echo $mobile_error.'<br>';?></label><br>
				<li><span>Pasword : </span><input type="password" name="student_password"></li><label><?php echo $password_error.'<br>';?></label><br>
					
				<input style="clear:both;margin-top:10px;" type="submit" value="Submit">
					
				</fieldset>
			</ul>
			</form>
			</div>
	</body>
</html>
