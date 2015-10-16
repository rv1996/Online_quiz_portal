<?php
//include 'core.php';
include 'connect.php';


// below state is made to check that is the data has been shifted to the page.....
//print_r($_SESSION['student_data']);
?>
<html>
	<head>
	<link href="style.css" type="text/css" rel="stylesheet">
	<script src = "javascript.js"></script>
	<link href='https://fonts.googleapis.com/css?family=Exo:400,300' rel='stylesheet' type='text/css'>
	</head>
	<body>
	
		
	<?php include 'navigation.php';?>
	
	<nav id="display">
		
		<ul>
			<li><label>Name:</label></li><span><?= $_SESSION['student_data']['StudentNumber']?></span>
			<br><br>
			<li><label>Student:</label></li><span><?= $_SESSION['student_data']['Name']?></span>
			<br><br>
			<li><label>B-Tech:</label></li><span><?= $_SESSION['student_data']['Btech_year'].'nd'?></span>
			<br>
		</ul>
	</nav>
	
	
	<div id="student_exam" onclick="return exam();">Exam</div> <div id="student_practice" onclick="return practice();">Practice</div><div id="student_details">Details</div>

	</body>
</html>