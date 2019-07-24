	<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "Smith";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		$sql = "SELECT eventName, alumFName, alumLName, alumEmail FROM Event e 
				JOIN eventsattendance ea ON e.eventID=ea.eventID
				JOIN Alumnus a ON a.uID=ea.uID
				WHERE eventDate < CURRENT_DATE()";
		$result = $conn->query($sql);
		
		$sql1 = " SELECT eventName, alumFName, alumLName, alumEmail FROM Event e
					JOIN eventsattendance ea ON e.eventID=ea.eventID
					JOIN Alumnus a ON a.uID=ea.uID
					WHERE eventDate > CURRENT_DATE() ";
		
		$result1 = $conn->query($sql1);
									  
	?>
	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
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
		<title>Industry</title>

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
			<link rel="stylesheet" href="css/eventTabs.css">
		</head>
		<body style="font-family: Source Sans,Source Sans Pro,sans-serif !important;">	
			    <header id="header" id="events">
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
								<li><a>Events</a></li>
								<li><a href="projects.html">Sponsors</a></li>
							   
								<li><a href="elements.html">Certifications</a></li>
							  </ul>
							</nav><!-- #nav-menu-container -->		    		
						  </div>
					  </div>
					</header><!-- #header --><!-- #header -->

					<section class="sample-text-area">
							<div class="w3-container" style="border: none;
							margin-bottom: 100% !important">
									<div class="w3-bar w3-black">
									  <button class="w3-bar-item w3-button tablink w3-red" onclick="openEvent(event,'Past')">Past</button>
									  <button class="w3-bar-item w3-button tablink" onclick="openEvent(event,'Future')">Upcoming</button>
									</div>
									
									<div id="Past" class="w3-container  city">
									  <h2>Past Events</h2>
									<h3 align="center"></h3>
									<table border="1" align="center" style="line-height:25px;">
									<tr>
									<th>Event Name </th>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Email ID</th>
									</tr>
									<?php

										if ($result->num_rows > 0) {
											while($row = $result->fetch_assoc()) {
												?>
												<tr>
												<td><?php echo $row["eventName"]; ?></td>
												<td><?php echo $row["alumFName"]; ?></td>
												<td><?php echo $row["alumLName"]; ?></td>
												<td><?php echo $row["alumEmail"]; ?></td>
												</tr>
												<?php
											}
										}
										else
										{
											?>
											<tr>
											<th colspan="2"> There is no data found!!!</th>
											</tr>
											<?php
										}
?>
									</table>
									  
									  
									</div>
								  
									<div id="Future" class="w3-container  city" style="display:none">
									  <h2>Upcoming Events</h2>
									  <h3 align="center"></h3>
									<table id="alumniTable" border="1" align="center" style="line-height:25px;"">
									<tr row="role">
									<th>Event Name </th>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Email ID</th>
									</tr>
									<?php

										if ($result->num_rows > 0) {
											while($row = $result->fetch_assoc()) {
												?>
												<tr>
												<td><?php echo $row["eventName"]; ?></td>
												<td><?php echo $row["alumFName"]; ?></td>
												<td><?php echo $row["alumLName"]; ?></td>
												<td><?php echo $row["alumEmail"]; ?></td>
												</tr>
												<?php
											}
										}
										else
										{
											?>
											<tr>
											<th colspan="2"> There is no data found!!!</th>
											</tr>
											<?php
										}
?>
									</table>
									</div>
								  
								  </div>
							<script>
									function openEvent(evt, evtName) {
									  var i, x, tablinks;
									  x = document.getElementsByClassName("city");
									  for (i = 0; i < x.length; i++) {
										  x[i].style.display = "none";
									  }
									  tablinks = document.getElementsByClassName("tablink");
									  for (i = 0; i < x.length; i++) {
										  tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
									  }
									  document.getElementById(evtName).style.display = "block";
									  evt.currentTarget.className += " w3-red";
									}
									</script>
						</section>
			
			
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



