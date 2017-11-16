<section class="content-header">
      <h1>
        Menambah Barang
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
              <h3 class="box-title">Input Data Tambah Barang</h3>
            </div>
            <form class="form-horizontal" action="<?=base_url('TambahBarangKeluarOperator') ?>" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Tanggal</label>

                  <div class="col-sm-10">
                    <div class="input-group date"><div class="input-group-addon">
                    <i class="fa fa-calendar"></i></div><input type="date" name="tanggal" class="form-control" id="inputPassword3" placeholder="Tanggal"></div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Nama Barang</label>
                  <div class="col-sm-10">
                  <select class="form-control" name="nama_barang">
                    <option>Pilih Salah Satu Barang</option>
                    <?php if(isset($barang)){
                      foreach ($barang as $row) {?>
                    <option value="<?= $row->id_barang?>" ><?=$row->nama_barang ?></option>
                    <?php } } ?>
                  </select>
                </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Jumlah</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="jumlah" id="inputPassword3" placeholder="Jumlah">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Penerima</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="penerima" id="inputPassword3" placeholder="Penerima">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <div class="row">
                  <div class="col-xs-4 col-lg-3 col-lg-offset-1">
                <button type="submit" name="tambah" value="1" class="btn btn-info btn-md">Simpan</button>
                  </div>
                  <div class="col-xs-4 text-center ">
                <button type="submit" class="btn btn-info btn-md">Batal</button>
                  </div>
                  <div class="col-xs-4 ">
                <button type="submit" name="tambah" value="2" class="btn btn-info pull-right btn-md">Tambah</button>
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
