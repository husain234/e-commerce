
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
        <form method="post" action="Tambahadmin/insertadmin/">
          <div class="form-group">
            <label for="inputAddress">Kecamatan</label>
            <select class="form-control" name="pasar">
              <option value="">No Selected</option>
              <?php foreach ($kecamatan as $psr) { ?>
                <option value="<?php echo $psr['id_kecamatan']; ?>"><?php echo $psr['nama_kecamatan']; ?></option>
              <?php } ?>
            </select>
          </div>
          <div class="form-group">
            <label >ID Pasar</label>
            <input type="text" class="form-control" placeholder="Masukkan Angka">
          </div>
          <div class="form-group">
            <label >Nama Pasar</label>
            <input type="text" class="form-control" placeholder="Masukkan Pasar">
          </div>
          <button type="submit" class="btn btn-primary">Simpan</button>
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
