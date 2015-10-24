<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>

</head>

<body>

<?php
include 'oqpall/core.php';
include 'oqpall/bottom-label.php';
include 'oqpall/page-heading.php';
$_SESSION['number']=1;
?>
<div id="instructions" style="background:#00796B;color:#FBF5F3; width:750px;height:400px;font-family:'Open Sans Condensed', arial, sans;">
<H1>INSTRUCTIONS:</H1>
<pre style="font-family:'Open Sans Condensed', arial, sans;">
<strong>There are 4 types of questions:</strong><br>
1. Single-Correct
2. Multi-Correct
3. Match the following
4. TRue/False

Enter the question and click submit.<br>
<strong>Single-correct:</strong>add more than one options.choose the buttons next to mark it as correct answer.<br>
<strong>Multi-correct:</strong>add more than one options.choose the buttons next to mark it as correct answer.<br>
<strong>Match the following:</strong>add statements in column1 and column2.enter options as 1.a,2.c,3.b.<br>choose the buttons next to mark it as correct answer.<br>
</pre>
<center><button type="button" onClick="location.href='exampage2.php';">CONTINUE</button></center></div>
</body>
</html>