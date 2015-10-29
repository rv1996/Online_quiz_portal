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
        $c=0;
		$examid=$_SESSION['examid'];
		$number=$_SESSION['number'];
      if ($con->connect_error)
    {
       die( "Connection failed: " .$con->connect_error);
    }

      if ($_SERVER['REQUEST_METHOD'] === 'POST')
    {
         if(isset($_POST["question"]))
    {
	
	           $question=$_POST["question"];
$sql="INSERT INTO questionbank_company(ExamId,QuestionS,typeid)
			            VALUES ('$examid','$question',1)";
	            if($con->query($sql) ===TRUE)
                   echo "New record created successfully<br>";
                else
				   echo "Error:" . $sql. "<br>" .$con->error;
				$sql="SELECT QuestionId FROM questionbank_company ORDER BY QuestionId DESC";
				$result = $con->query($sql);
				$row = $result->fetch_assoc();
				$q_id = $row['QuestionId'];

                for($i=1;$i<=4;$i++)
         {
	             if(!empty($_POST["option".$i]))
                 $c++;
          }
         
                if($c>1)
          {
	              for($i=1;$i<=4;$i++)
	         {
                    if(!empty($_POST["option".$i]))
	           {
                     $option=$_POST["option".$i] ;
                     //echo $option;
                       if($i==($_POST["radio"]))
	                {
	                      $radio=1;

	                 }
	                    else
	                       $radio=0;
	                      
					    $res="INSERT INTO answers_company(QuestionId,Options,CheckAns)
	                              VALUES ('$q_id','$option','$radio')";
	                  if($con->query($res) === TRUE)
		                 echo "New res record created successfully<br>";
		              else
					     echo "Error:" . $res. "<br>" .$con->error;
	
               }
             }           
           }
        }
    $_SESSION['number']++;
  }
  header('Location:exampage2.php');?>

</body>
</html>