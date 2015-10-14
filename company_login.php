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
<link href="style.css" type="text/css" rel="stylesheet">
<script src="javascript.js"></script>

<body>

<div id="nav">
		<ul>
			<li onclick="return home();">Home</li>
			<li onclick="return about();">About</li>
			<li onclick="return developer();">Developer's</li>
		</ul>
	</div>
<div id="login_main_box">
	<form action="<?php echo $current_file?>" method="POST" id="student_login">
	<fieldset id="login_student">
		<legend style="text-align:left;font-size:3vw;"> Login Form </legend>
		<?= $entry_error.'<br>';?>
		<span>Company No :<span><input type="text" name="company_number"><br>
		<br><span>Company ps :<span> <input type="password" name="password"> <br> 
		<?php echo $combination_error;?><br>

		<button  type="submit" name="submit">Submit</button><br><br>
		
		<span>New Company : <strong><a href="company_register.php">Registration form</a></strong></span>
	</fieldset>
	</form>
</div>
</body>
</html>
_