    <section class="content-header">
      <h1>
        Data Saldo 
      </h1>
    </section>

    <section class="content">
    <div class="row">
    <form method="post" action="<?php echo base_url('CariDataBulan'); ?>">
      <div class="col-md-5">
      	<div class="form-group">
               	<select class="form-control select2" style="width: 100%;" name="tahun" required>
                  <option value="">pilih salah satu</option>
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
               	<select class="form-control select2" style="width: 100%;"  name="bulan" required>
                  <option value="">pilih salah satu</option>
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
        <!-- <a role="button" href="#print" class="btn btn-success" data-toggle="modal"">Print</a> -->
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
                  <th colspan="2">Banyak Persediaan & Harga (Rp) Persediaan</th>
                  <th colspan="2">Banyak Penambahan & Harga (Rp) Penambahan</th>
                  <th colspan="2">Banyak pengurangan & Harga (Rp) pengurangan</th>
                  <th>Banyak Persediaan Akhir </th>
                  <th>Harga Persediaan Akhir </th>
                </tr>
                </thead>
                <tbody>
                  <?php $no=1; ?>
                  <?php foreach ($data as $key): ?>
                  <tr>
                    <td><?=$no?></td>
                   <td><?=$key->jenis_barang ?></td> 
                   <td><?=$key->nama_barang ?></td> 
                   <td><?=$key->kode ?></td> 
                   <td><?=$key->stock ?></td> 
                   <td>Rp.<?= number_format($key->harga_barang )?></td>
                    <?php $jumlah = $this->Model_barang->getpenambahan($key->id_barang); ?>
                   <td><?=$jumlah->jumlah?></td>
                   <td>Rp.<?= number_format($key->harga_barang)?></td>
                   <?php $pengurangan = $this->Model_barang->getpengurangan($key->id_barang); ?>
                   <td><?=$pengurangan->jumlah?></td>
                   <td>Rp.<?= number_format($key->harga_barang)?></td>
                   <td><?=$key->stock ?></td>
                   <td><?=$key->harga_barang ?></td>
                  </tr>
                  <?php $no++; ?>                    
                  <?php endforeach ?>

                </tbody>
                <tfoot>
                <tr>
                  <th>No</th>
                  <th>Jenis Barang</th>
                  <th>Nama Barang</th>
                  <th>Satuan</th>
                  <th colspan="2">Banyak Persediaan & Harga (Rp) Persediaan</th>
                  <th colspan="2">Banyak Penambahan & Harga (Rp) Penambahan</th>
                  <th colspan="2">Banyak pengurangan & Harga (Rp) pengurangan</th>
                  <th>Banyak Persediaan Akhir </th>
                  <th>Harga Persediaan Akhir </th>
                </tr>
                </tfoot>
              </table>
              
              <table class="table table-responsive" border="2">
              	<tr>
              		<th>Jumlah Harga Persediaan Barang</th>
              		<th>Jumlah Harga Penambahan Barang </th>
              		<th>Jumlah Harga Pengurangan Barang </th>
              		<th>Jumlah Harga Persediaan Akhir Barang </th>
              	</tr>
              	<tr>
                  <?php $hasil = $this->Model_barang->countPersediaanBarang(); ?>
                  <td>Rp.<?= number_format($hasil->Total)?></td>
                  <?php $hasil2 = $this->Model_barang->countPenambahanBarang(); ?>
                  <td>Rp.<?= number_format($hasil2->Total)?></td>
                  <?php $hasil3 = $this->Model_barang->countPenguranganBarang(); ?>
                  <td>Rp.<?= number_format($hasil3->Total)?></td>
                  <?php $hasil4 = $this->Model_barang->countPersediaanAkhirBarang(); ?>
                  <td>Rp.<?= number_format($hasil4->Total)?></td>
                </tr>
              </table>
         	</div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>