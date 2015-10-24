<?php

//----including of the core PHP file...
include_once 'core.php';
include 'connect.php';


login_redirect_student();
//---below state is made to check that is the data has been transfered to the page.....
//---for testing purpose...
//---print_r($_SESSION['student_data']);
?>
<html>
	<head>
		<link href="style.css" type="text/css" rel="stylesheet">
		<script src = "javascript.js"></script>
		<link href='https://fonts.googleapis.com/css?family=Exo:400,300' rel='stylesheet' type='text/css'>
		<link href="dashboard.css" type="text/css" rel="stylesheet">
	</head>
	
	<body>
	
			
		<?php 
		
		//----naviagtion bar of all the pages..
		include 'navigation.php';
		
		//---contain the information of the user  who hadd been logged in..
		include 'profile.php';
		?>	
		
		<div id="student-exam" onClick="return exam();">Exam</div> 
		<div id="student-practice" onClick="return practice();">Practice</div>
		<div id="student-details" onClick="return student_details()">Details</div>

		
	</body>
</html>