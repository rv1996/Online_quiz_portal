<?php 
//Database configuration setting files are mentioned here...
	$server = "localhost";
	$server_name = "root";
	$server_password = '';
	
	 $connection = mysql_connect($server,$server_name,$server_password) or die("could");
	 mysql_query("USE OQP");
?>