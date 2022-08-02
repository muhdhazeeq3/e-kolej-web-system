<?php
include_once 'db.php';
include_once 'session.php';
?>

<!DOCTYPE html>
<html>
<title>RESIDENT</title>

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
include_once 'topnavbar_student.php';
?>


<div class="slideshow-container">


<!-- <div class="mySlides fade">
  <div class="numbertext">1 / 4</div>
  <img src="Encik-Anuar.jpg" alt="Girl in a jacket" width="800" height="600" style="display: block;
                    margin-left: auto;
                    margin-right: auto;
                    ">
  
</div> -->
</a>


<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="img_kiz.jpg" alt="Girl in a jacket" width="1200" height="600">
  
</div>
</a>


<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="covid.jpg" salt="Girl in a jacket" width="1200" height="600">
  
</div>
</a>


<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="biliktamu.jpg" salt="Girl in a jacket" width="1200" height="600">
 
</div>
</a>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <!-- <span class="dot" onclick="currentSlide(4)"></span>  -->
</div>


<!-- Team Section -->
<div class="w3-container w3-padding-64 w3-center w3-light-grey" id="team">
<h2>Carta Organisasi</h2>
<p>Pengurusan Kolej Ibu Zain:</p>

<div class="w3-row"><br>
 
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="Encik-Anuar.jpg" alt="Anuar" style="width:49%">
        <div class="w3-container">
          <h3>Prof.Madya Dr.Anuar Bin Ahmad</h3>
          <p class="w3-opacity">Pengetua/ college master</p>
          <p>Encik Anuar Bin Ahmad merupakan pensyarah Fakulti Pendidikan UKM telah dilantik sebagai Pengetua Kolej Ibu Zain (KIZ) UKM pada 2002 sehingga kini.</p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="Izzaty.jpg" alt="Jane" style="width:50%">
        <div class="w3-container">
          <h3>Izaty Farhana</h3>
          <p class="w3-opacity">Pengurus kolej/ college manager
          <p>Puan Izaty Farhana merupakan pengurus Kolej Ibu Zain Universiti Kebangsaan Malaysia. Segala dokumen dokumen penting pengurusan kolej telah diuruskan oleh beliau.
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="3.jpg" alt="Mike" style="width:52%">
        <div class="w3-container">
          <h3>Azmah Abu Bakar</h3>
          <p class="w3-opacity">Penyelia Asrama/ Hostel Supervisor</p3>
          <p>Puan Azmah Abu Bakar merupakan penyelia asrama kolej ibu zain unversiti kebangsaan malaysia sepenuh masa. Segala hal berkaitan asrama dan bilik di KIZ diuruskan oleh beliau.</p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="2.jpg" alt="Dan" style="width:48%">
        <div class="w3-container">
          <h3>Nik Mohd Noor Faizul Md Saad</h3>
          <p class="w3-opacity">Timb.Pengetua/ Dep College Master</p>
          <br><p>B.Sc.(Hons.), M.Info.Tech.(UKM) Nik Mohd Noor Faizul Md Saad merupakan pembantu pengetua kolej ibu zain Universiti Kebangsaan Malaysia.</br>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Work Section -->

<div class="w3-container w3-white" style="padding:80px 160px" id="work">
  <h3 class="w3-center">Berita Terkini</h3>
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

</div>

<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">×</span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
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
<?php
 include_once "footer_ekolej.php";
?>

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

</body>
</html>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>E-KOLEJ</title>
  <script src="script.js"></script>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	
<div class="wrapper">
        <div class="top_nav">

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
        <li><a href="indexstudent.php">HOME</a></li>
        <div class="dropdown">
          <button class="dropbtn">ROOM <i class="fa fa-caret-down"></i></button>
          <div class="dropdown-content">
            <a href="#">BOOK ROOM</a>
            <a href="#">CHECK BOOKING STATUS</a>
          </div>
        </div>
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
            <a href="submitcomplaint.php">SUBMIT COMPLAINT</a>
            <a href="check_complaint_status.php">CHECK COMPLAINT STATUS</a>
          </div>
        </div>
        <li><a href="announcement.php" target="_blank">ANNOUNCEMENT</a></li>
        <li><a href="logout.php"><img src="logout.png" alt="logout" height="30px" width="30px" style="float: right;"></a></li>
      </ul>
  </div>

  <table width="0%" height="400" border="0">
    
    <td bgcolor="#cccccc" width="300" height="350">
      <object name="menu" type="text/html" data="menu.html" height="360" />
    </td>
    <td width="*" valign="top">
      <div class="banner">
      <img src="kizll.jpg" alt="kiz_img">
      </div>
    </td>

    
  
</table>
  
  
</div>


</body>
</html> -->