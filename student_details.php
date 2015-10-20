<?php 
//student details form... regarding the exam which had been given by the individual student..

include 'page-heading.php';
include 'bottom-label.php';
include 'navigation.php'

?>

<html>
<head>
	<link href="style.css" type="text/css" rel="stylesheet">
	<script src = "javascript.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
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
	</body>
	
</html>