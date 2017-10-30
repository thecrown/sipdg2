<script type="text/javascript">
	function cekform()
	{
		if(!$("#currpassword").val())
		{
			alert('password lama tidak boleh kosong');
			$("#currpassword").focus()
			return false;
		}

		if(!$("#newpassword").val())
		{
			alert('password baru tidak boleh kosong');
			$("#currpassword").focus()
			return false;
		}

		if(!$("#confpassword").val())
		{
			alert('konfirmasi password baru tidak boleh kosong');
			$("#confpassword").focus()
			return false;
		}
	}
</script>

<?php
$info = $this->session->flashdata('info');
if(!empty($info))
{
	echo $info;
}
?>

<br>
<form class= "form-horizontal" method="POST" action="<?php echo base_url();?>index.php/setting/updatePwd" onsubmit="return cekform();">
	<div class="form-group">
		<label class="control-label col-sm-2">Password Lama</label>
		<div class="col-sm-4">
			<input type="password" class="form-control" name="password" id=currpassword placeholder="password lama" >
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-2">Password Baru</label>
		<div class="col-sm-4">
			<input type="password" class="form-control" name="newpassword" id="newpassword" placeholder="password baru" >
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-2">Konfirm Password Baru</label>
		<div class="col-sm-4">
			<input type="password" class="form-control" name="confpassword" id=confpassword placeholder="Konfirm password baru" >
		</div>
	</div>

	<div>
		<p></p><p></p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<button type="submit" class="btn btn-primary btn-small">Simpan</button>
		<a href="<?php echo base_url(); ?>index.php/setting" class="btn btn-primary btn-small">Batal</a>
	</div>
</form>