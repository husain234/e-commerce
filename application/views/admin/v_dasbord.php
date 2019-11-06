
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PopsMalang</title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
    <base href="http://localhost/e-commerce">
    <link rel="shortcut icon" href="favicon_16.ico"/>
    <link rel="bookmark" href="favicon_16.ico"/>
    <!-- site css -->
    <!-- <link rel="stylesheet" type="text/css" href="assets/bootflat-admin/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="assets/dist/css/site.min.css">

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800,700,400italic,600italic,700italic,800italic,300italic" rel="stylesheet" type="text/css">
    <link href="assets/bootstrap-datepicker.css" rel="stylesheet">
    <!-- <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'> -->
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    
    <script type="text/javascript" src="assets/dist/js/site.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.9.1/sweetalert2.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.9.1/sweetalert2.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.9.1/sweetalert2.common.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.9.1/sweetalert2.common.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.9.1/sweetalert2.common.min.js.map"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.9.1/sweetalert2.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.9.1/sweetalert2.min.js"></script> -->


  </head>
  <body>
    <!--nav-->
    <nav role="navigation" class="navbar navbar-custom">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <!-- <button data-target="#bs-content-row-navbar-collapse-5" data-toggle="collapse" class="navbar-toggle" type="button">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button> -->
            <!-- <a href="#" class="navbar-brand"></a> -->
            <!-- <img src="images/header.png" width="1700px" height="160"> -->
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <h5 style="color: lightblue">Populasi Peternakan Dan Pertanian Kabupaten Malang</h5>
          
        </div><!-- /.container-fluid -->
      </nav>
    <!--header-->    <div class="container-fluid">
    <!--documents-->
        <div class="row row-offcanvas row-offcanvas-left">

          <div class="col-xs-6 col-sm-3 sidebar-offcanvas" role="navigation">
            <ul class="list-group panel">
                <li class="list-group-item"><i class="glyphicon glyphicon-align-justify"></i> <b>MENU UTAMA</b></li>
                <li class="list-group-item"><input type="text" class="form-control search-query" placeholder="Search Something"></li>
                <li class="list-group-item"><a href="http://localhost/pkl2/"><i class="glyphicon glyphicon-home"></i>Hello</a></li>
                
                               
                <li>
                  <a href="#demo4" class="list-group-item " data-toggle="collapse"><i class="glyphicon glyphicon-th-large"></i>Data Populasi Peternakan  <span class="glyphicon glyphicon-chevron-right"></span></a>
                    <li class="collapse" id="demo4">
                      <a href="barang" class="list-group-item"> Data Hewan</a>
                     <!--  <a href="jenis_barang" class="list-group-item"> Jenis Barang</a>
                      <a href="merk_barang" class="list-group-item"> Merk Barang</a>
                      <a href="supplier" class="list-group-item"> Supplier</a>
                       -->
                    </li>
                </li>
                <li>
                  <a href="#demo4" class="list-group-item " data-toggle="collapse"><i class="glyphicon glyphicon-th-large"></i>Data Populasi Pertanian  <span class="glyphicon glyphicon-chevron-right"></span></a>
                    <li class="collapse" id="demo4">
                      <a href="barang" class="list-group-item"> Data Hewan</a>
                      <a href="jenis_barang" class="list-group-item"> Jenis Barang</a>
                      <a href="merk_barang" class="list-group-item"> Merk Barang</a>
                      <a href="supplier" class="list-group-item"> Supplier</a>
                      
                    </li>
                </li>
                <!-- <li>
                  <a href="#demo5" class="list-group-item " data-toggle="collapse"><i class="glyphicon glyphicon-folder-open"></i>Data Transaksi  <span class="glyphicon glyphicon-chevron-right"></span></a>
                    <li class="collapse" id="demo5">
                      <a href="barang_masuk" class="list-group-item">Transaksi Barang Masuk</a>
                      <a href="barang_keluar" class="list-group-item">Transaksi Barang Keluar</a>
                      <a href="app/penjualan" class="list-group-item">Pemesanan Ke Supplier</a>
                      
                    </li>
                </li> -->
                <li class="list-group-item"><a href="users"><i class="glyphicon glyphicon-user"></i>Manajemen User </a></li>
                <li class="list-group-item"><a href="http://localhost/pkl2/app/logout"><i class="glyphicon glyphicon-share"></i>Logout </a></li>

                
                <!-- <li>
                  <a href="#demo5" class="list-group-item " data-toggle="collapse"><i class="glyphicon glyphicon-home"></i>Proses  <span class="glyphicon glyphicon-chevron-right"></span></a>
                    <li class="collapse" id="demo5">
                      <a href="http://localhost/pkl2/user" class="list-group-item">2.1 Data User</a>
                      <a href="http://localhost/pkl2/app/history" class="list-group-item">2.2 Hasil Diagnosa</a>
                    </li>
                </li>
                <li class="list-group-item"><a href="http://localhost/pkl2/app/konsultasi"><i class="glyphicon glyphicon-home"></i>Konsultasi </a></li> -->
                
               <!--  <li class="list-group-item"><a href="http://localhost/pkl2/app/konsultasi"><i class="glyphicon glyphicon-home"></i>Konsultasi </a></li>
                <li class="list-group-item"><a href="http://localhost/pkl2/app/history"><i class="glyphicon glyphicon-home"></i>History Diagnosa </a></li>

                <li class="list-group-item"><a href="http://localhost/pkl2/app/logout"><i class="glyphicon glyphicon-home"></i>Logout </a></li> -->

              </ul>
          </div>          
          <div class="col-xs-12 col-sm-9 content">
            
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title"><a href="javascript:void(0);" class="toggle-sidebar"><span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span></a> Dashboard</h3>
              </div>
              <div class="panel-body">
                <div class="content-row">
                  <h2 class="content-row-title">Dashboard</h2>
                  <div class="row">
                    <div class="col-md-12">
                     <div class="alert alert-success">
  <h5><strong>Selamat Datang</strong>,  .
</div>

<div class="alert alert-info">
  <h6><p>
  	Website ini berfungsi sebagai sistem untuk mengetahui populasi ternah disetiap daerah
  </p>
  </p>
</div>

                    </div>
                  </div>
                </div>

              </div><!-- panel body -->
            </div>

        </div><!-- content -->
      </div>
    </div>
    <!--footer-->
        <script src="assets/bootstrap-datepicker.js"></script>
  
    <script type="text/javascript">
      $('.tgl').datepicker({
                format: 'yyyy-mm-dd',
                autoclose: true,
                //startView: 2,
                todayBtn: true,
                todayHighlight: true,
                //clearBtn: true,
                language: 'id'
            });
  </script>