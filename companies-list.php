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
	<li onclick='examsLoader(0)'><b>All</b></li>
    <?php
        for($i=1;$i<=$n_of_companies;$i++){
            echo "<li><b onclick='examsLoader($company_id[$i])'>".$company_name[$i]."</b></li>";
			}
    ?>
</ul>

<script>
function examsLoader(s){
	jstophp("exams-list.php?cId=" + s,ex);
	}

function ex(xhttp){
	document.getElementById('exams-list').innerHTML = xhttp.responseText ;
	}
</script>