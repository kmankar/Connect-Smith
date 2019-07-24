<?php
//setting header to json
header('Content-Type: application/json');

//database
define('DB_HOST', '127.0.0.1');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'mysmith');

//get connection
$mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if(!$mysqli){
	die("Connection failed: " . $mysqli->error);
}

//query to get data from the table
$query = sprintf("select certName, COUNT(c.certName) AS 'number' 
from Certification c
Group by certName
order by certName");

// $query = sprintf("select c.certName, COUNT(c.certName) AS 'number', w.workPosition 
// from certification c
// join work w on w.uID=c.uID
// Group by certName
// order by COUNT(workPosition) DESC
// LIMIT 2");

//execute query
$result = $mysqli->query($query);

//loop through the returned data
$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

//free memory associated with result
$result->close();

//close connection
$mysqli->close();

//now print the data
print json_encode($data);