<?php
//session_start();
include_once 'core.php';
if(is_user_loggedin_student()){
	$_SESSION['time'] = $_REQUEST['t'];
	$_SESSION['sec'] = $_REQUEST['sec'];
}else{
	echo '<script>alert("login please!!!")</script>';
	login_redirect_student();

}
?>