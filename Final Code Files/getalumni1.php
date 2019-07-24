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

$sql = "select alumFName,compName
from Alumnus a
join Work w ON w.uID = a.uID
join Company c ON w.compID = c.compID
where compName=?
order by alumFName,compName
";

$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($fname, $comp);
$stmt->fetch();

echo "<table border=1>";
echo "<tr>";
echo "<th>First Name</th>";
echo "<th>Company</th>";
echo "</tr>";
echo "<tr>";
echo "<td>" . $fname . "</td>";
echo "<td>" . $comp . "</td>";
echo "</tr>";
echo "<tr>";
if ($stmt->num_rows > 0) {
while ($stmt->fetch()){
echo "<tr>";
echo "<td>" . $fname . "</td>";
echo "<td>" . $comp . "</td>";
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
