<?php
$companyid = $_SESSION['company_data']['CompanyId'];

$sql = "SELECT ce.examname,ce.ExamId,AVG(r.Score),MAX(r.Score),COUNT(r.StudentNumber) FROM company_exams AS ce INNER JOIN records AS r ON ce.ExamId=r.ExamId WHERE ce.CompanyId=$companyid";
$result = mysql_query($sql) or die(mysql_error());
$n_of_exams = mysql_num_rows($result);

for($i=1;$row=mysql_fetch_array($result);$i++){
	$examname[$i] = $row[0];
	$examid[$i] = $row[1];
	$avg_score[$i] = $row[2];
	$max_score[$i] = $row[3];
	$n_students[$i] = $row[4];
	}

?>