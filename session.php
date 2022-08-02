<?php
include_once 'db.php';
//include_once 'database.php';

session_start(); 

	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	if (isset($_SESSION['staffid'])) {
		$matric = $_SESSION['staffid'];
	}
	
	$stmt = $conn->prepare("SELECT * FROM tbl_user_kiz WHERE fld_user_nomatric = '$matric'");

	$stmt->execute();
	
	$readrow = $stmt->fetch(PDO::FETCH_ASSOC);

	$matric = $readrow['fld_user_nomatric'];
	$pass= $readrow['fld_user_password'];
	$pos = $readrow['fld_user_position'];
		
if($matric==''){
	header("location:login.php");
	}
	else {
	header("");
	}
?>