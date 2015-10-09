<?php
include 'connect.php';
	//page after the user logged in
	 $user_name =  'Hello <strong>'.$_SESSION['user_name'].'</strong>';
	echo "Your are logged in...."
	 ?>

<html>
	<body>
		<div style="font-size:30px;text-align:center;"><?= $user_name?></div>
		
		<a style ="font-size:20px;" href="logout_page.php" >Logout</a>
	</body>
</html>