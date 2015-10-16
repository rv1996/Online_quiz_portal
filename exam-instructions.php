<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="style.css" />
<style>
#instructions{
	width:38vw;
	height:60%;
	position:relative;
	text-align:center;
	margin:1%;
	float:left;
	margin-right:1%;
	}
#start{
	width:50%;
	height:100%;
	position:relative;
	text-align:center;
	margin:1%;
	float:right;
	}

</style>
</head>

<body>
<?php 
include 'Page-heading.php';
include 'bottom-label.php';
require 'connect.php';
$query_temp_table = "INSERT INTO temp_table (questionid) SELECT questionid FROM questionbank_practice" ;
mysql_query($query_temp_table);

?>
<div id="instructions">
  <h2>Exam Instructions</h2>
  
</div>
<div id="start">
  <div>
    <a href="exam-area.php">Exam Start</a>
  </div>
</div>
</body>
</html>