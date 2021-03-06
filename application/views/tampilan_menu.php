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
                <a href="<?php echo site_url('profil/tampilan_profil')?>" class="btn btn-default btn-flat">Profil</a>
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
      <li <?php if ($this->uri->segment(2) == 'dashboard') {echo 'class="active treeview"';}?>>
        <a href="<?php echo site_url('dashboard')?>">
          <i class="fa fa-dashboard"></i><span>Dashboard</span>
        </a>
      </li>
      
      <li <?php if ($this->uri->segment(2) == '') {echo 'class="active treeview"';}?>>
        <a href="<?php echo site_url('')?>">
          <i class="fa fa-list-alt"></i><span>Catat Barang Masuk</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
         <ul class="treeview-menu">
          <li <?php if ($this->uri->segment(3) == 'proposal'){echo 'class="active treeview"';}?>><a href="<?php echo site_url()?>"><i class="fa fa-circle-o"></i>Input Barang Masuk</a></li>
        </ul> 
      </li>
      <li <?php if ($this->uri->segment(2) == ''){echo 'class="active treeview"';}?>>
        <a>
          <i class="fa fa-list-alt"></i> <span>Catat Barang Keluar</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li <?php if ($this->uri->segment(3) == 'proposal'){echo 'class="active treeview"';}?>><a href="<?php echo site_url()?>"><i class="fa fa-circle-o"></i>Input Barang Keluar</a></li>
        </ul>

      </li>

      <li class="header">HALAMAN ADMIN</li>
      <li <?php if ($this->uri->segment(2) == ''){echo 'class="active treeview"';}?>>
        <a href="<?php echo site_url()?>">
          <i class="fa fa-users"></i> <span>Daftar Admin</span>
        </a>
      </li>
      <li <?php if ($this->uri->segment(2) == ''){echo 'class="active treeview"';}?>>
        <a href="<?php echo site_url()?>">
          <i class="fa fa-users"></i> <span>Daftar Operator</span>
        </a>
      </li>
      
      
  </section>
</aside>
