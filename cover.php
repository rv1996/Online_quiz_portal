<?php
//opening page of project....
include 'core.php';
 
$_SESSION['page_name'] ='';
if(is_user_loggedin_student()){
	header("Location: page1.php");
	  }
if(is_user_loggedin_company()){
	header("Location: page2.php");
	}	  
?>

<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale = 1.0">
<link href="style.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="cover.css">
<script src="javascript.js"></script>

<style>
	#random_image img{
		
		position:absolute;
		float:right;
		right:10%;
		top:11%;
		width:50%;
		height:65%;
		float:right;
		background-repeat: no-repeat;
	}
</style>
</head>

<body>
	<?php
	include 'Page-heading.php';
	include "navigation.php";
	include 'bottom-label.php';
	?>
		<div id="section" style="width:100%;">
        <div id="cover">
			<div id = "student"  onclick="return student();">Student
			<footer>What profession could you be succesful in ???</footer>
		</div><br>
		<div id = "company"  onclick="return company();">Company
		<footer>If you really wanna fly give up the things that weigh you down...</footer>

		</div><br>
		</div>
		
        
            <div id="random_image">
                <?php
                $image_dir = "random_image/";
                $images = glob($image_dir.'*.{jpg,jpeg,png,gif}',GLOB_BRACE);
                $random_images = $images[array_rand($images)];
                ;
                ?>
                <img src='<?php echo $random_images;?>'>
                
            </div>
        </div>
	
</body>
</html>