<link rel="stylesheet" type="text/css" href="profile.css" />

<nav class="display">
    <ul>
        <li><label>Company ID:</label></li><span><?php echo @$_SESSION['company_data']['CompanyId']?></span>
        <br><br>
        <li><label>Name:</label></li><span><?php echo @$_SESSION['company_data']['Name']?></span>
        
        <br>
    </ul>
</nav>