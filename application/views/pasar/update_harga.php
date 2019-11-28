<?php $user = $this->session->userdata(); ?>
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
        <form action="<?php echo base_url().'pasar/updateharga/updatekomuditi' ?>" method="post">
          <div class="form-group">
            <label for="inputAddress">Id Barang</label>
            <select class="form-control" name="idkomuditi" id="id_komuditi" required>
              <option value="">No Selected</option>
              <?php foreach($id_komuditi as $row):?>
              <option value="<?php echo $row['id_komuditi'];?>"><?php echo $row['nama_komuditi'];?></option>
              <?php endforeach;?>
            </select>
          </div>
          <div class="form-group" hidden="true">
            <label for="inputAddress">Id Harga</label>
            <input type="text" class="form-control" name="idharga" id="idharga" placeholder="Nama Barang">
          </div>
          <div class="form-group" hidden="true">
            <label for="inputAddress">Barang</label>
            <input type="text" class="form-control" name="namakomuditi" id="nama_komuditi" placeholder="Nama Barang">
          </div>
          <div class="form-group" hidden="true">
            <label for="inputAddress">Harga Lama</label>
            <input type="text" class="form-control" name="lamakomuditi" id="hama_komuditi" placeholder="Masukkan Harga(Rp)">
          </div>
          <div class="form-group">
            <label for="inputAddress">Harga Baru</label>
            <input type="text" class="form-control" name="barukomuditi" id="haru_komuditi" placeholder="Masukkan Harga(Rp)">
          </div>
          <div class="form-group" hidden="true">
            <label for="inputAddress">Id pasar</label>
            <input type="text" class="form-control" name="id_pasar" id="haru_komuditi" value="<?php echo $user['idpasar']; ?>">
          </div>
          <!-- <div class="form-group">
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
          <button type="submit" class="btn btn-primary">Update</button>
        </form>
      </div>
      <!-- /.row -->

      <div class="col-sm-6">
        <table id="example" class="hover" style="width:100%">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Komoditi</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Harga Lama</th>
              <th scope="col">Harga Baru</th>
            </tr>
          </thead>

          <?php $no = 1;
          foreach ($komuditi as $k) { ?>
          <tbody>
          
            <tr>
              <td scope="row"><?php echo $no ?></td>
              <td><?php echo $k['nama_komuditi'] ?></td>
              <td><?php echo $k['tanggal'] ?></td>
              <td><?php echo $k['harga_lama'] ?></td>
              <td><?php echo $k['harga_baru'] ?></td>
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



    <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.3.1.js'?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
    <script type="text/javascript">
        $(document).ready(function(){
 
            $('#id_komuditi').change(function(){ 
                var id=$(this).val();
                var idpasar = "<?php echo $user['idpasar']; ?>";

                $.ajax({
                    url : "<?php echo site_url('pasar/updateharga/datakomuditi');?>",
                    method : "POST",
                    data : {id: id, idpasar: idpasar},
                    async : true,
                    dataType : 'json',
                    success: function(data){
                         
                        var nama = '';
                        var baru = '';
                        var idharga = '';
                        var i;
                        for(i=0; i<data.length; i++){
                            nama += data[i].nama_komuditi;
                            baru += data[i].harga_baru;
                            idharga += data[i].id_harga;
                        }

                        document.getElementById("nama_komuditi").value = nama;
                        document.getElementById("hama_komuditi").value = baru;
                        document.getElementById("idharga").value = idharga;
 
                    }
                });
                return false;
            }); 
             
        });
    </script>

</body>
</html>
