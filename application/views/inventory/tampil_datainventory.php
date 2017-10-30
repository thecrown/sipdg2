<script type="text/javascript">
			jQuery(function($) {
				var oTable1 = $('#dynamic-table').dataTable( {
					"aoColumns": [
					  null, null, null, null, null,
					  { "bSortable": false }
					] } );
			})
		</script>

<div class="berhasil">
	<?php
		$info = $this->session->flashdata('info');
		if(!empty($info))
		{
			echo $info;
		}
	?>
</div>

<br>
<table id="dynamic-table" class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Barang</th>
			<th>Kategori</th>
			<th>Sumber</th>
			<th>Jumlah</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<tr>
		<?php
			$no = 1;
			foreach ($data->result() as $row) {
		?>
			<td><?php echo $no++; ?></td>
			<td><?php echo $row->nama ;?></td>
			<td><?php echo $row->kategori ;?></td>
			<td><?php echo $row->sumber ;?></td>
			<td><?php echo $row->jumlah ;?></td>
			<td width="15%" align="center">
				<a href="<?php echo base_url();?>index.php/barang_keluar/ambil/<?php echo $row->id_barang; ?>" class="btn btn-primary btn-small">Ambil</a>
				<a href="<?php echo base_url();?>index.php/inventory/edit/<?php echo $row->id_barang; ?>" class="btn btn-danger btn-small">Edit</a>
			</td>
		</tr>
		<?php }?>
	</tbody>
</table>

<p>
<a href="<?php echo base_url();?>index.php/inventory/cetak" class="btn btn-primary btn-small">Print</a>
</p>