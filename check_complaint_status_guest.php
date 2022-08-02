<?php
 
include_once 'db.php';

//Create 
  try {

    $stmt = $conn->prepare("SELECT * FROM tbl_kiz_complaint, tbl_kiz_guest WHERE tbl_kiz_complaint.complainantID = tbl_kiz_guest.guest_icNumber");
     
    $stmt->execute();

    $result = $stmt->fetchAll();

 }
  catch(PDOException $e)
  {
      echo "Error: " . $e->getMessage();
  }


$conn = null; 
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <?php include_once 'nav_bar_ekolej.php' ?>
<title>E-KOLEJ</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
}

/* Style the header */
.header {
  background-color: #f1f1f1;
  padding: 20px;
  text-align: center;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}
input[type=text] {
  width: 130px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
  background-image: url('searchicon.png');
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
  width: 100%;
}
/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  padding: 15px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width:600px) {
  .column {
    width: 100%;
  }
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Check Complaint Status</h2>

<p>Complaint ID:</p>

<form>
  <input type="text" name="search" placeholder="Your Complaint ID" value="<?php echo $matric?>" readonly>
</form>


<div class="row">
    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
      <div class="page-header">
        <h2>Complaint List</h2>
      </div>
      <table class="table table-striped table-bordered">
        <tr>
          <th>Complaint ID</th>
          <th>Problem</th>
          <th>Time</th>
          <th>Infrastructure</th>
          <th>Detail</th>
          <th>Attachment</th>
          <th>Status</th>
          
        </tr>
      <?php
      try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT * FROM tbl_kiz_complaint,tbl_kiz_student WHERE tbl_kiz_complaint.complainantID = tbl_kiz_student.student_matricNo");
        $stmt->execute();
        $result = $stmt->fetchAll();
      }
      catch(PDOException $e){
            echo "Error: " . $e->getMessage();
      }

      foreach($result as $readrow) {
      ?>

      <tr>
        <td><?php echo $readrow['complaintID']; ?></td>
        <td><?php echo $readrow['complaint_problem']; ?></td>
        <td><?php echo $readrow['complaint_date']; ?></td>
        <td><?php echo $readrow['complaint_infrastructure']; ?></td>
        <td><?php echo $readrow['complaint_detail']; ?></td>
        <td style="text-align:center"><?php echo $readrow['complaint_attachment']; ?></td>
        <td style="text-align:center"><?php 

        if($readrow["complaint_status"]=="Done"){
        echo "DONE"."<br>";
        }
        elseif($readrow["complaint_status"]=="In Progress"){
        echo "IN PROGRESS"."<br>";
        } else{
        echo "PENDING"."<br>";    
        }

        ?></td>


      </tr>
      <?php } ?>

 
      </table>
    </div>
</div>
   
   <?php
 include_once "footer_ekolej.php";
?>

</body>
</html>