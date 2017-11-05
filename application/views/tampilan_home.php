<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Aplikasi Pertanggungjawaban Barang Gudang</title>
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/bootstrap/dist/css/bootstrap.min.css');?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/font-awesome/css/font-awesome.min.css');?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/Ionicons/css/ionicons.min.css');?>">
  <!-- daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/bootstrap-daterangepicker/daterangepicker.css');?>">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css');?>">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/iCheck/all.css');?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css'); ?>">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css');?>">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="<?php echo base_url('assets/plugins/timepicker/bootstrap-timepicker.min.css');?>">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/select2/dist/css/select2.min.css');?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/AdminLTE.min.css');?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/skins/_all-skins.min.css');?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/skins/_all-skins.min.css'); ?>">
    <script src="<?php echo base_url('asset/html5shiv/dist/html5shiv.min.js'); ?>"></script>
    <script src="<?php echo base_url('asset/respond/dest/respond.min.js'); ?>"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <?php $this->load->view($sidabar); ?>
      <div class="content-wrapper">
        <?php  $this->load->view($main_view);?>
      </div>
      <footer class="main-footer">
          <center><strong>Copyright &copy; 2017 Perhutani Divisi Regional Jawa Tengah</strong> | All rights reserved.
        </footer>
        </center>
      </div>
    
    <!-- jQuery 2.2.0 -->
    <script src="<?php echo base_url('assets/js/jQuery-2.2.0.min.js'); ?>"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?php echo base_url('assets/js/jquery-ui.min.js'); ?>"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton',$.ui.button);
    </script>
    <script>
      $(function () {
        //Date picker
        $('#tanggal').datepicker({
          autoclose: true,
          format: 'yyyy-mm-dd',
          daysOfWeekDisabled: "0,6",
          startDate:'today'
        });

        $('#search_string2').datepicker({
          autoclose: true,
          format: 'mm',
          viewMode : 'months',
          minViewMode: 'months',
          changeMonth: true,
          changeYear: true
        });

        $('#search_string1').datepicker({
          autoclose: true,
          format: 'yyyy',
          viewMode : 'years',
          minViewMode: 'years',
          changeMonth: true,
          changeYear: true
        });

        //Timepicker
        $(".waktu").timepicker({
          showInputs: false,
          showMeridian: false
        });
      });
    </script>
    <script>
      $(function () {
        //DataTable
        $('#tabelku').DataTable();
        $('#tabel').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
          });
      });
    </script>
    <script>
    function confirmDialog()
    {
      tanya = confirm('Apakah Anda yakin menghapus data ini?');
      if (tanya == true) return true;
      else return false;
    }
  </script>
  <script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
  $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});

</script>
<?php 
  if (!empty($this->session->flashdata('msg'))) {
    
    echo '<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Notifikasi</h4>
        </div>
        <div class="modal-body">
          <p>'.$this->session->flashdata('msg').'</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>';
  } elseif (!empty($this->session->flashdata('msg2'))) {
     
    echo '<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Notifikasi</h4>
        </div>
        <div class="modal-body">
          <p>'.$this->session->flashdata('msg2').'</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>';
  } ?>

  <?php if (!empty($this->session->flashdata('msg') || $this->session->flashdata('msg2'))) {?>
  <script type="text/javascript">
   $(window).on('load',function(){
          $('#myModal').modal('show');
      });

  </script>
  <?php }?>
  <script>
    $('#datepicker').datepicker({
      autoclose: true
    })
    $("#input2,#input1").keyup(function () {
    $('#output').val($('#input1').val() * $('#input2').val());
    });

  </script>
  <script type="text/javascript">
    
  </script>
    <!-- Bootstrap 3.3.6 -->
    <script src="<?php echo base_url('assets/bootstrap_3_3_6/js/bootstrap.min.js'); ?>"></script>
    <!-- Datepicker -->
    <script src="<?php echo base_url('assets/datepicker/bootstrap-datepicker.js'); ?>"></script>
    <!-- Timepicker -->
    <script src="<?php echo base_url('assets/timepicker/bootstrap-timepicker.min.js'); ?>"></script>
    <!-- DataTables -->
    <script src="<?php echo base_url('assets/bower_components/select2/dist/js/select2.full.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/datatables/jquery.dataTables.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.min.js'); ?>"></script>
    <!-- Slimscroll -->
    <script src="<?php echo base_url('assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')?>"></script>
    <script src="<?php echo base_url('assets/slimScroll/jquery.slimscroll.min.js'); ?>"></script>
    <!-- Fast Click -->
    <script src="<?php echo base_url('assets/fastclick/fastclick.js'); ?>"></script>
    <!-- App -->
    <script src="<?php echo base_url('assets/bower_components/bootstrap-daterangepicker/daterangepicker.js'); ?>"></script>
    <script src="<?php echo base_url('assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/plugins/timepicker/bootstrap-timepicker.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/app.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/plugins/iCheck/icheck.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/bower_components/fastclick/lib/fastclick.js'); ?>"></script>
    <script src="<?php echo base_url('assets/dist/js/adminlte.min.js')?>"></script>
    <script src="<?php echo base_url('assets/plugins/timepicker/bootstrap-timepicker.min.js'); ?>"></script>
  </body>
</html>