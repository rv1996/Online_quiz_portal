<?php
	//ob_start();
	//session_start();
	
	//this ph page is to give the connection configuration with the MYSQL sever
	//and connect  with the data base specified... i.e OQP
	
	$server= 'localhost';
	$server_name = 'root';
	$server_password = '';
	
	$mysql_database = "OQP";
	
	if(mysql_connect($server,$server_name,$server_password) &&mysql_select_db($mysql_database)){
		// echo "connection are made<br><br>";
	}else{
		die("could not establish the conncetion");
	}
?>