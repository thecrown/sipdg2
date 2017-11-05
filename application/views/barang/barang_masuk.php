<section class="content-header">
      <h1>
        Catatan Barang Masuk
      </h1>
    </section>
<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-1"></div>
        <div class="col-md-10">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Input Data Barang</h3>
            </div>

            <form class="form-horizontal" action="<?=base_url('TambahBarangMasuk') ?>" method="post">
              <div class="box-body">

                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Tanggal</label>

                  <div class="col-sm-10">
                    <div class="input-group date"><div class="input-group-addon">
                    <i class="fa fa-calendar"></i></div><input type="date" class="form-control" name="tanggal" placeholder="Tanggal"></div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Nama Barang</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3"  name="barang"  placeholder="Nama Barang">
                  </div>
                </div>
              
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Kode Satuan</label>
                  <div class="col-sm-10">
                  <select class="form-control select2" name="kode">
                    <?php if(isset($kode)){
                      foreach ($kode as $row) {?>
                    <option value="<?= $row->id_satuan?>"><?=$row->kode ?>&nbsp;-&nbsp;<?=$row->keterangan ?></option>
                    <?php } } ?>
                  </select>
                </div>
                </div>
              
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Jenis Barang</label>
                  <div class="col-sm-10">
                  <select class="form-control" name="jenis">
                    <?php if(isset($jenis)){
                      foreach ($jenis as $row) {?>
                    <option value="<?= $row->id_jenis?>"><?=$row->jenis_barang ?></option>
                    <?php } } ?>
                  </select>
                </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Jumlah</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="input1" name="stock" placeholder="Jumlah"></div>
                  
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Harga</label>

                  <div class="col-sm-10">
                    <div class="input-group date"><div class="input-group-addon">
                    <i class="fa">Rp</i></div><input type="text" class="form-control" id="input2" name="harga" placeholder="Harga Satuan"></div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Total Harga</label>

                  <div class="col-sm-10">
                    <div class="input-group date"><div class="input-group-addon">
                    <i class="fa">Rp</i></div><input type="text" class="form-control" id="output" name="total" placeholder="Total Harga"></div>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <div class="row">
                  <div class="col-xs-4 col-lg-3 col-lg-offset-1">
                <button type="submit" class="btn btn-info btn-md">Simpan</button>
                  </div>
                  <div class="col-xs-4 text-center ">
                <button type="reset" class="btn btn-info btn-md">Batal</button>
                  </div>
                  <div class="col-xs-4 ">
                <button type="submit" class="btn btn-info pull-right btn-md">Tambah</button>
                  </div>
                  </div>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
        <div class="col-md-1"></div>
      </div>
      <!-- /.row -->
    </section>