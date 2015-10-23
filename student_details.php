<?php 
//student details form... regarding the exam which had been given by the individual student..

include 'page-heading.php';
include 'bottom-label.php';
include 'navigation.php';
include 'connect.php'  ;

//$student_number = //variable to be updated with the session entry....
$sql_query = "SELECT * FROM records  ";
$result = mysql_query($sql_query);
$result_data = mysql_fetch_array($result);


?>

<html>
<head>
	<link href="style.css" type="text/css" rel="stylesheet">
	<script src = "javascript.js"></script>
	<script src="jquery-1.11.3.min.js"></script>
	<script>
		$(document).ready(function(){
			
			$("#exam").click(function(){
				$("#slide-exam").slideToggle("slow");
			})
			$("#percent").click(function(){
				$("#slide-percent").slideToggle("slow");
			})
			$("#graph").click(function(){
				$("#slide-graph").slideToggle("slow");
			})
			$(".table_data").click(function(){
				$("#data1").slideToggle("slow");
			})
		});
	</script>
	<style>
		nav{
			background:#A13549;
			color:white;
			width:30%;
			float:left;
			height:75%;
			padding:2%;
		}
		nav div:hover{
			cursor:pointer;
		}
		nav div{
			padding:4%;
		}
		nav div,nav span{
			padding:2%;
			display:block;
			background:black;
			margin-bottom:10px;
		}
		nav span{
			font-size:large;
			color:white;
			display:none;
			heigth:100px;
		}
		
		
	</style>
	
</head>
	<body>

		
		<nav id="list">
			
				<div id="exam">Exam Given</div>
				<span id="slide-exam">Contain the details about the exam given </span>
				<div id="percent">Percentile</div>
				<span id="slide-percent">Contain the details about the percentage and high score</span>
				<div id="graph">Graph Analysis</div>
				<span id="slide-graph">Graphical analysis is shown here....</span>
				
			
		</nav>
			
		<div id="details_data">
				<span class="table_data" id="exams">Exams Id</span><br>
				<span style="display:none;" id="data1"><?= $result_data['ExamId']?></span><br>
				
		<div>
	</body>
	
</html>