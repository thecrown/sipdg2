<section class="content-header">
	<h1>
		Daftar Admin
		<small>Edit</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
		<li><a href="#">Daftar Admin</a></li>
		<li class="active">Edit</li>
	</ol>
</section>

<!-- Main Content -->
<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Edit Data</h3>
					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
					</div>
				</div>
				<?php
					if ($this->session->flashdata('flash_message')) {
						if ($this->session->flashdata('flash_message') == 'Updated') {
							echo '<div class="alert alert-success alert-dismissible">';
								echo '<button type="button" class="close" data-dismiss="alert"></button>';
								echo 'Edit data berhasil!'.anchor('profil/list', ' <b>Kembali</b>');
							echo '</div>';
						} else {
							echo '<div class="alert alert-warning alert-dismissible">';
								echo '<button type="button" class="close" data-dismiss="alert"></button>';
								echo 'Edit data gagal!';
							echo '</div>';
						}
					}
					echo validation_errors();
				?>
				<?php
					$attributes = array('class'=>'form-horizontal');
					echo form_open('profil/edit/'.$this->uri->segment(4),$attributes);
				?>
					<div class="box-body">
						<div class="form-group">
							<label for="id_admin" class="col-sm-2 control-label">ID Admin</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="id_admin" placeholder="ID Admin" value="<?php echo $admin[0]['id_admin'];?>" disabled>
							</div>
						</div>
						<div class="form-group">
							<label for="nip" class="col-sm-2 control-label">Username</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="username" placeholder="username" value="<?php echo $admin[0]['username'];?>">
							</div>
						</div>
						<div class="form-group">
							<label for="nama" class="col-sm-2 control-label">Nama Lengkap</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" value="<?php echo $admin[0]['nama'];?>">
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