<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
include 'core.php';
include 'page-heading.php';
include 'bottom-label.php';
@session_start();
echo "<br><br><br>";
?>

<center><div id="s" style="background:#00796B;
                         color:#FBF5F3;
                         top:50%; 
                         width:400px;
                         height:400px;
                         font-family:'Open Sans Condensed', arial, sans;">
                         <br><br><br><br><b>QUIZ CREATED SUCCESSFULLY!<b><br><br>NO OF QUESTIONS IN THE QUIZ:<?php echo $_SESSION['number'];?></div></center>


</body>
</html>