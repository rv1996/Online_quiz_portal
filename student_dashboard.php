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
	
	<nav class="display">
		
		<ul>
			<li><label>Student ID:</label></li><span><?php echo @$_SESSION['student_data']['StudentNumber']?></span>
			<br><br>
			<li><label>Name:</label></li><span><?php echo @$_SESSION['student_data']['Name']?></span>
			<br><br>
			<li><label>B-Tech Year:</label></li><span><?php echo @$_SESSION['student_data']['BTechYear'].'nd'?></span>
			<br>
		</ul>
	</nav>
	
	
	<div id="student-exam" onClick="return exam();">Exam</div> 
    <div id="student-practice" onClick="return practice();">Practice</div>
    <div id="student-details">Details</div>

	</body>
</html>