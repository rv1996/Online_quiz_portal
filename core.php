<?php 

	//-----the very import file of almost all the pages---
	//-----contain the function that check the session variable and then redirect it to the coresponding pagess----
	
	//-----ob_start() deal with the proper funtioning of the header() function -----
	ob_start();
	session_start();
	
	
	//---this variable use to check the current script the user is on....
	$current_file = $_SERVER['SCRIPT_NAME'];
	
	//---this variable keep the track of page... hold the location of the previous page the user is on
	@$http_referer = $_SERVER['HTTP_REFERER'];
	
	
	//---check if the user(student) is logged in or not 
	//---if yes then return true and else return false... for all the pages of student
	function is_user_loggedin_student(){
		if(isset($_SESSION['user_name']) && !empty($_SESSION['user_name'])){
			return true;
		}else{
			return false;
		}
	}
	
	//---check if the user(company) is logged in or not 
	//---if yes then return true and else return false... for all the pages of company
	
	
	function is_user_loggedin_company(){
		if(isset($_SESSION['company_name']) && !empty($_SESSION['company_name'])){
			return true;
		}else{
			return false;
		}
	
	}
	
	//---this function check weather the user is logged in or not.... if not then no page's after the student login will  //---open....if try to open with the URL then the user will be directed to the login page...
	function login_redirect_student(){
		if(!is_user_loggedin_student()){
			header("Location: page1.php");
		}
	}
?>