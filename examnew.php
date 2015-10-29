<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="oqp";
@session_start();

// Create connection
$con = mysqli_connect($servername, $username, $password,$dbname);
if (!$con) 
{
    die("Connection failed: " . mysqli_connect_error());
}
$companyid = $_SESSION['company_data']['CompanyId'];
$res="INSERT INTO company_exams(CompanyId) VALUES('$companyid')";
if ($con->query($res) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$sql="SELECT ExamId from company_exams ORDER BY ExamId DESC";
$result=mysqli_query($con,$sql); 
$row=mysqli_fetch_assoc($result);
$_SESSION['examid']= $row["ExamId"];
$examid=$_SESSION['examid'];
echo $examid;


mysqli_close($con);
header('Location:exampage2.php');
?>
