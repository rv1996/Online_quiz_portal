<?php 
require 'connect.php';
//$_SESSION['ques'] = 1;
$query_delete_table = "TRUNCATE TABLE temp_table";
mysql_query($query_delete_table) or die(mysql_error());
?>