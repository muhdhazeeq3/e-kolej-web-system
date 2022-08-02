<?php
include_once "session.php";
 
if (isset($_GET['id'])) {
 
  include_once "db.php";
 
  try {
      // $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       
      $stmt = $conn->prepare("SELECT * FROM tbl_booking_room WHERE fld_booking_id = :booking_id");
      $stmt->bindParam(':booking_id', $id, PDO::PARAM_INT);
      $id = $_GET['id'];
 
      $stmt->execute();

       $result = $stmt->fetch(PDO::FETCH_ASSOC);

      }
 
    catch(PDOException $e)
    {
        echo "Error: " . $e->getMessage();
    }
 
    //$conn = null;
 }
else {
  echo "Error: You have execute a wrong PHP. Please contact the web administrator.";
  die();
}
 
 ?>

 <!DOCTYPE html>
<html>
<head>
  
  <title>E-KOLEJ</title>
  <script src="script.js"></script>
  <link rel="stylesheet" href="styles.css">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #CC4629;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>

</head>
 
<body>

<?php
include_once "topnavbar_admin.php";
?>

  <div class="wrapper">

<div class="container" style="margin: 35px"> 
    <form method="post" action="booking_update_crud.php">
      <div class="row">
        <div class="col-25">
          <label>Booking ID:</label> 
        </div>
        <div class="col-75">
          <input name="bookingID" type="text" readonly value="<?php echo $result["fld_booking_id"] ?> ">
        </div>
      </div>

      <div class="row">
        <div class="col-25">
          <label>Date of booking:</label> 
        </div>
        <div class="col-75">
          <input name="bookingdate" type="text" readonly value="<?php echo $result["fld_booking_date"] ?> ">
        </div>
      </div>

      <div class="row">
        <div class="col-25">  
         <label>Student's ID :</label>
        </div>
        <div class="col-75">
          <input type="text" name="studentID" size="40" readonly value="<?php echo $result["fld_student_matric"]; ?>">
        </div>
      </div>
      
      <div class="row">
        <div class="col-25">
          <label>Room number:</label>
        </div>
        <div class="col-75">
          <input type="text" name="roomnumber" size="25" readonly value="<?php echo $result["fld_room_num"]; ?>">
        </div>
      </div>

      <div class="row">
        <div class="col-25">
          <label>Roomate Name:</label>
        </div>
        <div class="col-75">
          <input type="text" name="roomatename" size="25" readonly value="<?php echo $result["fld_roomate_name"]; ?>">
        </div>
      </div>
     

      <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">

      <div class="row">
        <div class="col-25">
          <label>Booking Status:</label>
        </div>
        <div class="col-75">
            <?php
           
          if (isset($_GET['id'])) {
           
            include "db.php";
           
            try {
            

             $checked_arr = explode(",",$result['fld_booking_status']);
              

              // Create checkboxes
              

              $checked_arr2 = explode(",",$result['fld_booking_status']);
              

              // Create checkboxes
              $languages_arr2 = array("REJECTED");
              foreach($languages_arr2 as $form){

                $checked2 = "";
                if(in_array($form,$checked_arr2)){
                  $checked2 = "checked";
                }
                echo '<input type="checkbox" name="cstatus" value="'.$form.'" '.$checked2.' > '.$form.' <br/>';
              }

              $languages_arr = array("APPROVED");
              foreach($languages_arr as $frontpage){

                $checked = "";
                if(in_array($frontpage,$checked_arr)){
                  $checked = "checked";
                }
                echo '<input type="checkbox" name="cstatus" value="'.$frontpage.'" '.$checked.' > '.$frontpage.' <br/>';
              }




                
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
      </div>      
    </div>  

  <div class="row">
      <div class="col-25">
          <label for="notes" class="col-sm-3 control-label">Additional Notes : </label>
        </div>
          <div class="col-75">
          <input name="notes" type="text" class="form-control" id="notes" placeholder="Notes">
      </div> 
    </div>

    <div class="row">
     <input type="submit" name="edit_form" value="Update">
    </div>      
      
    </form>
 
</div>

<?php
 include_once "footer_ekolej.php";
?>

</body>
</html>