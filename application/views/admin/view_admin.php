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
              <span data-toggle="tooltip" title="Tambah Admin"><a role="button" href="#addadmin" class="btn btn-success" data-toggle="modal"><i class="fa fa-pencil-square-o bigicon" >&nbsp;&nbsp;Tambah Admin</i></a></span>
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
                  <th>No Telephone</th>
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
                  <td><?= $key->no_telephone ?></td>
                  <td>
                    <span data-toggle="tooltip" title="Delete Data"><a role="button" href="#delete<?=$key->id_admin;?>" class="btn btn-danger" data-toggle="modal"><i class="fa fa-trash bigicon"></i></a></span>
                    &nbsp;&nbsp;&nbsp;
                    <span data-toggle="tooltip" title="Update Data"><a role="button" href="#editsk<?=$key->id_admin;?>" class="btn btn-success" data-toggle="modal"><i class="fa fa-upload bigicon"></i></a></span>
                    &nbsp;&nbsp;&nbsp;
                  </td>
                </tr>
                 <!-- Modal -->
                <div class="modal fade" id="editsk<?=$key->id_admin;?>" role="dialog">
                  <div class="modal-dialog">
                  
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Update Data Admin</h4>
                      </div>
                      <div class="modal-body col-xs-12">
                        <form class="form-horizontal" method="post" action="<?=base_url('UpdateAdmin');?>">
                          <input type="hidden" name="id" value="<?=$key->id_admin; ?>">
                          <div class="form-group">
                            <label class="control-label">Username <span class="text-danger">*</span></label>
                            <div class=""> 
                              <input type="text" class="form-control" name="username" value="<?= $key->username ?>">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label" for="subject">Nama Lengkap <span class="text-danger">*</span></label>
                            <div class="">
                              <input type="text" class="form-control" name="nama_lengkap" value="<?= $key->nama_lengkap ?>">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label" for="subject">No Telephone<span class="text-danger">*</span></label>
                            <div class="">
                              <input type="text" class="form-control" name="no_telephone" value="<?= $key->no_telephone ?>">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label" for="subject">Password<span class="text-danger">*</span></label>
                            <div class="">
                              <input type="password" class="form-control" name="Password" value="">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label" for="subject">Re-Type Password<span class="text-danger">*</span></label>
                            <div class="">
                              <input type="password" class="form-control" name="matchPassword" value="">
                            </div>
                          </div>

                          <div class="form-group"> 
                            <div class="pull-right">
                              <button type="submit" name="fileSubmit" class="btn btn-primary">Simpan Perubahan</button>
                            </div>
                          </div>
                        </form>
                      </div>
                      <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                      </div>
                    </div>
                    
                  </div>
                </div>

              <!-- Modal -->
                <div class="modal fade" id="addadmin" role="dialog">
                  <div class="modal-dialog">
                  
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Add Data Admin</h4>
                      </div>
                      <div class="modal-body col-xs-12">
                        <form class="form-horizontal" method="post" action="<?=base_url('AddAdmin');?>">
                          <input type="hidden" name="id" value="">
                          <div class="form-group">
                            <label class="control-label">Username <span class="text-danger">*</span></label>
                            <div class=""> 
                              <input type="text" class="form-control" name="username" value="">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label" for="subject">Nama Lengkap <span class="text-danger">*</span></label>
                            <div class="">
                              <input type="text" class="form-control" name="nama_lengkap" value="">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label" for="subject">No Telephone <span class="text-danger">*</span></label>
                            <div class="">
                              <input type="text" class="form-control" name="no_telephone" value="">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label" for="subject">Password<span class="text-danger">*</span></label>
                            <div class="">
                              <input type="password" class="form-control" name="Password" value="">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label" for="subject">Re-Type Password<span class="text-danger">*</span></label>
                            <div class="">
                              <input type="password" class="form-control" name="matchPassword" value="">
                            </div>
                          </div>

                          <div class="form-group"> 
                            <div class="pull-right">
                              <button type="submit" name="fileSubmit" class="btn btn-primary">Simpan Perubahan</button>
                            </div>
                          </div>
                        </form>
                      </div>
                      <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
                      </div>
                    </div>
                    
                  </div>
                </div>


                <!-- Modal Delete -->
                <div class="modal fade" id="delete<?=$key->id_admin;?>" role="dialog">
                  <div class="modal-dialog">
                  
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Delete Data</h4>
                      </div>
                      <div class="modal-body col-xs-12">
                        <p>Are You Sure Want To Delete This Admin?
                          
                          <br>Name :&nbsp;<?=$key->nama_lengkap; ?> 
                          <br>Username :&nbsp;<?=$key->username;?>
                        </p>
                      </div>
                      <div class="modal-footer">
                        <a href="<?php echo base_url('HapusAdmin/').$key->id_admin; ?>" class="btn btn-danger" data-toggle="tooltip" title="Hapus Data"><i class="fa fa-trash bigicon"></i> Delete Data</a>
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
                  <th>Id Admin</th>
                  <th>Username</th>
                  <th>Nama Lengkap</th>
                  <th>No Telephone</th>
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