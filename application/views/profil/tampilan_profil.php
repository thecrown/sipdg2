<section class="content-header">
  <h1>
    Daftar Admin
    <small>Profil</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
    <li><a href="#">Daftar Admin</a></li>
    <li class="active">Profil</li>
  </ol>
</section>

<!-- Main Content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Lihat Profil</h3>
        </div>
        <div class="box-body box-profile">
          <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url('assets/img/avatar.png')?>" alt="User profile picture">
          <h3 class="profile-username text-center"><?php echo $admin[0]['username']?></h3>
          <p class="text-muted text-center">Administrator</p>
          <ul class="list-group list-group-unbordered">
            <li class="list-group-item">
              <b>ID Admin</b> <a class="pull-right"><?php echo $admin[0]['id_admin']?></a>
            </li>
            <li class="list-group-item">
              <b>Username</b> <a class="pull-right"><?php echo $admin[0]['username']?></a>
            </li>
            <li class="list-group-item">
              <b>Nama Lengkap</b> <a class="pull-right"><?php echo $admin[0]['nama_lengkap']?></a>
            </li>
            
            <br/>
            <a href="<?php echo site_url('profil/edit_password')?>"><button type="button" class="btn btn-sm btn-info pull-right">Edit Password</button></a>
          </ul>
        </div>
      </div>
    </div>  
  </div>
</section>