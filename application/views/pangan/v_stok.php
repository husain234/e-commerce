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
        <form action="<?php echo base_url().'pangan/stok/inputpokok' ?>" method="post">
          <div class="form-group">
            <label for="inputAddress">Id Bahan Pokok</label>
            <input type="text" class="form-control" id="inputAddress" name="idbarang" placeholder="Id Barang">
          </div>
          <div class="form-group">
            <label for="inputAddress">Bahan Pokok</label>
            <input type="text" class="form-control" id="inputAddress" name="namabarang" placeholder="Nama Bahan Pokok">
          </div>
         
          <button type="submit" class="btn btn-primary">Create</button>
        </form>

        <br>

        <form action="<?php echo base_url().'pangan/stok/inputstok' ?>" method="post">    
          <div class="form-group">
            <label for="inputAddress">Nama</label>
            <select class="form-control" name="idkomuditi" id="id_komuditi" required>
              <option value="">Nama Bahan Pokok</option>
              <?php foreach($id_komuditi as $row):?>
              <option value="<?php echo $row['id_bahan'];?>"><?php echo $row['nama_bahan'];?></option>
              <?php endforeach;?>
            </select>
          </div>
          <div class="form-group" hidden="true">
            <label for="inputAddress">Id_Stok</label>
            <input type="text" class="form-control" id="stok" name="id_informasi" placeholder="Masukkan Jumlah(Ton)">
          </div>
          <div class="form-group">
            <label for="inputAddress">Jumlah</label>
            <input type="text" class="form-control" id="ketersediaan" name="jumlah" placeholder="Masukkan Jumlah(Ton)">
          </div>
          <div class="form-group">
            <label for="inputAddress">Kebutuhan</label>
            <input type="text" class="form-control" id="kebutuhan" name="kebutuhan" placeholder="Masukkan Jumlah">
          </div>
          <button type="submit" class="btn btn-primary">Update</button>
        </form>
      </div>

      <div class="col-sm-6">
        <table class="table table-bordered" id="example" class="hover" style="width:100%">
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
              <td><?php echo $k['nama_bahan'] ?></td>
              <td><?php echo $k['tanggal'] ?></td>
              <td><?php echo $k['ketersediaan'] ?></td>
              <td><?php echo $k['kebutuhan'] ?></td>
            </tr>
            <?php $no++;
         }  ?>
          </tbody>
        </table>

        <br>

        <!-- <table class="table table-bordered" id="example" class="hover" style="width:100%">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Id</th>
              <th scope="col">Bahan Pokok</th>
            </tr>
          </thead>
          <tbody>
          <?php $no = 1;
          foreach ($bahanpokok as $bpk) { ?>
            <tr>
              <td scope="row"><?php echo $no ?></td>
              <td><?php echo $bpk['id_bahan'] ?></td>
              <td><?php echo $bpk['nama_bahan'] ?></td>
            </tr>
            <?php $no++;
         }  ?>
          </tbody>
        
        </table>
      </div> -->
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php $this->load->view('pangan/footer') ?>

<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.3.1.js'?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
    <script type="text/javascript">
        $(document).ready(function(){
 
            $('#id_komuditi').change(function(){ 
                var id=$(this).val();

                $.ajax({
                    url : "<?php echo site_url('pangan/stok/datastok');?>",
                    method : "POST",
                    data : {id: id},
                    async : true,
                    dataType : 'json',
                    success: function(data){
                         
                        var id_informasi = '';
                        var ketersediaan = '';
                        var kebutuhan = '';
                        var i;
                        for(i=0; i<data.length; i++){
                            id_informasi += data[i].id_informasi;
                            ketersediaan += data[i].ketersediaan;
                            kebutuhan += data[i].kebutuhan;
                        }

                        document.getElementById("stok").value = id_informasi;
                        document.getElementById("ketersediaan").value = ketersediaan;
                        document.getElementById("kebutuhan").value = kebutuhan;
 
                    }
                });
                return false;
            }); 
             
        });
    </script>

</body>
</html>