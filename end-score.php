<?php
include 'core.php';

if(!is_user_loggedin_student()){
	header("Location: page1.php");
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="style.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="javascript.js"></script>

<style>
#section{
	position:relative;
	width:75%;
	float:right;
	height:75.7vh;
	background:#B2DFDB;
	border-left:solid 2px #B6B6B6;
	}
#exam-over{
	text-align:center;
	position:relative;
	}
#exam-over h1,#exam-over h3{
	position:inherit;
	top:4vh;
	}
#exam-over h1{
	font-size:5.5vmin;
	}

#dash{
	position:relative;
	top:4vh;
	}
</style>
</head>

<body>
<?php
include 'Page-heading.php';
include 'bottom-label.php';
require 'connect.php';
include 'navigation.php';
include 'student-profile.php';
include 'score-calculator.php';
include 'student-records-editor.php';


login_redirect_student();

?>

	<div id="section">
    	<div id="exam-over">
        	<h1>Exam is Over</h1>
            <h3>
            Your Score is
            </h3>
            <h3>
            <?php
            	echo $score;
			?>
            </h3>
            <h3>
            out of
            </h3>
            <h3>
            <?php
				echo $max_marks;
			?>
            </h3>
            <div id="dash">
            	<button onclick="toDashboard()" style="font-size:4vmin">Dashboard</button>
            </div>
    	</div>
    </div>

<?php
include 'delete-temp-table.php';
?>
<script>
function toDashboard(){
	window.location = "page1.php";
	}

</script>
</body>
</html>
