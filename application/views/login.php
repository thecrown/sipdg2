<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible"content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> SIPDG | Log in </title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/bootstrap_3_3_6/css/bootstrap.min.css');?>" rel="stylesheet">

    <!-- Custom style for this template -->
    <link href="<?php echo base_url('assets/css/signin.css');?>" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 supportof HTML5 elements and media queries -->
    
    <!-- [if lt IE 9]>
      <script src="<?php echo base_url('asset/html5shiv/html5shiv.min.js');?>"></script>
      <script src="<?php echo base_url('asset/respond/respond.min.js');?>"></script>
    <![endif] -->
  </head>
  <body>
    <section id="logo">
      <img src="<?php echo base_url();?>assets/img/logo pkl.png" alt="Perhutani" height"150" width=="80"/>
      <h1><strong>APLIKASI PERTANGGUNGJAWABAN BARANG GUDANG BAGIAN SARANA DAN PRASARANA</strong></h1>
      <h2>PERUM PERHUTANI DIVISI REGIONAL JAWA TENGAH</h2>
    </section>

    <section class="container">
      <section class="row">
        <form role="login" action="<?php echo base_url('verif');?>" method="post">

          
          <div class="form-group">      
            <input type="text" id="username" name="username" placeholder="Masukkan Username" class="form-control" autofocus="autofocus" value="<?php echo set_value('username')?>"><span class="glyphicon glyphicon-user"></span>
          </div>
          <div class="form-group">
            <input type="password" id="password" name="password" placeholder="Masukkan Password" class="form-control" value="<?php echo set_value('password')?>"><span class="glyphicon glyphicon-lock"></span>
          </div>
          <button type="submit" name="submit" class="btn btn-block btn-primary">Login</button>

          <?php 
            if (!empty($this->session->flashdata('err_msg'))) {
            echo '<div class="alert alert-danger alert-dismissable" style="width:100%;"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a><ul style="list-style-type:none;"><li>'.$this->session->flashdata('err_msg').'</li></ul></div>';
            } 
          ?>
        </form>
      </section>
    </section>

    <script type="text/javascript" src="<?php echo base_url('assets/jquery_1_12_0/jquery-1.12.0.min.js');?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/bootstrap_3_3_6/js/bootstrap.min.js');?>"></script>
    <!--IE10 i=viewport hack for Surface/desktop Windows 8 bug -->
    <script type="text/javascript" src="<?php echo base_url('assets/js/ie10-viewport-bug-workaround.js');?>"></script>
  </body>
</html>