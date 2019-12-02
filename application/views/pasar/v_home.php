
<!DOCTYPE html>
<html>
<?php $this->load->view('pasar/head') ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

<?php $this->load->view('pasar/header') ?>
  <!-- Left side column. contains the logo and sidebar -->
  
<?php $this->load->view('pasar/leftbar') ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
      </h1>

    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
        <div class="box">
            <div class="box-header">
              <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Komoditi</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Harga Lama</th>
              <th scope="col">Harga Baru</th>
            </tr>
          </thead>

          <tbody>
           <?php $no = 1;
          foreach ($komuditi as $k) { ?>
            <tr>
              <td scope="row"><?php echo $no ?></td>
              <td><?php echo $k['nama_komuditi'] ?></td>
              <td><?php echo $k['tanggal'] ?></td>
              <td><?php echo $k['harga_lama'] ?></td>
              <td><?php echo $k['harga_baru'] ?></td>
            </tr>
            <?php $no++;
         }  ?>
          </tbody>
        </table>
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php $this->load->view('pasar/footer') ?>
</body>
</html>
