<!doctype html>
<html>
<head >
<meta charset="utf-8">
<title>Untitled Document</title>
 <link rel="stylesheet" href="style.css">
 <script type="text/javascript">
 visible();
function showdiv(d1,d2,d3)
{
	document.getElementById(d1).style.display="block";
	document.getElementById(d2).style.display="none";
	document.getElementById(d3).style.display="none";
	
}

function visible(d1,d2,d3)
{
	document.getElementById(d1).style.display="none";
	document.getElementById(d2).style.display="none";
	document.getElementById(d3).style.display="none";
	
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

<body onload="visible('single','multi','match')">

<?php
include 'oqpall/core.php';
include 'oqpall/page-heading.php';
session_start();

?>

<div id= "ques">

<br>
<br>
<br>

TYPES OF QUESTIONS:
<button type="button" onClick="showdiv('single','multi','match')" >SINGLE CORRECT</button>

<button type="button" onClick="showdiv('multi','single','match')" >MULTI CORRECT</button>
<button type="button" onClick="showdiv('match','single','multi')" >MATCH THE FOLLOWING</button>

</div>

<div class="Content" id="single" >
   <h1>Add Single correct</h1><?php  $message="";?>
  
        <form action="singledb.php" method="post">
       <?php echo "<b>Question no.".$_SESSION['number']."</b>";?><br><br>
       <label for="question">Ask Question</label><br>
        <textarea name="question" id="q" rows = "4" cols="50" placeholder="Enter your question here" required='required'></textarea>
         &nbsp; &nbsp;
                Postive marks:<textarea name="pmarks" rows = "1" cols="1" required='required'></textarea>&nbsp; &nbsp;
                Negative marks:<textarea name="nmarks" rows = "1" cols="1" required='required'></textarea>
		 
                <br>
                <br>
         <?php
		
               for($i=1;$i<=4;$i++)
                 {
                 echo 
                   "<table>
                     <tr>
                       <td>OPTION.$i</td>
                       <td><td><input type='text' name='option".$i."' </td>
                       <td><label style='cursor:pointer; color:#06F;'><input type='radio' name='radio".$i."'>Correct Answer?</label></td>

</tr>
</table>";
}

?>
<input type="hidden" value="single" name="type">
<input type="submit" value="next" ></form>
            </div>
            
            
 <div class="Content" id="multi" >
        <h1>Add Multi Correct</h1>
        <form action="multidb.php" method="post">
              <?php echo "<b>Question no.".$_SESSION['number']."</b>";?><br><br>   <label for="question">Ask Question</label><br>
                
                <textarea name="question" rows = "4" cols="50" placeholder="Enter your question here" required="required"></textarea>&nbsp; &nbsp;
                Postive marks:<textarea name="pmarks" rows = "1" cols="1" required='required'></textarea>&nbsp; &nbsp;
                Negative marks:<textarea name="nmarks" rows = "1" cols="1" required='required'></textarea>
                <br><br>
<?php
for($i=1;$i<=4;$i++)
{
echo 
"<table>
<tr>
<td>OPTION.$i</td>
<td><td><input type='text' name='option".$i."'> </td>
<td><label style='cursor:pointer; color:#06F;'><input type='checkbox' name='check".$i."'>Correct Answer?</label></td>
</tr>

</table>";
}
?>
<br>
<input type="hidden" value="multi" name="type">
<input type="submit" value="next" >
</form>
</div>

<div class="Content" id="match" >
        <h1>Add MATCH THE FOLLOWING</h1>
         <form action="matchdb.php" method="post">
<br>
 <?php echo "<b>Question no.".$_SESSION['number']."</b>";?><br><br>
         <?php
		
		 echo "
		  &nbsp; &nbsp;
                Postive marks:<textarea name='pmarks' rows = '1' cols='1' required='required'></textarea>&nbsp; &nbsp;
                Negative marks:<textarea name='nmarks' rows = '1' cols='1' required='required'></textarea>
				<br><br>
		 <table>
		    
		 <tr><td></td><td></td><td><b><u>COLUMN1</u></b></td>";
		 for($j=0;$j<100;$j++)
		 echo "<td></td>";
		 echo "<td><b><u>COLUMN2</u></b></td></tr>
		
		 </table>";
		 
		 
               for($i=1;$i<=10;$i++)
{
echo
"<table>
<tr>
<td>$i.</td>
<td><td><textarea  name='column1".$i."'  cols='50' placeholder='Enter column1 statement here'></textarea> </td>
<td></td><td></td>
<td></td>
<td></td>
<td></td>
<td>";echo chr($i+96)."."; echo "</td>
<td><td><textarea  name='column2".$i."'  cols='50' placeholder='Enter column2 statement here'></textarea> </td>
</tr>
</table>";
}echo "<br><br>";
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
<br>

<input type="hidden" value="single" name="type">
<input type="submit" name="submit" value="next" >
</form>

            </div>

</body>
</html>