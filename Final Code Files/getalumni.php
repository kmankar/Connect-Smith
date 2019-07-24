
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

?>
<html><head></head><body><br></body></html>
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

$sql = "SELECT uID, alumFName, alumBatch
FROM Alumnus";


if($year=="*" and $company!="*"){
    $sql="SELECT alumFname,alumLname, compName, alumBatch from alumnus a
    JOIN work w ON w.uID=a.uID 
    JOIN company c ON w.compID=c.compID 
    where compName ='" .$company. "'";
}
elseif($company=="*" and $year!="*"){
    $sql="SELECT alumFname,alumLname,compName,alumBatch from alumnus a
JOIN work w ON w.uID=a.uID 
JOIN company c ON w.compID=c.compID 
where a.alumBatch =$year";
}
elseif($year!="*" and $company!="*"){
    $sql="SELECT alumFname,alumLname,compName,alumBatch from alumnus a
JOIN work w ON w.uID=a.uID 
JOIN company c ON w.compID=c.compID 
where a.alumBatch =$year and compName ='" .$company. "'";
}
else{
    $sql="SELECT alumFname,alumLname,compName,alumBatch from alumnus a
JOIN work w ON w.uID=a.uID 
JOIN company c ON w.compID=c.compID";
}

echo $sql;

$result=$conn->query($sql);

echo "<table border=1>";
echo "<tr>";

echo "<th>First Name</th>";
echo "<th>Last Name</th>";
echo "<th>Company</th>";
echo "<th>Batch</th>";
echo "</tr>";
echo "<tr>";
if ($result->num_rows > 0) {
while ($row=$result->fetch_assoc()){
echo "<tr>";
echo "<td>" .$row["alumFname"]. "</td>";
echo "<td>" .$row["alumLname"]. "</td>";
echo "<td>" .$row["compName"]. "</td>";
echo "<td>" .$row["alumBatch"]. "</td>";

}
}
else
{
	echo "0";
}
echo "</tr>";
echo "</table>";
$conn->close();

?>