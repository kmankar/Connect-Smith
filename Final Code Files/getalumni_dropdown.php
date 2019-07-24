<?php
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

$sql = "select distinct(alumBatch) from Alumnus order by alumBatch";
$result = $conn->query($sql);

$sql1 = "select distinct(compName) from Company
order by compName";
$result1 = $conn->query($sql1);
$sql2 = "select distinct (alumBatch) from Alumnus 
order by alumBatch";
$result2 = $conn->query($sql2);
$sql3 = "select distinct workPosition from Work
order by WorkPosition";
$result3 = $conn->query($sql3);


?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.js">
</script>

<link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css">
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

			<link rel="stylesheet" href="css/datatable_css/dataTables.bootstrap.css">
			<link rel="stylesheet" href="css/datatable_css/dataTables.bootstrap.min.css">
			<link rel="stylesheet" href="css/datatable_css/dataTables.bootstrap4.css">
			<link rel="stylesheet" href="css/datatable_css/dataTables.jqueryui.css">
			<link rel="stylesheet" href="css/datatable_css/dataTables.jqueryui.min.css">
			<link rel="stylesheet" href="css/datatable_css/jquery.dataTables.css">
			<link rel="stylesheet" href="css/datatable_css/dataTables.semanticui.css">
			<link rel="stylesheet" href="css/datatable_css/dataTables.semanticui.min.css">
			<link rel="stylesheet" href="css/datatable_css/jquery.dataTables_themeroller.css">
			<link rel="stylesheet" href="css/datatable_css/dataTables.material.min.css">
			


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
				          <li><a href="AlumniTable.php.html">Alumni</a></li>
				          <li><a href="events.php">Events</a></li>
				          <li><a href="projects.html">Sponsors</a></li>
				         
			              <li><a href="elements.html">Certifications</a></li>
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>



	<div class="row" col-md-12 style="margin-top: 3%;">
		<div class="custom-select" col-md-3  style=" margin-left: 25%;">
									<form action="getalumniInfo.php" method="post">
									<select name = "Year" id="year">
									<option value = "Select the Batch" selected> Select Year</option>
									<?php while($row = mysqli_fetch_array($result)):;?>
									<option value="<?php echo $row[0];?>"><?php echo $row[0];?></option>
									<?php endwhile; ?>
									</select>
				</div>
									<div class="dropdown custom-select"col-md-3 style=" margin-left: 4%;">
													<select name = "Company" id="company" style="    background-color: #e04f4f;
    border: none;
    color: white;
    padding: 2%;">
													<option value = "Select the Company" selected> Select Company</option>
													<?php while($row = mysqli_fetch_array($result1)):;?>
													<option value="<?php echo $row[0];?>"><?php echo $row[0];?></option>
													<?php endwhile; ?>
													</select>
										</div>
									<div class="dropdown" col-md-3 style=" margin-left: 4%;">
													<select name = "role" id="role">
													<option value = "Select the Role" selected> Select Role</option>
													<?php while($row = mysqli_fetch_array($result3)):;?>
													<option value="<?php echo $row[0];?>"><?php echo $row[0];?></option>
													<?php endwhile; ?>
													</select>
									</div>
									<input type="submit" col-md-3 style=" margin-left: 3%;" class="button button2"/>
							</div>
				</form>

			  </header><!-- #header -->

			  
</body>
</html>
