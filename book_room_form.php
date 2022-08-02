<?php
  include_once "session.php";
  include_once "db.php";
  include_once "book_room_crud.php";

  if (isset($_GET['room'])) {
 
  try {
       
      // $stmt = $conn->prepare("SELECT * FROM tbl_kiz_complaint WHERE complaintID = :complaint_id");
      // $stmt->bindParam(':complaint_id', $id, PDO::PARAM_INT);
      $room = $_GET['room'];
 
      // $stmt->execute();

      //  $result = $stmt->fetch(PDO::FETCH_ASSOC);

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
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Booking Room</title>

<script src="script.js"></script>
<link rel="stylesheet" href="styles.css">

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
  background-color: #4CAF50;
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

button[type=submit] {
  background-color: #CC4629;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: ;
}

button[type=submit]:hover {
  background-color: #45a049;
}

button[type=reset] {
  background-color: #CC4629;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: ;
}

button[type=reset]:hover {
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
  include_once "topnavbar_student.php";
?>

<?php 
  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $conn->prepare("SELECT * FROM tbl_kiz_student WHERE student_matricNo = '$matric'");

    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);
  }
  catch(PDOException $e){
            echo "Error: " . $e->getMessage();
      }
  ?>

<div class="container" style="margin: 35px" id="booking">
  <div class="row">
  <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">

<center>
<h1>College Room Booking</h1>
<br>

<form action="book_room_crud.php" enctype="multipart/form-data" method="post" class="form-horizontal">

<div class="row">
      <div class="col-25">
        <label class="col-sm-3 control-label">Name : </label>
      </div>
      <div class="col-75">
      <input name="sname" class="form-control" type="text" placeholder="Your Name..." value="<?php echo $result['student_name']; ?>" readonly>
    </div>
</div>

<div class="row">
        <div class="col-25">
          <label class="col-sm-3 control-label">Matric No : </label>
      </div>
      <div class="col-75">
      <input name="smat" class="form-control" type="text" placeholder="Your Matric No..." value="<?php echo $matric ?>" readonly>
    </div>
</div>

<div class="row">
        <div class="col-25">
          <label class="col-sm-3 control-label">Room No : </label>
      </div>
      <div class="col-75">
      <input name="rnum" class="form-control" type="text" placeholder="Your Room No..." value="<?php echo $room ?> " readonly>
   </div>
</div>

<div class="row">
        <div class="col-25">
          <label class="col-sm-3 control-label">Room Partner : </label>
      </div>
      <div class="col-75">
      <input name="rname" class="form-control" type="text" placeholder="Your Room Partner..." readonly="">
  </div>
</div>

<div class="form-group" hidden="">
          <label for="complaintstatus" class="col-sm-3 control-label">Status :</label>
          <div class="col-sm-9">
          <input name="bstatus" type="text" class="form-control" id="complaintdetails" hidden="" value="">
      </div> </div> 

<div class="form-group" hidden="">
          <label for="complaintstatus" class="col-sm-3 control-label">Role :</label>
          <div class="col-sm-9">
          <input name="brole" type="text" class="form-control" id="complaintdetails" hidden="" value="student">
      </div> </div> 

<!-- <div class="row">
        <div class="col-25">
          <label class="col-sm-3 control-label">Duration of Stay : </label>
      </div>

<div class="form-checkbox" style="margin-top: 7px">
<label for="single">
<input type="radio" id="semester" name="room-type">
<span></span>One Semester
</label>
&nbsp;
<label for="Double">
<input type="radio" id="custom" name="room-type">
<span></span>Duration (Specify Date)
</label>
</div>
</div>

<div class="row">
<div class="col-md-6">
<div class="form-group">
<input class="form-control" type="date" style="margin-bottom: 5px;">
<span class="form-label">Start Date</span>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<input class="form-control" type="date" style="margin-bottom: 5px;">
<span class="form-label">End Date</span>
</div>
</div>
</div>
 -->
<div class="row">
  <button class="btn btn-default" type="submit" name="submit" id="submit" style="margin-top: 5px;"><span class="glyphicon glyphicon-plus" aria-hidden="true" ></span> Confirm</button>
</div>

</form>
</center>

</div>
</div>
</div>
<!-- </div>
</div> -->
<script src="js/jquery.min.js"></script>
<script>
    $('.form-control').each(function () {
      floatedLabel($(this));
    });

    $('.form-control').on('input', function () {
      floatedLabel($(this));
    });

    function floatedLabel(input) {
      var $field = input.closest('.form-group');
      if (input.val()) {
        $field.addClass('input-not-empty');
      } else {
        $field.removeClass('input-not-empty');
      }
    }
  </script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

<?php
  include_once "footer_ekolej.php";
?>

</body>
</html>