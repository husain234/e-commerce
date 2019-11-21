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
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="col-sm-6">
        <form method="post" action="Tambahadmin/insertadmin/">
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
            <label >Level</label>
            <select  name="id_level">
                  <option value="1">Admin Kominfo</option>
                  <option value="2">Admin Perdagangan</option>
                  <option value="3">Admin Ketahanan Pangan</option>
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
