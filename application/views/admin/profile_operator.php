<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-1"></div>
        <div class="col-md-10">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Profile <?php echo $this->session->userdata('username')?></h3>
            </div>
              <div class="box-body">               
                
                <div class="input-group">
                  <span class="input-group-addon">Username :</span>
                  <input id="msg" type="text" class="form-control" readonly value="<?php echo $this->session->userdata('username'); ?>" name="msg" placeholder="Additional Info">
                </div>
                <br>
                <div class="input-group">
                  <span class="input-group-addon">Nama Lengkap :</span>
                  <input id="msg" type="text" class="form-control" value="<?php echo $this->session->userdata('nama_lengkap'); ?>"  readonly name="msg" placeholder="Additional Info">
                </div>
                <br>
                <div class="input-group">
                  <span class="input-group-addon">No Telephone :</span>
                  <input id="msg" type="text" class="form-control" value="<?php echo $this->session->userdata('no_telephone'); ?>"  readonly name="msg" placeholder="Additional Info">
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <div class="row">
                  <div class="col-xs-4 col-lg-3 col-lg-offset-1">
                  
                  <span><a role="button" href="#gantipassword" class="btn btn-success" data-toggle="modal"><i class="fa fa-gear bigicon">&nbsp;&nbsp; Ubah Password</i></a></span>
               
                    <!-- Modal -->
                    <div class="modal fade" id="gantipassword" role="dialog">
                      <div class="modal-dialog">
                      
                        <!-- Modal content-->
                        <div class="modal-content">
                          <form action="<?=base_url('GantiPassOperator/').$this->session->userdata('user_id');?>" method="POST">
                            <input type="hidden" name="role" value="<?=$this->session->userdata('role') ?>">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Ubah Password</h4>
                          </div>
                          <div class="modal-body">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                              <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                            <br>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                              <input id="password" type="password" class="form-control" name="password2" placeholder="Ulangi Password">
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                          </form>
                        </div>
                        
                      </div>
                    </div>
                    

                    </div>
                  </div>
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

