<!DOCTYPE HTML> 
<html>
<head>
<style>
.error {
	color: #FF0000;
	}
.items
{

	list-style-position:inside;
}

</style>
</head>
<body> 
<?php
	ob_start();
  $host="localhost";
  $username="root";
  $password="";
  $db_name="importedoqp";

    $con=mysqli_connect("$host","$username","$password","$db_name");
// Check connection
  if (mysqli_connect_errno())
     {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }
  ?>

<?php
// define variables and set to empty values
$companynameErr = $emailErr = $passwordErr = $usernameErr = "";
$companyname = $email = $password = $username = "";

//check password for upper case,lowercase,digit,special character
function valid_pass($candidate) {
    if (!preg_match_all('$\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])(?=\S*[\W])\S*$', $candidate))
        return FALSE;
    return TRUE;
}
//check for errors
if ($_SERVER["REQUEST_METHOD"] == "POST")
 {//check company name 
   if (empty($_POST["companyname"])) 
   {
     $companynameErr = "it cannot be left blank.";
   } 
   else 
   {
         $companyname = $_POST["companyname"];
   }
   if (empty($_POST["email"]))
   {
     $emailErr = "it cannot be left blank";
   }
    else
	 {
     $email = $_POST["email"];
     // check if e-mail address is well-formed
     if (!filter_var($email, FILTER_VALIDATE_EMAIL))
	 {
       $emailErr = "Invalid email format"; 
     }
	 }
     
   if (empty($_POST["username"])) 
   {
      $usernameErr = "it cannot be left blank.";
   } 
   else 
   {
      $username = $_POST["username"];
   }
   
     if (empty($_POST["password"])) {
     $passwordErr = "it cannot be left blank.";
   } else {
	   
     $password = $_POST["password"];
if(!(valid_pass($password)))
     $passwordErr="Password is not valid.it should have a length between 8-30.<br>it should contain atleast one upper case,one lower case,one digit and a special character.<br>";
   }
   
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>

<h2><center><b>REGISTER HERE...</b></center></h2>
<p><span class="error">fields marked with * are manadatory.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
<fieldset>  
  <ul style="list-style-type:none" class="items">
  <li><b>Company Name:</b><input type="text" name="companyname" value="<?php echo $companyname;?>"><span class="error">* <?php echo $companynameErr;?></span></li>
   <br><br>
   
   <li><b>E-mail:</b><input type="text" name="email" value="<?php echo $email;?>"><span class="error">* <?php echo $emailErr;?></span></li>
   <br><br>
   
   <li><b>User name:</b> <input type="text" name="username" value="<?php echo $username;?>">   <span class="error"><?php echo $usernameErr;?>*</span></li>
   <br><br>
   
   <li><b>Password:</b> <input type="password" name="password" value="<?php echo $password;?>"><span class="error"><?php echo $passwordErr;?>*</span></li>
   <br><br>
  
   <li><input type="submit" name="submit" value="Submit"></li> 
   </ul>
   
   </fieldset>
</form>
<?php
 if(isset ($_POST['companyname']) &&
    isset ($_POST['password'] )&&
    isset ($_POST['username'] )&&
    isset ($_POST['email']))
{
$companyname=$_POST['companyname'];
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
}
if(!empty($companyname) && !empty($password) && !empty($username) && !empty($email))
{//check empty or not
	
	$sql="INSERT INTO company_info (Name, Username, Email,Password) 
	VALUES ('$companyname','$username','$email','$password')";
	if($con->query($sql) ===TRUE)
	{
		 echo "New record created successfully";
		 header("Location: page1.php");
	}
	
	else{
		echo "Error:" . $sql. "<br>" .$con->error;
	}
	$con->close();
}

?>


</body>
</html>