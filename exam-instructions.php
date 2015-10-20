<?php
include 'core.php';
include 'exam-starter.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="style.css" />
<style>
#exam-start{
	position:relative;
	width:75%;
	float:right;
	height:75.7vh;
	font-family:"Times New Roman", Times, serif;
	padding:1%;
	border-left: solid 2px #B6B6B6;
	background:#B2DFDB;
	}
	
#instructions{
	position:relative;
	}

#instructions ol{
	margin-left:15%;
	margin-bottom:1%
	}
	
#instructions li{
	margin:1%;
	}
	
h2{
	text-align:center;
	}

#start{
	}
	
	
table{
	margin-left:23%;
	margin-top:2%;
	width:55%;}
	
th,td{
	padding:1%
	}
</style>
</head>

<body>

<?php 
include 'Page-heading.php';
include 'bottom-label.php';
include 'navigation.php';
include 'profile.php';
require 'connect.php';
include 'exam-info.php';

$_SESSION['ques'] = 1;

$query_temp_table = "INSERT INTO temp_table (questionid) SELECT questionid FROM questionbank_practice" ;
mysql_query($query_temp_table);

?>
<div id="exam-start">
    <h2>Exam Instructions</h2>
    <div id="instructions"> 
    	<ol>
        	<li>The Company which created this exam is <?php echo @$company_name; ?></li>
            <li>The maximum amount of Time for this exam is <?php echo @$time; ?></li>
            <li>The Question types present in exam are :</li>
        </ol>
		<table>
        	<caption>Questions</caption>
        	<tr>
            	<th>Question Type</th>
                <th>Number of Questions</th>
                <th>Marks per Question</th>
                <th>Negative Marks</th>
            </tr>
            <?php
            	for($i=0;$i<=$n_of_type;$i++){
					echo "<tr><td>".$type."</td><td>".$n."</td><td>".$pmarks."</td><td>".$nmarks."</td>";
					}
			?>
        </table>
        <!--?php echo $_SESSION['examid']; ?-->
	</div>
	<div id="start">
		<!--div>
			<a href="exam-area.php">Exam Start</a>
		</div-->
	</div> 
</div>
</body>
</html>