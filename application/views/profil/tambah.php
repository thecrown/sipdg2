<section class="content-header">
	<h1>
		Daftar Dosen
		<small>Tambah</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
		<li><a href="#">Daftar Dosen</a></li>
		<li class="active">Tambah</li>
	</ol>
</section>

<!-- Main Content -->
<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">Tambah Data</h3>
				</div>
				<?php 
					if (isset($flash_message)) {
						if ($flash_message == TRUE) {
							echo '<div class="alert alert-success alert-dismissible">';
								echo '<button type="button" class="close" data-dismiss="alert"></button>';
								echo 'Dosen berhasil ditambahkan!';
							echo '</div>';
						} else {
							echo '<div class="alert alert-warning alert-dismissible">';
								echo '<button type="button" class="close" data-dismiss="alert"></button>';
								echo 'Dosen gagal ditambahkan!';
							echo '</div>';
						}
					}
					echo  validation_errors();
				?>
				<?php
					$attributes = array('class'=>'form-horizontal');
					echo form_open('profifl/tambah',$attributes);
				?>
					<div class="box-body">
						<div class="form-group">
							<label for="nip" class="col-sm-2 control-label">Username</label>

							<div class="col-sm-10">
								<input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo set_value('username')?>">
							</div>
						</div>

						<div class="form-group">
							<label for="nama" class="col-sm-2 control-label">Nama Lengkap</label>

							<div class="col-sm-10">
								<input type="text" class="form-control" name="nama_lengkap" placeholder="nama_lengkap" value="<?php echo set_value('nama_lengkap')?>">
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