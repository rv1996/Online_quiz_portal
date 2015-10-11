<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<style>
#ques
{
	position:absolute;
	height:400px;
	width:700px;
	top:20%;
	left:30%;
	margin:auto;
	background-color:LightSkyBlue;
	border:2px solid;
	border-radius: 25px;
}

#i
{
	font-size:16px;
	
}
#form1
{
	width:50%;
	margin:0 auto;
}
</style>
<body>
<?php 
include 'input.inc.php';
?>
<div id="ques">
<pre id="i"><b>  enter your question and options in the following way.Tick the check boxes 
    to mark the correct answers.</b></pre><br>
<br>
<form action="options.php" method="post" id="form1">
		<b>ENTER QUESTION HERE:</b><br>
   		<textarea name="question" rows="3" cols="70" value="question"></textarea><br><br>
        <b>Enter marks of this question:</b><br>
        <textarea name="marks" rows="1" cols="2"></textarea> <br><br>
        <b>Enter negative marks for this question</b>(ENTER DIGIT.if no negative marks,enter 0(zero).)<br><br>
        <textarea name="negativemarks" rows="1" cols="2"></textarea><br><br>
      
        
         <input type="submit" name="submit" value="submit">
         
         </form>
         </div>
         </body>
</html>