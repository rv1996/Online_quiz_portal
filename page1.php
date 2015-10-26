<?php
include 'Page-heading.php';
include 'bottom-label.php';
require 'connect.php';
require 'core.php';

if(is_user_loggedin_company()){
	header("Location: page2.php");
	}

if(is_user_loggedin_student()){
	//echo "Your are logged in....";
	/*	$user_name =  '
						<div style="font-size:3vw;text-align:left;padding-left:8px;margin:auto;background:#DCEDC8;color:#6D5252;
						">Hello <strong>'.$_SESSION['user_name'].'</strong><div style="float:right;background:#BBDEFB;"><a style ="padding:2%;margin:auto;color:#6D5252;" href="logout_page.php" >Logout</a></div></div>
						';
	//echo "Your are logged in....";*/
	include 'student_dashboard.php';
}
else{
	//echo "hello";
	include 'student-login.php';
}

/*

<html>
	<body>
		<div style="font-size:30px;text-align:center;"><?= $user_name?></div>
		
		<a style ="font-size:20px;" href="logout_page.php" >Logout</a>
	</body>
</html>
*/
?>