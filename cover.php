<?php include 'page-heading.php'?>
<?php
 //opening page of project....
 include 'core.php';
 
$_SESSION['page_name'] ='';
if(is_user_loggedin_student()){
		  header("Location: page1.php");
	  }
?>

<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale = 1.0">
<link href="style.css" type="text/css" rel="stylesheet">
<script src="javascript.js"></script>
</head>

<body>
	<?php include "navigation.php";?>
	
		<div id = "student"  onclick="return student();">Student</div>
		<div id = "company"  onclick="return company();">Company</div><br>
	
	
</body>
</html>
<?php include 'bottom-label.php'?>