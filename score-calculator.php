<?php
include 'connect.php';
$query = "SELECT SUM(checkans) FROM temp_table";
$result = mysql_query($query) or die(mysql_error());

$row = mysql_fetch_array($result);

$score = $row['SUM(checkans)'];
$max_marks = 0;
$examid = $_SESSION['examid'];

$query = "SELECT pmarks,noofquestions FROM exam_type_linked WHERE examid='$examid'";
$result = mysql_query($query) or die(mysql_error());

for($i=0;$row = mysql_fetch_array($result);$i++){
	$max_marks = $max_marks + $row['pmarks']*$row['noofquestions']; 
	}
?>