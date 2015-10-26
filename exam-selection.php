
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
<link rel="stylesheet" type="text/css" href="style.css" />

<script type="text/javascript" src="javascript.js"></script>

<style>

#companies,#exams{
	position:relative;
	display:inline-block;
	width:49.7%;
	color:#727272;
	padding:2%;
	}
#exams{
	float:right;
	}

.list-names{
	text-align:center;
	font-size:5vmin;
	}
#companies-list,#exams-list{
	color:#252525;
	font-size:1.5vw;
	border:solid 2px #607D8B;
	height:25vh;
	overflow:hidden;
	background-color:#3CF;
	height:25vh;
	}
#companies-list:hover,#exams-list:hover{
	overflow:scroll;
	}
#companies-list ul,#exams-list ul{
	text-align:center;
	padding:2%;
	}
#companies-list li,#exams-list li{
	margin:1%;
	}
#companies-list li b:hover,#exams-list li label:hover{
	cursor:pointer;
	}

#about-company li,#about-exam li{
	margin:4%;
	margin-bottom:6%;
	margin-top:6%;
	font-size:3vmin;
	color:rgba(7,45,52,1);
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
		<div id="companies">
			<h2 class="list-names">COMPANIES</h2>
			<div id="companies-list">
			<?php include 'companies-list.php'; ?>
            </div>
            <div  id="about-company">
            	<ul>
                	<li>This is the list of all the companies registered with us</li>
                    <li>Click on any particular company to see its available exams</li>
                </ul>
            </div>
		</div>
		<div id="exams">
			<h2 class="list-names">EXAMS</h2>
			<div id="exams-list">
			<?php include 'exams-list.php'; ?>
            </div>
            <div id="about-exam">
            	<ul>
            		<li>This is the list of exams available</li>
                    <li>Click on any exam to start the exam</li>
                    <li>You will be redirected to the page containing the relevant instructions</li>
            	</ul>
            </div>
		</div>
    </div>
</body>
</html>
