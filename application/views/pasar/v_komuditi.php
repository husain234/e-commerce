
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
        Membuat Item
        <small>Pasar</small>
      </h1>
     
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
       <div class="col-sm-6">
        <form action="<?php echo base_url().'pasar/komuditi/tambahkomuditi' ?>" method="post">
          <div class="form-group">
            <label for="inputAddress">Barang</label>
            <input type="text" class="form-control" id="inputAddress" name="namabarang" placeholder="Nama Barang">
          </div>
         
          <button type="submit" class="btn btn-primary">Create</button>
        </form>
      </div>
      <!-- /.row -->

      <div class="col-sm-6">
        <table id="example" class="hover" style="width:100%">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">id_komoditi</th>
              <th scope="col">Komoditi</th>
            </tr>
          </thead>

          
          <tbody>
          <?php $no = 1;
          foreach ($komuditi as $k) { ?>
            <tr>
              <td scope="row"><?php echo $no ?></td>
              <td><?php echo $k['id_komuditi'] ?></td>
              <td><?php echo $k['nama_komuditi'] ?></td>
            </tr>
            <?php $no++;
         }  ?>
          </tbody>
        
        </table>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php $this->load->view('pasar/footer') ?>
</body>
</html>
