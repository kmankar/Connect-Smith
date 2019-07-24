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

$sql = "Select alumFName,alumLName,alumEmail,alumGender,projName,projDesc,donationAmount from alumnus a 
join donate d ON d.uID = a.uID 
join project p ON p.projID =d.projID 
WHERE projName=?
order by alumLName,alumFName
";

$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($fname, $lname, $email, $gender, $pname, $pdesc, $damt);
$stmt->fetch();
?>
<table id="projects">
    <?php

echo "<tr>";
echo "<th>First Name</th>";
echo "<th>Last Name</th>";
echo "<th>Email</th>";
echo "<th>Gender</th>";
echo "<th>Project Name</th>";
echo "<th>Project Description</th>";
echo "<th>Amount Donated</th>";
echo "</tr>";
echo "<tr>";
echo "<td>" . $fname . "</td>";
echo "<td>" . $lname . "</td>";
echo "<td>" . $email . "</td>";
echo "<td>" . $gender . "</td>";
echo "<td>" . $pname . "</td>";
echo "<td>" . $pdesc . "</td>";
echo "<td>" . $damt . "</td>";
echo "</tr>";
echo "<tr>";
if ($stmt->num_rows > 0) {
while ($stmt->fetch()){
echo "<tr>";
echo "<td>" . $fname . "</td>";
echo "<td>" . $lname . "</td>";
echo "<td>" . $email . "</td>";
echo "<td>" . $gender . "</td>";
echo "<td>" . $pname . "</td>";
echo "<td>" . $pdesc . "</td>";
echo "<td>" . $damt . "</td>";
}
}
else
{
	echo "0";
}
echo "</tr>";
echo "</table>";
$stmt->close();
?>

