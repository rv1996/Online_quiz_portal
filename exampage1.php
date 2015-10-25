<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="style.css">
<style>
#instructions h2{
	margin-left:5.5%
	
	}
#instructions button{
	font-size:3vmin
	}

</style>
</head>

<body>

<?php
include 'core.php';
include 'bottom-label.php';
include 'Page-heading.php';
include 'navigation.php';
include 'company-profile.php';
$_SESSION['number']=1;
?>
<div id="section">
    <div id="instructions">
        <h2>INSTRUCTIONS:</h2>
        <pre>
            <strong>There are 4 types of questions:</strong><br>
            1. Single-Correct
            2. Multi-Correct
            
            Enter the question and click submit.<br>
            <strong>Single-correct:</strong>add more than one options.choose the buttons next to mark it as correct answer.<br>
            <strong>Multi-correct:</strong>add more than one options.choose the buttons next to mark it as correct answer.<br>
        </pre>
    <center><button type="button" onClick="location.href='exampage2.php';">CONTINUE</button></center></div>
</div>
</body>
</html>