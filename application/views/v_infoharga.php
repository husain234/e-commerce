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
              <li class="nav-item active"><a href="<?php echo base_url('')?>" class="nav-link">Grafik Harga</a></li>
              <li class="nav-item active"><a href="<?php echo base_url('')?>" class="nav-link">Ketersediaan</a></li>
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
                  <h1 class="mb-2">We serve Fresh Vegestables &amp; Fruits</h1>
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
                  <h1 class="mb-2">100% Fresh &amp; Organic Foods</h1>
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
                  <h1 class="mb-2">We serve Fresh Vegestables &amp; Fruits</h1>
                  <h2 class="subheading mb-4">We deliver organic vegetables &amp; fruits</h2>
                </div>

              </div>
            </div>
          </div>
        </div>
    </section>


    <!-- DARI INI -->

   <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line">Informasi  Bahan Pokok per Kecamatan </h1>
                </div>
            </div>
      
    <table width="60%"  border="0" cellspacing="0" cellpadding="0">
  
  <tr>
    
    <form action="index.php?hal=kecamatan&cari=ok" method="post">
    <th scope="row"><select id="IdKecamatan" name="IdKecamatan"  class="form-control">
                       <option value="Kepanjen">--Pilih Kecamatan--</option>
                       <option value="Bantur">Bantur</option>
                       <option value="Bululawang">Bululawang</option>
                       <option value="Dampit">Dampit</option>
                       <option value="Donomulyo">Donomulyo</option>
                       <option value="Gondanglegi">Gondanglegi</option>
                       <option value="Jabung">Jabung</option>
                       <option value="Karangploso">Karangploso</option>
                       <option  value="Kepanjen">Kepanjen</option>
                       <option value="Lawang">Lawang</option>
                       <option value="Pakis">Pakis</option>
                       <option value="Pakisaji">Pakisaji</option>
                       <option  value="Poncokusumo">Poncokusumo</option>
                       <option value="Pujon">Pujon</option>
                       <option value="Singosari">Singosari</option>
                       <option value="Sumberpucung">Sumberpucung</option>
                       <option  value="Tajinan">Tajinan</option>
                       <option value="Tumpang">Tumpang</option>
                       <option value="Turen">Turen</option>
                       <option  value="Wajak">Wajak</option>
                    
    </select></th>
    <td><select id="jenis_komoditi" name="jenis_komoditi"  class="form-control">
              
      
      
      <option value="1">Sembako</option>
      <option  value="2">Komoditi Lain</option>
    </select></td>
    <th scope="row"><input type="text" name="NamaKomoditi" id="NamaKomoditi" placeholder="ketik nama komoditi ..." class="form-control" /></th>
    <th scope="row"><input type="submit" name="Submit" value="Filter"></th>
    </form>
  </tr>
