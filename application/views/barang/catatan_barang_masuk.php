    <section class="content-header">
      <h1>
        Data Barang Masuk
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <!-- <span><a role="button" href="<?=base_url('cetakmasuk') ?>" class="btn btn-success"><i class="fa fa-print bigicon" >&nbsp;&nbsp;Cetak</i></a></span> -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Tanggal</th>
                  <th>Kode Satuan</th>
                  <th>Nama Barang</th>
                  <th>Jumlah</th>
                  <th>Jenis Barang</th>
                  <th>Harga/Satuan</th>
                  <th>Total Harga</th>
                  <th>Lokasi</th> 
                  <th>Pilihan</th>
                </tr>
                </thead>
                <tbody>
                  <?php $no=1; ?>
                  <?php foreach ($data as $key) {
                    ?>
                <tr>
                  <td><?=$no ?></td>
                  <td><?=$key->tanggal ?></td>
                  <td><?=$key->kode ?></td>
                  <td><?=$key->nama_barang ?></td>
                  <td><?=$key->jumlah ?></td>
                  <td><?=$key->jenis_barang ?></td>
                  <td>Rp <?=number_format($key->harga_barang) ?></td>
                  <?php $total = $key->harga_barang * $key->jumlah; ?>
                  <td>Rp <?=number_format($total) ?></td>
                  <td><?=$key->lokasi ?></td>
                  <td>
                    <span data-toggle="tooltip" title="Update Data"><a role="button" href="#editsk<?=$key->id_masuk;?>" class="btn btn-success" data-toggle="modal"><i class="fa fa-upload bigicon"></i></a></span>
                    &nbsp;&nbsp;&nbsp;
                    <span data-toggle="tooltip" title="Delete Data"><a role="button" href="#delete<?=$key->id_masuk;?>" class="btn btn-danger" data-toggle="modal"><i class="fa fa-trash bigicon"></i></a></span>
                    &nbsp;&nbsp;&nbsp;
                    
                  </td>
                </tr>

                <!-- Modal Delete -->
                <div class="modal fade" id="delete<?=$key->id_masuk;?>" role="dialog">
                  <div class="modal-dialog">
                  
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Hapus Data Pencatatan Barang Masuk</h4>
                      </div>
                      <div class="modal-body col-xs-12">
                        <p>Apa Anda Yakin Ingin Menghapus Catatan Masuk Barang ?
                           
                          <br>Nama Barang :&nbsp;<?=$key->nama_barang; ?> 
                          <br>Jumlah :&nbsp;<?=$key->jumlah;?>
                          <br>Harga Satuan :&nbsp;<?=$key->harga_barang;?>
                          <br>Tanggal Pencatatan :&nbsp;<?=$key->tanggal;?>
                        </p>
                      </div>
                      <div class="modal-footer">
                        <a href="<?php echo base_url('HapusPencatatanBarang/').$key->id_masuk; ?>" class="btn btn-danger"><i class="fa fa-trash bigicon"></i>  Hapus Data</a>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal Hapus</button>
                      </div>
                    </div>
                    
                  </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="editsk<?=$key->id_masuk;?>" role="dialog">
                  <div class="modal-dialog">
                  
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Update Barang Masuk</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form class="form-horizontal" method="post" action="<?=base_url('UpdateCatatBarangMasuk/').$key->id_masuk;?>">
                          <div class="form-group">
                            <label for="inputPassword3" class="form-control-label">Tanggal<span class="text-danger">*</span></label>
                            <input type="date" name="tanggal" class="form-control" value="<?=$key->tanggal;?>" id="recipient-name" required>
                          </div>
                          <div class="form-group">
                            <label for="inputPassword3" class="form-control-label">Nama Barang<span class="text-danger">*</span></label>
                            <input type="text" name="nama" class="form-control" value="<?=$key->nama_barang;?>" id="recipient-name" required>
                          </div>
                          <div class="form-group">
                            <label for="recipient-name" class="form-control-label">Kode Satuan:<span class="text-danger">*</span></label>
                          <select class="form-control select2" name="kode" required>
                            <option value="">pilih salah satu</option>
                            <?php if(isset($kode)){
                              foreach ($kode as $row) {?>
                            <option value="<?= $row->id_satuan?>"><?=$row->kode ?>&nbsp;-&nbsp;<?=$row->keterangan ?></option>
                            <?php } } ?>
                          </select>
                          </div>
                          <div class="form-group">
                            <label for="recipient-name" class="form-control-label">Jenis Barang :<span class="text-danger">*</span></label>
                          <select class="form-control select2" name="jenis" required>
                            <option value="">pilih salah satu</option>
                            <?php if(isset($jenis)){

                              foreach ($jenis as $row) {
                                ?>
                            <option value="<?= $row->id_jenis?>"><?=$row->jenis_barang ?></option>
                            <?php } }  ?>
                          </select>
                          </div>
                          <div class="form-group">
                            <label for="recipient-name" class="form-control-label">Jumlah :<span class="text-danger">*</span></label>
                            <input type="text" name="jumlah" class="form-control" value="<?=$key->jumlah;?>" id="input1" required>
                          </div>
                          <div class="form-group">
                            <label for="recipient-name" class="form-control-label">Harga :<span class="text-danger">*</span></label>
                            <div class="input-group date"><div class="input-group-addon">
                    <i class="fa">Rp</i></div><input type="text" name="harga" class="form-control" value="<?=$key->harga_barang;?>" id="input2" required>
                          </div>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="form-control-label">Lokasi :<span class="text-danger">*</span></label>
                            <input type="text" name="lokasi" class="form-control" value="<?=$key->lokasi;?>" id="input1" required>
                          </div>
                        
                      
                      <div class="modal-footer">
                        <button type="submit" class="btn btn-info">Update Barang</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal Update</button>
                      </div>
                      </form>
                    

                  </div>
                    
                  </div>
                </div>
              </div>

                  <?php $no++; ?>
                  <?php } ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>No</th>
                  <th>Tanggal</th>
                  <th>Kode Satuan</th>
                  <th>Nama Barang</th>
                  <th>Jumlah</th> 
                  <th>Jenis Barang</th>
                  <th>Harga/Satuan</th>
                  <th>Total Harga</th>
                  <th>Lokasi</th> 
                  <th>Pilihan</th>
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