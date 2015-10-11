<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style>
#ques
{
	position:absolute;
	height:400px;
	width:750px;
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
</head>
<body>
<?php
$host="localhost";
 $username="root";
 $password="";
  $db_name="importedoqp";
    $con=mysqli_connect("$host","$username","$password","$db_name");
	echo "p";	// Check connection
  if (mysqli_connect_errno())
     {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
	  
	  if(isset($_POST['question']) && isset($_POST['marks']) && isset($_POST['negativemarks']))
	{
		$question=$_POST['question'];
        $marks=$_POST['marks'];
		$negativemarks=$_POST['negativemarks'];
		


echo "proceess";
	  $sql="INSERT INTO questionbank_company(questions,marks,negativemarks)
	VALUES ('$question','$marks','$negativemarks')";
	echo "done";
	
    if($con->query($sql) ===TRUE)
	{
		 echo "New record created successfully";
		 
	}
	
	else{
		echo "Error:" . $sql. "<br>" .$con->error;
	}
	$con->close();
	}
		  if(isset($_POST['option']) && isset($_POST['check']))
	{
	$option=$_POST['option'];
	if($_POST['check'] ==1)
	$CheckAns=1;
	else
	$CheckAns=0;
	echo "process";
	  $res="INSERT INTO answers_company(Options,CheckAns)
	VALUES ('$option','$CheckAns')";
	echo "done";

	
	
    if($con->query($res) ===TRUE)
	{
		 echo "New record created successfully";
		 
	}
	
	else{
		echo "Error:" . $res. "<br>" .$con->error;
	}
	$con->close();
	}
    
 
?>
<div id="ques">
<pre id= "i"> tick the checkbox below the answer to mark it as correct answer </pre>
<form action="options.php" method="post" id="form1">
		 <b>Add option:</b>
   		<textarea name="option" rows="2" cols="50" value="option"></textarea><br>
        
         CORRECT ANS:<input type="checkbox" name="check" value="1"><br><br>
        
         <input type="submit" name="submit" value="submit">
         <button type="button" name="nextquestion" id="next" onClick="window.location.href='createexam.php'">NEXT QUESTION</button>
         <button type="button" name="done" id="done" onClick="window.location.href='input.inc.php'">DONE</button>
         
         </form>
         </div>
</body>
</html>