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
            <form class="form-horizontal" action="<?=base_url('ViewBarangKeluar') ?>" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Nama Barang</label>
                  <div class="col-sm-10">
                  <select required class="form-control" name="nama_barang">
                    <option value="">Pilih Salah Satu Barang</option>
                    <?php if(isset($barang)){
                      foreach ($barang as $row) {?>
                    <option value="<?= $row->id_barang ?>" ><?=$row->nama_barang ?> &nbsp;&nbsp; Rp<?=number_format($row->harga_barang); ?></option>
                    <?php } } ?>
                  </select>
                </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <div class="row">
                  <div class="col-xs-4 col-lg-3 col-lg-offset-1">
                
                  </div>
                  <div class="col-xs-4 text-center ">
                <button type="reset" class="btn btn-info btn-md">Batal</button>
                  </div>
                  <div class="col-xs-4 ">
                <button type="submit" name="tambah" class="btn btn-info pull-right btn-md">Next</button>
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
