<?php
include 'core.php';

if(!is_user_loggedin_company()){
	header("Location: page2.php");
	}
?>
<!doctype html>
<html>
<head >
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" href="style.css" type="text/css">
<script type="text/javascript" src="javascript.js"></script> 
<script type="text/javascript">
//visible();
function showdiv(d1,d2)
{
	document.getElementById(d1).style.display="block";
	document.getElementById(d2).style.display="none";
	//document.getElementById(d3).style.display="none";
	
}

function visible(d1,d2)
{
	document.getElementById(d1).style.display="none";
	document.getElementById(d2).style.display="none";
	//document.getElementById(d3).style.display="none";
	
}

</script>

<style>
#ques{   
	width:100%;
	position:relative;
	text-align:center;
	padding:.5%;
}
#type-buttons{
	position:inherit;
	margin:1%;
	padding:1%;
	}
.Content{
	position:relative;
	height:auto;
	width:100%;
	padding-left:37%;
	}
.Content-buttons{
	margin-right:1%;
	margin-top:1%;
	}
.Content h4,h5{
	margin-bottom:1%;
	}
</style>

</head>

<body onload="visible('single','multi')">

<?php
require 'connect.php';
include 'Page-heading.php';
include 'bottom-label.php';
include 'navigation.php';
include 'company-profile.php';

@session_start();
//echo $_SESSION['examid'];
?>

<div id="section">
    <div id= "ques">
    	<b>TYPE OF QUESTIONS:</b>
        <div id="type-buttons">        
    		<button type="button" onClick="showdiv('single','multi')">SINGLE CORRECT</button>
        	<button type="button" onClick="showdiv('multi','single')" >MULTI CORRECT</button>
        	<!--button type="button" onClick="showdiv('match','single','multi')">MATCH THE FOLLOWING</button-->
        </div>
	</div>

    <div class="Content" id="single" >
     	<h4>Add Single correct</h4><?php  $message="";?>
        <form action="exampage2-singledb.php" method="post">
            <h5><?php echo "<b>Question no.".$_SESSION['number']."</b>";?></h5>
            <textarea name="question" id="q" rows = "4" cols="50" placeholder="Enter your question here" required='required'></textarea>
             <?php
                for($i=1;$i<=4;$i++)
              {
                   echo 
                       "<table>
                        <tr>
                           
                           <td><td><input type='text' name='option".$i."' placeholder='OPTION".$i."'</td>
                           <td><label>
                           <input type='radio' id='rad' name='radio' value=$i>
                           
                           </label></td>
                        </tr>
                       </table>";
             }
    
              ?>
              <input type="hidden" value="single" name="type">
              <input class="Content-buttons" type="submit" value="Add to Quiz" > 
              <input class="Content-buttons" type="button" name="reset_form" value="Reset QUESTION" onclick="this.form.reset();" > 
              <button class="Content-buttons" type="button" onClick="location.href='exampage3.php';">FINISH</button>
		</form>
	</div>
            
            
    <div class="Content" id="multi" >
    	<h4>Add Multi Correct</h4> 
    	<form action="exampage2-multidb.php" method="post">
               <h5><?php echo "<b>Question no.".$_SESSION['number']."</b>";?></h5>
               <textarea name="question" rows = "4" cols="50" placeholder="Enter your question here" required></textarea>
               <?php for($i=1;$i<=4;$i++)
                {
                  echo "<table>
                        <tr>
                          <td><td><input type='text' name='option".$i."' placeholder='OPTION".$i."'> </td>
                          <td><label>
                               <input type='checkbox' name='check".$i."'></label></td>
                        </tr>
                        </table>";
                }?>
               <input type="hidden" value="multi" name="type">
               <input class="Content-buttons" type="submit" value="Add to Quiz" >
               <input class="Content-buttons" type="button" name="reset_form" value="Reset QUESTION" onclick="this.form.reset();" >
               <button class="Content-buttons" type="button" onClick="location.href='exampage3.php';">FINISH</button>
		</form>
	</div>

    <!--div class="Content" id="match" >
            <h1>Add MATCH THE FOLLOWING</h1>
            <form action="matchdb.php" method="post">
           <br>
     <?php /*echo "<b>Question no.".$_SESSION['number']."</b>";?><br><br>
             <?php
            
             echo "
              &nbsp; &nbsp;
                    Postive marks:<textarea name='pmarks' rows = '1' cols='1' required='required'></textarea>&nbsp; &nbsp;
                    Negative marks:<textarea name='nmarks' rows = '1' cols='1' required='required'></textarea>
                    <br><br>
             <table>
                
             <tr><td></td><td></td><td><b><u>COLUMN1</u></b></td>";
             for($j=0;$j<100;$j++)
             echo "<td></td>";
             echo "<td><b><u>COLUMN2</u></b></td></tr>
            
             </table>";
             
             
                   for($i=1;$i<=10;$i++)
    {
    echo
    "<table>
    <tr>
    <td>$i.</td>
    <td><td><textarea  name='column1".$i."'  cols='50' placeholder='Enter column1 statement here'></textarea> </td>
    <td></td><td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>";echo chr($i+96)."."; echo "</td>
    <td><td><textarea  name='column2".$i."'  cols='50' placeholder='Enter column2 statement here'></textarea> </td>
    </tr>
    </table>";
    }echo "<br><br>";
    for($i=1;$i<=4;$i++)
    {
    echo 
    "<table>
    <tr>
    <td>OPTION.$i</td>
    <td><td><input type='text' name='option".$i."' </td>
    <td> <label style='cursor:pointer; color:#06F;'><input type='radio' name='radio".$i."'>Correct Answer?</label></td>
    </tr>
    </table>";
    }*/
    ?>
    <br>
    
    <input type="hidden" value="single" name="type">
    <input type="submit" name="submit" value="Add to Quiz" >&nbsp;&nbsp;&nbsp;<input type="button" name="reset_form" value="Reset QUESTION" onclick="this.form.reset();" >&nbsp;&nbsp;&nbsp;<button type="button" onClick="location.href='exampage3.php';">FINISH</button>
    </form>
    </div-->

</div>
</body>
</html>