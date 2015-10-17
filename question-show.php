<?php 
require 'connect.php';
include 'core.php';

$query_questions = "SELECT question, questionid FROM questionbank_practice WHERE QuestionType='Javascript' ORDER BY questionid";

$result_questions = mysql_query($query_questions) or die(mysql_error());

for($i=1;$row = mysql_fetch_array($result_questions);$i++){
	$question[$i] = $row['question'];
	$questionid[$i] = $row['questionid'];
	$query_ans = "SELECT options FROM answers_practice WHERE questionid=$questionid[$i] ORDER BY optionid";
	$result_ans = mysql_query($query_ans) or die(mysql_error());
	for($j=1;$row2 = mysql_fetch_array($result_ans);$j++){
		$ans[$i][$j] = $row2['options'];
		}
	$nofoptions[$i] = $j - 1;
	}
?>
<?php
$q = $_REQUEST['q'];

$_SESSION['ques'] = $q;

//echo "<div id='question'>".$q.") ".htmlentities($question[$q])."</div>";
?>
<head>
<style>
#question{
	position:absolute;
	text-align:center;
	top:5%;
	height:35%;
	width:95%;
	margin:auto;
	padding:1%;
	font-size:1.6vw;
	font-family:"Comic Sans MS", cursive;
	}
	
#options{
	position:absolute;
	bottom:10%;
	height:40%;
	width:95%;
	margin:auto;
	padding:1%;
	font-size:1.2vw;
	font-family:"Comic Sans MS", cursive;
	}
#submit{
	position:absolute;
	bottom:.01vw;
	right:5%;
	height:16%;
	text-align:center;
	font-size:1.3vw;
	font-family:"Courier New", Courier, monospace;
	}
</style>
</head>
<body>
<div id="php"></div>

<div id="question" onClick="ne()">
<?php 
echo $q.") ".htmlentities($question[$q]);
?>
</div>
<form method="post" action="<?php echo 'exam-area.php?qid='.$q; ?>" >
<div id="options">
<ol type="A">
	<?php
	for($j=1;$j<=$nofoptions[$q];$j++){
		echo "<li><input type='checkbox' value=1 name=$j>".htmlentities($ans[$q][$j])."</li>";
	}
	?>
</ol>
<button id="submit" type="submit">Next</button>
</div>
</form>
<!--script>
function next(){
	jstophp('next.php',next1);
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

function next1(xhttp){
	document.getElementById('php').innerHTML = xhttp.responseText ;
	}
</script-->

</body>