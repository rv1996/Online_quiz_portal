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
    <link href="dashboard.css" type="text/css" rel="stylesheet">
	</head>
	<body>
	
		
	<?php 
	include 'navigation.php';
	include 'company-profile.php';
	?>
	<div id="section">
	<div id="card1" onClick="createExam()" style="top:33%;font-size:6vmin">Create</div> 
    <div id="card2" onClick="companyDetails()" style="top:33%;left:45vw;font-size:6vmin">Records</div>
    </div>
	
	

	</body>
</html>