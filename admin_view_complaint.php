<?php
 
include_once "db.php";
include_once "session.php";
 
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     
    $stmt = $conn->prepare("SELECT * FROM tbl_kiz_complaint");
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
<html>
<head>
  
  <title>E-KOLEJ</title>

  <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
  <script src="script.js"></script>
  <link rel="stylesheet" href="styles.css">

  <style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
}

/* Style the header */
/*.header {
  background-color: #f1f1f1;
  padding: 20px;
  text-align: center;
}*/

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
  width: 275px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
  background-image: url('searchicon.png');
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
  /*-webkit-transition: width 0.4s ease-in-out;*/
  /*transition: width 0.4s ease-in-out;*/
}

input[type=text]:focus {
  /*width: 100%;*/
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
  border: 1px double #000000;
  text-align: left;
  padding: 8px;
}

th {
  cursor: pointer;
  text-align: center;
}

tr:nth-child(even) {
  /*background-color: #dddddd;*/
}

tr {
  background-color: #dddddd;
  border-style:solid;
}

.btn-group button {
  background-color: #4CAF50; /* Green background */
  border: 1px solid green; /* Green border */
  color: white; /* White text */
  padding: 10px 24px; /* Some padding */
  cursor: pointer; /* Pointer/hand icon */
  float: left; /* Float the buttons side by side */
}

/* Clear floats (clearfix hack) */
.btn-group:after {
  content: "";
  clear: both;
  display: table;
}

.btn-group button:not(:last-child) {
  border-right: none; /* Prevent double borders */
}

.dropdown-content {
  cursor: pointer;
}

/* Add a background color on hover */
.btn-group button:hover {
  background-color: #3e8e41;
}

.styled-select.slate {
  height: 34px;
  width: 240px;
}

td a {
background-color: red;
color: black;
padding: 5px;
text-decoration: none;
border: 2px solid black;
}
td a:hover {
background-color: black;
color: white;

}
</style>
</head>
<body>

<?php
include_once "topnavbar_admin.php";
?>

<div class="wrapper">
<!--         <div class="top_nav">

        <div class="left">
          <div class="logo">
            <img src="logo_UKM.png" height="100px" width="150px">
            <img src="logo_kiz.jpg" height="90px" width="200px">
            <a style="color: black; font-weight: bold; font-size: 30px; margin-left: 20px; padding-bottom: 20px; vertical-align: middle; margin-bottom: 40px">E-KOLEJ</a>
          </div>
      </div>

        <div class="right">
          <ul><li><center><a href="#" disabled="disabled"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>USER : (<?php echo $pos; ?>)</a></center></li>
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
        <li><a href="indexadmin.php" class="dropbtn">HOME</a></li>
        <div class="dropdown">
          <button class="dropbtn">ROOM <i class="fa fa-caret-down"></i></button>
          <div class="dropdown-content">
            <a href="#">REGISTER ROOM</a>
            <a href="#">UPDATE BOOKING STATUS</a>
          </div>
        </div>
        <div class="dropdown">
          <button class="dropbtn">COMPLAINT<i class="fa fa-caret-down"></i></button>
          <div class="dropdown-content">
            <a href="admin_view_complaint.php">VIEW COMPLAINT</a>

          </div>
        </div>
        <li><a href="#">GENERATE REPORT</a></li>
        <li><a href="announcement.php" target="_blank">ANNOUNCEMENT</a></li>
        <li><a href="logout.php"><img src="logout.png" alt="logout" height="30px" width="30px" style="float: right;"></a></li>
      </ul>
  </div> -->

<?php
  echo '<script type="text/javascript">sortTable(7)</script>'
