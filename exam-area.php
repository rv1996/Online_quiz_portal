<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
* {
	box-sizing:border-box;
	}
#displayarea {
	position:relative;
	border:1px solid #000;
	margin:1%;
	padding:1%;
	width:60%;
	height:23em;
	float:right;
	right:0;	
	top:-1em;
	}
#questionarea{
	position:relative;
	left:0;
	border:1px solid #000;
	margin:1%;
	padding:1%;
	width:29%;
	height:23em;
		
	}
.questionnav{
	position:relative;
	left:5%;
	bottom:1%;
	font-size:3em;
	margin:1%;
	padding:1%;
	border:1px solid #000;
    }
/*#question{
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
<?php include 'Page-heading.php';?>
<?php 
mysql_connect('localhost','root','') or die('ConnectionError');;
mysql_select_db('oqp') or die(mysql_error());

$query_questions = "SELECT question FROM questionbank_practice WHERE QuestionType='Javascript'";
$result_questions = mysql_query($query_questions) or die(mysql_error());


/*while($row = mysql_fetch_array($result_questions)){
	$question[$i]=$row['question'];
	$questionid[$i]=$row['questionid'];
	$i++;
	}*/

?>
<div id="phpcode"></div>
<div id="displayarea">
<!--div id="question"></div>
<div id="ans"></div-->
</div>
<div id="questionarea">
<?php 
$question_count = mysql_num_rows($result_questions);

for($i=1;$i <= $question_count;$i++){
	if($i<10){
		$zero = '0';
		}
	else{
		$zero = '';
		}
	echo ("<span class='questionnav' onclick='quesSelector($i)'>$zero".$i."</span>");
	
	if(($i) % 5 == 0){
		echo "<br><br>";
		}
	}
?>
<script>
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
</div>
</body>
</html>