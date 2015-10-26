<?php
include 'core.php';

if(!is_user_loggedin_company()){
	header("Location: page2.php");
	}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript" src="javascript.js"></script>
<style>
#records{
	margin-left:25%;
	margin-right:25%;
	text-align:center;
	}
#records h3{
	text-align:center;
	}
</style>
</head>

<body>
<?php
include 'connect.php';
include 'Page-heading.php';
include 'bottom-label.php';
include 'navigation.php';
include 'company-profile.php';
?>
<?php
include 'records-fetcher.php';
?>
	<div id="section">
    <div id="records">
        <h3>Exam Records</h3>
    	<table>
        	<tr>
            	<th>S.No</th><th>Exam Name</th><th>Number of Students</th><th>Average Score</th><th>Highest Score</th>
            </tr>
            
            <?php
			for($i=1;$i<=$n_of_exams;$i++){
				echo "<tr>
					      <td>$i</td><td>$examname[$i]</td><td>$n_students[$i]</td><td>$avg_score[$i]</td><td>$max_score[$i]</td>
					  </tr>";
				}
			?>
    	</table>
    </div>
    </div>  
</body>
</html>