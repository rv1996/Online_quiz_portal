<?php
include 'Page-heading.php';
include 'bottom-label.php';
require 'connect.php';
require 'core.php';

if(is_user_loggedin()){
	//echo "Your are logged in....";
	echo $user_name =  '
						<div style="font-size:3vw;text-align:center;margin:auto;background:#ff5050;
						border-radius:20px;border- width:40%;">Hello <strong>'.$_SESSION['user_name'].'</strong><div style="float:right;background:red;"><a style ="font-size:2vw;border-radius:15px;padding:2%;" href="logout_page.php" >Logout</a></div></div>
						';
	//echo "Your are logged in....";
	include 'student_dashboard.php';
}
else{
	include 'login_form.php';
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