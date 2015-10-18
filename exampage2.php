<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
 <link rel="stylesheet" href="style.css">
 <script>
function showdiv(d1,d2)
{
	document.getElementById(d1).style.display="block";
	document.getElementById(d2).style.display="none";
	
	
}
function visible(d1,d2)
{
	document.getElementById(d1).style.display="none";
	document.getElementById(d2).style.display="none";
	}

</script>
 <style>
ques
{
	background-color:#4DC700;
	height:400px;
	width:400px;
	top:20%;
	
}
</style>
</head>
<body>
<?php
include 'oqpall/core.php';
include 'oqpall/bottom-label.php';
include 'oqpall/page-heading.php';
?>


<body onload="visible('single','multi')">
<div id= "ques">
<form action='exampage2.php' method='post' id='form1'>
TIME:<input type="text" name="time">
<br><br><br>
TYPES OF QUESTIONS:
<button type="button" onClick="showdiv('single','multi')">SINGLE CORRECT</button>
<button type="button" onClick="showdiv('multi','single')">MULTI CORRECT</button>



</form>

</div>
<div class="Content" id="single" >
        <h1>Add Quiz</h1>
        <form action="singledb.php" method="post">
                <label for="question">Ask Question</label><br>
                
                <textarea name="question" rows = "4" cols="50" placeholder="Enter your question here"></textarea>
                <br><br>
         <?php
               for($i=1;$i<=4;$i++)
{
echo 
"<table>
<tr>
<td>OPTION.$i</td>
<td><td><input type='text' name='option".$i."' </td>
<td> <label style='cursor:pointer; color:#06F;'><input type='radio' name='radio".$i."'>Correct Answer?</label></td>


</tr>

</table>";
}
?>
<input type="hidden" value="single" name="type">
<input type="submit" name="submit" value="submit">
</form>
            </div>
            <div class="Content" id="multi" >
        <h1>Add Quiz</h1>
        <form action="singledb.php" method="post">
                <label for="question">Ask Question</label><br>
                
                <textarea name="question" rows = "4" cols="50" placeholder="Enter your question here"></textarea>
                <br><br>
         <?php
               for($i=1;$i<=4;$i++)
{
echo 
"<table>
<tr>
<td>OPTION.$i</td>
<td><td><input type='text' name='option".$i."' </td>
<td><label style='cursor:pointer; color:#06F;'><input type='checkbox' name='check".$i."'>Correct Answer?</label></td>


</tr>

</table>";
}
?>
<input type="hidden" value="multi" name="type">
<input type="submit" name="submit" value="submit">
</form>
          
 
        </form>
    </div>

</body>
</html>