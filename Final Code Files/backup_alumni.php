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

$sql = "select alumFName,alumLName,alumEmail,alumGender,compName
from Alumnus a
join Work w ON w.uID = a.uID
join Company c ON w.compID = c.compID
order by alumLName,alumFName
";
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
<script type="text/javascript" src="js/jquery.js"></script>
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
				          <li><a>Alumni</a></li>
				          <li><a href="events.html">Events</a></li>
				          <li><a href="projects.html">Sponsors</a></li>
				         
			              <li><a href="elements.html">Certifications</a></li>
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    	<div class="dropdowns">
						<div class="row">
							<div class="dropdown">
									
							<div class="custom-select" style="width:200px;" col-md-3>
									<form action ="AlumniTable.php" method ="POST">
											<select>
											  <option value="Select Batch" selected>Select Batch</option>
											  <?php while($row1 = mysqli_fetch_array($result2)):;?>
												<option><?php echo $row1[0];?></option>
												<?php endwhile;?>
											</select>
										  </div>	

										  <div class="custom-select" style="width:200px;" col-md-3>
											<form action ="AlumniTable.php" method ="POST">
											<select>
											  <option value="Select Company" selected>Select Company</option>
											  <?php while($row = mysqli_fetch_array($result1)):;?>
												<option><?php echo $row[0];?></option>
												<?php endwhile;?>
											</select>
										  </div>	

											  <div class="custom-select" style="width:200px;" col-md-3>
											  <form action ="AlumniTable.php" method ="POST">
													<select>
													  <option value="Select Role" selected>Select Role</option>
													  <?php while($row = mysqli_fetch_array($result3)):;?>
													<option><?php echo $row[0];?></option>
													<?php endwhile;?>
													</select>
												  </div>		
												  
								  </div>
								  <div id="apply filter" col-md-3><button class="button button2">Apply filter</button>

								  </div>
					  </div>
					  </div>
			    </div>
			  </header><!-- #header -->

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-center">
						<div class="banner-content col-lg-12 col-md-12">			
							
						</div>												
					</div>
				</div>
			</section>
			<!-- End banner Area -->
					
		<script>
			function showAlumnus(str) {
  var xhttp; 
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "getalumni.php?q="+str, true);
  xhttp.send();
}



			/************************************************* */
					var x, i, j, selElmnt, a, b, c;
					/*look for any elements with the class "custom-select":*/
					x = document.getElementsByClassName("custom-select");
					for (i = 0; i < x.length; i++) {
					  selElmnt = x[i].getElementsByTagName("select")[0];
					  /*for each element, create a new DIV that will act as the selected item:*/
					  a = document.createElement("DIV");
					  a.setAttribute("class", "select-selected");
					  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
					  x[i].appendChild(a);
					  /*for each element, create a new DIV that will contain the option list:*/
					  b = document.createElement("DIV");
					  b.setAttribute("class", "select-items select-hide");
					  for (j = 0; j < selElmnt.length; j++) {
						/*for each option in the original select element,
						create a new DIV that will act as an option item:*/
						c = document.createElement("DIV");
						c.innerHTML = selElmnt.options[j].innerHTML;
						c.addEventListener("click", function(e) {
							/*when an item is clicked, update the original select box,
							and the selected item:*/
							var y, i, k, s, h;
							s = this.parentNode.parentNode.getElementsByTagName("select")[0];
							h = this.parentNode.previousSibling;
							for (i = 0; i < s.length; i++) {
							  if (s.options[i].innerHTML == this.innerHTML) {
								s.selectedIndex = i;
								h.innerHTML = this.innerHTML;
								y = this.parentNode.getElementsByClassName("same-as-selected");
								for (k = 0; k < y.length; k++) {
								  y[k].removeAttribute("class");
								}
								this.setAttribute("class", "same-as-selected");
								break;
							  }
							}
							h.click();
						});
						b.appendChild(c);
					  }
					  x[i].appendChild(b);
					  a.addEventListener("click", function(e) {
						  /*when the select box is clicked, close any other select boxes,
						  and open/close the current select box:*/
						  e.stopPropagation();
						  closeAllSelect(this);
						  this.nextSibling.classList.toggle("select-hide");
						  this.classList.toggle("select-arrow-active");
						});
					}
					function closeAllSelect(elmnt) {
					  /*a function that will close all select boxes in the document,
					  except the current select box:*/
					  var x, y, i, arrNo = [];
					  x = document.getElementsByClassName("select-items");
					  y = document.getElementsByClassName("select-selected");
					  for (i = 0; i < y.length; i++) {
						if (elmnt == y[i]) {
						  arrNo.push(i)
						} else {
						  y[i].classList.remove("select-arrow-active");
						}
					  }
					  for (i = 0; i < x.length; i++) {
						if (arrNo.indexOf(i)) {
						  x[i].classList.add("select-hide");
						}
					  }
					}
					/*if the user clicks anywhere outside the select box,
					then close all select boxes:*/
					document.addEventListener("click", closeAllSelect);
					</script>

	<!--***********************************************************************888-->
	<div id="alumtable">
<table id="alumniTable" border="1" align="center" style="line-height:25px;">
<thead>
<tr>
<th>First Name </th>
<th>Last Name</th>
<th>Email</th>
<th>Gender</th>
<th>Company Name</th>
</tr>
</thead>
<tbody>
<?php

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		?>
		<tr>
		<td><?php echo $row["alumFName"]; ?></td>
		<td><?php echo $row["alumLName"]; ?></td>
		<td><?php echo $row["alumEmail"]; ?></td>
		<td><?php echo $row["alumGender"]; ?></td>
		<td><?php echo $row["compName"]; ?></td>
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
</tbody>
</table>
</div>
<script type="text/javascript" src="DataTables/datatables.min.js"></script>

<script type="text/javascript">
     $(document).ready(function() {
    $('#alumniTable').DataTable({
		// "paging":   false,
         "ordering": false,
        // "info":     false,
		 "searching": false
	});
} );
    </script>

</body>
</html>
