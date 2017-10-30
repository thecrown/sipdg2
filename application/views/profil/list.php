<section class="content-header">
	<h1>
		Daftar Admin
		<small>List</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Data Admin</li>
	</ol>
</section>

<!-- Main Content -->
<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box">
				<div class="box-header with-border">
					<h3 class="box-title">Data Admin</h3>
				</div>
				<div class="box-body">
					<a href="<?php echo site_url('profil/tambah')?>"><button type="button" class="btn btn-sm btn-info"><i class="fa fa-user-plus"></i>Tambah</button></a>
					<br><br>
					<table id="tabelku" class="table table-bordered table-hover">
						<thead>
						<tr>
							<th>ID Admin</th>
							<th>Username</th>
							<th>Nama Lengkap</th>
							<th>Aksi</th>
						</tr>
						</thead>
						<tbody>
							<?php foreach($admin as $ad)
							{
								echo '<tr>';
									echo '<td>'.$ad['id_admin'].'</td>';
									echo '<td>'.$ad['username'].'</td>';
									echo '<td>'.$ad['nama_lengkap'].'</td>';
									echo '<td><a href="'.site_url("profil/edit/".$ad['username']).'" class="btn btn-success"><i class="fa fa-edit"></i> Edit</a></td>';
								echo '</tr>';
							}
							?>
						</tbody>
					</table>
				</div>
				<div class="box-footer clearfix">
					<ul class="pagination pagination-sm no-margin pull-right"></ul>
				</div>
			</div>
		</div>
	</div>
</section>