</table>

    </br>
  
     <div class="table-responsive">
   <table class="table table-striped table-bordered table-hover">
    <thead>
     <tr>
     <th><div align="center">No</div></th>
      <th><div align="center">Komoditi</div></th>
      <th><div align="center">Harga Lama (Rp)</div></th>
      <th><div align="center">Harga Baru (Rp)</div></th>
      <th><div align="center">Selisih (Rp)</div></th>
      <th><div align="center">Tanggal</div></th>
    <!--   <th><div align="center">Show Graph</div></th> -->
     </tr>
    </thead>
    <tbody>
         <tr>
      <td><div align="center">1</div></td>
      <td>Beras Bengawan</td>
      <td><div align="right">Rp 11.000,00 / Kg</div></td> 
      <td><div align="right">Rp 11.000,00 / Kg</div></td>
      <td><div align="right"><img src="assets/img/-.png" width="20" height="10">  Rp 0,00 | 0,00%</div></td>
      <td><div align="right">28 October 2019 </div></td>
    <!--   <td><div align="center"><a href="#grafik/{{val.IdKomoditi}}/{{val.IdKecamatan}}"><i class="fa fa-shield"></i> Graph </a></div></td> -->
     </tr>
          <tr>
      <td><div align="center">2</div></td>
      <td>Beras Mentari</td>
      <td><div align="right">Rp 10.500,00 / Kg</div></td> 
      <td><div align="right">Rp 10.500,00 / Kg</div></td>
      <td><div align="right"><img src="assets/img/-.png" width="20" height="10">  Rp 0,00 | 0,00%</div></td>
      <td><div align="right">28 October 2019 </div></td>
    <!--   <td><div align="center"><a href="#grafik/{{val.IdKomoditi}}/{{val.IdKecamatan}}"><i class="fa fa-shield"></i> Graph </a></div></td> -->
     </tr>
          <tr>
      <td><div align="center">3</div></td>
      <td>Beras IR. 64</td>
      <td><div align="right">Rp 9.000,00 / Kg</div></td> 
      <td><div align="right">Rp 9.100,00 / Kg</div></td>
      <td><div align="right"><img src="assets/img/Up.png" width="20" height="10">  Rp 100,00 | 1,11%</div></td>
      <td><div align="right">28 October 2019 </div></td>
    <!--   <td><div align="center"><a href="#grafik/{{val.IdKomoditi}}/{{val.IdKecamatan}}"><i class="fa fa-shield"></i> Graph </a></div></td> -->
     </tr>
          <tr>
      <td><div align="center">4</div></td>
      <td>Minyak Goreng Bimoli</td>
      <td><div align="right">Rp 12.500,00 / Liter</div></td> 
      <td><div align="right">Rp 12.500,00 / Liter</div></td>
      <td><div align="right"><img src="assets/img/-.png" width="20" height="10">  Rp 0,00 | 0,00%</div></td>
      <td><div align="right">28 October 2019 </div></td>
    <!--   <td><div align="center"><a href="#grafik/{{val.IdKomoditi}}/{{val.IdKecamatan}}"><i class="fa fa-shield"></i> Graph </a></div></td> -->
     </tr>
          <tr>
      <td><div align="center">5</div></td>
      <td>Minyak Goreng Curah</td>
      <td><div align="right">Rp 10.500,00 / Kg</div></td> 
      <td><div align="right">Rp 10.500,00 / Kg</div></td>
      <td><div align="right"><img src="assets/img/-.png" width="20" height="10">  Rp 0,00 | 0,00%</div></td>
      <td><div align="right">28 October 2019 </div></td>
    <!--   <td><div align="center"><a href="#grafik/{{val.IdKomoditi}}/{{val.IdKecamatan}}"><i class="fa fa-shield"></i> Graph </a></div></td> -->
     </tr>
          <tr>
      <td><div align="center">6</div></td>
      <td>Daging Sapi</td>
      <td><div align="right">Rp 108.000,00 / Kg</div></td> 
      <td><div align="right">Rp 108.000,00 / Kg</div></td>
      <td><div align="right"><img src="assets/img/-.png" width="20" height="10">  Rp 0,00 | 0,00%</div></td>
      <td><div align="right">28 October 2019 </div></td>
    <!--   <td><div align="center"><a href="#grafik/{{val.IdKomoditi}}/{{val.IdKecamatan}}"><i class="fa fa-shield"></i> Graph </a></div></td> -->
     </tr>
          <tr>
      <td><div align="center">7</div></td>
      <td>Daging Ayam Kampung</td>
      <td><div align="right">Rp 65.000,00 / Ekor</div></td> 
      <td><div align="right">Rp 65.000,00 / Ekor</div></td>
      <td><div align="right"><img src="assets/img/-.png" width="20" height="10">  Rp 0,00 | 0,00%</div></td>
      <td><div align="right">28 October 2019 </div></td>
    <!--   <td><div align="center"><a href="#grafik/{{val.IdKomoditi}}/{{val.IdKecamatan}}"><i class="fa fa-shield"></i> Graph </a></div></td> -->
     </tr>
          <tr>
      <td><div align="center">8</div></td>
      <td>Daging Ayam Potong</td>
      <td><div align="right">Rp 29.000,00 / Kg</div></td> 
      <td><div align="right">Rp 32.000,00 / Kg</div></td>
      <td><div align="right"><img src="assets/img/Up.png" width="20" height="10">  Rp 3.000,00 | 10,34%</div></td>
      <td><div align="right">28 October 2019 </div></td>
    <!--   <td><div align="center"><a href="#grafik/{{val.IdKomoditi}}/{{val.IdKecamatan}}"><i class="fa fa-shield"></i> Graph </a></div></td> -->
     </tr>
          <tr>
      <td><div align="center">9</div></td>
      <td>Telur Ayam Kampung</td>
      <td><div align="right">Rp 40.000,00 / Kg</div></td> 
      <td><div align="right">Rp 40.000,00 / Kg</div></td>
      <td><div align="right"><img src="assets/img/-.png" width="20" height="10">  Rp 0,00 | 0,00%</div></td>
      <td><div align="right">28 October 2019 </div></td>
    <!--   <td><div align="center"><a href="#grafik/{{val.IdKomoditi}}/{{val.IdKecamatan}}"><i class="fa fa-shield"></i> Graph </a></div></td> -->
     </tr>
          <tr>
      <td><div align="center">10</div></td>
      <td>Telur Ayam Broiler</td>
      <td><div align="right">Rp 21.000,00 / Kg</div></td> 
      <td><div align="right">Rp 20.000,00 / Kg</div></td>
      <td><div align="right"><img src="assets/img/Down.png" width="20" height="10">  Rp 1.000,00 | 4,76%</div></td>
      <td><div align="right">28 October 2019 </div></td>
    <!--   <td><div align="center"><a href="#grafik/{{val.IdKomoditi}}/{{val.IdKecamatan}}"><i class="fa fa-shield"></i> Graph </a></div></td> -->
     </tr>
          <tr>
      <td><div align="center">11</div></td>
      <td>Susu Bendera 397 Gram</td>
      <td><div align="right">Rp 39.000,00 / Gram</div></td> 
      <td><div align="right">Rp 39.000,00 / Gram</div></td>
      <td><div align="right"><img src="assets/img/-.png" width="20" height="10">  Rp 0,00 | 0,00%</div></td>
      <td><div align="right">28 October 2019 </div></td>
    <!--   <td><div align="center"><a href="#grafik/{{val.IdKomoditi}}/{{val.IdKecamatan}}"><i class="fa fa-shield"></i> Graph </a></div></td> -->
     </tr>
          <tr>
      <td><div align="center">12</div></td>
      <td>Susu Bubuk Dancow 400 Gram</td>
      <td><div align="right">Rp 39.000,00 / Gram</div></td> 
      <td><div align="right">Rp 39.000,00 / Gram</div></td>
      <td><div align="right"><img src="assets/img/-.png" width="20" height="10">  Rp 0,00 | 0,00%</div></td>
      <td><div align="right">28 October 2019 </div></td>
    <!--   <td><div align="center"><a href="#grafik/{{val.IdKomoditi}}/{{val.IdKecamatan}}"><i class="fa fa-shield"></i> Graph </a></div></td> -->
     </tr>
          <tr>
      <td><div align="center">13</div></td>
      <td>Susu Bubuk Indomilk 400 gram</td>
      <td><div align="right">Rp 36.000,00 / Gram</div></td> 
      <td><div align="right">Rp 36.000,00 / Gram</div></td>
      <td><div align="right"><img src="assets/img/-.png" width="20" height="10">  Rp 0,00 | 0,00%</div></td>
      <td><div align="right">28 October 2019 </div></td>
    <!--   <td><div align="center"><a href="#grafik/{{val.IdKomoditi}}/{{val.IdKecamatan}}"><i class="fa fa-shield"></i> Graph </a></div></td> -->
     </tr>
          <tr>
      <td><div align="center">14</div></td>
      <td>Susu Kental Manis Bendera 397 gram</td>
      <td><div align="right">Rp 10.000,00 / Gram</div></td> 
      <td><div align="right">Rp 10.000,00 / Gram</div></td>
      <td><div align="right"><img src="assets/img/-.png" width="20" height="10">  Rp 0,00 | 0,00%</div></td>
      <td><div align="right">28 October 2019 </div></td>
    <!--   <td><div align="center"><a href="#grafik/{{val.IdKomoditi}}/{{val.IdKecamatan}}"><i class="fa fa-shield"></i> Graph </a></div></td> -->
     </tr>
          <tr>
      <td><div align="center">15</div></td>
      <td>Susu Kental Manis Indomilk 397 gram</td>
      <td><div align="right">Rp 9.000,00 / Gram</div></td> 
      <td><div align="right">Rp 9.000,00 / Gram</div></td>
      <td><div align="right"><img src="assets/img/-.png" width="20" height="10">  Rp 0,00 | 0,00%</div></td>
      <td><div align="right">28 October 2019 </div></td>
    <!--   <td><div align="center"><a href="#grafik/{{val.IdKomoditi}}/{{val.IdKecamatan}}"><i class="fa fa-shield"></i> Graph </a></div></td> -->
     </tr>
          <tr>
      <td><div align="center">16</div></td>
      <td>Jagung Pipilan</td>
      <td><div align="right">Rp 5.500,00 / Kg</div></td> 
      <td><div align="right">Rp 5.500,00 / Kg</div></td>
      <td><div align="right"><img src="assets/img/-.png" width="20" height="10">  Rp 0,00 | 0,00%</div></td>
      <td><div align="right">28 October 2019 </div></td>
    <!--   <td><div align="center"><a href="#grafik/{{val.IdKomoditi}}/{{val.IdKecamatan}}"><i class="fa fa-shield"></i> Graph </a></div></td> -->
     </tr>
          <tr>
      <td><div align="center">17</div></td>
      <td>Garam Yodium Batah</td>
      <td><div align="right">Rp 1.000,00 / Bungkus</div></td> 
      <td><div align="right">Rp 1.000,00 / Bungkus</div></td>
      <td><div align="right"><img src="assets/img/-.png" width="20" height="10">  Rp 0,00 | 0,00%</div></td>
      <td><div align="right">28 October 2019 </div></td>
    <!--   <td><div align="center"><a href="#grafik/{{val.IdKomoditi}}/{{val.IdKecamatan}}"><i class="fa fa-shield"></i> Graph </a></div></td> -->
     </tr>
          <tr>
      <td><div align="center">18</div></td>
      <td>Garam Yodium Halus 250 gram</td>
      <td><div align="right">Rp 2.000,00 / Gram</div></td> 
      <td><div align="right">Rp 2.000,00 / Gram</div></td>
      <td><div align="right"><img src="assets/img/-.png" width="20" height="10">  Rp 0,00 | 0,00%</div></td>
      <td><div align="right">28 October 2019 </div></td>
    <!--   <td><div align="center"><a href="#grafik/{{val.IdKomoditi}}/{{val.IdKecamatan}}"><i class="fa fa-shield"></i> Graph </a></div></td> -->
     </tr>
          <tr>
      <td><div align="center">19</div></td>
      <td>Cabe Merah Besar</td>
      <td><div align="right">Rp 24.000,00 / Kg</div></td> 
      <td><div align="right">Rp 38.000,00 / Kg</div></td>
      <td><div align="right"><img src="assets/img/Up.png" width="20" height="10">  Rp 14.000,00 | 58,33%</div></td>
      <td><div align="right">28 October 2019 </div></td>
    <!--   <td><div align="center"><a href="#grafik/{{val.IdKomoditi}}/{{val.IdKecamatan}}"><i class="fa fa-shield"></i> Graph </a></div></td> -->
     </tr>
          <tr>
      <td><div align="center">20</div></td>
      <td>Cabe Rawit</td>
      <td><div align="right">Rp 40.000,00 / Kg</div></td> 
      <td><div align="right">Rp 35.000,00 / Kg</div></td>
      <td><div align="right"><img src="assets/img/Down.png" width="20" height="10">  Rp 5.000,00 | 12,50%</div></td>
      <td><div align="right">28 October 2019 </div></td>
    <!--   <td><div align="center"><a href="#grafik/{{val.IdKomoditi}}/{{val.IdKecamatan}}"><i class="fa fa-shield"></i> Graph </a></div></td> -->
     </tr>
          <tr>
      <td><div align="center">21</div></td>
      <td>Bawang Merah</td>
      <td><div align="right">Rp 17.000,00 / Kg</div></td> 
      <td><div align="right">Rp 16.000,00 / Kg</div></td>
      <td><div align="right"><img src="assets/img/Down.png" width="20" height="10">  Rp 1.000,00 | 5,88%</div></td>
      <td><div align="right">28 October 2019 </div></td>
    <!--   <td><div align="center"><a href="#grafik/{{val.IdKomoditi}}/{{val.IdKecamatan}}"><i class="fa fa-shield"></i> Graph </a></div></td> -->
     </tr>
          <tr>
      <td><div align="center">22</div></td>
      <td>Bawang Putih</td>
      <td><div align="right">Rp 25.000,00 / Kg</div></td> 
      <td><div align="right">Rp 26.000,00 / Kg</div></td>
      <td><div align="right"><img src="assets/img/Up.png" width="20" height="10">  Rp 1.000,00 | 4,00%</div></td>
      <td><div align="right">28 October 2019 </div></td>
    <!--   <td><div align="center"><a href="#grafik/{{val.IdKomoditi}}/{{val.IdKecamatan}}"><i class="fa fa-shield"></i> Graph </a></div></td> -->
     </tr>
          <tr>
      <td><div align="center">23</div></td>
      <td>Tepung Terigu</td>
      <td><div align="right">Rp 8.700,00 / Kg</div></td> 
      <td><div align="right">Rp 8.700,00 / Kg</div></td>
      <td><div align="right"><img src="assets/img/-.png" width="20" height="10">  Rp 0,00 | 0,00%</div></td>
      <td><div align="right">28 October 2019 </div></td>
    <!--   <td><div align="center"><a href="#grafik/{{val.IdKomoditi}}/{{val.IdKecamatan}}"><i class="fa fa-shield"></i> Graph </a></div></td> -->
     </tr>
          <tr>
      <td><div align="center">24</div></td>
      <td>Kacang Tanah</td>
      <td><div align="right">Rp 23.000,00 / Kg</div></td> 
      <td><div align="right">Rp 23.000,00 / Kg</div></td>
      <td><div align="right"><img src="assets/img/-.png" width="20" height="10">  Rp 0,00 | 0,00%</div></td>
      <td><div align="right">28 October 2019 </div></td>
    <!--   <td><div align="center"><a href="#grafik/{{val.IdKomoditi}}/{{val.IdKecamatan}}"><i class="fa fa-shield"></i> Graph </a></div></td> -->
     </tr>
          <tr>
      <td><div align="center">25</div></td>
      <td>Kacang Hijau</td>
      <td><div align="right">Rp 17.000,00 / Kg</div></td> 
      <td><div align="right">Rp 17.000,00 / Kg</div></td>
      <td><div align="right"><img src="assets/img/-.png" width="20" height="10">  Rp 0,00 | 0,00%</div></td>
      <td><div align="right">28 October 2019 </div></td>
    <!--   <td><div align="center"><a href="#grafik/{{val.IdKomoditi}}/{{val.IdKecamatan}}"><i class="fa fa-shield"></i> Graph </a></div></td> -->
     </tr>
          <tr>
      <td><div align="center">26</div></td>
      <td>Kedelai Impor</td>
      <td><div align="right">Rp 8.400,00 / Kg</div></td> 
      <td><div align="right">Rp 8.400,00 / Kg</div></td>
      <td><div align="right"><img src="assets/img/-.png" width="20" height="10">  Rp 0,00 | 0,00%</div></td>
      <td><div align="right">28 October 2019 </div></td>
    <!--   <td><div align="center"><a href="#grafik/{{val.IdKomoditi}}/{{val.IdKecamatan}}"><i class="fa fa-shield"></i> Graph </a></div></td> -->
     </tr>
          <tr>
      <td><div align="center">27</div></td>
      <td>Kedelai Lokal</td>
      <td><div align="right">Rp 9.000,00 / Kg</div></td> 
      <td><div align="right">Rp 9.000,00 / Kg</div></td>
      <td><div align="right"><img src="assets/img/-.png" width="20" height="10">  Rp 0,00 | 0,00%</div></td>
      <td><div align="right">28 October 2019 </div></td>
    <!--   <td><div align="center"><a href="#grafik/{{val.IdKomoditi}}/{{val.IdKecamatan}}"><i class="fa fa-shield"></i> Graph </a></div></td> -->
     </tr>
          <tr>
      <td><div align="center">28</div></td>
      <td>Ketela Pohon</td>
      <td><div align="right">Rp 5.000,00 / Kg</div></td> 
      <td><div align="right">Rp 5.000,00 / Kg</div></td>
      <td><div align="right"><img src="assets/img/-.png" width="20" height="10">  Rp 0,00 | 0,00%</div></td>
      <td><div align="right">28 October 2019 </div></td>
    <!--   <td><div align="center"><a href="#grafik/{{val.IdKomoditi}}/{{val.IdKecamatan}}"><i class="fa fa-shield"></i> Graph </a></div></td> -->
     </tr>
          <tr>
      <td><div align="center">29</div></td>
      <td>Wortel</td>
      <td><div align="right">Rp 10.000,00 / Kg</div></td> 
      <td><div align="right">Rp 10.000,00 / Kg</div></td>
      <td><div align="right"><img src="assets/img/-.png" width="20" height="10">  Rp 0,00 | 0,00%</div></td>
      <td><div align="right">28 October 2019 </div></td>
    <!--   <td><div align="center"><a href="#grafik/{{val.IdKomoditi}}/{{val.IdKecamatan}}"><i class="fa fa-shield"></i> Graph </a></div></td> -->
     </tr>
          <tr>
      <td><div align="center">30</div></td>
      <td>Tomat</td>
      <td><div align="right">Rp 4.000,00 / Kg</div></td> 
      <td><div align="right">Rp 4.500,00 / Kg</div></td>
      <td><div align="right"><img src="assets/img/Up.png" width="20" height="10">  Rp 500,00 | 12,50%</div></td>
      <td><div align="right">28 October 2019 </div></td>
    <!--   <td><div align="center"><a href="#grafik/{{val.IdKomoditi}}/{{val.IdKecamatan}}"><i class="fa fa-shield"></i> Graph </a></div></td> -->
     </tr>
          <tr>
      <td><div align="center">31</div></td>
      <td>Ikan Asin</td>
      <td><div align="right">Rp 76.000,00 / Kg</div></td> 
      <td><div align="right">Rp 76.000,00 / Kg</div></td>
      <td><div align="right"><img src="assets/img/-.png" width="20" height="10">  Rp 0,00 | 0,00%</div></td>
      <td><div align="right">28 October 2019 </div></td>
    <!--   <td><div align="center"><a href="#grafik/{{val.IdKomoditi}}/{{val.IdKecamatan}}"><i class="fa fa-shield"></i> Graph </a></div></td> -->
     </tr>
          <tr>
      <td><div align="center">32</div></td>
      <td>Mie Instan Indomie Goreng</td>
      <td><div align="right">Rp 2.500,00 / Bungkus</div></td> 
      <td><div align="right">Rp 2.500,00 / Bungkus</div></td>
      <td><div align="right"><img src="assets/img/-.png" width="20" height="10">  Rp 0,00 | 0,00%</div></td>
      <td><div align="right">28 October 2019 </div></td>
    <!--   <td><div align="center"><a href="#grafik/{{val.IdKomoditi}}/{{val.IdKecamatan}}"><i class="fa fa-shield"></i> Graph </a></div></td> -->
     </tr>
          <tr>
      <td><div align="center">33</div></td>
      <td>Gula Pasir</td>
      <td><div align="right">Rp 12.000,00 / Kg</div></td> 
      <td><div align="right">Rp 12.000,00 / Kg</div></td>
      <td><div align="right"><img src="assets/img/-.png" width="20" height="10">  Rp 0,00 | 0,00%</div></td>
      <td><div align="right">28 October 2019 </div></td>
    <!--   <td><div align="center"><a href="#grafik/{{val.IdKomoditi}}/{{val.IdKecamatan}}"><i class="fa fa-shield"></i> Graph </a></div></td> -->
     </tr>
          <tr>
      <td><div align="center">34</div></td>
      <td>Ikan Tuna</td>
      <td><div align="right">Rp 21.000,00 / Kg</div></td> 
      <td><div align="right">Rp 21.000,00 / Kg</div></td>
      <td><div align="right"><img src="assets/img/-.png" width="20" height="10">  Rp 0,00 | 0,00%</div></td>
      <td><div align="right">28 October 2019 </div></td>
    <!--   <td><div align="center"><a href="#grafik/{{val.IdKomoditi}}/{{val.IdKecamatan}}"><i class="fa fa-shield"></i> Graph </a></div></td> -->
     </tr>
          <tr>
      <td><div align="center">35</div></td>
      <td>Ikan Bandeng</td>
      <td><div align="right">Rp 30.000,00 / Kg</div></td> 
      <td><div align="right">Rp 30.000,00 / Kg</div></td>
      <td><div align="right"><img src="assets/img/-.png" width="20" height="10">  Rp 0,00 | 0,00%</div></td>
      <td><div align="right">28 October 2019 </div></td>
    <!--   <td><div align="center"><a href="#grafik/{{val.IdKomoditi}}/{{val.IdKecamatan}}"><i class="fa fa-shield"></i> Graph </a></div></td> -->
     </tr>
          <tr>
      <td><div align="center">36</div></td>
      <td>Ikan Tongkol</td>
      <td><div align="right">Rp 30.000,00 / Kg</div></td> 
      <td><div align="right">Rp 30.000,00 / Kg</div></td>
      <td><div align="right"><img src="assets/img/-.png" width="20" height="10">  Rp 0,00 | 0,00%</div></td>
      <td><div align="right">28 October 2019 </div></td>
    <!--   <td><div align="center"><a href="#grafik/{{val.IdKomoditi}}/{{val.IdKecamatan}}"><i class="fa fa-shield"></i> Graph </a></div></td> -->
     </tr>
          <tr>
      <td><div align="center">37</div></td>
      <td>Kubis</td>
      <td><div align="right">Rp 6.500,00 / Kg</div></td> 
      <td><div align="right">Rp 5.000,00 / Kg</div></td>
      <td><div align="right"><img src="assets/img/Down.png" width="20" height="10">  Rp 1.500,00 | 23,08%</div></td>
      <td><div align="right">28 October 2019 </div></td>
    <!--   <td><div align="center"><a href="#grafik/{{val.IdKomoditi}}/{{val.IdKecamatan}}"><i class="fa fa-shield"></i> Graph </a></div></td> -->
     </tr>
          <tr>
      <td><div align="center">38</div></td>
      <td>Kentang</td>
      <td><div align="right">Rp 12.000,00 / Kg</div></td> 
      <td><div align="right">Rp 13.000,00 / Kg</div></td>
      <td><div align="right"><img src="assets/img/Up.png" width="20" height="10">  Rp 1.000,00 | 8,33%</div></td>
      <td><div align="right">28 October 2019 </div></td>
    <!--   <td><div align="center"><a href="#grafik/{{val.IdKomoditi}}/{{val.IdKecamatan}}"><i class="fa fa-shield"></i> Graph </a></div></td> -->
     </tr>
         </tbody>
   </table>
   </div>
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
</html>





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