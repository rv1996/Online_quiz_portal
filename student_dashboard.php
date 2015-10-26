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
	include 'navigation.php';
	include 'student-profile.php';
	?>
	<div id="section">
        <div id="card1" onClick="return examSelect()">Exam</div>
        <div id="card2" onClick="return practice()">Practice</div>
        <div id="card3" onClick="return student_details()">Details</div>
	</div>

	</body>
</html>
