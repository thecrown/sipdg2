 <script type="text/javascript">
	function cekform()
	{
		if(!$("#nama").val())
		{
			alert('nama tidak boleh kosong');
			$("#nama").focus()
			return false;
		}
		if(!$("#sumber").val())
		{
			alert('sumber tidak boleh kosong');
			$("#sumber").focus()
			return false;
		}
	}
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
<form class= "form-horizontal" method="POST" action="<?php echo base_url();?>index.php/inventory/simpanbaru" onsubmit="return cekform();">

	<div class="col-sm-9 form-group">
		<div class="col-sm-5">
			<input type="hidden" class="form-control" name="id_barang" id="id_barang" class="span2" value="<?php echo $id_barang?>" readonly>
		</div>
	</div>

	<div class="col-sm-9 form-group">
		<label class="control-label col-sm-2">Nama Barang</label>
		<div class="col-sm-5">
			<input type="text" class="form-control" name="nama" id="nama" placeholder="nama barang" class="span2" value="<?php echo $nama?>">
		</div>
	</div>

	<div class="col-sm-9 form-group">
		<label class="control-label col-sm-2">Kategori</label>
		<div class="col-sm-5">
			<input type="radio" name="kategori" value="habispakai"<?php if($kategori=="habispakai") {echo 'checked';}?>> Habis Pakai &nbsp&nbsp
			<input type="radio" name="kategori" value="tidakhabispakai"<?php if($kategori=="tidakhabispakai") {echo 'checked';}?>> Tidak Habis Pakai
		</div>
	</div>

	<div class="col-sm-9 form-group">
		<label class="control-label col-sm-2">Sumber</label>
		<div class="col-sm-5">
			<select class="form-control" name="sumber" id=sumber placeholder="sumber">
				<option value="ATK" <?php if ($sumber=="ATK") { echo "selected=\"selected\"";} ?>>ATK</option>
				<option value="BOPTN" <?php if ($sumber=="BOPTN") { echo "selected=\"selected\"";} ?>>Pengadaan BOPTN</option>
				<option value="PNBP" <?php if ($sumber=="PNBP") { echo "selected=\"selected\"";} ?>>Pengadaan PNBP</option>
			</select>
		</div>
	</div>
	<br>
	<div class="col-sm-10 form-group">
		<label class="control-label col-sm-2"></label>
		<button type="submit" class="btn btn-primary btn-small">Simpan</button>
		<a href="<?php echo base_url(); ?>index.php/inventory" class="btn btn-primary btn-small">Kembali</a>
	</div>
</form>