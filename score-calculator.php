<?php
include 'connect.php';
include_once 'core.php';

$query = "SELECT SUM(checkans) FROM temp_table";
$result = mysql_query($query) or die(mysql_error());

$row = mysql_fetch_array($result);

$score = $row['SUM(checkans)'];
$max_marks = 0;
@$examid = $_SESSION['examid'];

$query = "SELECT pmarks,typeid FROM exam_type_linked WHERE examid='$examid'";
$result = mysql_query($query) or die(mysql_error());

for($i=1;$row = mysql_fetch_array($result);$i++){
	$typeid = $row['typeid'];
	$query = "SELECT COUNT(QuestionId) FROM questionbank_company WHERE examid='$examid' AND typeid='$typeid'";
	$result1 = mysql_query($query) or die(mysql_error());
	$row1 = mysql_fetch_array($result1);
	$max_marks = $max_marks + $row['pmarks']*$row1['COUNT(QuestionId)']; 
	}
?>