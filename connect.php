<?php
	
	//this ph page is to give the connection configuration with the MYSQL sever
	//and connect  with the data base specified... i.e OQP
	
	$server= 'localhost';
	$server_name = 'root';
	$server_password = '';
	$mysql_database = "oqp";
	
	mysql_connect($server,$server_name,$server_password) or die("ConnectionError");
	mysql_select_db($mysql_database) or die(mysql_error());

    $con=new MySQLi($server,$server_name,$server_password,$mysql_database);
    if ($con->connect_error)
    {
    	die( "Connection failed: " .$con->connect_error);
    }
?>
