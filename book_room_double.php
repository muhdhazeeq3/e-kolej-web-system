<!DOCTYPE html>
<html>
<title>Double Room</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
.mySlides {display:none}
</style>
<body>

<?php
  include_once "topnavbar_guest.php";
?>
<!-- Sidebar/menu -->
<!-- <nav class="w3-sidebar w3-light-grey w3-collapse w3-top" style="z-index:3;width:260px" id="mySidebar">
  <div class="w3-container w3-display-container w3-padding-16">
    <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-transparent w3-display-topright"></i>
    <h3>Bilik Tamu</h3>
    <h3>Hanya RM100</h3>
    <h6>Untuk Satu Malam</h6>
    <hr>
    <form action="https://www.w3schools.com/action_page.php" target="_blank">

      <p><label><i class="fa fa-calendar-check-o"></i> Check In</label></p>
      <input class="w3-input w3-border" type="date" placeholder="DD MM YYYY" name="CheckIn" required>          
      <p><label><i class="fa fa-calendar-o"></i> Check Out</label></p>
      <input class="w3-input w3-border" type="date" placeholder="DD MM YYYY" name="CheckOut" required>  


      <p><label><i class="fa fa-male"></i> Adults</label></p>
      <input onkeyup="filterSelection()" class="w3-input w3-border" id="adult" type="number" value="1" name="Adults" min="1" max="4">              
      <<p><button class="w3-button w3-block w3-red w3-left-align" type="submit" onclick="myFunction()"><i class="fa fa-search w3-margin-right"></i> Search availability</button></p>
    </form>
  </div>
</nav>
 -->
<!-- Top menu on small screens -->
<!-- <header class="w3-bar w3-top w3-hide-large w3-black w3-xlarge">
  <span class="w3-bar-item">Rental</span>
  <a href="javascript:void(0)" class="w3-right w3-bar-item w3-button" onclick="w3_open()"><i class="fa fa-bars"></i></a>
</header> -->

<!-- Overlay effect when opening sidebar on small screens -->
<!-- <div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div> -->

