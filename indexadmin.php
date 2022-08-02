<?php
include_once 'db.php';
include_once 'session.php';
include_once 'userKIZ_crud.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>E-KOLEJ</title>
  <script src="script.js"></script>
	<link rel="stylesheet" href="styles.css">
</head>
<body>

<?php
include_once 'topnavbar_admin.php';
?>  
	
  <!-- Image Header -->
<div class="w3-display-container w3-animate-opacity">
  <img src="img_kiz.jpg" alt="boat" style="width:100%;min-height:350px;max-height:600px;">
  <div class="w3-container w3-display-bottomleft w3-margin-bottom">  
    <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-xlarge w3-theme w3-hover-red" title="Go To W3.CSS">ADMIN</button>
  </div>
</div>

<!-- Modal -->
<div id="id01" class="w3-modal">
  <div class="w3-modal-content w3-card-4 w3-animate-top">
    <header class="w3-container w3-red w3-display-container"> 
      <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-teal w3-display-topright"><i class="fa fa-remove"></i></span>
      <h4>Selamat Datang ADMIN e_Kolej</h4>
      <h5>Anda boleh :- <i class="fa fa-smile-o"></i></h5>
    </header>
    <div class="w3-container">
      <p>Menyemak komplain.</p>
      <p>Kemaskini maklumat komplain.</p>
      <p>Kemaskini maklumat bilik.</p>
      <p>Membuat laporan.</p>


      
    </div>
    <footer class="w3-container w3-red">
      <p>Selamat Bertugas</p>
    </footer>
  </div>
</div>

<!-- Team Container -->
<div class="w3-container w3-padding-64 w3-center" id="team">
<h2>Carta Organisasi</h2>
<p>Pengurusan Kolej Ibu Zain:</p>

<div class="w3-row"><br>

<div class="w3-quarter">
  <img src="pengetua.jpg" alt="Boss" style="width:50%" class="w3-circle w3-hover-opacity">
  <h3>Anuar Ahmad</h3>
  <p>Pengetua/ college master</p>
</div>

<div class="w3-quarter">
  <img src="Izzaty.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Izaty Farhana</h3>
  <p>Pengurus kolej/ college manager</p>
</div>

<div class="w3-quarter">
  <img src="3.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Azmah Abu Bakar</h3>
  <p>Penyelia Asrama/ Hostel Supervisor</p>
</div>

<div class="w3-quarter">
  <img src="2.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Nik Mohd Noor Faizul Md Saad</h3>
  <p>Timb.Pengetua/ Dep College Master</p>
</div>

</div>
</div>

<!-- Work Row -->
<div class="w3-row-padding w3-padding-64 w3-theme-l1" id="work">

<div class="w3-quarter">
<h2>Berita Terkini</h2>
<p>Di bahagian ini, anda dapat melihat segala aktiviti atau program yang dijalankan oleh pihak pentadbiran bagi memastikan pelajar berada dalam tahap yang terbaik dari segi rohani dan jasmani. Terdapat juga segala pencapaian yang diperoleh oleh penduduk KIZ. Selain itu, segala pengumuman akan diberitahu di ruangan ini.</p>
</div>

<div class="w3-quarter">
<div class="w3-card w3-white">
  <img src="gotong1.jpg" alt="Snow" style="width:100%">
  <div class="w3-container">
  <h3>Gotong Royong Perdana</h3>
  <h4>Maklumat :-</h4>
  <p>Tarikh : 15 Mac 2012</p>
  <p>Masa : 8am-12pm</p>
  <p>Terbuka untuk semua penduduk KIZ</p>
  </div>
  </div>
</div>

<div class="w3-quarter">
<div class="w3-card w3-white">
  <img src="biliktamu.jpg" alt="Lights" style="width:100%" >
  <div class="w3-container">
  <h3>Tempahan Bilik Tamu dibuka</h3>
 
  <p> Boleh membuat tempahan di ruangan tempahan bilik. </p>
  <p>Boleh buat pembayaran secara atas talian</p>
  <p>Anda juga boleh melaporkan sebarang kerosakan peralatan.Keselesaan anda adalah keutamaan kami</p>

 
  </div>
  </div>
</div>

<div class="w3-quarter">
<div class="w3-card w3-white">
  <img src="penanda aras.jpg" alt="Mountains" style="width:100%">
  <div class="w3-container">
  <h3>Pencapaian KIZ</h3>
  <p>Info :-</p>
  <p>KIZ penanda aras Kolej ke-5 UPM. Kolej Ibu Zain sering dijadikan penanda aras kolej kolej kediaman IPT. Pada 12 Januari 2017, Kolej ke-5 UPM telah melakukan lawatan penanda aras dari segi pengurusan kemudahan dan aktiviti.</p>

  </div>
  </div>
</div>

</div>






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
<!-- <div class="wrapper">
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
        <li><a href="indexadmin.php">HOME</a></li>
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
  
  
</div> -->
</body>
</html>