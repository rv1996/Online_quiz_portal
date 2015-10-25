<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
include 'core.php';
include 'page-heading.php';
include 'bottom-label.php';
@session_start();
echo "<br><br><br>";
?>

<center><div id="s" style="background:#00796B;
                         color:#FBF5F3;
                         top:50%; 
                         width:50vw;
                         height:60vh;
                         font-family:'Open Sans Condensed', arial, sans;">
                         <br><br><br><br><b>QUIZ CREATED SUCCESSFULLY!<b><br><br>NO OF QUESTIONS IN THE QUIZ:<?php echo $_SESSION['number'];?>
                         <br><br>
<form method="post" action="input.php">
<fieldset>  
  <ul style="list-style-type:none" class="items">
     <li><b>EXAM NAME:</b><input type="text" name="examname" required='required'></li>
   <br>
   
     <li><b>TIME TAKEN FOR EXAM(in minutes):</b><input type="number" name="timer" required='required'></li>
   <br>
   
     <li><b>SINGLE CORRECT:</b> 
     Postive marks:<textarea name='spmarks' rows = '1' cols='1' required='required'></textarea>&nbsp; &nbsp;
     Negative marks:<textarea name='snmarks' rows = '1' cols='1' required='required'></textarea></li>
   
   <li><b>MULTI-CORRECT:</b> 
    Postive marks:<textarea name='mpmarks' rows = '1' cols='1' required='required'></textarea>&nbsp; &nbsp;
    Negative marks:<textarea name='mnmarks' rows = '1' cols='1' required='required'></textarea></li>
   <br><br>
  
  
   <li><input type="submit" name="submit" value="Submit"></li> 
   </ul>
   
</fieldset>
</form>
</center>
</div>
</body>
</html>