
<!DOCTYPE html>
<html>
<?php $this->load->view('admin/head') ?>

<style>
  #image-preview, #image-preview-two{
    display:none;
    width : 200px;
    height : 200px;
  }
</style>

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
        Halaman Utama
        <small>Version 2.0</small>
      </h1>

    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="col-sm-6">
        <form action="<?php echo base_url().'admin/halaman/uploud_banner' ?>" method="post" enctype="multipart/form-data">
          <h1>Banner</h1>
          <div class="form-group">
            <img id="image-preview" alt="image preview"/>
            <br/>
            <input type="file" id="image-source" name="imgbanner" onchange="previewImage();"/>
          </div>
          <div class="form-group">
            <label for="inputAddress"></label>
            <textarea name="title" class="form-control" rows="3"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Create</button>
        </form>
      </div>
      <div class="col-sm-6">
        <form action="<?php echo base_url().'admin/halaman/uploud_pokok' ?>" method="post" enctype="multipart/form-data">
            <div>
          <h1>Harga rata-rata komuditi</h1>
          </div>
          <div class="form-group">
            <img id="image-preview-two" alt="image preview"/>
            <br/>
            <input name="imgpokok" type="file" id="image-source-two" onchange="previewImagetwo();"/>
          </div>
          <div class="form-group">
            <label for="inputAddress">Id barang</label>
            <input name="id" type="text" class="form-control" id="inputAddress" placeholder="Masukkan Id Barang">
          </div>
          <div class="form-group">
            <label for="inputAddress">Nama barang</label>
            <input name="barang" type="text" class="form-control" id="inputAddress" placeholder="Masukkan Nama Barang">
          </div>
          <button type="submit" class="btn btn-primary">Create</button>
        </form>
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php $this->load->view('admin/footer') ?>

<script>
  function previewImage() {
    document.getElementById("image-preview").style.display = "block";
    var oFReader = new FileReader();
     oFReader.readAsDataURL(document.getElementById("image-source").files[0]);
 
    oFReader.onload = function(oFREvent) {
      document.getElementById("image-preview").src = oFREvent.target.result;
    };
  };

  function previewImagetwo() {
    document.getElementById("image-preview-two").style.display = "block";
    var oFReader = new FileReader();
     oFReader.readAsDataURL(document.getElementById("image-source-two").files[0]);
 
    oFReader.onload = function(oFREvent) {
      document.getElementById("image-preview-two").src = oFREvent.target.result;
    };
  };
</script>
</body>
</html>
