<?php 
	ob_start();
	session_start();
	$current_file = $_SERVER['SCRIPT_NAME'];
	@$http_referer = $_SERVER['HTTP_REFERER'];
	
	function is_user_loggedin_student(){
		if(isset($_SESSION['user_name']) && !empty($_SESSION['user_name'])){
			return true;
		}else{
			return false;
		}
	}
	function login_redirect_student(){
		if(!is_user_loggedin_student()){
			header("Location: page1.php");
		}
	}
	function is_user_loggedin_company(){
		if(isset($_SESSION['company_name']) && !empty($_SESSION['company_name'])){
			return true;
		}else{
			return false;
		}
	
	}
?>