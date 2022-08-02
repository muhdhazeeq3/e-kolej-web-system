<?php
 
//include_once 'database.php';
include_once 'db.php';
 
// $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
//Create
if (isset($_POST['create'])) {
 
  try {
 
    $stmt = $conn->prepare("INSERT INTO tbl_user_kiz(fld_user_nomatric, fld_user_password, fld_user_position ) VALUES(:matric, :pass, :pos
      )");
   
    $stmt->bindParam(':matric', $matric, PDO::PARAM_STR);
    $stmt->bindParam(':pass', $pass, PDO::PARAM_STR);
    $stmt->bindParam(':pos', $pos, PDO::PARAM_STR);

       
    $matric = $_POST['matric'];
    $pass = $_POST['pass'];
    $pos = $_POST['pos'];

         
    $stmt->execute();
    }
 
  catch(PDOException $e)
  {
      echo "Error: " . $e->getMessage();
  }
}
 
//Update
if (isset($_POST['update'])) {
   
  try {
 
    $stmt = $conn->prepare("UPDATE tbl_user_kiz SET
      fld_user_nomatric = :matric, fld_user_password = :pass,
fld_user_position = :pos
      WHERE fld_user_nomatric = :oldsid");
   
    $stmt->bindParam(':matric', $matric, PDO::PARAM_STR);
    $stmt->bindParam(':pass', $pass, PDO::PARAM_STR);
    $stmt->bindParam(':pos', $pos, PDO::PARAM_STR);

    $stmt->bindParam(':oldsid', $oldsid, PDO::PARAM_STR);
       
    $matric = $_POST['matric'];
    $pass = $_POST['pass'];
    $pos = $_POST['pos'];
    $oldsid = $_POST['oldsid'];
         
    $stmt->execute();
 
    header("Location: staffs.php");
    }
 
  catch(PDOException $e)
  {
      echo "Error: " . $e->getMessage();
  }
}
 
//Delete
if (isset($_GET['delete'])) {
 
  try {
 
    $stmt = $conn->prepare("DELETE FROM tbl_user_kiz where fld_user_nomatric = :matric");
   
    $stmt->bindParam(':matric', $matric, PDO::PARAM_STR);
       
    $matric = $_GET['delete'];
     
    $stmt->execute();
 
    header("Location: staffs.php");
    }
 
  catch(PDOException $e)
  {
      echo "Error: " . $e->getMessage();
  }
}
 
//Edit
if (isset($_GET['edit'])) {
   
  try {
 
    $stmt = $conn->prepare("SELECT * FROM tbl_user_kiz where fld_user_nomatric = :matric");
   
    $stmt->bindParam(':matric', $matric, PDO::PARAM_STR);
       
    $matric = $_GET['edit'];
     
    $stmt->execute();
 
    $editrow = $stmt->fetch(PDO::FETCH_ASSOC);
    }
 
  catch(PDOException $e)
  {
      echo "Error: " . $e->getMessage();
  }
}
 
  $conn = null;
 
?>