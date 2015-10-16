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
			<li><label>Company ID:</label></li><span><?php echo @$_SESSION['company_data']['CompanyId']?></span>
			<br><br>
			<li><label>Name:</label></li><span><?php echo @$_SESSION['company_data']['Name']?></span>
			
			<br>
		</ul>
	</nav>
	
	
	

	</body>
</html>