<?php
//exam given
include_once 'connect.php'  ;
include_once 'core.php';
$std_number = $_SESSION['student_data']['StudentNumber'];
$sql_query_examId = "SELECT Examid FROM records where StudentNumber = $std_number  ";
$i=1;
$result = mysql_query($sql_query_examId);
while($data = mysql_fetch_array($result)){

	$examid[$i] = $data;
	$i++;
}


//print_r($examid);
//echo '<br>';

foreach($examid as $single_id => $entry ){
  $Exam_id[] =$entry[0];
}
//print_r($Exam_id);
//echo "Number of Exam Give are :<br>";

$join_sql = "SELECT company_exams.examname from company_exams JOIN records ON company_exams.ExamId = records.ExamId where records.StudentNumber = $std_number";
$join_result = mysql_query($join_sql);
$i=0;
while($exam_comp = mysql_fetch_array($join_result)){
	 $exam_name[$i] = $exam_comp[0];
	$i++;
}
//echo "<br>";

$size_of_array = count($exam_name);
$score_sql = "SELECT score FROM records Where StudentNumber = $std_number";
$score_resource = mysql_query($score_sql);
$i=0;
while($score_data=mysql_fetch_array($score_resource)){
	$score_array[$i] = $score_data[0];
	$i++;
}
//print_r($score_array);



//echo '<br>';
//print_r($exam_name);

//$average = average('score','records');
 //	 echo '<br>Average score is :'.$average;
//$max = maximum('score','records');
//	 echo '<br>Maximum score is :'.$max;

/*

$average = average('score','records',"$Exam_id[$i]");
echo '<br>Average score is :'.$average;
$max = maximum('score','records',"$Exam_id[$i]");
echo '<br>Maximum score is :'.$max;
$i++;

*/
$i = 0;
while($size_of_array>0){
	$average_array[$i] = average('score','records',"$Exam_id[$i]");
	$maximun_array[$i] = maximum('score','records',"$Exam_id[$i]");
	$i++;
	$size_of_array--;
}

//echo '<br>';
//print_r($average_array);
//echo '<br>';
//print_r($maximun_array);

function average($column_name,$table_name,$id){
 	$sql = "SELECT AVG($column_name) FROM $table_name where Examid = $id ";
	$avg_resource = mysql_query($sql) or die(mysql_error());
	$avg =  mysql_fetch_array($avg_resource);
	return $avg[0];
}

function  maximum($column_name,$table_name,$id){
	$sql = "SELECT MAX($column_name) FROM $table_name where Examid = $id";
	$max_resource = mysql_query($sql) or die(mysql_error());
	$max =  mysql_fetch_array($max_resource);
	return $max[0];
}



?>
