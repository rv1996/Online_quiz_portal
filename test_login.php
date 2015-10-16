<?php
	//require 'core.php';
	//echo $current_file;
	
	//this page contain the main login form...
	$entry_error = '';
	$combination_error = '';
		
	if($_SERVER["REQUEST_METHOD"]== "POST"){
		$company_number = $_POST['company_number'];
		$password = $_POST['password'];
		
		
		if(!empty($company_number) && !empty($password)){
				
				
			$password = md5($password);
			 $query = "SELECT * FROM company_info WHERE Name = $company_number AND Password = '$password' ";
			 // echo mysql_query("use oqp");
			 // echo mysql_query($query); for testing of the query
			$query_run = mysql_query($query) or die(mysql_error());
			$mysql_row =mysql_num_rows($query_run);
			 
			 
			 if($mysql_row == 0){
				 $combination_error =  "invalid entry combination";
			 }
			
				if($mysql_row ==1){
					$query_result = mysql_fetch_array($query_run);
					$_SESSION['company_name'] = $query_result['Username'];
					//echo 'hello'.$_SESSION['user_name'];
					header("Location: page2.php");
					//print_r($query_result); check that we are getting the or not
				}
			
			
			
		}else{
			$entry_error = "enter the username and password<br>";
		}
	}
	
	?>

<html>
<link href='https://fonts.googleapis.com/css?family=Exo:400,300' rel='stylesheet' type='text/css'>
<script src="javascript.js"></script>
<style>

*{
		box-sizing:border-box;
		font-family: 'Open Sans Condensed', arial, sans;
	}
nav{
	float:left;
	width:35%;
	background:#FFFFE0;
	min-width:400px;
	min-height:350px;
	margin:auto;
	
	
}
nav h2{
	min-width:400px;
	margin:0px;
	color:white;
	text-align:center;
	background:#373232;	
	padding:2%;
	font-size:30px;
	font-family: 'Exo', sans-serif;
	
}
nav input{
	width:350px;
	height:30px;
	outline: none;
    border: none;
	
	margin-left:10px;
	margin-top:15px;
	border: solid 0.001% black;
	
	
	-webkit-transition: border 1s linear,-webkit-transform 1s,font-family 1s ease-in-out;
}
nav input:focus{
	border:solid 2px cyan;
	box-shadow:3px 3px 3px black;
	font-family: 'Open Sans Condensed', arial, sans;
	font-size:1.2vw;
	
	outline: none;
    border: none;
	
}
nav label{
	font-family: 'Open Sans Condensed', arial, sans;
	color:#373232;
	top:15%;
	margin:10px;
	}
button{
	
	background:#373232;
	border-radius:0px;
	border:solid 2px #373232; 
	color:white;
	font-family: 'Open Sans Condensed', arial, sans;
	width:20%;
	
	font-size:15px;
	width:350px;
	height:30px;
	margin-left:10px;
	margin-top:15px;
	
	}
</style>
<body>

	<?php include "navigation.php";?>


<nav>	
	<form action="<?php echo $current_file?>" method="POST" id="student_login">
	
		<h2>Login Form</h2><br>
		<label>Enter your Sign Details....</label>
		<?= $entry_error.'<br>';?>
		<input type="text" name="company_number" placeholder="Company Number"><br>
		<input type="password" name="password" placeholder="**********"> <br> 
		<?php echo $combination_error;?>

		<button  type="submit" name="submit">Submit</button><br><br>
		
		<span>New Company : <strong><a href="company_register.php">Registration form</a></strong></span>
	
	</form>
</nav>
</body>
</html>
_