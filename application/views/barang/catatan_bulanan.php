    <section class="content-header">
      <h1>
        Data Masuk
        <small>advanced tables</small>
      </h1>
    </section>

    <section class="content">
    <div class="row">
    <form method="post" action="<?php echo base_url('CariDataBulan'); ?>">
      <div class="col-md-5">
      	<div class="form-group">
               	<select class="form-control select2" style="width: 100%;">
                  <option>Pilih Tahun</option>
                  <option value="2016">2016</option>
                  <option value="2017">2017</option>
                  <option value="2018">2018</option>
                  <option value="2019">2019</option>
                  <option value="2020">2020</option>
                  <option value="2021">2021</option>
  	       		</select>
         	</div>
      </div>
      <div class="col-md-5">
      	<div class="form-group">
               	<select class="form-control select2" style="width: 100%;">
                  <option>Pilih Bulan</option>
                  <option value="1">Januari</option>
                  <option value="2">Februari</option>
                  <option value="3">Maret</option>
                  <option value="4">April</option>
                  <option value="5">Mei</option>
                  <option value="6">Juni</option>
                  <option value="7">Juli</option>
                  <option value="8">Agustus</option>
                  <option value="9">September</option>
                  <option value="10">Oktober</option>
                  <option value="11">November</option>
                  <option value="12">Desember</option>
  	       		</select>
         	</div>
      </div>
      <div class="col-md-2">
      	<button type="submit" class="btn btn-info">Cari</button>
      </div>
      </form>
     </div>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">

            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Jenis Barang</th>
                  <th>Nama Barang</th>
                  <th>Satuan</th>
                  <th>Banyak & Harga (Rp) Persediaan </th>
                  <th>Banyak & Harga (Rp)  Penambahan </th>
                  <th>Banyak & Harga (Rp)  Pengurangan </th>
                  <th>Banyak Persediaan Akhir </th>
                  <th>Harga Persediaan Akhir (Rp)</th>
                </tr>
                </thead>
                <tbody>
                	<?php $no=1; ?>
                	<?php if(isset($data)){ ?>
                	<?php foreach ($data as $key) {?>
                	<?php $where = array(
                		'nama_barang'=>$key->nama_barang,
                		'jenis_barang'=>$key->id_jenis,
                		'kode_satuan'=> $key->kode_satuan
                	);
                	$where2 = array(
                		'kode_barang' =>$key->id_barang 
                	);
      				$data2 = $this->Model_barang->getdataMasuk($where);
      				$data3 = $this->Model_barang->getdataKeluar($where2); 
      				?>

                <tr>
                	
                  <td><?=$no; ?></td>
                  <td><?=$key->jenis_barang ?></td>
                  <td><?=$key->nama_barang ?></td>
                  <td><?=$key->kode ?></td>
                  <td><?=$key->stock ?>&nbsp;&nbsp;||&nbsp;&nbsp;Rp&nbsp;<?=number_format($key->harga_barang) ?></td>
                  <?php foreach ($data2 as $key2) {?>
                  <td><?=$key2->jumlah ?>&nbsp;&nbsp;||&nbsp;&nbsp;Rp&nbsp;<?=number_format($key2->harga) ?></td>
              		<?php }?>
              		<?php foreach ($data3 as $key3) {?>
                  <td><?=$key3->jumlah ?>&nbsp;&nbsp;||&nbsp;&nbsp;Rp&nbsp;<?=number_format($key3->harga) ?></td>
              		<?php }?>
                  <td><?=$key->stock ?></td>
                  <td>&nbsp;&nbsp;Rp&nbsp;<?=number_format($key->harga_barang) ?></td>
                </tr>
                <?php $no++; ?>
                <?php } } ?>
                </tbody>
                <tfoot>
                <tr>
                <th>No</th>
                  <th>Jenis Barang</th>
                  <th>Nama Barang</th>
                  <th>Satuan</th>
                  <th>Banyak & Harga (Rp) Persediaan </th>
                  <th>Banyak & Harga (Rp)  Penambahan </th>
                  <th>Banyak & Harga (Rp)  Pengurangan </th>
                  <th>Banyak Persediaan Akhir </th>
                  <th>Harga Persediaan Akhir (Rp)</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>