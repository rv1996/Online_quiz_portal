<?php
$i = 1;
$examid = $_SESSION['examid'];
$typeid = $_SESSION['typeid'];
$query_questions = "SELECT questions,questionid FROM questionbank_company WHERE examid='$examid' AND typeid='$typeid' ORDER BY questionid";
$result_questions = mysql_query($query_questions) or die(mysql_error());


while($row = mysql_fetch_array($result_questions)){
	$question[$i]=$row['questions'];
	$questionid[$i]=$row['questionid'];
	$i++;
	}
	
check_ans($questionid);
?>

<?php
function check_ans($questionid){
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$_SESSION['ques']++;
	$q = $_REQUEST['qid'];
	$query = "SELECT CheckAns FROM answers_company WHERE questionid=$questionid[$q] ORDER BY optionid";
	$r = mysql_query($query) or die(mysql_error());
	$i=1;
	while($row2 = mysql_fetch_array($r)){
		$qcheckans[$i] = $row2['CheckAns'];
		$i++;
		}
	$nofoptions = $i;
	for($j = 1;$j < $nofoptions;$j++){
		if(!empty($_POST[$j])){
			$options[$j]=1;
			}
		else{
			$options[$j]=0;
			}
			
		if($qcheckans[$j] == $options[$j]){
			$check = 1;
			}
		else{
			$check = -1;
			break;
			}
		}
	marks_changer($check,$q,$questionid);
	
	/*if($check == 1){
		echo 'Correct';
		}
	else{
		echo 'Wrong';
		}*/
	}
}
?>
<?php
function marks_changer($check,$q,$questionid){
	$query_table = "UPDATE temp_table SET checkans='$check' WHERE questionid=$questionid[$q]";
	mysql_query($query_table) or die(mysql_error());
	}
?>