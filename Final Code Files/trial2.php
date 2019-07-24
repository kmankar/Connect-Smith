


<?php include "getalumni.php"?>
<html>
<head></head>
<body>
    <form action="getalumni.php" method="post">
    <?php 
    $year=  $_POST["Year"];
    $company= $_POST["Company"];
    if($year=="Select the Batch")
    {
        $year="*";
    }
    
    if($company=="Select the Company")
    {
        $company="*";
    }
echo $year;echo $company; ?> 
</form>

</body>
</html>


select alumbatch from al