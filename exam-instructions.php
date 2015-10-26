<?php


include 'core.php';

if(!is_user_loggedin_student()){
	header("Location: page1.php");
	}
include 'exam-starter.php';



?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="style.css" />
<script type="text/javascript" src="javascript.js"></script>
<style>

#instructions{
	position:relative;
	font-size:2.2vmin;
	}
#instructions caption{
	font-size:2.5vmin;
	margin-right:2%
	}

#instructions ol{
	list-style:decimal;
	margin-top:3%;
	margin-left:15%;
	margin-bottom:1%
	}

#instructions li{
	margin:.5%;
	margin-bottom:1.5%;
	}

h2{
	margin-left:36%;
	}

#start{
	position:fixed;
	padding-left:28%;
	bottom:3%;
	z-index:3;
	}


table{
	margin-left:20%;
	margin-top:2%;
	width:55%;
	height:auto;
	}

th,td{
	padding:1%;
	text-align:center;
	}
button:hover{
	cursor:pointer;

	}
</style>
</head>


	<body>



<?php
include 'Page-heading.php';
include 'bottom-label.php';
include 'navigation.php';
include 'student-profile.php';
require 'connect.php';
include 'exam-info.php';


$_SESSION['ques'] = 1;



	$query_temp_table = "INSERT INTO temp_table (questionid) SELECT questionid FROM questionbank_company" ;
	mysql_query($query_temp_table);

	?>


<div id="section">
    <h2>Exam Instructions</h2>
    <div id="instructions">
    	<ol>
        	<li>The Company which created this exam is <b><?php echo @$company_name; ?></b></li>
            <li>The maximum amount of Time for this exam is <b><?php echo @$_SESSION['time']; ?> min</b>, after that the exam will end itself</li>
            <li>The total Number of Questions in the exam are <b><?php echo @$_SESSION['n_of_questions']; ?></b></li>
            <li>The details regarding how marks are awarded is given here:</li>
        </ol>
		<table>
        	<caption>Questions</caption>
        	<tr>
            	<th>Question Type</th>
                <th>Marks per Question</th>
                <th>Negative Marks</th>
            </tr>
            <?php
            	for($i=1;$i<=$n_of_type;$i++){
					echo "<tr><td>".$type[$i]."</td><td>".@$pmarks[$i]."</td><td>".@$nmarks[$i]."</td></tr>";
					}
			?>
        </table>
        <ol>
        	<li>Choose the correct option and then click on next to go to the next question</li>
            <li>On the left side is the navigation-box to directly go to any particular question</li>
            <li>Any question can be submitted any number of times until the exam is over,no limits</li>

        </ol>
        <!--?php echo $_SESSION['examid']; ?-->

	</div>
	<div id="start" >
			<div ><button style="text-decoration:none;font-size:3vmin;" type="button" onclick="examStart()">START</button>
	</div>


	<script>
	function examStart(){
		window.location = "exam-area.php";
		}
	</script>

	</body>
</html>
