<?php 
include 'connect-to-db.php';
$query_delete_table = "TRUNCATE TABLE temp_table";
mysql_query($query_delete_table) or die(mysql_error());
?>