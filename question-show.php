<?php 
mysql_connect('localhost','root','') or die('ConnectionError');
mysql_select_db('oqp') or die(mysql_error());

$query_questions = "SELECT question, questionid FROM questionbank_practice WHERE QuestionType='Javascript'";


$result_questions = mysql_query($query_questions) or die(mysql_error());


for($i=1;$row = mysql_fetch_array($result_questions);$i++){
	$question[$i] = $row['question'];
	$questionid[$i] = $row['questionid'];
	$query_ans = "SELECT options FROM answers_practice WHERE questionid=$questionid[$i]";
	$result_ans = mysql_query($query_ans) or die(mysql_error());
	for($j=1;$row2 = mysql_fetch_array($result_ans);$j++){
		$ans[$i][$j] = $row2['options'];
		}
	$nofoptions[$i]=$j - 1;
	}
	

?>
<?php
$q = $_REQUEST['q'];

echo "<div id='question'>".$q.") ".htmlentities($question[$q])."</div>";
?>
<head>
<style>
#question{
	position:absolute;
	text-align:center;
	top:5%;
	height:40%;
	width:95%;
	margin:auto;
	padding:1%;
	font-size:1.5em;
	font-family:"Comic Sans MS", cursive;
	}
	#ans{
	position:absolute;
	bottom:5%;
	height:40%;
	width:95%;
	margin:auto;
	padding:1%;
	font-size:1.2em;
	font-family:"Comic Sans MS", cursive;
	}
</style>
</head>
<body>
<div id="ans">
<form>
<ol type="A">
	<?php
	for($j=1;$j<=$nofoptions[$q];$j++){
		echo "<li><input type='checkbox' value=$j name=$i>".htmlentities($ans[$q][$j])."</li>";
	}
	?>
</ol>
</form>
</div>

</body>