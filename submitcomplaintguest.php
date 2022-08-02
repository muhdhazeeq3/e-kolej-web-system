<?php
  include_once 'submitcomplaint_crud.php';
  // include_once 'db.php';  

?>

<!DOCTYPE html>
<html lang="en">
<head> 

  <meta charset="utf-8">
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

.row:after {
  content: "";
  display: table;
  clear: both;
}


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
  include_once 'topnavbar_guest.php';
?>

<!--   <div class="wrapper">

        <div class="top_nav">

        <div class="left">
          <div class="logo">
            <img src="logo_UKM.png" height="100px" width="150px">
            <img src="logo_kiz.jpg" height="90px" width="200px">

            <a style="color: black; font-weight: bold; font-size: 30px; margin-left: 20px; padding-bottom: 20px; vertical-align: middle; margin-bottom: 40px">E-KOLEJ</a>

          </div>
      </div> 

        <div class="right">
          <ul><li><center><a href="#" disabled="disabled"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>USER : (<?php echo "Guest"; ?>)</a></center></li>
            <li>
              <body onload="startTime()">
              <div id="txt"></div>
              </body>              
            </li>
          </ul>
        </div>

    </div>

    <div class="bottom_nav">
      <ul>
        <li><a href="indexguest.php">HOME</a></li>
        <div class="dropdown">
          <button class="dropbtn">GUEST ROOM <i class="fa fa-caret-down"></i></button>
          <div class="dropdown-content">
            <a href="#">BOOK GUEST ROOM</a>
            <a href="#">CHECK BOOKING STATUS</a>
          </div>
        </div>
        <div class="dropdown">
          <button class="dropbtn">COMPLAINT <i class="fa fa-caret-down"></i></button>
          <div class="dropdown-content">
            <a href="submitcomplaintguest.php">SUBMIT COMPLAINT</a>
            <a href="check_complaint_status.php">CHECK COMPLAINT STATUS</a>
          </div>
        </div>
        <li><a href="announcement.php" target="_blank">ANNOUNCEMENT</a></li>
        <li><a href="logout.php"><img src="logout.png" alt="logout" height="30px" width="30px" style="float: right;"></a></li>
      </ul>
  </div> -->

  <div class="container" style="margin: 35px">
  	<div class="row">
    <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">

  	<center>
 		<h2 style="margin-top: 20px"> Complainant Details</h2>
  	<br>

  	<form action="submitcomplaint.php" enctype="multipart/form-data" method="post" class="form-horizontal">

  	<!-- <div class="form-group">
  	  <label for="complainantstatus" class="formlabel"></label>
      <input name="cstatus" id="complainant_stat" type="radio" value="kizstudent" required> KIZ Student
      &nbsp;&nbsp;
      <input name="cstatus" id="complainant_stat" type="radio" value="nonkizstudent"> Non-KIZ Student 
  	</div>  -->

  	<div class="row">
      <div class="col-25">
          <label for="complainantname" class="col-sm-3 control-label">Name : </label>
        </div>
          <div class="col-75">
          <input name="cname" type="text" class="form-control" id="complainantname" placeholder="Your Name"  required>
      </div> 
    </div> 

       <div class="row">
      <div class="col-25">
          <label for="complainantid" class="col-sm-3 control-label">IC Number :</label>
        </div>
          <div class="col-75">
          <input name="cid" type="text" class="form-control" id="complainantid" placeholder="############" required pattern="(([[0-9]{2})(0[1-9]|1[0-2])(0[1-9]|[12][0-9]|3[01]))([0-9]{2})([0-9]{4})">

      </div> </div> 

<!--       <div class="form-group">
          <label for="complainantID" class="col-sm-3 control-label">Matric No : </label>
          <div class="col-sm-9">
          <input name="cid" type="text" class="form-control" id="complainantid" value="<?php echo $result['student_matricNo']; ?>" readonly>
      </div> </div> --> 

      <div class="row">
      <div class="col-25">
          <label for="complainantPhone" class="col-sm-3 control-label">Phone Number : </label>
        </div>
          <div class="col-75">
          <input name="ccomPhone" type="text" class="form-control" id="complainantPhone" placeholder="Your Phone Number" required>
      </div> </div>

     

      <div class="row">
      <div class="col-25">
          <label for="complainantroomno" class="col-sm-3 control-label">Room Number :</label>
        </div>
          <div class="col-75">
          <input name="croomno" type="text" class="form-control" id="complainantroomno" placeholder="Your Room No" required>
      </div> </div> 

      <!-- <div class="form-group">
          <label for="complaintdate" class="col-sm-3 control-label">Date :</label>
          <div class="col-sm-9">
          <input name="cdate" type="text" placeholder="Complaint Date & Time" class="form-control" id="complaintdate" disabled='disabled'>
      </div> </div> --> <br>

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
          <input type="file" name="cattach" id="image" style="margin-top: 7px">
    	
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
  <!--   </div> -->
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

