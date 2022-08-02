<?php
 
include_once 'db.php';
//include_once 'session.php';

//Create
if (isset($_POST['submit'])) {
 
  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("INSERT INTO tbl_kiz_complaint(complainantID, complaint_problem, complaint_infrastructure, complaint_detail, complaint_attachment, complaint_status) VALUES(:cid, :cprob, :cinfra, :cdetail, :cattach, :cstatus)");


   
    $stmt->bindParam(':cid', $cid, PDO::PARAM_STR);
    $stmt->bindParam(':cprob', $cprob, PDO::PARAM_STR);
    $stmt->bindParam(':cinfra', $cinfra, PDO::PARAM_STR);
    $stmt->bindParam(':cdetail', $cdetail, PDO::PARAM_STR);
    $stmt->bindParam(':cattach', $cattach, PDO::PARAM_STR);
    $stmt->bindParam(':cstatus', $cstatus, PDO::PARAM_STR);
  
    $cid = $_POST['cid'];
    $cprob = $_POST['cprob'];
    $cinfra = $_POST['cinfra'];
    $cdetail = $_POST['cdetail'];          
    $cattach = addslashes(file_get_contents($_FILES['image']['tmp_name']));
    $cstatus = $_POST['cstatus'];
   
         
    $stmt->execute();

    if ($stmt){
      echo '<script type="text/javascript">'; 
      echo 'alert("Complaint Sent");'; 
      echo 'window.location.href = "indexstudent.php";';
      // echo 'window.location.href = "submitcomplaint.php";';
    // if ($pos === "Admin") {
    //   echo 'window.location.href = "indexadmin.php";';
    // }
    // if ($pos === "Student") {
    //   echo 'window.location.href = "indexstudent.php";';
    // }
    // if ($pos !== "Admin" || $pos !== "Student"){
    //   echo 'window.location.href = "indexguest.php";';
    // }
      echo '</script>';
  //  }
    }

    }

 
  catch(PDOException $e)
  {
      echo "Error: " . $e->getMessage();
  }
}
 
  $conn = null;
 
?>
