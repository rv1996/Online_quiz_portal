<?php session_start(); ?>
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
	
	border:1px solid black;
	}
#questionarea{
	position:relative;
	left:0;
	margin:auto;
	padding:1%;
	width:auto;
	overflow:scroll;
	height:30vw;
	border:1px solid black;
	}
.questionnav {
  background: #704d4d;
  background-image: -webkit-linear-gradient(top, #704d4d, #bd1818);
  background-image: -moz-linear-gradient(top, #704d4d, #bd1818);
  background-image: -ms-linear-gradient(top, #704d4d, #bd1818);
  background-image: -o-linear-gradient(top, #704d4d, #bd1818);
  background-image: linear-gradient(to bottom, #704d4d, #bd1818);
  -webkit-border-radius: 2vw;
  -moz-border-radius: 2vw;
  border-radius: 2vw;
  font-family: Courier New;
  color: #ffffff;
  font-size: 2vw;
  padding: 2%;
  text-decoration: none;
}

.questionnav:hover {
  background: #fa3c3c;
  background-image: -webkit-linear-gradient(top, #fa3c3c, #d93434);
  background-image: -moz-linear-gradient(top, #fa3c3c, #d93434);
  background-image: -ms-linear-gradient(top, #fa3c3c, #d93434);
  background-image: -o-linear-gradient(top, #fa3c3c, #d93434);
  background-image: linear-gradient(to bottom, #fa3c3c, #d93434);
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
include 'connect-to-db.php';
include 'bottom-label.php';
?>

<?php 

$i = 1;
$query_questions = "SELECT question,questionid FROM questionbank_practice WHERE QuestionType='Javascript' ORDER BY questionid";
$result_questions = mysql_query($query_questions) or die(mysql_error());


while($row = mysql_fetch_array($result_questions)){
	$question[$i]=$row['question'];
	$questionid[$i]=$row['questionid'];
	$_SESSION['m'][$i]=0;
	$i++;
	}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$q = $_REQUEST['qid'];
	$query = "SELECT CheckAns FROM answers_practice WHERE questionid=$questionid[$q] ORDER BY optionid";
	$r = mysql_query($query) or die(mysql_error());
	$i=1;
	while($row2 = mysql_fetch_array($r)){
		$qcheckans[$i] = $row2['CheckAns'];
		$i++;
		}
	$nofoptions=$i;
	for($j=1;$j<$nofoptions;$j++){
		if(!empty($_POST[$j])){
			$options[$j]=1;
		}
		else{
			$options[$j]=0;
		}
		if($qcheckans[$j] == $options[$j]){
			$check=1;
			}
		else{
			$check=0;
			break;
			}
	}
	
	if($check == 1){
		if($_SESSION['m'][$q]==0){
			$_SESSION['marks']+=3;
			echo $_SESSION['marks'];
			$_SESSION['m'][$q]=1;
			}
		}
	else{
		echo $_SESSION['marks'];
		}
		/*for($i=1;$i<=$nofoptions;$i++){
			if(!empty($_POST[$i])){
			if($qcans[$_POST[$i]]==1){
				echo 'correct';
				
				}}
			}*/
	}
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