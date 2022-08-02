<?php  
//include_once 'database.php';
include_once 'db.php';
include_once 'session.php';
//$pos = $readrow['FLD_POSITION'];
//login_success.php  

 
 	if(isset($_SESSION["staffid"]))  
 	{  
     	echo '<script type="text/javascript">'; 
		// echo 'alert("Welcome '.$matric.'! Your Privilege is: '.$pos.'");'; 
		if ($pos === "Admin") {
			echo 'window.location.href = "indexadmin.php";';
		}
		if ($pos === "Student") {
			echo 'window.location.href = "indexstudent.php";';
		}
		
		echo '</script>';
 	}  
 	else  
 	{  
	   	echo '<script type="text/javascript">'; 
		echo 'alert("Please login First!");'; 
		echo 'window.location.href = "login.php";';
		echo '</script>';
 	}  
 ?>  