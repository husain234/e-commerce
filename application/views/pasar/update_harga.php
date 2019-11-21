
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
        <form action="<?php echo base_url().'pasar/updateharga/updatekomuditi' ?>" method="post">
          <div class="form-group">
            <label for="inputAddress">Id Barang</label>
            <select class="form-control" name="idkomuditi" id="id_komuditi" required>
              <option value="">No Selected</option>
              <?php foreach($id_komuditi as $row):?>
              <option value="<?php echo $row['id_komuditi'];?>"><?php echo $row['id_komuditi'];?></option>
              <?php endforeach;?>
            </select>
          </div>
          <div class="form-group">
            <label for="inputAddress">Barang</label>
            <input type="text" class="form-control" name="namakomuditi" id="nama_komuditi" placeholder="Nama Barang">
          </div>
          <div class="form-group">
            <label for="inputAddress">Harga Lama</label>
            <input type="text" class="form-control" name="lamakomuditi" id="hama_komuditi" placeholder="Masukkan Harga(Rp)">
          </div>
          <div class="form-group">
            <label for="inputAddress">Harga Baru</label>
            <input type="text" class="form-control" name="barukomuditi" id="haru_komuditi" placeholder="Masukkan Harga(Rp)">
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
                $.ajax({
                    url : "<?php echo site_url('pasar/updateharga/datakomuditi');?>",
                    method : "POST",
                    data : {id: id},
                    async : true,
                    dataType : 'json',
                    success: function(data){

                         
                        var nama = '';
                        var lama = '';
                        var baru = '';
                        var i;
                        for(i=0; i<data.length; i++){
                            nama += data[i].nama_komuditi;
                            lama += data[i].harga_lama;
                            baru += data[i].harga_baru;
                        }

                        document.getElementById("nama_komuditi").value = nama;
                        document.getElementById("hama_komuditi").value = lama;
                        document.getElementById("haru_komuditi").value = baru;
 
                    }
                });
                return false;
            }); 
             
        });
    </script>

</body>
</html>
