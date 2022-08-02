<?php
 
if (isset($_POST['edit_form'])) {
 
  include "db.php";
 
  try {
    // $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       
    $stmt = $conn->prepare("UPDATE tbl_kiz_complaint SET complaint_status = :cstatus WHERE complaintID = :id");
 
    $stmt->bindParam(':cstatus', $cstatus, PDO::PARAM_STR);
    $stmt->bindParam(':id', $id, PDO::PARAM_STR);
       
    $cstatus = $_POST['cstatus'];
    $id = $_POST['id'];
  

     //checkbox // if else

      if(isset($_POST['cstatus'])){
        $_POST['form']="Form";
      }
      else{
        $_POST['form']="no";
      }

      if(isset($_POST['cstatus'])){
        $_POST['cstatus']="Front page";
      }
      else{
        $_POST['frontpage']="no";
      }


      
      $form = $_POST['form'];
      $frontpage = $_POST['frontpage'];
 
    $stmt->execute();
     
    header("Location:admin_view_complaint.php");
    }
 
    catch(PDOException $e)
    {
        echo "Error: " . $e->getMessage();
    }
 
    $conn = null;
  }
else {
  echo "Error: You have execute a wrong PHP. Please contact the web administrator.";
  die();
}
 
?>