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
$con=new MySQLi("$host","$username","$password","$db_name");
	// Check connection
  if ($con->connect_error)
     {
  die("Connection failed: " .$con->connect_error);
      }
	  echo "connected successfully";
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
	for($i=1;$i<=10;$i++)
	{
    if(!empty($_POST["column1".$i]) || !empty($_POST["column2".$i]))
{
	$column1=$_POST["column1".$i];
	$column2=$_POST["column1".$i];
	echo $column1;
	$sql="INSERT INTO matchthefollowing(columnA,columnB)
	VALUES ('$column1','$column2')";
	 if($con->query($sql) ===TRUE)
	{
		 echo "New record created successfully<br>";
	}
	else
	{
		echo "Error:" . $sql. "<br>" .$con->error;
	}
}
	}
for($i=1;$i<=4;$i++)
{
if(!empty($_POST["option".$i]) )
{
    $option=$_POST["option".$i] ;
	if(isset($_POST["radio".$i]))
	{
	$radio=1;
	echo $radio;
	}
	else
	$radio=0;
	$res="INSERT INTO answers_company(Options,CheckAns)
	VALUES ('$option','$radio')";
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
header('Location:exampage2.php');
?>

</body>
</html>