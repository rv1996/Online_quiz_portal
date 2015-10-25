<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
ob_start();
$host="localhost";
$username="root";
$password="";
$db_name="oqp";
session_start();
$con=new MySQLi("$host","$username","$password","$db_name");
	echo "p";	// Check connection
  if ($con->connect_error)
     {
  die( "Connection failed: " .$con->connect_error);
      }
	  echo "connected successfully";
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
   if(isset($_POST["question"]))
{
	
	$question=$_POST["question"];
	
	$sql="INSERT INTO questionbank_company(QuestionS,typeid)
	VALUES ('$question',1)";
	 if($con->query($sql) ===TRUE)
	{
		 echo "New record created successfully<br>";
	}
	
	else
	{
		echo "Error:" . $sql. "<br>" .$con->error;
	}
for($i=1;$i<=4;$i++)
{
if(!empty($_POST["option".$i]) )
{
    $option=$_POST["option".$i] ;
	if(!empty($_POST["check".$i]))
	{
	$check=1;
	}
	else
	$check=0;
	
	$res="INSERT INTO answers_company(Options,CheckAns)
	VALUES ('$option','$check')";
	 if($con->query($res) ===TRUE)
	{
		 echo "New res record created successfully<br>";
		 
	}
	
	else
	{
		echo "Error:" . $res. "<br>" .$con->error;
	}
}
}
}
$_SESSION['number']++;

}
header('Location:exampage2.php');
?>

</body>
</html>