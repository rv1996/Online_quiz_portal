<?php
include 'Page-heading.php';
include 'bottom-label.php';
require 'connect.php';
require 'core.php';

if(is_user_loggedin_student()){
	header("Location: page1.php");
	}

if(is_user_loggedin_company()){
	//echo "Your are logged in....";
	/*echo $company_name =  '
						<div style="font-size:3vw;text-align:left;padding-left:8px;margin:auto;background:#DCEDC8;color:#6D5252;
						">Hello <strong>'.$_SESSION['company_name'].'</strong><div style="float:right;background:#BBDEFB;"><a style ="padding:2%;margin:auto;color:#6D5252;" href="logout_page.php" >Logout</a></div></div>
						';
	//echo "Your are logged in....";*/
	include 'company_dashboard.php';
}
else{
	include 'company_login.php';
}