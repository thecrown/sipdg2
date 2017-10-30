<section class="content-header">
  <h1>
    Daftar Admin
    <small>Profil</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
    <li><a href="#">Profil</a></li>
    <li class="active">Edit Password</li>
  </ol>
</section>

<!-- Main Content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Edit Password</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>
        <?php
          if ($this->session->flashdata('flash_message')) {
            if ($this->session->flashdata('flash_message') == 'Updated') {
              echo '<div class="alert alert-success alert-dismissible">';
                echo '<button type="button" class="close" data-dismiss="alert"></button>';
                echo 'Edit password berhasil!'.anchor('profil/tampilan_profil', ' <b>Kembali</b>');
              echo '</div>';
            } else {
              echo '<div class="alert alert-warning alert-dismissible">';
                echo '<button type="button" class="close" data-dismiss="alert"></button>';
                echo 'Edit password gagal!';
              echo '</div>';
            }
          }
          echo validation_errors();
        ?>
        <?php
          $attributes = array('class'=>'form-horizontal');
          echo form_open('profil/edit_password',$attributes);
        ?>
          <div class="box-body">
            <div class="form-group">
              <label for="nip" class="col-sm-2 control-label">Username</label>
              <div class="col-sm-10">
    <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo $admin[0]['username']?>" disabled>
              </div>
            </div>
            <div class="form-group">
              <label for="password" class="col-sm-2 control-label">Password Baru</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" name="password" placeholder="Password Baru" value="<?php echo set_value('password')?>">
              </div>
            </div>
            <div class="form-group">
              <label for="passconf" class="col-sm-2 control-label">Konfirmasi Password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" name="passconf" placeholder="Konfirmasi Password" value="<?php echo set_value('passconf')?>">
              </div>
            </div>

            <div class="box-footer">
              <a href="<?php echo site_url('profil/list')?>"><button type="button" class="btn btn-default">Kembali</button></a>
              <button type="submit" class="btn btn-info pull-right">Simpan</button>
            </div>
          </div>
        <?php echo form_close(); ?> 
      </div>
    </div>
  </div>
</section>