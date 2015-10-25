<?php
	//-----stduent graph analysis..
	require 'connect.php';
	include_once 'core.php';
	
	//---- for testing only...
	//print_r($_SESSION['student_data']);
	
	$std_number = $_SESSION['student_data']['StudentNumber'];
	$sql_query = "SELECT Score FROM records WHERE StudentNumber = $std_number";
	$sql_result = mysql_query($sql_query);
	$sql_data = mysql_fetch_array($sql_result);
//	print_r($sql_data);
	//print_r($_SESSION['student_data']);
	
	
?>

<html>
  <head>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
	
    <script type="text/javascript">
      google.load("visualization", "1.1", {packages:["bar"]});
      google.setOnLoadCallback(drawChart);
	 
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
			
		// looping using the number Exam ig get..
          ['Exams..', 'Highest score','Your score'],
          ['Exam 1', 92, 60],
          ['Exam 2', 85, 50],
          ['Exam 3', 79, 40],
          ['Exam 4', 100, 67]
        ]);

        var options = {
          chart: {
            title: 'Studeny Performance---- ',
            subtitle: 'Highest score, Your score'
          },
          bars: 'horizontal' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
  
  	 <? echo 'Name '.$_SESSION['student_data']['Name']?>

    <div id="barchart_material" style="width: 900px; height: 500px;">
	 </div>
  </body>
</html>