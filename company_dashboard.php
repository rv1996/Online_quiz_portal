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
	</head>
	<body>
	
		
	<?php include 'navigation.php';?>
	
	<nav class="display">
		
		<ul>
			<li><label>Company no:</label></li><span><?= $_SESSION['company_data']['Name']?></span>
			<br><br>
			<li><label>company name</label></li><span><?= $_SESSION['company_data']['Username']?></span>
			
			<br>
		</ul>
	</nav>
	
	
	

	</body>
</html>