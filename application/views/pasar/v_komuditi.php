
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
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
       <div class="col-sm-6">
        <form action="<?php echo base_url().'pasar/komuditi/tambahkomuditi' ?>" method="post">
          <div class="form-group">
            <label for="inputAddress">Id Barang</label>
            <input type="text" class="form-control" id="inputAddress" name="idbarang" placeholder="Id Barang">
          </div>
          <div class="form-group">
            <label for="inputAddress">Barang</label>
            <input type="text" class="form-control" id="inputAddress" name="namabarang" placeholder="Nama Barang">
          </div>
          <!-- <div class="form-group">
            <label for="inputAddress">Email</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="inputAddress2">No. Telp</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Nomer Telp">
          </div> -->
          <!-- <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck">
              <label class="form-check-label" for="gridCheck">
                C
              </label>
            </div>
          </div> -->
          <button type="submit" class="btn btn-primary">Create</button>
        </form>
      </div>
      <!-- /.row -->

      <div class="col-sm-6">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">id_komoditi</th>
              <th scope="col">Komoditi</th>
            </tr>
          </thead>

          <?php $no = 1;
          foreach ($komuditi as $k) { ?>
          <tbody>
            <tr>
              <th scope="row"><?php echo $no ?></th>
              <td><?php echo $k['id_komuditi'] ?></td>
              <td><?php echo $k['nama_komuditi'] ?></td>
            </tr>
          </tbody>
        <?php $no++;
         }  ?>
        </table>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php $this->load->view('pasar/footer') ?>
</body>
</html>
