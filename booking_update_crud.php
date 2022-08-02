<?php
 
if (isset($_POST['edit_form'])) {
 
  include "db.php";
 
  try {
    // $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("UPDATE tbl_booking_room SET fld_booking_status = :cstatus, fld_add_note = :notes WHERE fld_booking_id = :id");
 
    $stmt->bindParam(':cstatus', $cstatus, PDO::PARAM_STR);
    $stmt->bindParam(':id', $id, PDO::PARAM_STR);
    $stmt->bindParam(':notes', $notes, PDO::PARAM_STR);

    $cstatus = $_POST['cstatus'];
    $id = $_POST['id'];
    $notes = $_POST['notes'];

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

    header("Location:admin_view_booking.php");
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