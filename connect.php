 <?php
        $host="localhost";
        $username="root";
        $password="";
        $db_name="oqp";
       
        $con=new MySQLi("$host","$username","$password","$db_name");
      if ($con->connect_error)
    {
       die( "Connection failed: " .$con->connect_error);
    }
	?>