<!--script src="ajax.js" type="text/javascript"></script-->
<?php 
require 'connect.php';

@$company_id = $_REQUEST['cId'];

if(@$_REQUEST['cId'] != 0 && !empty($company_id)){
	$query_exam = "SELECT examid,examname FROM company_exams WHERE companyid=$company_id ORDER BY examid";
	}
else{
	$query_exam = "SELECT examid,examname FROM company_exams WHERE companyid!=1 ORDER BY examid";
	}
	
$result_exam = mysql_query($query_exam) or die(mysql_error());

for($i=1;$row = mysql_fetch_array($result_exam);$i++){
	$examname[$i] = $row[1];
	$exam_id[$i] = $row[0];
	}
$n_of_exams = $i - 1;
?>

<ul type="disc">
    <?php
    for($i=1;$i<=$n_of_exams;$i++){
        echo "<li><label onclick='start($exam_id[$i])'><b>".$examname[$i]."</b></label></li>";
        }
     ?>
</ul>

<script>
function start(s){
	//jstophp("exam-starter.php?exId=" + s,e);
	window.location = "exam-instructions.php?exId=" + s;
	}
/*function e(xhttp){
	document.getElementById('test').innerHTML = xhttp.responseText;
	}*/

</script>