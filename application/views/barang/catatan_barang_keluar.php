    <section class="content-header">
      <h1>
        Data Barang Keluar 
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
              <span <?php if($this->session->userdata('role')!="admin"){echo "hidden";} ?>><a role="button" href="<?=base_url('cetakkeluar') ?>" class="btn btn-success"><i class="fa fa-print bigicon" >&nbsp;&nbsp;Cetak</i></a></span>
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
                  <th>Jumlah </th>
                  <th>Jenis</th>
                  <th>Harga</th>
                  <th>Total Harga</th>
                  <th>Penerima</th>
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
                  <td><?=$key->penerima ?></td>
                  <td>
                    <span data-toggle="tooltip" title="Update Data"><a role="button" href="#editsk<?=$key->id_keluar;?>" class="btn btn-success" data-toggle="modal"><i class="fa fa-upload bigicon"></i></a></span>
                    &nbsp;&nbsp;&nbsp;
                    <span <?php if($this->session->userdata('role')!="admin"){echo "hidden";} ?> data-toggle="tooltip" title="Delete Data"><a role="button" href="#delete<?=$key->id_keluar;?>" class="btn btn-danger" data-toggle="modal"><i class="fa fa-trash bigicon"></i></a></span>
                    &nbsp;&nbsp;&nbsp;
                    
                  </td>
                </tr>
                <!-- Modal Delete -->
                <div class="modal fade" id="delete<?=$key->id_keluar;?>" role="dialog">
                  <div class="modal-dialog">
                  
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Hapus Data Pencatatan Barang Masuk</h4>
                      </div>
                      <div class="modal-body col-xs-12">
                        <p>Apa Anda Yakin Ingin Menghapus Catatan Keluar Barang ?
                           
                          <br>Nama Barang :&nbsp;<?=$key->nama_barang; ?> 
                          <br>Jumlah :&nbsp;<?=$key->jumlah;?>
                          <br>Harga Satuan :&nbsp;<?=$key->harga_barang;?>
                          <br>Tanggal Pencatatan :&nbsp;<?=$key->tanggal;?>
                        </p>
                      </div>
                      <div class="modal-footer">
                        <a href="<?php echo base_url('HapusPencatatanBarangKeluar/').$key->id_keluar; ?>" class="btn btn-danger"><i class="fa fa-trash bigicon"></i>  Hapus Data</a>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Batal Hapus</button>
                      </div>
                    </div>
                    
                  </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="editsk<?=$key->id_keluar;?>" role="dialog">
                  <div class="modal-dialog">
                  
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Update Barang Keluar</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form class="form-horizontal" method="post" action="<?=base_url('UpdateCatatBarangKeluar/').$key->id_keluar;?>">
                          <div class="form-group">
                            <label for="inputPassword3" class="form-control-label">Tanggal<span class="text-danger">*</span></label>
                            <input required type="date" name="tanggal" class="form-control" value="<?=$key->tanggal;?>" id="recipient-name">
                          </div>
                          <div class="form-group">
                            <label for="recipient-name" class="form-control-label">Nama Barang:<span class="text-danger">*</span></label>
                          <select class="form-control select2" name="nama" required>
                            <option value="">Pilih salah satu</option>
                            <?php if(isset($nama)){
                              foreach ($nama as $row) {?>
                            <option value="<?=$row->id_barang ?>"><?=$row->nama_barang ?></option>
                            <?php } } ?>
                          </select>
                          </div>
                          <div class="form-group">
                            <label for="inputPassword3" class="form-control-label">Jumlah<span class="text-danger">*</span></label>
                            <input required type="text" name="jumlah" class="form-control" value="<?=$key->jumlah;?>" id="recipient-name">
                          </div>
                          <div class="form-group">
                            <label for="inputPassword3" class="form-control-label">Penerima<span class="text-danger">*</span></label>
                            <input required type="text" name="penerima" class="form-control" value="<?=$key->penerima;?>" id="recipient-name">
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
                  <th>Jumlah </th>
                  <th>Jenis</th>
                  <th>Harga</th>
                  <th>Total Harga</th>
                  <th>Penerima</th>
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