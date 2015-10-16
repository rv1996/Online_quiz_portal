<?php
$_SESSION['table']=NULL; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="style.css">
<style>

#displayarea {
	position:relative;
	padding:1%;
	width:60%;
	height:30vw;
	float:right;
	right:0;	
	background-color:rgba(195, 205, 50, 0.37);
	border:1px solid black;
	}
#questionarea{
	position:relative;
	left:0;
	margin:auto;
	padding:1%;
	width:auto;
	overflow:scroll;
	background-color:rgba(195, 205, 50, 0.37);
	height:30vw;
	border:1px solid black;
	}
.questionnav {
  background: rgba(25, 210, 201, 0.66);
  font-family: Courier New;
  color: rgba(90, 16, 206, 0.78);
  margin: 1%;
  font-size: 2vw;
  padding: 2%;
  text-decoration: none;
}

.questionnav:hover {
  background: rgba(22, 226, 141, 0.61);
  color: inherit;
  text-decoration: none;
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
</head>

<body>
<?php 
include 'Page-heading.php';
require 'connect.php';
include 'bottom-label.php';
include 'ans-check.php';
?>


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
<button id="end" onclick="endExam()" style="height:1.5vw;width:3vw;padding:auto">END</button>
<script>
function endExam(){
	jstophp('delete-temp-table.php',del);
	}
	
function del(xhhtp){
	document.getElementById('phpcode').innerHTML = xhttp.responseText;
	}
	
function quesSelector(selection){	
	jstophp('question-show.php?q=' + selection,myFunction);
	}
	
function jstophp(url,cfunc){
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      cfunc(xhttp);
      }
    }
    xhttp.open("GET", url, true);
    xhttp.send();
	}
function myFunction(xhttp){
	document.getElementById('displayarea').innerHTML = xhttp.responseText;
	}
	
</script>

</body>
</html>