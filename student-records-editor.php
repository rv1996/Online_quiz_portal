<?php
$student_id = $_SESSION['student_data']['StudentNumber'];
@$examid = $_SESSION['examid'];

	if(is_user_loggedin_student()){
		$query = "INSERT INTO records(StudentNumber,ExamId,Score) VALUES($student_id,$examid,$score)";
		mysql_query($query) or die(mysql_error());
	}

?>