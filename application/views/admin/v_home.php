
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
        Dashboard
        <small>Version 2.0</small>
      </h1>

    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Username</th>
                  <th scope="col">Password</th>
                  <th scope="col">Level</th>
                  <th scope="col">Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php $i=1;
                foreach ($user as $tampil) { ?>
                <tr>
                  <td><?php echo $i; ?></td>
                  <td><?php echo $tampil['nama_user']; ?></td>
                  <td><?php echo $tampil['username']; ?></td>
                  <td><?php echo $tampil['password']; ?></td>
                  <td><?php echo $tampil['level']; ?></td>
                  <td><a class="btn btn-primary btn-xs" href="<?php echo base_url().'admin/home/editdata/'.$tampil['id_user'] ?>" >Edit</a>
                  <a class="btn btn-primary btn-xs" href="<?php echo base_url().'admin/home/hapusdata/'.$tampil['id_user'] ?>">Hapus</a></td>
                </tr>
                <?php $i++;
                } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php $this->load->view('admin/footer') ?>
</body>
</html>
