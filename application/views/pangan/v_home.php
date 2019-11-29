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
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->

      
      <div class="col-sm-6">
        <table id="example" class="hover" style="width:100%">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Id</th>
              <th scope="col">Komuditi</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Ketersediaan</th>
              <th scope="col">Kebutuhan</th>
            </tr>
          </thead>

          
          <tbody>
          <?php $no = 1;
          foreach ($stok as $k) { ?>
            <tr>
              <td scope="row"><?php echo $no ?></td>
              <td><?php echo $k['id_informasi'] ?></td>
              <td><?php echo $k['id_komuditi'] ?></td>
              <td><?php echo $k['tanggal'] ?></td>
              <td><?php echo $k['ketersediaan'] ?></td>
              <td><?php echo $k['kebutuhan'] ?></td>
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

<?php $this->load->view('pangan/footer') ?>
</body>
</html>
