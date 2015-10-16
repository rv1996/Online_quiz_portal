<link href="style.css" type="text/css" rel="stylesheet">

<?php include 'page-heading.php' ;
	  include 'bottom-label.php';
	  include 'core.php';
	  
	  if(is_user_loggedin_student()){
		  header("Location: page1.php");
	  }
?>

<html>
		<script src="javascript.js"></script>

	<body>
<?php include "navigation.php";?>	
		<div id = "home-box">
			this a website designed for the people who like to learn.. no matter how hard the situation is...
		</div>
	</body>
</html>