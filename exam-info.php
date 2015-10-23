<?php
include 'connect.php';

$examid = $_SESSION['examid'];
$query = "SELECT typeid,pmarks,nmarks,noofquestions FROM exam_type_linked WHERE examid='$examid' ORDER BY typeid";
$result = mysql_query($query) or die(mysql_error());

for($i=1;$row=mysql_fetch_array($result);$i++){
	$typeid[$i] = $row['typeid'];
	$pmarks[$i] = $row['pmarks'];
	$nmarks[$i] = $row['nmarks'];
	$n[$i] = $row['noofquestions'];
	}
$n_of_type = $i - 1;

?>
<?php
for($i=1;$i<=$n_of_type;$i++){
	@$query = "SELECT type FROM typeofquestions WHERE typeid='$typeid[$i]'";
	$result = mysql_query($query) or die(mysql_error());
	$row=mysql_fetch_array($result);
	$type[$i] = $row['type'];
	}
?>
<?php
$query = "SELECT * FROM company_exams WHERE examid='$examid'";
$result = mysql_query($query) or die(mysql_error());
$row = mysql_fetch_array($result);
$time = $_SESSION['time'] = $row['Time'];
$companyid = $row['CompanyId'];

$result = mysql_query("SELECT name FROM company_info WHERE companyid=$companyid");
$row = mysql_fetch_array($result);
$company_name = $row['name'];

$_SESSION['sec'] = 0;
?>