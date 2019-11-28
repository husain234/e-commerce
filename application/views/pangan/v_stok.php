<!DOCTYPE html>
<html>
<?php $this->load->view('pangan/head') ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<?php $this->load->view('pangan/header') ?>
  <!-- Left side column. contains the logo and sidebar -->
  
<?php $this->load->view('pangan/leftbar') ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Membuat Item
        <small>pangan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="col-sm-6">
        <form>
          <div class="form-group">
            <label for="inputAddress">Nama</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Masukkan Barang">
          </div>
          <div class="form-group">
            <label for="inputAddress">Jumlah</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Masukkan Jumlah(Ton)">
          </div>
          <div class="form-group">
            <label for="inputAddress">Kebutuhan</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Masukkan Jumlah">
          </div>
          <button type="submit" class="btn btn-primary">Create</button>
        </form>
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php $this->load->view('pangan/footer') ?>
</body>
</html>