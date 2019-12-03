<?php $user = $this->session->userdata(); ?>
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img>
        </div>
        <div class="pull-left info">
          <p><?php echo $user['nama']; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active menu-open">
          <a href="<?php echo base_url().'admin/home' ?>">
            <i class="fa fa-dashboard"></i><span>Dashbodedard</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Admin</span>

          </a>
          <ul class="treeview-menu">
            <li><a href="user"><i class="fa fa-circle-o"></i> Membuat Akun</a></li>
            <li><a href="halaman"><i class="fa fa-circle-o"></i> Halaman Utama </a></li>
            <li><a href="pasar"><i class="fa fa-circle-o"></i> Data Pasar </a></li>
          </ul>
        </li>

        <li class="active menu-open">
          <a href="<?php echo base_url().'login/logout' ?>">
            <i class="fa fa-th"></i> <span>Logout</span>
          </a>
        </li>
    </section>
    <!-- /.sidebar -->
  </aside>