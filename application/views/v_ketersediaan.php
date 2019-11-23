<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Pasar Malang</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/animate.css">
    
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/magnific-popup.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/aos.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/ionicons.min.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/icomoon.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
  </head>
<body class="goto-here">
        
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
          <a class="navbar-brand" href="index.html"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
          </button>

          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
             <li class="nav-item active"><a href="<?php echo base_url('beranda') ?>" class="nav-link">Beranda</a></li>
              <li class="nav-item dropdown">
              <li class="nav-item active"><a href="<?php echo base_url('infoharga')?>" class="nav-link">Info Harga</a></li>
              <li class="nav-item active"><a href="<?php echo base_url('grafikharga')?>" class="nav-link">Grafik Harga</a></li>
              <li class="nav-item active"><a href="<?php echo base_url('sedia')?>" class="nav-link">Ketersediaan</a></li>
              <li class="nav-item active"><a href="<?php echo base_url('kami')?>" class="nav-link">Tentang Kami</a></li>
            </ul>
          </div>
        </div>
      </nav>
    <!-- END nav -->

    <section id="home-section" class="hero">
          <div class="home-slider owl-carousel">
          <div class="slider-item" style="background-image: url(assets/images/img/daging.jpg);">
            <div class="overlay"></div>
            <div class="container">
              <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                <div class="col-md-12 ftco-animate text-center">
                  <h1 class="mb-2">Selamat datang di Pasar Onlin Kabupaten Malang</h1>
                  <h2 class="subheading mb-4">We deliver organic vegetables &amp; fruits</h2>
                </div>

              </div>
            </div>
          </div>

          <div class="slider-item" style="background-image: url(assets/images/img/sayuran.jpg);">
            <div class="overlay"></div>
            <div class="container">
              <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                <div class="col-sm-12 ftco-animate text-center">
                  <h1 class="mb-2">Menyediakan kebutuhan pokok anda</h1>
                  <h2 class="subheading mb-4">We deliver organic vegetables &amp; fruits</h2>
                </div>

              </div>
            </div>
          </div>

          <div class="slider-item" style="background-image: url(assets/images/img/susu.jpg);">
            <div class="overlay"></div>
            <div class="container">
              <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                <div class="col-md-12 ftco-animate text-center">
                  <h1 class="mb-2">Dengan 100% bahan alami pilihan &amp; segar</h1>
                  <h2 class="subheading mb-4">We deliver organic vegetables &amp; fruits</h2>
                </div>

              </div>
            </div>
          </div>
        </div>




        <!-- DARI INI -->
  
  <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line">Ketersediaan Kebutuhan Bahan Pokok</h1>
                </div>
            </div>
  <form action="index.php?hal=sedia&cari=ok" method="post">
  <table width="36%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <th colspan="4" scope="row"><div align="left">Filter by</div></th>
    </tr>
  <tr>  

    <td width="43%">
  
  <select id="bln" name="bln"  class="form-control"> 
                                  <option value="">Januari</option>
                      <option value="1">Januari</option>
                    <option value="2">Februari</option>
                  <option value="3">Maret</option>
                    <option value="4">April</option>
                  <option value="5">Mei</option>
                    <option value="6">Juni</option>
                  <option value="7">Juli</option>
                    <option value="8">Agustus</option>
                  <option value="9">September</option>
                  <option value="10">Oktober</option>
                    <option value="11">November</option>
                  <option value="12">Desember</option>
    </select></td>
    <th width="57%" scope="row"><select id="thn" name="thn"  class="form-control">
      <option value="2019">2019</option>
      <option value="2018">2018</option> 
      <option value="2017">2017</option>
      <option value="2016">2016</option>
      <option value="2015">2015</option>
    </select></th>
    <th width="57%" scope="row"><div align="left">
      <input type="submit" name="Submit" value="Filter">
          </div></th>
  </tr>
