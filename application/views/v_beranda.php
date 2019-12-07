
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
	  </nav>
    <!-- END nav -->

    <section id="home-section" class="hero">
		<div class="home-slider owl-carousel">
			<?php foreach ($banner as $bn) { ?>
		      <div class="slider-item" style="background-image: url(assets/imgbanner/<?php echo $bn['img']; ?>);">
		      	<div class="overlay"></div>
		        <div class="container">
		          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

		            <div class="col-md-12 ftco-animate text-center">
		              <h1 class="mb-2"><?php echo $bn['judul']; ?></h1>
		              <!-- <h2 class="subheading mb-4">We deliver organic vegetables &amp; fruits</h2> -->
		            </div>

		          </div>
		        </div>
		      </div>
		    <?php } ?>
	    </div>
    </section>

    <section class="ftco-section">

		<section class="ftco-section ftco-category ftco-no-pt">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-6 order-md-last align-items-stretch d-flex">
								<div class="category-wrap-2 ftco-animate img align-self-stretch d-flex" style="background-image: url(assets/images/img/tugu.jpg);">
									<div class="text text-center">
										<h2>Info MaKabupaten Malang</h2>
										<p>Harga dan Ketersiaan Bahan Pokok</p>
										<p><a href="#" class="btn btn-primary">Halaman Utama</a></p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(assets/images/img/nfo.jpg);">
									<div class="text px-3 py-1">
										<h2 class="mb-0"><a href="<?php echo base_url('infoharga') ?>">Info Harga</a></h2>
									</div>
								</div>
								<div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(assets/images/img/grafik.jpg);">
									<div class="text px-3 py-1">
										<h2 class="mb-0"><a href="<?php echo base_url('grafikharga') ?>">Grafik Harga</a></h2>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="category-wrap ftco-animate img mb-4 d-flex align-items-end" style="background-image: url(assets/images/img/stok.jpg);">
							<div class="text px-3 py-1">
								<h2 class="mb-0"><a href="<?php echo base_url('Sedia') ?>">Ketersediaan</a></h2>
							</div>		
						</div>
						<div class="category-wrap ftco-animate img d-flex align-items-end" style="background-image: url(assets/images/img/tentangme.jpg);">
							<div class="text px-3 py-1">
								<h2 class="mb-0"><a href="<?php echo base_url('Kami') ?>">Tentang Kami</a></h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

    <section class="ftco-section">

 		<div class="container">

        <div class="row">
            <div class="col-lg-12">
                <p style="font-size:24px" align="right"> Harga Rata-rata Komoditi di Kabupaten Malang </br> 
            </div>

           <?php foreach ($avgkomuditi as $avgc) { ?>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                   <img src="<?php echo base_url().'assets/imgbahanpokok/'.$avgc['img'] ?>" width="100%" height="130">
                   <p><?php echo $avgc['nama_komuditi']; ?></p>
                      
				   <div style="font-size:20px"><?php echo "Rp " . number_format($avgc['hargabaru'],2,',','.'); ?></div> 
				 
				   <div align="right"> sebelumnya <?php echo "Rp " . number_format($avgc['hargalama'],2,',','.'); ?> | <p  style="color:red">Rp 100,00 | 1,11%</p></div>
                </a>
            </div>
            <?php } ?> 

    </section>
		
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