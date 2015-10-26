<link href="style.css" type="text/css" rel="stylesheet">

<?php include 'page-heading.php' ;
	  include 'bottom-label.php';
	  include 'core.php';

		
?>

<html>	
	<head>
		<script src="javascript.js"></script>
		<script src="jquery-1.11.3.min.js"></script>
		<script>
			$(document).ready(function(){
					$("#Rupanshu").click(function(){
						$("#Rupanshu-slide").slideToggle("slow");
						
					})
			});
			$(document).ready(function(){
					$("#satvik").click(function(){
						$("#satvik-slide").slideToggle("slow");
						
					})
			});
			$(document).ready(function(){
					$("#sagarika").click(function(){
						$("#sagarika-slide").slideToggle("slow");

					})
			});
			
		</script>
		
	</head>
	<body>
	
<?php include "navigation.php";?>	
		<div>
		<div id = "Rupanshu" class="developer">
			Rupanshu<br>
			
			<label>Work hard no matter what???;</label>
		</div>
		<div id="Rupanshu-slide"class="developer">Rupanshu <br>
				
		
		</div>
		<div id="satvik" class="developer">
			Satvik<br>
			<label>Wanna learn thing's the hard way; </label>
		</div>
		<div id="satvik-slide"class="developer">Hello!!!</div>
		
		<div id="sagarika" class="developer">
			Sagarika<br>
			<label>Earn the coding respect;</label>
		</div>
		<div id="sagarika-slide"class="developer">Hello!!!</div>
		</div>
	</body>
</html>