<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="style.css">
<style>
#d1{ 
	position:relative;
	width:100%;
	height:auto;
	}
#d1 h3,h4{
	text-align:center;
	
	}
#d1 form{
	width:40%;
	margin-left:31%;
	}
#d1 form ul li{
	margin:2%;
	}
</style>
</head>

<body>
<?php
include 'core.php';
include 'page-heading.php';
include 'bottom-label.php';
include 'navigation.php';
include 'company-profile.php';

@session_start();

?>
<div id="section">
	<div id="d1">
    	<h3><b>QUIZ CREATED SUCCESSFULLY!</b></h3>
        <h4>No. Of Questions added to the Quiz: <?php echo $_SESSION['number'];?></h4>
                         
     	<form method="post" action="input.php">
    		  
            	<ul style="list-style-type:none" class="items">
                	<li><b>EXAM NAME:</b></li>
                    <li><input type="text" name="examname" required='required'></li>
                    <li><b>TIME TAKEN FOR EXAM(in minutes):</b></li>
                    <li><input type="number" name="timer" required='required'></li>          
                 	<li><b>SINGLE CORRECT:</b></li>
                 	<li><input type="number" name='spmarks' placeholder="Postive marks" required='required'></li>
                 	<li><input type="number" name='snmarks' placeholder="Negative marks" required='required'></li>
                    
               
               		<li><b>MULTI-CORRECT:</b></li>
               		<li><input type="number" name='mpmarks' placeholder="Postive marks" required='required'></li>
                 	<li><input type="number" name='mnmarks' placeholder="Negative marks" required='required'></li>
                    
                    <li><input type="submit" name="submit" value="Submit"></li> 
               </ul>
               
            
		</form>
	</div>
</div>
</body>
</html>