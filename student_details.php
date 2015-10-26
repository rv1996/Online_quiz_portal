<?php
//student details form... regarding the exam which had been given by the individual student..

//---- all the file equivalent to the templetes are include here....
include 'page-heading.php';
include 'bottom-label.php';
include 'connect.php'  ;
include 'core.php';
include 'navigation.php';
// include 'eaxm_given.php';


//---$student_number = //variable to be updated with the session entry....

//---basic SQL uqery
$sql_query = "SELECT * FROM records ";
$result = mysql_query($sql_query);
$result_data = mysql_fetch_array($result);


//force redirection to login page...
login_redirect_student();


?>

<html>
<head>
	<link href="style.css" type="text/css" rel="stylesheet">
	<script src = "javascript.js"></script>
	<script src = "ajax.js"></script>
	<script src="jquery-1.11.3.min.js"></script>
	<script>
	var graph_div = document.getElementById('graph');
	var exam_div = document.getElementById('exam_given');

		//----sliding effect of the JQuery is used....
		//----for now CDN is not used...instead we have downloaded the coresponding JQuery file in the same Directory...


		$(document).ready(function(){

			$("#exam").click(function(){
				$("#slide-exam").slideToggle("fast");
			})



			$("#graph").click(function(){
				$("#slide-graph").slideToggle("fast");
			})


		});

		function show_graph(){
				graph_div.style.display = "block";

		}
		function hide_graph(){
					graph_div.style.display = "none";
		}
	</script>

	<style>
		table, th, td {
    	border: 1px solid black;
    	border-collapse: collapse;
		}
		th, td {
    	padding: 5px;
		}
		th {
    	text-align: left;
		}
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
			font-size:small;
			color:white;
			display:none;
			padding: 1%;
			heigth:100px;
		}
		#exam_given{
			margin-top:2%;
			margin-bottom:2%;
		}

		}
	</style>
	</head>


	<body>


		<nav id="list">
				<div id="exam" onclick="hide1()" >Exam Given</div>
					<span id="slide-exam">Contain the details about the exam given

							<center>	<img src = "exam.jpg" height ="100px" width="100px"></center>
					</span>

				<div id="graph" onclick="hide3()">Graph Analysis</div>
				<span id="slide-graph">Graphical analysis is shown here....
					<center>	<img src = "graph.jpg" height ="100px" width="100px"> </center>
					</span>
		</nav>



		<section id="details_data_display" style="float:left;width:70%;height:80%;overflow:scroll;" >
				<div id="exam_given"><?php include_once "exam_given.php"; ?>
						<center>
							<table>
										<?php
											echo "<tr>
												<th>Exam Name</th>
												<th>Personal score</th>
												<th>Average score</th>
												<th>Highest score</th>
											</tr>";
											//echo "$size_of_array";
											for($i=0;$i<count($exam_name);$i++){
												echo "<tr>
														<td>$exam_name[$i]</td>
														<td>$score_array[$i]</td>
														<td>$average_array[$i]</td>
														<td>$maximun_array[$i]</td>
												</tr>";
											}
										?>
							</table>
						</center>

				</div>

				<br>
				<div id="graph" style="height:90%;" > <?php include_once "Student_graph.php"; ?></div>

		</section>



	</body>

</html>
