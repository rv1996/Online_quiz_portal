<script src="ajax.js" type="text/javascript"></script>
<?php
require 'connect.php';

$query_exams = "SELECT examid FROM company_exams ORDER BY examid";
$result_exams = mysql_query($query_exams) or die(mysql_error());
$i = 1;
while($row = mysql_fetch_array($result_exams)){
	$exam_id[$i] = $row['examid'];
	$i++;
	}
$n_of_exams = $i - 1;
?>
<div id="test"></div>
<ul>
    <?php
    for($i=1;$i<=$n_of_exams;$i++){
        echo "<li onclick='start($exam_id[$i])'>EXAM <b>".$exam_id[$i]."</b></li>";
        }
     ?>
</ul>

<script>
function start(s){
	jstophp("exam-starter.php?exId=" + s,e);
	window.location = 'exam-instructions.php';
	}
function e(xhttp){
	document.getElementById('test').innerHTML = xhttp.responseText;
	}

</script>