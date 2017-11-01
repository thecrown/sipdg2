<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Aplikasi Pertanggungjawaban Barang Gudang</title>
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap_3_3_6/css/bootstrap.min.css'); ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css'); ?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo base_url('assets/ionicons/css/ionicons.min.css'); ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/_all-skins.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') ?>">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url('assets/iCheck/flat/blue.css'); ?>">
    <!-- Datepicker -->
    <link rel="stylesheet" href="<?php echo base_url('assets/datepicker/datepicker3.css'); ?>">
    <!-- Timepicker -->
    <link rel="stylesheet" href="<?php echo base_url('assets/timepicker/bootstrap-timepicker.min.css'); ?>">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url('assets/datatables/dataTables.bootstrap.css'); ?>">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
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
</script>
    <!-- Bootstrap 3.3.6 -->
    <script src="<?php echo base_url('assets/bootstrap_3_3_6/js/bootstrap.min.js'); ?>"></script>
    <!-- Datepicker -->
    <script src="<?php echo base_url('assets/datepicker/bootstrap-datepicker.js'); ?>"></script>
    <!-- Timepicker -->
    <script src="<?php echo base_url('assets/timepicker/bootstrap-timepicker.min.js'); ?>"></script>
    <!-- DataTables -->
    <script src="<?php echo base_url('assets/datatables/jquery.dataTables.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.min.js'); ?>"></script>
    <!-- Slimscroll -->
    <script src="<?php echo base_url('assets/slimScroll/jquery.slimscroll.min.js'); ?>"></script>
    <!-- Fast Click -->
    <script src="<?php echo base_url('assets/fastclick/fastclick.js'); ?>"></script>
    <!-- App -->
    <script src="<?php echo base_url('assets/js/app.min.js'); ?>"></script>
  </body>
</html>