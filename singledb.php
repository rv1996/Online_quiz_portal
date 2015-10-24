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
      if ($con->connect_error)
    {
       die( "Connection failed: " .$con->connect_error);
    }

      if ($_SERVER['REQUEST_METHOD'] === 'POST')
    {
         if(isset($_POST["question"]) && 
	        isset($_POST["pmarks"]) && 
	        isset($_POST["nmarks"]))
    {
	
	           $question=$_POST["question"];
	           $pmarks=$_POST["pmarks"];
	           $nmarks=$_POST["nmarks"];
	           $sql="INSERT INTO questionbank_company(QuestionS,typeid,pmarks,nmarks)
	                 VALUES ('$question',1,'$pmarks','$nmarks')";
	            if($con->query($sql) ===TRUE)
                   echo "New record created successfully<br>";
                else
				   echo "Error:" . $sql. "<br>" .$con->error;
	


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
                       if(isset($_POST["radio".$i]))
	                {
	                      $radio=1;

	                 }
	                    else
	                       $radio=0;
	                       $res="INSERT INTO answers_company(Options,CheckAns)
	                              VALUES ('$option','$radio')";
	                  if($con->query($res) ===TRUE)
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