</table>
</form>
    </br>
  
     <div class="table-responsive">
   <table class="table table-striped table-bordered table-hover">
    <thead>
     <tr>
     <th><div align="center">No</div></th>
      <th>Komoditi</th>
      <th><div align="center">Ketersediaan (Ton)</div></th>
    <th><div align="center">Kebutuhan (Ton)</div></th>
    <th><div align="center">Surplus/Minus (Ton)</div></th>
      
     </tr>
    </thead>
    <tbody>
  
  
     <tr>
      <td><div align="center">1</div></td>
      <td>Bawang Merah</td>
      <td><div align="right">316,00</div></td>
    <td><div align="right">612,00</div></td>
      <td><div align="right">-296,00</div></td>
     </tr>
  
     <tr>
      <td><div align="center">2</div></td>
      <td>Beras</td>
      <td><div align="right">13.360,00</div></td>
    <td><div align="right">19.514,00</div></td>
      <td><div align="right">-6.154,00</div></td>
     </tr>
  
     <tr>
      <td><div align="center">3</div></td>
      <td>Cabe Merah</td>
      <td><div align="right">257,00</div></td>
    <td><div align="right">226,00</div></td>
      <td><div align="right">31,00</div></td>
     </tr>
  
     <tr>
      <td><div align="center">4</div></td>
      <td>Cabe Rawit</td>
      <td><div align="right">351,00</div></td>
    <td><div align="right">590,00</div></td>
      <td><div align="right">-239,00</div></td>
     </tr>
  
     <tr>
      <td><div align="center">5</div></td>
      <td>Daging</td>
      <td><div align="right">3.615,00</div></td>
    <td><div align="right">1.494,00</div></td>
      <td><div align="right">2.121,00</div></td>
     </tr>
  
     <tr>
      <td><div align="center">6</div></td>
      <td>Gula</td>
      <td><div align="right">0,00</div></td>
    <td><div align="right">2.802,00</div></td>
      <td><div align="right">-2.802,00</div></td>
     </tr>
  
     <tr>
      <td><div align="center">7</div></td>
      <td>Ikan</td>
      <td><div align="right">728,00</div></td>
    <td><div align="right">6.230,00</div></td>
      <td><div align="right">-5.502,00</div></td>
     </tr>
  
     <tr>
      <td><div align="center">8</div></td>
      <td>Jagung</td>
      <td><div align="right">6.431,00</div></td>
    <td><div align="right">1.160,00</div></td>
      <td><div align="right">5.271,00</div></td>
     </tr>
  
     <tr>
      <td><div align="center">9</div></td>
      <td>Kacang Tanah</td>
      <td><div align="right">21,00</div></td>
    <td><div align="right">198,00</div></td>
      <td><div align="right">-177,00</div></td>
     </tr>
  
     <tr>
      <td><div align="center">10</div></td>
      <td>Kedele</td>
      <td><div align="right">384,00</div></td>
    <td><div align="right">2.513,00</div></td>
      <td><div align="right">-2.129,00</div></td>
     </tr>
  
     <tr>
      <td><div align="center">11</div></td>
      <td>Ketela Pohon</td>
      <td><div align="right">14.158,00</div></td>
    <td><div align="right">2.028,00</div></td>
      <td><div align="right">12.130,00</div></td>
     </tr>
  
     <tr>
      <td><div align="center">12</div></td>
      <td>susu</td>
      <td><div align="right">12.513,00</div></td>
    <td><div align="right">3.047,00</div></td>
      <td><div align="right">9.466,00</div></td>
     </tr>
  
     <tr>
      <td><div align="center">13</div></td>
      <td>Telur Ayam Ras</td>
      <td><div align="right">3.872,00</div></td>
    <td><div align="right">2.396,00</div></td>
      <td><div align="right">1.476,00</div></td>
     </tr>
   
    </tbody>
   </table>
   </div>
   <div> - Data Konsumsi diambil dari data Survei Sosial Ekonomi Nasional (SUSENAS) </div> </br>
   <div> - Khusus data Konsumsi Ikan diambil dari data Dinas Perikanan Kabupaten Malang </div> </br>
  </div>
     </div>
  </div>
 </body>        <!-- angular templating -->
    <!-- this is where content will be injected --> 
  </div>



  <footer class="text-center">
    <p><a href="http://malangkab.go.id">Kabupaten Malang</a></p>
  
    <p>Copyright 2015 bag-pde.malangkab.go.id</a></p>
  </footer>
  
</body>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/popper.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery.easing.1.3.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery.waypoints.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery.stellar.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/owl.carousel.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery.magnific-popup.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/aos.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery.animateNumber.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/bootstrap-datepicker.js"></script>
  <script src="<?php echo base_url();?>assets/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="<?php echo base_url();?>assets/js/google-map.js"></script>
  <script src="<?php echo base_url();?>assets/js/main.js"></script>
    
  </body>
</html>