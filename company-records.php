<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
session_start();
$_SESSION['company_data']['CompanyId']=0;
include 'connect.php';
$companyid=$_SESSION['company_data']['CompanyId'];
$sql="SELECT ExamId,examname FROM company_exams where CompanyId=$companyid";
$result = $con->query($sql);
if ($result->num_rows > 0)
 {
     // output data of each row
   while($row = $result->fetch_assoc()) 
   {
        echo  $row["examname"];
		
     }
 }
 else 
 {
     echo "0 results";
 }

?>  
</body>
</html>