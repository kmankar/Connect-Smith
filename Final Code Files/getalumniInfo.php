
	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
	<link rel="icon" href="img/umd_logo.png" type="image/gif">
    <script src="js/vendor/jquery-2.2.4.min.js"></script>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Connect Smith</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">	
			<link rel="stylesheet" href="css/hexagons.min.css">							
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
            <link rel="stylesheet" href="css/main.css">
           
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>	
			<script src="js/hexagons.min.js"></script>							
			<script src="js/jquery.nice-select.min.js"></script>	
			<script src="js/jquery.counterup.min.js"></script>
			<script src="js/waypoints.min.js"></script>							
			<script src="js/mail-script.js"></script>	
            <script src="js/main.js"></script>
            
            <link href=" https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" />
                       
       
		</head>
		<body>	
				<header id="header" id="home">
						<div class="header-top">
							<div class="container">
								<div class="row">
									<div class="col-lg-6 col-sm-6 col-4 header-top-left no-padding">
										<umd>UNIVERSITY OF MARYLAND</umd>
	  
									</div>
									<div class="col-lg-6 col-sm-6 col-8 header-top-right no-padding"> 	
									<umd>CONNECT SMITH</umd>			
									</div>
								</div>			  					
							</div>
					  </div>
					  <div class="container main-menu">
						  <div class="row align-items-center justify-content-between d-flex">
							<div id="logo">
							  <a href="index.html"><img src="smith.png" alt="" title="" height="30" width="120"> </a>
							</div>
							<nav id="nav-menu-container">
							  <ul class="nav-menu">
								<li class="menu-active"><a href="index.html">Home</a></li>
								<li><a href="AlumniTable.php">Alumni</a></li>
								<li><a href="events.php">Events</a></li>
								<li><a href="projects.php">Sponsors</a></li>
							   
								<li><a href="elements.html">Certifications</a></li>
							  </ul>
							</nav><!-- #nav-menu-container -->		    		
						  </div>
					  </div>
					</header><!-- #header --><!-- #header -->

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
			</section>
			<!-- End banner Area -->	
				

			<!-- Start project Area -->
			<section  id="project" style="padding: 6% 0;">
				<div class="container">
				</div>	
			</section>
			<!-- End project Area -->

<?php 
    $year=  $_POST["Year"];
    
    $company= $_POST["Company"];
    $position=$_POST["role"];
    if($year=="Select the Batch")
    {
        $year="*";
    }
    
    if($company=="Select the Company")
    {
        $company="*";
    }
    if($position=="Select the Role"){
        $position="*";
    }
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mysmith";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT uID, alumFName, alumBatch
FROM Alumnus";

if($year=="*" and $company!="*" and $position!="*"){
    $sql="SELECT alumFname,alumLname,alumEmail,alumBatch,compName,workPosition,workStatus from alumnus a
    JOIN work w ON w.uID=a.uID 
    JOIN company c ON w.compID=c.compID 
    where compName ='" .$company. "' and workPosition ='" .$position. "'";
}
elseif($company=="*" and $year!="*" and $position!="*"){
    $sql="SELECT alumFname,alumLname,alumEmail,alumBatch,compName,workPosition,workStatus from alumnus a
JOIN work w ON w.uID=a.uID 
JOIN company c ON w.compID=c.compID 
where a.alumBatch =$year and workPosition = '" .$position. "'";
}
elseif($year!="*" and $company!="*" and $position =="*"){
    $sql="SELECT alumFname,alumLname,alumEmail,alumBatch,compName,workPosition,workStatus from alumnus a
JOIN work w ON w.uID=a.uID 
JOIN company c ON w.compID=c.compID 
where a.alumBatch =$year and compName ='" .$company. "'";
}
elseif($year!="*" and $company =="*" and $position == "*"){
    $sql="SELECT alumFname,alumLname,alumEmail,alumBatch,compName,workPosition,workStatus from alumnus a
JOIN work w ON w.uID=a.uID 
JOIN company c ON w.compID=c.compID 
where a.alumBatch =$year ";
}
elseif($year=="*" and $company!="*" and $position == "*"){
    $sql="SELECT alumFname,alumLname,alumEmail,alumBatch,compName,workPosition,workStatus from alumnus a
JOIN work w ON w.uID=a.uID 
JOIN company c ON w.compID=c.compID 
where compName ='" .$company. "'";
}
elseif($year=="*" and $company =="*" and $position!= "*"){
    $sql="SELECT alumFname,alumLname,alumEmail,alumBatch,compName,workPosition,workStatus from alumnus a
JOIN work w ON w.uID=a.uID 
JOIN company c ON w.compID=c.compID 
where workPosition ='" .$position. "'";
}
elseif($year!="*" and $company!="*" and $position!= "*"){
    $sql="SELECT alumFname,alumLname,alumEmail,alumBatch,compName,workPosition,workStatus from alumnus a
JOIN work w ON w.uID=a.uID 
JOIN company c ON w.compID=c.compID 
where compName ='" .$company. "' and alumBatch = $year and workPosition = '" .$position. "'";
}
else{
    $sql="SELECT alumFname,alumLname,alumEmail,alumBatch,compName,workPosition,workStatus from alumnus a
JOIN work w ON w.uID=a.uID 
JOIN company c ON w.compID=c.compID";
}


$result=$conn->query($sql);

?>
<table id="alumnustable" class="display" style="width:100%">
        <thead>

<?php
echo "<tr>";

echo "<th>Name</th>";
echo "<th>Email</th>";
echo "<th>Batch</th>";
echo "<th>Company</th>";
echo "<th>Work Position</th>";
echo "<th>Work Status</th>";

echo "</tr>";
?>
</thead>
<tbody>
<?php
if ($result->num_rows > 0) {
while ($row=$result->fetch_assoc()){
echo "<tr>";
echo "<td>" .$row["alumFname"]." ".$row["alumLname"]. "</td>";
echo "<td>" .$row["alumEmail"]. "</td>";
echo "<td>" .$row["alumBatch"]. "</td>";
echo "<td>".$row["compName"]."</td>";
echo "<td>" .$row["workPosition"]. "</td>";
echo "<td>" .$row["workStatus"]. "</td>";
echo "</tr>";
}
}
else
{
	echo "0";
}

$conn->close();

?>
</tbody>
</table>

<script type="text/javascript" src="DataTables/datatables.min.js"></script>
     <script>
    $(document).ready(function($) {
        $.noConflict();
    $('#alumnustable').DataTable({
    "bLengthChange": false,
    "bFilter": true,
	"bAutoWidth": false
    });
} );

    </script>
</body>
</html>