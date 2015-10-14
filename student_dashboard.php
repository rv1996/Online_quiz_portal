<?php
//include 'core.php';
include 'connect.php';

?>
<html>
	<head>
	<link href="style.css" type="text/css" rel="stylesheet">
	<script src = "javascript.js"></script>
	</head>
	<body>
		
	<div id="nav">
		<ul>
			<li onclick="return home();">Home</li>
			<li onclick="return about();">About</li>
			<li onclick="return developer();">Developer's</li>
		</ul>
	</div>
	
	<div id="student_exam" onclick="return exam();">Exam</div> <div id="student_practice" onclick="return practice();">Practice</div>

	<div id="student_details">Details</div>

	</body>
</html>