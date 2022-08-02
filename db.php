<?php 

$servername = "lrgs.ftsm.ukm.my";
$username = "a165150";
$password = "smallbluefrog";
$dbname = "a165150";


$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 ?>