<?php include 'core.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<style>
#section{
	position:relative;
	float:right;
	width:75%;
	border-left:solid 2px #B6B6B6;
	background:#B2DFDB;
	height:75.7vh;
	/*border-bottom:solid 4px #B6B6B6;*/
	}
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
	font-size:5vh;
	}
#companies-list,#exams-list{
	color:#212121;
	font-size:1.5vw;
	border:solid 2px #607D8B;
	height:25vh;
	overflow:scroll;
	height:50vh
	}
#companies-list ul,#exams-list ul{
	text-align:center;
	padding:2%;
	}
#companies-list li,#exams-list li{
	margin:1%;
	}
</style>

</head>

<body>
<?php 
require 'connect.php';
include 'Page-heading.php';
include 'bottom-label.php';
include 'navigation.php';
include 'profile.php';
?>
	<div id="section">
		<div id="companies">
			<h2 class="list-names">COMPANIES</h2>
			<div id="companies-list">
			<?php include 'companies-list.php'; ?>
            </div>
		</div>
		<div id="exams">
			<h2 class="list-names">EXAMS</h2>
			<div id="exams-list">
			<?php include 'exams-list.php'; ?>
            </div>
		</div>
    </div>
</body>
</html>