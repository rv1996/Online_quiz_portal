<?php include 'core.php';
/*if(!isset($_SESSION['ques'])){
	$_SESSION['ques'] = 1;
	}*/


if(!is_user_loggedin_student()){
	header("Location: page1.php");
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="style.css">
<style>

#displayarea{
	position:relative;
	top:0;
	padding:1%;
	width:60%;
	height:81vh;
	float:right;
	right:0;
	background-color:#DBE1E2;
	border:1px solid #009688;
	border-top:solid 4px #B6B6B6;

	}

#questionarea{
	position:relative;
	top:0;
	left:0;
	margin:auto;
	padding:5%;
	width:auto;
	overflow:hidden;
	background-color:#DBE1E2;
	height:81vh;
	border:1px solid #009688;
	border-top:solid 4px #B6B6B6;

	}
#questionarea:hover{
	overflow:auto;
	}

.questionnav {
  background: rgba(25, 210, 201, 0.66);
  font-family: Courier New;
  color: rgba(90, 16, 206, 0.78);
  margin-left:2%;
  font-size: 2.4vw;
  padding: 2%;
  text-decoration: none;
}

.questionnav:hover {
  background: rgba(22, 226, 141, 0.61);
  color: inherit;
  text-decoration: none;
}

#end{
	position:absolute;
	margin:1%;
	bottom:1%;
	right:50%;
	z-index:2;

	}
/*#submit{
	position:relative;
	top:24em;
	left:75em;
	}
#question{
	position:absolute;
	top:3%;
	height:45%;
	width:95%;
	margin:auto;
	padding:1%;
	border:1px solid #000;
	font-size:1.5em;
	font-family:"Comic Sans MS", cursive;
	}
#ans{
	position:absolute;
	bottom:3%;
	height:45%;
	width:95%;
	margin:auto;
	padding:1%;
	border:1px solid #000;
	}*/

#timer{
	position:fixed;
	font-size:5vmin;
	right:5%;
	top:14.5%;
	z-index:3;
	}
</style>
<script src="ajax.js" type="text/javascript"></script>
</head>

<body>
<?php
include 'Page-heading.php';
require 'connect.php';
include 'bottom-label.php';
include 'ans-check.php';

?>
<div id="p" onclick="nextType()"></div>
<div id="timer" style="position:fixed"></div>
<div id="phpcode"></div>
<div id="displayarea">
	<!--div id="question"></div>
	<div id="ans"></div>
	<div id="submit"><input type='submit' /></div-->
</div>
<div id="questionarea">
<?php

$question_count = mysql_num_rows($result_questions);
//$question_count = 19;
$ques_columns = ceil($question_count/5);
for($i=1;$i <= $question_count;$i++){
	if($i<10){
		$zero = '0';
		}
	else{
		$zero = '';
		}
	echo ("<button class='questionnav' onclick='quesSelector($i)'>$zero".$i."</button>");
	if(($i) % $ques_columns == 0){
		echo "<br><br>";
		}
	}
?>
</div>
<button id="end" onclick="endExam()" style="font-size:3vmin;padding:auto">END</button>
<script>
var t = <?php echo $_SESSION['time']; ?>;
var seconds = <?php echo $_SESSION['sec']; ?>;

quesSelector(<?php echo $_SESSION['ques'];?>);

setInterval(timer,1000);

function endExam(){
	window.location = "end-score.php";
	}

function del(xhttp){
	document.getElementById('phpcode').innerHTML = xhttp.responseText;
	}

function quesSelector(selection){
	jstophp('question-show.php?q=' + selection,myFunction);
	}

function myFunction(xhttp){
	document.getElementById('displayarea').innerHTML = xhttp.responseText;
	}

function timer(){
	if(t<10){
		var minutes = "0" + t;
		}
	else{
		var minutes = t;
		}
	if(Number(seconds)<10){
		seconds = "0" + seconds;
		}
	document.getElementById('timer').innerHTML = minutes + ":" + seconds;
	if(Number(seconds) == 0){
		if(t > 0){
			t = t - 1;
			seconds = "59";
			}
		else{
			window.location = "end-score.php";
			}
		}
	else{
		seconds = Number(seconds) - 1;
		}
	jstophp("timer.php?t=" + t + "&sec=" + seconds,timeChanger);
	}

function timeChanger(xhttp){
	document.getElementById('phpcode').innerHTML = xhttp.responseText;
	}

/*function nextType(){
	var typeid = <?php // echo $typeid;?>;
	<?php
	/*$examid = $_SESSION['examid'];
	$query = "SELECT typeid,pmarks,nmarks,noofquestions FROM exam_type_linked WHERE examid='$examid' ORDER BY typeid";
	$result = mysql_query($query) or die(mysql_error());

	for($i=1;$row=mysql_fetch_array($result);$i++){
		$t_id[$i] = $row['typeid'];
	}
	$i = $i - 1;*/
	?>
	var tmax = <?php //echo $t_id[$i] ; ?>;
	if(typeid < tmax){

		}
	}*/
</script>

</body>
</html>
