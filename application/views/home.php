<!DOCTYPE html>
<html>
<head>
<title>EasyPickTrash</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="<?= site_url('asset') ?>/logo.png" rel="shortcut icon">
<title><?= $title ?> | EasyPickTrash</title>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial}

body, html {
  height: 100%;
  line-height: 1.8;
}

/* Full height image header */
.bgimg-1 {
  margin-top: 65px;
  background-position: center;
  background-size: cover;
  background-image: url("<?= site_url('asset/home/') ?>/home.jpg");
  min-height: 100%;
}

.w3-bar .w3-button {
  padding: 16px;
}
</style>
</head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-green w3-card" id="myNavbar">
    <a href="<?= base_url('home') ?>" class="w3-bar-item w3-button w3-wide">EasyPickTrash</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="#tentangkami" class="w3-bar-item w3-button">Tentang Kami</a>
      <a href="#layanan" class="w3-bar-item w3-button"></i> Layanan</a>    
      <a href="#kontakkami" class="w3-bar-item w3-button"></i> Kontak Kami</a>
      <a href="<?= base_url('welcome') ?>" class="w3-bar-item w3-button"><i class="fa fa-user"></i> Masuk/Daftar</a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-green w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
    <a href="#tentangkami" class="w3-bar-item w3-button">Tentang Kami</a>
    <a href="#layanan" class="w3-bar-item w3-button"></i> Layanan</a>
    <a href="#kontakkami" class="w3-bar-item w3-button"></i> Kontak Kami</a>
    <a href="<?= base_url('welcome') ?>" class="w3-bar-item w3-button"><i class="fa fa-user"></i> Masuk/Daftar</a>
</nav>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-left w3-text-white" style="padding:48px">
    <p class="w3-green w3-padding-large w3-large w3-margin-top w3-hover-opacity-off">Hargai dan Lindungi Bumi Kita, Kalau Bukan Kita Siapa Lagi.</p>
    <p><a href="<?= base_url('welcome') ?>" class="w3-button w3-white w3-text-green w3-padding-large w3-large w3-margin-top w3-hover-opacity-off">Daur ulang sekarang!</a></p>
  </div> 
</header>

<!-- tentang kami -->
<div class="w3-container w3-green" style="padding:128px 16px" id="tentangkami">
    <div class="w3-row-padding" style="margin-top:64px; align-items: center; display: flex; justify-content: center; font-size: medium;">
      <div class="w3-col m6">
        <h2>EasyPickTrash.</h2>
        <h3>Misi Kami Menyediakan Akses Daur Ulang Bagi Semua Orang.</h3>
        <p>EasyPickTrash adalah proyek sistem website yang dapat digunakan semua orang untuk upload jenis sampah yang tersedia di website yang akan di pick up dimana bertujuan membantu pengepul untuk mengumpulkan sampah.</p>
      </div>
      <div class="w3-col m6">
        <img class="w3-image w3-round-large" src="<?= site_url('asset/home/') ?>/footer.jpg" alt="Buildings" width="600" height="394">
      </div>
    </div>
  </div>

  <!-- layanan -->
  <div class="w3-container" style="padding:128px 16px" id="layanan">
    <h3 class="w3-center">Layanan</h3>
    <p class="w3-center w3-large">Revolusi daur ulang dari EasyPickTrash untuk semua orang.</p>
    <div class="w3-row-padding" style="margin-top:64px; text-align: center; align-items: center; display: flex; justify-content: center; font-size: medium;">
      <div class="w3-col l3 m6 w3-margin-bottom">
        <div class="w3-card">
          <img src="<?= site_url('asset/home/') ?>/pickup.jpg" style="width:60%">
          <div class="w3-container">
            <h3>Pick Up</h3>
            <p>Foto sampah daur ulangmu, upload ke EasyPickTrash, kolektor EasyPickTrash terdekat akan menjemput dan membayar sampahmu.</p>
          </div>
        </div>
      </div>
      <div class="w3-col l3 m6 w3-margin-bottom">
        <div class="w3-card">
          <img src="<?= site_url('asset/home/') ?>/dropoff.jpg" style="width:60%">
          <div class="w3-container">
            <h3>Drop Off</h3>
            <p>Antar langsung sampahmu ke pusat daur ulang terdekat, kamu bisa mendaur ulang dengan ukuran kecil seperti satu botol plastik.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- jenis sampah -->
<div class="w3-container" style="padding:128px 16px" id="sampah">
  <h3 class="w3-center">Jenis sampah</h3>
  <p class="w3-center w3-large">Lihat semua jenis sampah yang kami daur ulang.</p>
  <div class="w3-row-padding" style="margin-top:64px; text-align: center; align-items: center; display: flex; justify-content: center; font-size: medium;">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="<?= site_url('asset/home/') ?>/sampah-kertas.jpg" style="width:70%">
        <div class="w3-container">
          <p>Sampah Kertas</p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="<?= site_url('asset/home/') ?>/sampah plastik.jpg" style="width:70%">
        <div class="w3-container">
          <p>Sampah Plastik</p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="<?= site_url('asset/home/') ?>/sampah botol.jpg" style="width:70%">
        <div class="w3-container">
          <p>Sampah Botol</p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="<?= site_url('asset/home/') ?>/sampah elektronik.jpg" style="width:70%">
        <div class="w3-container">
          <p>Sampah Elektronik</p>
        </div>
      </div>
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

<!-- Footer -->
<footer class="w3-center w3-green w3-padding-64" id="kontakkami">
  <a href="#home" class="w3-button w3-light-grey w3-text-green"><i class="fa fa-arrow-up w3-margin-right"></i>Kembali ke atas</a>
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-whatsapp w3-hover-opacity"></i>
  </div>
  <p>Copyright | 2023 EasyPickTrash</p>
</footer>
 
<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>

</body>
</html>
