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

$sql = "select DISTINCT(projName) from project order by projName";
$result = $conn->query($sql);

?>
	
	
	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
	<link rel="icon" href="img/umd_logo.png" type="image/gif">
	<script type="text/javascript" src="js/jquery.js">
	</script>
		<script src="js/vendor/jquery-2.2.4.min.js"></script>
		<script>
				$(document).ready(function($) {
    $('.js-example-basic-single').select2();
});
</script>
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
		<link href=" https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" />
		<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
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
						  </header>
						 
					
					<!-- #header --><!-- #header -->

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
			</section>
			<!-- End banner Area -->	
				

			<!-- Start project Area -->
			<section class="project-area section-gap" id="project">
				<div class="container">
				<div class="dropdown" style="margin-top: 3%;">
									
													
									<form action = "">
											<select  class="js-example-basic-single" name = "Proj" onchange="showProject(this.value)">
													
													<option value = "Select the Company" selected> Select Project</option>
													<?php while($row = mysqli_fetch_array($result)):;?>
													<option value="<?php echo $row[0];?>"><?php echo $row[0];?></option>
													<?php endwhile; ?>
													</select>
													<br>
													<div id="projectTable" style="margin-left: -25%;margin-top: 2%;"></div>
							</div>

													<script>
													function showProject(str) {
													  var xhttp; 
													  if (str == "") {
														document.getElementById("projectTable").innerHTML = "";
														return;
													  }
													  xhttp = new XMLHttpRequest();
													  xhttp.onreadystatechange = function() {
														if (this.readyState == 4 && this.status == 200) {
														document.getElementById("projectTable").innerHTML = this.responseText;
														}
													  };
													  xhttp.open("GET", "getdonate.php?q="+str, true);
													  xhttp.send();
													}</script>
													
				</div>	
			</section>
			<!-- End project Area -->

				

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
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
    
		</body>
	</html>



