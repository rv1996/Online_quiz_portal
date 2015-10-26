<?php 
include 'connect.php';
$_SESSION['ques'] = NULL;
$query_delete_table = "TRUNCATE TABLE temp_table";
mysql_query($query_delete_table) or die(mysql_error());

$_SESSION['examid'] = NULL;

?>