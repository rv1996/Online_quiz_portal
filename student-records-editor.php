<?php
$student_id = $_SESSION['student_data']['StudentNumber'];

$examid = $_SESSION['examid'];
$query = "SELECT * FROM records WHERE StudentNumber='$student_id' AND ExamId='$examid'";
$result = mysql_query($query) or die(mysql_error());

if(mysql_num_rows($result)==0){
  $query = "INSERT INTO records(StudentNumber,ExamId,Score) VALUES($student_id,$examid,$score)";
  mysql_query($query) or die(mysql_error());
  }


?>
