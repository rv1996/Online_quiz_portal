<?php

//navigation bar for all the pages.....
?>
<div id="nav">
		<ul>
			<li onclick="return home();">Home</li>
			<li onclick="return about();">About</li>
			<li onclick="return developer();">Developer's</li>
			
			
		
		
		<label id="nav_side"><?php  if(empty($_SESSION['user_name'])){
					echo '<li id="button" onclick="return sign_in();" >Sign in</li>';
				}else{
					echo ' '.$_SESSION['user_name'].' <a style ="padding:2%;margin-left:10px;margin:auto;color:#6D5252;border-left:solid 2px #B6B6B6;" href="logout_page.php" >Logout</a>';
				}
		?></label>
		</ul>
</div>