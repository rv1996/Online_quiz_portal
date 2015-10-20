<?php

include 'connect.php';

$examid = $_SESSION['examid'];
$query = "SELECT typeid,pmarks,nmarks,noofquestions FROM exam_type_linked WHERE examid='$examid' ORDER BY typeid";
$result = mysql_query($query) or die(mysql_error());

for($i=1;$row=mysql_fetch_array($result);$i++){
	$typeid = $row['typeid'];
	$pmarks = $row['pmarks'];
	$nmarks = $row['nmarks'];
	$n = $row['noofquestions'];
	}
$n_of_type = $i - 1;
?>
<?php
@$query = "SELECT type FROM typeofquestions WHERE typeid='$typeid'";
$result = mysql_query($query) or die(mysql_error());
$row=mysql_fetch_array($result);
$type = $row['type'];
?>