<script src="ajax.js" type="text/javascript"></script>
<?php 
require 'connect.php';
//require 'core.php';

$i=1;
$query_company = "SELECT companyid,name FROM company_info ORDER BY companyid";
$result_company = mysql_query($query_company) or die(mysql_error());

while($row = mysql_fetch_array($result_company)){
	$company_id[$i] = $row['companyid'];
	$company_name[$i] = $row['name'];
	$i++;
	}
$n_of_companies = $i - 1;
?>

<ul>
	<li id="company1" onclick='examsLoader(0,1)'><b>All</b></li>
    <?php
        for($i=2;$i<=$n_of_companies;$i++){
            echo "<li id='company".$i."'><b onclick='examsLoader($company_id[$i],$i)'>".$company_name[$i]."</b></li>";
			}
    ?>
</ul>

<script>
function examsLoader(s,cl){
	jstophp("exams-list.php?cId=" + s,ex);
	colorReset(cl);
	}

function ex(xhttp){
	document.getElementById('exams-list').innerHTML = xhttp.responseText ;
	}
	
function colorReset(s){
	var n = <?php echo $n_of_companies; ?>;
	for(var i=1;i<=n;i++){
		var c = document.getElementById('company'+i);
		if(i==s){
			c.style.color = "white";
			}
		else{
			c.style.color = "#252525";
			}
		}
	}
</script>
