
<!DOCTYPE html>
<html>
<?php $this->load->view('admin/head') ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<?php $this->load->view('admin/header') ?>
  <!-- Left side column. contains the logo and sidebar -->
  
<?php $this->load->view('admin/leftbar') ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Halaman Utama
        <small>Version 2.0</small>
      </h1>

    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="col-sm-6">
        <form>
        <h1>Banner</h1>
          <div class="form-group">
            <label for="inputAddress"></label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Kata-Kata">
          </div>
          <button type="submit" class="btn btn-primary">Create</button>

          	<div>
          <h1>Harga rata-rata komuditi</h1>
          </div>
          <div class="form-group">
            <label for="inputAddress">Barang</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Masukkan Nama Barang">
          </div>
          <div class="form-group">
            <label for="inputAddress">Harga</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Masukkan Harga">
          </div>
          <button type="submit" class="btn btn-primary">Create</button>
        </form>
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php $this->load->view('admin/footer') ?>
</body>
</html>
