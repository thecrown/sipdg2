<header class="main-header">
  <!-- Logo -->
  <a class="logo">
    <!-- Mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>Admin Perhutani</b>T</span>
    <!-- Logo for regular state and mobile devices -->
    <span class="logo-lg"><b>Admin </b>PERHUTANI</span>
  </a>
  <!-- Header navbar: style can be found in header.less-->
  <nav class="navbar navbar-static-top">
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- User Account : style can be found in dropdown.less-->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="<?php echo base_url('assets/img/logo pkl.png')?>" class="user-image" alt="logo pkl">
            <span class="hidden-xs"><?php echo $this->session->userdata('username')?></span>
          </a>
          <ul class="dropdown-menu">
            <!-- User Image -->
            <li class="user-header">
              <img src="<?php echo base_url('assets/img/logo pkl.png')?>" class="img-circle" alt="logo pkl">

              <p> <?php echo $this->session->userdata('username')?> </p>
            </li>
            <!-- Menu Footer -->
            <li class="user-footer">
              <div class="pull-left">
                <a href="<?php echo site_url('profile/View_profile')?>" class="btn btn-default btn-flat">Profil</a>
              </div>
              <div class="pull-right">
                <a href="<?php echo site_url('home/logout');?>" class="btn btn-default btn-flat">Keluar</a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>

<!-- Leftside column, contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar menu: style canbe found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">HALAMAN UTAMA</li>
      <li class="treeview">
        <a href="<?php echo site_url('Dashboard')?>">
          <i class="fa fa-dashboard"></i><span>Dashboard</span>
        </a>
      </li>
      
      <li class="treeview">
        <a href="<?php echo site_url('')?>">
          <i class="fa fa-list-alt"></i><span>Barang Masuk</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
         <ul class="treeview-menu">
          <li  class="treeview"><a href="<?= base_url('Barang-Masuk')?>"><i class="fa fa-circle-o"></i>Input Barang Masuk</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a>
          <i class="fa fa-list-alt"></i> <span>Barang Keluar</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li  class="treeview"><a href="<?= base_url('Barang-Keluar')?>"><i class="fa fa-circle-o"></i>Input Barang Keluar</a></li>
        </ul>
      </li>

      <li class="header">HALAMAN ADMIN</li>
      <li class="treeview">
        <a href="<?php echo site_url('daftar-admin')?>">
          <i class="fa fa-users"></i> <span>Daftar Admin</span>
        </a>
      </li>
      <li class="treeview">
        <a href="<?php echo site_url('daftar-operator')?>">
          <i class="fa fa-users"></i> <span>Daftar Operator</span>
        </a>
      </li>
      
      
  </section>
</aside>
