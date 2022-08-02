<?php
  include_once 'submitcomplaint_crud.php';
  include_once 'db.php';  
  include_once 'session.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
     <!-- <script src="script.js"></script> -->
 

  <meta charset="utf-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
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


  <title>E-KOLEJ</title>

  <script src="script.js"></script>
  <link rel="stylesheet" href="styles.css">

 
</head>
<body>
  
  <?php
  include_once 'topnavbar_student.php';

?>
  
<?php 
  try {

    $stmt = $conn->prepare("SELECT * FROM tbl_kiz_student WHERE student_matricNo = '$matric'");

    $stmt->execute();
    //$result = $stmt->fetchAll();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
  }
  catch(PDOException $e){
            echo "Error: " . $e->getMessage();
      }
  ?>

  <div class="container" style="margin: 35px"> 
  	<div class="row">
    <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">

  	<center>
 		<h2 style="margin-top: 20px"> Complainant Details</h2>
  	<br>

  	<form action="submitcomplaint.php" enctype="multipart/form-data" method="post" class="form-horizontal">


  	<div class="row">
      <div class="col-25">
          <label for="complainantname" class="col-sm-3 control-label">Name : </label>
      </div>
          <div class="col-75">
          <input name="cname" type="text" class="form-control" id="complainantname" placeholder="Your Name" value="<?php echo $result['student_name']; ?>" readonly>
      </div> 
    </div> 

      <div class="row">
        <div class="col-25">
          <label for="complainantID" class="col-sm-3 control-label">Matric No : </label>
        </div>
          <div class="col-75">
          <input name="cid" type="text" class="form-control" id="complainantid" value="<?php echo $result['student_matricNo']; ?>" readonly>
      </div> </div> 

      <div class="row">
        <div class="col-25">
          <label for="complainantPhone" class="col-sm-3 control-label">Phone Number : </label>
        </div>
          <div class="col-75">
          <input name="ccomPhone" type="text" class="form-control" id="complainantPhone" value="<?php echo $result['student_phoneNumber']; ?>" readonly>
      </div> </div>
 

      <div class="row">
        <div class="col-25">
          <label for="complainantroomno" class="col-sm-3 control-label">Room Number :</label>
        </div>
          <div class="col-75">
          <input name="croomno" type="text" class="form-control" id="complainantroomno" placeholder="Your Room No" value="<?php echo $result['student_roomNumber']; ?>" readonly>
      </div> </div> 
<br>

      <h2> Complaint Details</h2> <br>

      <div class="row">
        <div class="col-25">
          <label for="complaintprob" class="col-sm-3 control-label">Type of problem :</label>
        </div>
          <div class="col-75">
      <select name="cprob" class="form-control" id="complaintprob" required>
        <option value="">Please select</option>
        <option value="Damage of property">Damage of property</option>
        <option value="Not functioning" >Not functioning</option>
      </select> 
      </div>
        </div> 

        <div class="row">
          <div class="col-25">
          <label for="complaintinfra" class="col-sm-3 control-label">Infrastructure :</label>
        </div>
          <div class="col-75">
      <select name="cinfra" class="form-control" id="complaintinfra" required>
        <option value="">Please select</option>
        <option value="Cafe">Cafe</option>
        <option value="Room">Room</option>
        <option value="Block">Block</option>
        <option value="Bus stop" >Bus stop</option>
      </select> 
      </div>
        </div> 

       <div class="row">
        <div class="col-25">
          <label for="complaintdetails" class="col-sm-3 control-label">Details :</label>
        </div>
          <div class="col-75">
          <input name="cdetail" type="text" class="form-control" id="complaintdetails" required>
      </div> </div> 

     <div class="row">
      <div class="col-25">
          <label for="complaintattach" class="col-sm-3 control-label">Attachment :</label>
        </div>
          <div class="col-75">
          <input type="file" name="image" id="image" style="margin-top: 7px">
    	
      </div> </div>

      <div class="form-group" hidden="">
          <label for="complaintstatus" class="col-sm-3 control-label">Status :</label>
          <div class="col-sm-9">
          <input name="cstatus" type="text" class="form-control" id="complaintdetails" hidden="" value="">
      </div> </div>   
 
      <div class="row">
        <!--   <div class="col-sm-offset-3 col-sm-9"> -->
      <?php { ?>
      <button class="btn btn-default" type="submit" name="submit" id="submit"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Submit</button>
      <?php } ?>
      <button class="btn btn-default" type="reset"><span class="glyphicon glyphicon-erase" aria-hidden="true"></span> Clear</button>
<!--     </div> -->
  </div>


  </form>
	</center>  
	</div>
	</div>
</div>

<?php
 include_once "footer_ekolej.php";
?>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

</body>
</html>

<!-- <script>
	$(document).ready(function(){
		$('#submit').click(function(){
			var image_name = $('#image').val();
			if(image_name == '')
			{
				alert("Please Select Image");
				return false;
			}
			else
			{
				var extension = $('#image').val().split('.').pop().toLowerCase();
				if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
				{
					alert('Invalid Image File');
					$('#image').val('');
					return false;
				}
			}
		});
	});
</script> -->
<!-- <script type="text/javascript">
  
  $(document).ready(function() {
    $(".dropdown-toggle").dropdown();
});
</script> -->

