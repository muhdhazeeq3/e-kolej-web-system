<?php
//include_once 'db.php';
include_once 'userKIZ_crud.php'
//include_once 'session.php';
?>

<!DOCTYPE html>
<html>
<title>GUEST</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1300px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */                      
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: black;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 30px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  background-color: #8A8A8A;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}
</style>
</head>

<?php
include_once 'topnavbar_guest.php';
?>

<div class="slideshow-container">


<div class="mySlides fade">
  <div class="numbertext">1 / 4</div>
  <img src="slider-03.jpg" alt="Girl in a jacket" width="1320" height="600">
  
</div>
</a>


<div class="mySlides fade">
  <div class="numbertext">2 / 4</div>
  <img src="slider-04.jpg" alt="Girl in a jacket" width="1320" height="600">
  
</div>
</a>


<div class="mySlides fade">
  <div class="numbertext">3 / 4</div>
  <img src="slider-06.jpg" salt="Girl in a jacket" width="1320" height="600">
  
</div>
</a>


<div class="mySlides fade">
  <div class="numbertext">4 / 4</div>
  <img src="slider-05.jpg" salt="Girl in a jacket" width="1320" height="600">
 
</div>
</a>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center;">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span> 
</div>


<!-- Team Section -->

<div class="w3-container w3-padding-64 w3-center" id="team">
<h2>SELECT YOUR ROOM</h2>
<p>We provide you the best accommodation</p>
    
  <div class="w3-row-padding w3-padding-16" style="display: block;

                    margin-left: 16%;
                    margin-right: 10%;
                    margin-top: 20px; width:100%;">
    <div class="w3-third w3-margin-bottom">
      <img src="single.jpg" alt="Norway" style="width:100%">
      <div class="w3-container w3-white">
        <h3>Single Room</h3>
        <h6 class="w3-opacity">From RM50</h6>
        <p>Single bed</p>
        <p>15m<sup>2</sup></p>
        <p class="w3-large"><i class="fa fa-bath"></i> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i></p>
        <button class="w3-button w3-block w3-black w3-margin-bottom"><a href="book_room_single.php">Choose Room</a></button>
      </div>
    </div>
    <div class="w3-third w3-margin-bottom">
      <img src="double.jpg" alt="Norway" style="width:100%">
      <div class="w3-container w3-white">
        <h3>Double Room</h3>
        <h6 class="w3-opacity">From RM98</h6>
        <p>Queen-size bed</p>
        <p>25m<sup>2</sup></p>
        <p class="w3-large"><i class="fa fa-bath"></i> <i class="fa fa-phone"></i> <i class="fa fa-wifi"></i> <i class="fa fa-tv"></i></p>
        <button class="w3-button w3-block w3-black w3-margin-bottom"><a href="book_room_double.php">Choose Room</a></button>
      </div>
    </div>
  </div>


<div id="pg-2050-2"  class="panel-grid panel-has-style" ><div class="thim-bg-overlay siteorigin-panels-stretch article__parallax thim-fix-stretched panel-row-style panel-row-style-for-2050-2" data-stretch-type="full-stretched" ><div id="pgc-2050-2-0"  class="panel-grid-cell" ><div id="panel-2050-2-0-0" class="so-panel widget widget_black-studio-tinymce widget_black_studio_tinymce panel-first-child panel-last-child" data-index="3" ><div class="panel-widget-style panel-widget-style-for-2050-2-0-0" ><div class="textwidget"><div class="sale-off banner-round">


  <div id="pg-2050-5"  class="panel-grid panel-has-style" ><div class="thim-bg-overlay siteorigin-panels-stretch article__parallax thim-fix-stretched panel-row-style panel-row-style-for-2050-5" data-stretch-type="full-stretched" ><div id="pgc-2050-5-0"  class="panel-grid-cell" ><div id="panel-2050-5-0-0" class="so-panel widget widget_black-studio-tinymce widget_black_studio_tinymce panel-first-child panel-last-child" data-index="9" ><div class="panel-widget-style panel-widget-style-for-2050-5-0-0" ><div class="textwidget"><script async src="https://www.theasys.io/static/embed.js" data-theasys="dccqE2YfDTwIrJjVuFdK7BWLWIaknG" data-height="600"></script>
<h4 style="text-align: center;">View KIZ 360 Tour</h4><br/></div></div></div></div></div></div>

