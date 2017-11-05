    <section class="content-header">
      <h1>
        Data Masuk
        <small>advanced tables</small>
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
              <h3 class="box-title">Data Table With Full Features</h3>
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
                  <td><?=$key->harga ?></td>
                  <?php $total = $key->harga * $key->jumlah; ?>
                  <td><?=$total ?></td>
                  <td>
                    <span data-toggle="tooltip" title="Update Data"><a role="button" href="#editsk<?=$key->id_masuk;?>" class="btn btn-success" data-toggle="modal"><i class="fa fa-upload bigicon"></i></a></span>
                    &nbsp;&nbsp;&nbsp;
                    <span data-toggle="tooltip" title="Delete Data"><a role="button" href="#delete<?=$key->id_masuk;?>" class="btn btn-danger" data-toggle="modal"><i class="fa fa-trash bigicon"></i></a></span>
                    &nbsp;&nbsp;&nbsp;
                    
                  </td>
                </tr>
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