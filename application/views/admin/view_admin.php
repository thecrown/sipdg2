

  
    <section class="content-header">
      <h1>
        Data Tables
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
                  <th>Id Admin</th>
                  <th>Username</th>
                  <th>Nama Lengkap</th>
                  <th>Options</th>
                </tr>
                </thead>
                <tbody>
                  <?php $no=1; ?>
                  <?php foreach ($data as $key) {?>
                <tr>
                  <td><?= $no ?></td>
                  <td><?= $key->id_admin ?></td>
                  <td><?= $key->username ?></td>
                  <td><?= $key->nama_lengkap ?></td>
                  <td>
                    <a href="<?= base_url('EditAdmin/').$key->id_admin ?>" data-toggle="tooltip" title="Edit Admin" class="btn btn-info"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                    <a href="<?= base_url('HapusAdmin/').$key->id_admin ?>" data-toggle="tooltip" title="Hapus Admin" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></a>
                    
                  </td>
                </tr>
                <?php $no++; ?>
                <?php } ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>No</th>
                  <th>Id Admin</th>
                  <th>Username</th>
                  <th>Nama Lengkap</th>
                  <th>Options</th>
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