?>

  <div class="row">
    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2" style="padding: 30px">
      <div class="page-header">
        <h2 style="padding-bottom: 20px">Complaint List</h2>
      </div>

      <input type="text" id="cId" onkeyup="myFunction(0,this.id)" placeholder="Search by Complaint ID" title="Type in a complaint id" style="margin-bottom: 20px; background-image: url('/css/searchicon.png');">

      <input type="text" id="uId" onkeyup="myFunction(1,this.id)" placeholder="Search by Complainant ID" title="Type in a complainant id" style="margin-bottom: 20px; background-image: url('/css/searchicon.png');">

      <div class="btn-group" style="padding-bottom: 20px">
        <h4>Filter:</h4>
      </div>

      <div class="dropdown" style="background-color: #FF0000;   border-style: solid; margin-bottom: 20px; margin-right: 20px" id="mySelector">
        <button class="dropbtn">Type of Problem</button>
        <div class="dropdown-content">
          <a id="Damage of property" onclick="filterRow(2,this.id)">Damage of Property</a>
          <a id="Not functioning" onclick="filterRow(2,this.id)">Not Functioning</a>
        </div>
      </div>

      <div class="dropdown" style="background-color: #FF0000;border-style: solid;margin-bottom: 20px; margin-right: 20px">
        <button class="dropbtn">Infrastructure</button>
        <div class="dropdown-content">
          <a id="Block" onclick="filterRow(4,this.id)">Block</a>
          <a id="Bus stop" onclick="filterRow(4,this.id)">Bus Stop</a>
          <a id="Cafe" onclick="filterRow(4,this.id)">Cafe</a>
          <a id="Room" onclick="filterRow(4,this.id)">Room</a>
        </div>
      </div>

      <div class="dropdown" style="background-color: #FF0000;border-style: solid;margin-bottom: 20px; margin-right: 20px">
        <button class="dropbtn">Status</button>
        <div class="dropdown-content">
          <a id='DONE' onclick="filterRow(7,this.id)">Done</a>
          <a id="IN PROGRESS" onclick="filterRow(7,this.id)">In Progress</a>
          <a id="PENDING" onclick="filterRow(7,this.id)">Pending</a>
        </div>
      </div>

      <table class="table table-striped table-bordered" id="myTable">
        <tr >
          <th onclick="sortTable(0)">Complaint ID</th>
          <th onclick="sortTable(1)">Complainant ID</th>
          <th onclick="sortTable(2)">Problem</th>
          <th onclick="sortTable(3)">Time</th>
          <th onclick="sortTable(4)">Infrastructure</th>
          <th onclick="sortTable(5)" hidden="">Detail</th>
          <th onclick="sortTable(6)" hidden="">Attachment</th>
          <th onclick="sortTable(7)" id="myStatus">Status</th>
          <th></th>
          
        </tr>
      <?php
      try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT * FROM tbl_kiz_complaint");
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
        <td><?php echo $readrow['complainantID']; ?></td>
        <td><?php echo $readrow['complaint_problem']; ?></td>
        <td><?php echo $readrow['complaint_date']; ?></td>
        <td><?php echo $readrow['complaint_infrastructure']; ?></td>
        <td hidden=""><?php echo $readrow['complaint_detail']; ?></td>


        <!-- <td style="text-align:center"><?php echo $readrow['complaint_attachment']; ?></td> -->


        <td style="text-align:center" hidden=""><?php

        // $query = "SELECT * FROM tbl_kiz_complaint WHERE complaintID = 'complaintID'";
        // $result1 = mysqli_query($conn, $query);

        // while($row = mysqli_fetch_array($result1)){
         echo '<img src="data:image/png;base64,'.base64_encode($readrow['complaint_attachment']).'"/>';
         //}
         

         ?></td>


        <td style="text-align:center" class="myStatus1"><?php 
        if($readrow["complaint_status"]==="DONE"){
        echo "DONE"."<br>";
        }
        elseif($readrow["complaint_status"]==="IN PROGRESS"){
        echo "IN PROGRESS"."<br>";
        } else{
        echo "PENDING"."<br>";    
        }


        ?>
        
        </td>

        <td style="text-align:center">
          <a href="admin_update_complaint.php?id=<?php echo $readrow['complaintID']; ?>" class="btn btn-success btn-xs" role="button"> See Detail </a>
        </td>

      <?php } ?>
      </tr>


 
      </table>
    </div>
</div>
 
<?php
 include_once "footer_ekolej.php";
?>

  
  
<!--   echo "Action : <a href=admin_update_complaint.php?id=".$row["complainantID"].">Edit</a> / <a href=delete.php?id=".$row["complainantID"].">Delete</a>";
  echo "</li>";
  echo "<hr>"; -->


<script>
function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("myTable");
  switching = true;
  //Set the sorting direction to ascending:
  dir = "asc"; 
  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /*Loop through all table rows (except the
    first, which contains table headers):*/
    for (i = 1; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*Get the two elements you want to compare,
      one from current row and one from the next:*/
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      /*check if the two rows should switch place,
      based on the direction, asc or desc:*/
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch= true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark that a switch has been done:*/
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      //Each time a switch is done, increase this count by 1:
      switchcount ++;      
    } else {
      /*If no switching has been done AND the direction is "asc",
      set the direction to "desc" and run the while loop again.*/
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}
</script>

<script>
function filterRow(t,id) {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById(id);
  filter = input.textContent.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  //document.getElementById("myStatus").style.display="none";
  //document.getElementById("myStatus1").style.display="none";
  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[t];
    
    if (td) {
      txtValue = td.textContent || td.innerText;
      //tr[2].style.display = "none";
      if (txtValue.toUpperCase().indexOf(filter) > -1) {       
        tr[i].style.display = "";   
        //td[9].style.display = "none";    
      } else {
        tr[i].style.display = "none";
        //tr[8].style.display = "none";
      }
    }
  }
}
</script>

<script>
function myFunction(t,id) {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById(id);
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[t];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>


 
</body>

</html>

