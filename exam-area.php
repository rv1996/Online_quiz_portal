<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
	margin:auto;
	padding:1%;
	width:auto;
	overflow:hidden;
	height:23em;
	}
.questionnav{
	position:relative;
	text-align:center;
	bottom:1%;
	font-size:300%;
	margin:1%;
	padding:1%;
	border:1px solid #000;
	
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

</body>
</html>