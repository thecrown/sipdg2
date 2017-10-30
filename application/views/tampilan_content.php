<div class="content-wrapper">
    
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1> 
      <ol class="breadcrumb">
      	<i class="icon-home home-icon"></i>
        <a href=><i class="fa fa-dashboard"></i><?php echo $judul; ?></a>
      	<li><small><h5><i class="icon-double-angle-right"></i><?php echo $sub_judul; ?></h5></small></li>
      </ol>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <form>
          <text"center">
        </form>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
            <div class="text-center">
              <p><b>DATA BARANG MASUK</b></p>
            </div>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="<?php echo site_url()?>" class="small-box-footer">Details <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-purple">
            <div class="inner">
            <div class="text-center">
              <p><b>DATA BARANG KELUAR</b></p>
            </div>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="<?php echo site_url()?>" class="small-box-footer">Details <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
            <div class="text-center">
              <p><b>SALDO BULANAN</b></p>
            </div>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="<?php echo site_url()?>" class="small-box-footer">Details<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
            <div class="text-center">
              <p><b>LAPORAN PERTANGGUNGJAWABAN</b></p>
            </div>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="<?php echo site_url()?>" class="small-box-footer">Details<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>     

      <!-- ./col -->
      </div>

      <!-- /.row -->
      <!-- Main row -->

      <div class="row">
    <div class="col-md-12">
      <div class="box box-default">
        <div class="box-header with-border">
          <h4 class="box-title"><b>Selamat Datang di</b></h4>
          <div class="box-tools pull-right">
            
            <button type="button" class="small-box bg-red" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>

     <div class="box-body">
          <center><img src="<?php echo base_url('assets/img/logo pkl.png');?>" height="140" width="140"></center>
          <h3><b><center>APLIKASI PEMBUATAN PERTANGGUNGJAWABAN 
          <br>BARANG GUDANG PERLENGKAPAN KERJA</b></br></center></h3>
          <h4><center>BIDANG SARANA DAN PRASARANA PERUM PERHUTANI 
          <br>DIVISI REGIONAL JAWA TENGAH </br></center></h4>
      </div>
        <!-- Morris chart - Sales -->
              <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 90px;"></div>
              <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 90px;"></div>