<?php
include_once 'core.php';

if(!is_user_loggedin_student()){
	header("Location: page1.php");
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="javascript.js"></script>
<style>
#practice-exams{

	text-align:center;

	}
p{
	padding:7%;
	}
ol{
	position:relative;
	right:2%
	}
label:hover{
	cursor:pointer;
	}
</style>
</head>

<body>
<?php
require 'connect.php';
include 'Page-heading.php';
include 'bottom-label.php';
include 'navigation.php';
include 'student-profile.php';

?>
<div id="section">
	<div id="practice-exams">
    	<h2>List of Exams For Practice</h2>
        <ol>
        	<?php
			$sql = "SELECT examname,examid FROM company_exams WHERE companyid=1";
			$result = mysql_query($sql) or die(mysql_error());

			for($i=1;$row=mysql_fetch_array($result);$i++){
				echo "<li><label onclick='start($row[1])'><b>$row[0]</b></label></li>";
				}
			?>
    	</ol>
        <p>Click on the practice exam that you want to give.
        These exams are only for practice purposes that are aimed at improving your skills.
        Also these exams help you get accustomed to giving exams on this site.
        Any practice exam can be given any number of times.
        </p>

    </div>
</div>
<script>
function start(s){
	window.location = "exam-instructions.php?exId=" + s;
	}
</script>
</body>
</html>
