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



    <script type="text/javascript" src="https://www.google.com/jsapi"></script>

    <script type="text/javascript">
      google.load("visualization", "1.1", {packages:["bar"]});
      google.setOnLoadCallback(drawChart);

	 function show(){
			chart.draw(data, options);
		}
      function drawChart() {
         data = google.visualization.arrayToDataTable([

		// looping using the number Exam ig get..
          //['Exams..', 'Highest score','Your score'],
					['Exams..','Your score', 'Average Score' ,'Highest score'],

					<?php
							for($i=0;$i<count($exam_name);$i++){
								if($i<count($exam_name)){
									echo "
										['$exam_name[$i]', $score_array[$i] ,".round($average_array[$i])." , $maximun_array[$i] ],";
									}
									else
									if( $i==count($exam_name)-1 ){
										echo "
										['$exam_name[$i]', $score_array[$i] ,".round($average_array[$i])."  , $maximun_array[$i] ]";
									}
								}


							?>

        ]);

         options = {
          chart: {
            title: 'Student Performance :: <?php echo 'Name '.$_SESSION['student_data']['Name']?>',
            subtitle: 'Highest score, Your score'
          },
          bars: 'horizontal' // Required for Material Bar Charts.
        };

         chart = new google.charts.Bar(document.getElementById('barchart_material'));

				 show();
      }
    </script>





    <div id="barchart_material" style="width:80%; height:70%;margin-left:13%;">
	 </div>

	 <!-- div onclick="return show();" style="float:right;">show graph</div-->
