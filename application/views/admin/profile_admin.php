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
            <form class="form-horizontal" action="<?=base_url('TambahBarangMasuk') ?>" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Username :</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" value="<?php echo $this->session->userdata('username'); ?>"  readonly>
                  </div>
                </div>
                <div class="form-group">

                  <label for="inputPassword3" class="col-sm-2 control-label">Nama Lengkap :</label>
                  
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" value="<?php echo $this->session->userdata('nama_lengkap'); ?>"  readonly>
                  </div>
                </div>
                <div class="form-group">

                  <label for="inputPassword3" class="col-sm-2 control-label">No Telephone :</label>
                  
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword3" value="<?php echo $this->session->userdata('no_telephone'); ?>"  readonly>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <div class="row">
                  <div class="col-xs-4 col-lg-3 col-lg-offset-1">
                  
                  <!-- <span><a role="button" href="#gantipassword<?=$this->session->userdata('id_admin');?>" class="btn btn-success" data-toggle="modal"><i class="fa fa-gear bigicon">&nbsp;&nbsp; Ganti Password</i></a></span> -->
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

