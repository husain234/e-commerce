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
        Membuat Item
        <small>admin</small>
      </h1>

    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Tempat -->

      <!-- Tambah Admin -->
      <div class="col-sm-6">
        <form method="post" action="<?php echo base_url().'admin/tambahadmin/insertadmin'; ?>">
          <div class="form-group">
            <label >Nama</label>
            <input type="text" class="form-control" placeholder="Masukkan Nama" name="nama_user" >
          </div>
          <div class="form-group">
            <label >Username</label>
            <input type="text" class="form-control"  placeholder="Masukkan Username" name="username">
          </div>
          <div class="form-group">
            <label >Password</label>
            <input type="Password" class="form-control" placeholder="Masukkan Password" name="password">
          </div>
          <div class="form-group">
            <label for="inputAddress">Nama Pasar</label>
            <select class="form-control" name="pasar">
              <option value="">No Selected</option>
              <?php foreach ($pasar as $psr) { ?>
                <option value="<?php echo $psr['id_pasar']; ?>"><?php echo $psr['nama_pasar']; ?></option>
              <?php } ?>
            </select>
          </div>
           <div class="form-group">
            <label >Level</label>
            <select  name="id_level">
                <option value="">No Selected</option>
              <?php foreach ($level as $lv) { ?>
                <option value="<?php echo $lv['id_level']; ?>"><?php echo $lv['level']; ?></option>
              <?php } ?>
            </select>
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
