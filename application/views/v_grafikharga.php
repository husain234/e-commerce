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

    <script src="<?php echo base_url().'assets/js/highcharts.js'?>"></script>
	<script src="<?php echo base_url().'assets/js/series-label.js'?>"></script>
	<script src="<?php echo base_url().'assets/js/exporting.js'?>"></script>
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
              <li class="nav-item active"><a href="<?php echo base_url('Sedia')?>" class="nav-link">Ketersediaan</a></li>
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
                    <h1 class="page-head-line">Grafik Harga </h1>
                </div>
            </div>
      
    <table width="60%"  border="0" cellspacing="0" cellpadding="0">
  
      <tr> 
        <form action="index.php?hal=kecamatan&cari=ok" method="post">
	        <th scope="row">
	          <select id="IdKecamatan" name="IdKecamatan" class="form-control">
	            <option value="">--Pilih Kecamatan--</option>
	              <?php foreach($kecamatan as $row):?>
	            <option value="<?php echo $row['id_kecamatan'];?>"><?php echo $row['nama_kecamatan'];?></option>
	              <?php endforeach;?>            
	          </select>
	      	</th>
       		<th scope="row">
	          <select id="IdKecamatan" name="IdKecamatan" class="form-control">
	            <option value="">--Bahan Pokok--</option>
	              <?php foreach($komuditi as $rows):?>
	            <option value="<?php echo $rows['id_komuditi'];?>"><?php echo $rows['nama_komuditi'];?></option>
	              <?php endforeach;?>            
	          </select>
	      	</th>
	      	<th scope="row">
	          <select class="form-control mb-1" name="tahun">
              <option value="">--Tahun--</option>
              <?php
                    $thn_skr = date('2019');
                    for ($x = $thn_skr; $x >= 2017; $x--) {
                  ?>
              <option value="<?php echo $x ?>"><?php echo $x ?></option>
              <?php } ?>
            </select>
	      	</th>
        </form>
      </tr>
    </table>

    <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

     <?php foreach ($updateharga as $uh) {
        $tanggal[] = $uh['tanggal'];
        $harga[] = intval($uh['harga_baru']);
      } ?>  

      

    <script>
    	// Data retrieved from http://vikjavev.no/ver/index.php?spenn=2d&sluttid=16.06.2015.

		Highcharts.chart('container', {
		    chart: {
		        type: 'spline',
		        scrollablePlotArea: {
		            minWidth: 600,
		            scrollPositionX: 1
		        }
		    },
		    title: {
		        text: 'Grafik Harga',
		        align: 'left'
		    },
		    subtitle: {
		        text: '',
		        align: 'left'
		    },
		    xAxis: {
		        categories: <?php echo json_encode($tanggal); ?>
		    },
		    yAxis: {
		        title: {
		        	text:''
		        }
		    },
		    tooltip: {
		        valueSuffix: ' m/s'
		    },
	        credits: {
	             enabled: false
	        },
		    series: [{
		        name: 'Hestavollane',
		        data: <?php echo json_encode($harga); ?>

		    }],
		    navigation: {
		        menuItemStyle: {
		            fontSize: '10px'
		        }
		    }
		});
    </script>



  <footer class="text-center">
    <p><a href="http://malangkab.go.id">Kabupaten Malang</a></p>
  
    <p>Copyright 2015 bag-pde.malangkab.go.id</a></p>
  </footer>




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