<html>
<body>
<?php
	    
        $host="localhost";
        $username="root";
        $password="";
        $db_name="oqp";
        session_start();
        $con=new MySQLi("$host","$username","$password","$db_name");
      if ($con->connect_error)
   {
       die( "Connection failed: " .$con->connect_error);
   }

      if ($_SERVER['REQUEST_METHOD'] === 'POST')
   {
		
        if(isset($_POST['examname']) 
		   && isset($_POST['timer']) 
		   && isset($_POST['spmarks'])
		   && isset($_POST['snmarks']) 
		   && isset($_POST['mpmarks']) 
		   && isset($_POST['mnmarks']))
     {

	     $examname=$_POST['examname'];
	     $time=$_POST['timer'];
	     $spmarks=$_POST['spmarks'];
	     $snmarks=$_POST['snmarks'];
	     $mpmarks=$_POST['mpmarks'];
	     $mnmarks=$_POST['mnmarks'];
	     $number=$_SESSION['number'];
	     $sql="INSERT INTO company_exams(examname,Time,noofquestions)
	                 VALUES ('$examname','$time','$number')";
	     if($con->query($sql) ===TRUE)
               echo "New record created successfully<br>";
          else
			   echo "Error:" . $sql. "<br>" .$con->error;
	     $res="INSERT INTO exam_type_linked(typeid,pmarks,nmarks)
	            VALUES (1,'$spmarks','$snmarks')";
		 if($con->query($res) ===TRUE)
               echo "New record created successfully<br>";
           else
			   echo "Error:" . $res. "<br>" .$con->error;
		$new="INSERT INTO exam_type_linked(typeid,pmarks,nmarks)
	           VALUES (2,'$mpmarks','$mnmarks')";
		 if($con->query($new) ===TRUE)
                echo "New record created successfully<br>";
          else
				 echo "Error:" . $new. "<br>" .$con->error;
    }
}
?>
</body>
</html>