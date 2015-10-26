<head><link rel="stylesheet" type="text/css" href="profile.css"></head>	
    
<nav class="display">
    
    <ul>
        <li><label>Student ID:</label></li><span><?php echo @$_SESSION['student_data']['StudentNumber']?></span>
        <br><br>
        <li><label>Name:</label></li><span><?php echo @$_SESSION['student_data']['Name']?></span>
        <br><br>
        <li><label>B-Tech Year:</label></li><span><?php echo @$_SESSION['student_data']['BTechYear'].'nd'?></span>
        <br>
    </ul>
</nav>