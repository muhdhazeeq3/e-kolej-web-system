<?php

  include_once 'db.php';
//Create
if (isset($_POST['submit'])) {

  try {
    

    $stmt = $conn->prepare("INSERT INTO tbl_booking_room(fld_student_matric, fld_student_name, fld_room_num, fld_roomate_name, fld_booking_status, fld_role) VALUES(:smat,:sname, :rnum, :rname, :bstatus, :brole)");


   
 
    $stmt->bindParam(':smat', $smat, PDO::PARAM_STR);
    $stmt->bindParam(':sname', $sname, PDO::PARAM_STR);
    $stmt->bindParam(':rnum', $rnum, PDO::PARAM_STR);
    $stmt->bindParam(':rname', $rname, PDO::PARAM_STR);
    $stmt->bindParam(':bstatus', $bstatus, PDO::PARAM_STR);
    $stmt->bindParam(':brole', $brole, PDO::PARAM_STR);
  

    $smat = $_POST['smat'];
    $sname = $_POST['sname'];
    $rnum = $_POST['rnum'];
    $rname = $_POST['rname'];          
    $bstatus = $_POST['bstatus'];
    $brole = $_POST['brole'];
   
         
    $stmt->execute();

    if ($stmt){
      echo '<script type="text/javascript">'; 
      echo 'alert("Booking Confirm");'; 
      echo 'window.location.href = "indexstudent.php";';
      // echo 'window.location.href = "http://lrgs.ftsm.ukm.my/users/a167688/";';
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