<!-- !PAGE CONTENT! -->
<div class="container" style="margin-left:125px; margin-right:125px">

  <!-- Push down content on small screens -->
  <div class="w3-hide-large" style="margin-top:100px"></div>


  <!--Room1 -->


  <div class="w3-container" id="apartment">
    <h1 style="text-align: center;">Double Room</h1>
    <h2 class="w3-text-red">RM98/night</h2>
    <div class="w3-display-container mySlides">
    <img src="double1.jpg" style="width:100%;margin-bottom:-6px">
    
      <div class="w3-display-bottomleft w3-container w3-black">
        <p>Bedroom</p>
      </div>
    </div>
    <div class="w3-display-container mySlides">
    <img src="double2.jpg" style="width:100%;margin-bottom:-6px">
      <div class="w3-display-bottomleft w3-container w3-black">
        <p>Furniture Provided</p>
      </div>
    </div>
    <div class="w3-display-container mySlides">
    <img src="double3.jpg" style="width:100%;margin-bottom:-6px">
      <div class="w3-display-bottomleft w3-container w3-black">
        <p>Toilet</p>
      </div>
    </div>
    <div class="w3-display-container mySlides">
    <img src="double4.jpg" style="width:100%;margin-bottom:-6px">
      <div class="w3-display-bottomleft w3-container w3-black">
        <p>Abulation Place</p>
      </div>
    </div>
  </div>
  <div class="w3-row-padding w3-section">
    <div class="w3-col s3">
      <img class="demo w3-opacity w3-hover-opacity-off" src="double1.jpg" style="width:100%;cursor:pointer" onclick="currentDiv(1)" title="Bedroom">
    </div>
    <div class="w3-col s3">
      <img class="demo w3-opacity w3-hover-opacity-off" src="double2.jpg" style="width:100%;cursor:pointer" onclick="currentDiv(2)" title="Furniture Provided">
    </div>
    <div class="w3-col s3">
      <img class="demo w3-opacity w3-hover-opacity-off" src="double3.jpg" style="width:100%;cursor:pointer" onclick="currentDiv(3)" title="Toilet">
    </div>
    <div class="w3-col s3">
      <img class="demo w3-opacity w3-hover-opacity-off" src="double4.jpg" style="width:100%;cursor:pointer" onclick="currentDiv(4)" title="Abulation Place">
    </div>
  </div>

  <div class="w3-container">
    <h3>RM100</h3>
    <h4><strong>The space</strong></h4>
    <div class="w3-row w3-large">
      <div class="w3-col s6">
        <p><i class="fa fa-fw fa-male"></i> Max people: 1</p>
        <p><i class="fa fa-fw fa-bath"></i> Bathrooms: 1</p>
        <p><i class="fa fa-fw fa-bed"></i> Bedrooms: 1</p>
      </div>
      <div class="w3-col s6">
        <p><i class="fa fa-fw fa-clock-o"></i> Check In: After 3PM</p>
        <p><i class="fa fa-fw fa-clock-o"></i> Check Out: 12PM</p>
      </div>
    </div>
    
    <h4><strong>Amenities</strong></h4>
    <div class="w3-row w3-large">
      <div class="w3-col s6">
        <p><i class="fa fa-fw fa-shower"></i> Shower & Tub</p>
        <p><i class="fa fa-fw fa-wifi"></i> WiFi</p>
        <p><i class="fa fa-fw fa-tv"></i> TV</p>
      </div>
      <div class="w3-col s6">
        <p><i class="fa fa-fw fa-cutlery"></i> Kitchen</p>
        <p><i class="fa fa-fw fa-wheelchair"></i> Accessible</p>
      </div>
       <p><button class="buy_now" type="submit" name="submit" value="check-in" style="width: 100%"><i class="fa fa-search w3-margin-right"></i> Book</button hidden></p>
       <input type="hidden" name="price"  id="price" value="98.00"/>
       <input type="hidden" name="item_name" id="item_name" value="Double Room"/>
       <input type="hidden" name="image_src" id="image_src" value="double1.jpg"/>   
    </div>
    <hr>

 <!--    <div class="col-md-3" hidden="">
            <div class="card">
               <div class="card-header">Leonovo ProArt</div> 
               <div class="card-body">
                    <img src="./Laptops/first.jpg"/>
                    <input type="hidden" name="image_src" id="image_src" value="./Laptops/first.jpg"/>
                    
               </div> 
               <div class="card-footer">
               <span>ProArt Lenovo</span>
                    <span>&#8377;&nbsp;35,000.00 </span>
                    <input type="submit" name="submit" value="check-in" class="buy_now"/>
                    <input type="hidden" name="price"  id="price" value="35,000.00"/>
                    <input type="hidden" name="item_name" id="item_name" value="ProArt Lenovo"/>   
               </div>   
            </div>
        </div> -->
<!-- End page content -->
</div>

</div>

<script>
// Script to open and close sidebar when on tablets and phones
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}

// Slideshow Apartment Images
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
  }
  x[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " w3-opacity-off";
}
</script>




 <script>
filterSelection("all")
function filterSelection() {
  var x, i;
  x = document.getElementsByClassName("fa fa-fw fa-male");
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}

// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script> 

<script>
        $(document).ready(function(){
           $(".buy_now").on('click',function(e){
                e.preventDefault();
                    var image_src = $(this).closest(".w3-container").find("#image_src").attr("value");
                    var item_name = $(this).closest(".w3-container").find("#item_name").attr("value");
                    var price = $(this).closest(".w3-container").find("#price").attr("value");
                    var dt = '&image='+image_src+'&item_name='+item_name+'&price='+price;
                    var url = 'checkout.php?'+dt; 
                    
                    $.ajax({
                         url:url,
                         method:'GET',
                         success:function(){
                              window.location.href=url;
                         }
                    });
                   
                    
           });
          
        });
   </script>

<?php
  include_once "footer_ekolej.php";
?>
</body>
</html>