<!-- About Section -->
<div class="w3-container" style="padding:128px 16px" id="about">
  <h3 class="w3-center">Our Services</h3>
  <h4><p class="w3-center w3-large">KIZ Residence provides all services you need.</p></h4>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <div class="w3-quarter">
    <i class=" w3-margin-bottom w3-jumbo w3-center fas fa-cloud" style="font-size:60px;color:lightblue;"></i>
      
      <p class="w3-large">Serenity Environment</p>
      <p>Immerse yourself in a relaxed atmosphere.</p>
    </div>
    <div class="w3-quarter">
       <i class=" w3-margin-bottom w3-jumbo w3-center fas fa-wifi" style="font-size:60px;color:green;"></i>
      <p class="w3-large">Free Wifi</p>
      <p>Always be online and get connected.</p>
    </div>
    <div class="w3-quarter">
      <i class=" w3-margin-bottom w3-jumbo w3-center fa fa-heart" style="font-size:60px;color:red;"></i>
      <p class="w3-large">24/7 Security</p>
      <p>Be safe with our around the clock security.</p>
    </div>
    <div class="w3-quarter">
      <i class=" w3-margin-bottom w3-jumbo w3-center fa fa-coffee" style="font-size:60px;color:brown;"></i>
      <p class="w3-large">Cool Cafeteria</p>
      <p>Taste wide variety of yummiest food selection.</p>
    </div>
  </div>
</div>

  <!--end smicon-box--></div></div></div></div></div></div>


<video width="1000" controls>
  <source src="vid.mp4" type="video/mp4">
  
  Your browser does not support HTML video.
</video>


<!-- Work Section -->

<div class="w3-container w3-white" style="padding:80px 160px" id="work">
  <h2 class="w3-center">Berita Terkini</h2>
  <p class="w3-justified w3-large">Di bahagian ini, anda dapat melihat segala aktiviti atau program yang dijalankan oleh pihak pentadbiran bagi memastikan pelajar berada dalam tahap yang terbaik dari segi rohani dan jasmani. Terdapat juga segala pencapaian yang diperoleh oleh penduduk KIZ. Selain itu, segala pengumuman akan diberitahu di ruangan ini.</p>

  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-col l3 m6">
      <img src="gotong1.jpg" style="width:93%" onclick="onClick(this)" class="w3-hover-opacity" alt="<h3>Gotong Royong Perdana</h3>
  <h4>Maklumat :-</h4>
  <p>Tarikh : 15 Mac 2012</p>
  <p>Masa : 8am-12pm</p>
  <p>Terbuka untuk semua penduduk KIZ,makanan disediakan</p>">

    </div>
    <div class="w3-col l3 m6">
      <img src="biliktamu.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="<h3>Tempahan Bilik Tamu dibuka</h3>
 
  <p> Boleh membuat tempahan di ruangan tempahan bilik. </p>
  <p>Boleh buat pembayaran secara atas talian</p>
  <p>Anda juga boleh melaporkan sebarang kerosakan, keselesaan anda keutamaan kami</p>">
    </div>

    <div class="w3-col l3 m6">
      <img src="penanda aras.jpg" style="width:104%" onclick="onClick(this)" class="w3-hover-opacity" alt="<h3>Pencapaian KIZ</h3>
  <h4>Info :-</h4>
  <p>KIZ dijadikan penanda aras Kolej ke-5 UPM</p>
  <p>Kolej Ibu Zain sering dijadikan penanda aras kolej kolej kediaman IPT. Pada 12 Januari 2017, Kolej ke-5 UPM telah melakukan lawatan penanda aras dari segi pengurusan kemudahan dan aktiviti pelajar.</p>">
    </div>

    <div class="w3-col l3 m6">
      <img src="juara.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="<h3>Pesta Pantun Integrasi Budaya 2017</h3> <p>diadakan pada 9-11 Februari 2017 telah menyaksikan kejayaan UKM merangkul juara. Pesta pantun peringkat IPT ini telah dirasmikan penutupannya oleh Ybhg. Prof. Dato’ Dr. Imran Ho Abdullah, Timbalan Naib Canselor Hal Ehwal Jaringan Masyarakat dan Industri UKM. Pertandingan akhir telah diadakan di Panggung Seni UKM yang menyaksikan UKM menentang USM.</p>">
    </div>
</div>


<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">×</span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>
</div>
</div>
</div>

<script type="text/javascript">
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}</script>


<!-- Footer -->


<script>
// Script for side navigation
function w3_open() {
  var x = document.getElementById("mySidebar");
  x.style.width = "300px";
  x.style.paddingTop = "10%";
  x.style.display = "block";
}

// Close side navigation
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

<?php
 include_once "footer_ekolej.php";
?>

</body>
</html>