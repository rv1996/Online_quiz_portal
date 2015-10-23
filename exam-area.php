<?php include 'core.php';
/*if(!isset($_SESSION['ques'])){
	$_SESSION['ques'] = 1;
	}*/
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
	top:6vh;
	padding:1%;
	width:60%;
	height:70vh;
	float:right;
	right:0;	
	background-color:rgba(195, 205, 50,.37);
	border:1px solid #009688;
	
	}
	
#questionarea{
	position:relative;
	top:6vh;
	left:0;
	margin:auto;
	padding:1%;
	width:auto;
	overflow:scroll;
	background-color:rgba(195, 205, 50, 0.37);
	height:70vh;
	border:1px solid #009688;
	}
	
.questionnav {
  background: rgba(25, 210, 201, 0.66);
  font-family: Courier New;
  color: rgba(90, 16, 206, 0.78);
  margin: 1%;
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
	position:relative;
	margin:1%;
	top:4vh;
	right:1%;
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
<div id="timer"></div>
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
<button id="end" onclick="endExam()" style="height:3vh;width:3vw;padding:auto">END</button>
<script>
var t = <?php echo $_SESSION['time']; ?>;
var seconds = <?php echo $_SESSION['sec']; ?>;

setInterval(timer,1000);

quesSelector(<?php echo $_SESSION['ques'];?>);
	
function endExam(){
	jstophp('delete-temp-table.php',del);
	}
	
function del(xhhtp){
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
</script>

</body>
</html>