<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $test['title'] ?></title>
    <link rel="icon" type="image/x-icon" href="<?= base_url().'/public/admin/assets/img/'?>favicon.png">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url()?>/public/admin/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?php echo base_url()?>/public/admin/AdminLTE-3.2.0/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url()?>/public/admin/AdminLTE-3.2.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?php echo base_url()?>/public/admin/AdminLTE-3.2.0/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url()?>/public/admin/AdminLTE-3.2.0/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?php echo base_url()?>/public/admin/AdminLTE-3.2.0/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url()?>/public/admin/AdminLTE-3.2.0/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?php echo base_url()?>/public/admin/AdminLTE-3.2.0/plugins/summernote/summernote-bs4.min.css">
    <title><?php echo $test['title']?></title>
    <style>
      .errors ul{
        margin:0px;
        padding:0px;
      }
      .errors ul li{
        list-style-type: none;
      }
    </style>
  </head>


  <body>

  <body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
      <?php echo view('manage/layouts/header', $test);?>
      <?php echo view('manage/layouts/menu');?>
      <?php echo view($test['subview'], $test);?>
      <?php echo view('manage/layouts/footer');?>
    </div>
  </div>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->
  
    <!-- jQuery -->
    <script src="<?php echo base_url()?>/public/admin/AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?php echo base_url()?>/public/admin/AdminLTE-3.2.0/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url()?>/public/admin/AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="<?php echo base_url()?>/public/admin/AdminLTE-3.2.0/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="<?php echo base_url()?>/public/admin/AdminLTE-3.2.0/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="<?php echo base_url()?>/public/admin/AdminLTE-3.2.0/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="<?php echo base_url()?>/public/admin/AdminLTE-3.2.0/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?php echo base_url()?>/public/admin/AdminLTE-3.2.0/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="<?php echo base_url()?>/public/admin/AdminLTE-3.2.0/plugins/moment/moment.min.js"></script>
    <script src="<?php echo base_url()?>/public/admin/AdminLTE-3.2.0/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?php echo base_url()?>/public/admin/AdminLTE-3.2.0/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="<?php echo base_url()?>/public/admin/AdminLTE-3.2.0/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="<?php echo base_url()?>/public/admin/AdminLTE-3.2.0/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url()?>/public/admin/AdminLTE-3.2.0/dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url()?>/public/admin/AdminLTE-3.2.0/dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?php echo base_url()?>/public/admin/AdminLTE-3.2.0/dist/js/pages/dashboard.js"></script>
    <script src="<?php echo base_url('/public/admin/assets/js/script.js')?>"></script>

    <script src="<?php echo base_url()?>/public/admin/AdminLTE-3.2.0/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url()?>/public/admin/AdminLTE-3.2.0/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url()?>/public/admin/AdminLTE-3.2.0/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url()?>/public/admin/AdminLTE-3.2.0/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?php echo base_url()?>/public/admin/AdminLTE-3.2.0/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url()?>/public/admin/AdminLTE-3.2.0/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?php echo base_url()?>/public/admin/AdminLTE-3.2.0/plugins/jszip/jszip.min.js"></script>
    <script src="<?php echo base_url()?>/public/admin/AdminLTE-3.2.0/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="<?php echo base_url()?>/public/admin/AdminLTE-3.2.0/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="<?php echo base_url()?>/public/admin/AdminLTE-3.2.0/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url()?>/public/admin/AdminLTE-3.2.0/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url()?>/public/admin/AdminLTE-3.2.0/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

    <script src="<?php echo base_url('/public/admin/assets/lib/ckeditor/ckeditor.js')?>"></script>
    <script src="<?php echo base_url()?>/public/admin/AdminLTE-3.2.0/plugins/daterangepicker/daterangepicker.js"></script>
    <script>
      $('#reservation').daterangepicker();
      $('#reservationdate').datetimepicker({
          format: 'L'
      });
      $('#reservationdate1').datetimepicker({
          format: 'L'
      });
    </script>
    <script>
      $(function () {
        $("#example1").DataTable({
          "responsive": true, "lengthChange": false, "autoWidth": false,
          "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false,
          "responsive": true,
        });
      });

      $(function () {
        $("#example3").DataTable({
          "responsive": true, 
          "lengthChange": false, 
          "autoWidth": false,
        });
        
        $('#example4').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false,
          "responsive": true,
        });
      });

      // $(function () {
      //   $("#example3").DataTable({
      //     "responsive": true, "lengthChange": false, "autoWidth": false,
      //     "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      //   }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      //   $('#example2').DataTable({
      //     "paging": true,
      //     "lengthChange": false,
      //     "searching": false,
      //     "ordering": true,
      //     "info": true,
      //     "autoWidth": false,
      //     "responsive": true,
      //   });
      // });

      // $(function () {
      //   $("#example4").DataTable({
      //     "responsive": true, "lengthChange": false, "autoWidth": false,
      //     "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      //   }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      //   $('#example2').DataTable({
      //     "paging": true,
      //     "lengthChange": false,
      //     "searching": false,
      //     "ordering": true,
      //     "info": true,
      //     "autoWidth": false,
      //     "responsive": true,
      //   });
      // });

                        CKEDITOR.plugins.addExternal( 'codesnippet', '<?php echo base_url()?>/public/admin/assets/lib/ckeditor/plugins/codesnippet/', 'plugin.js' );
                        // CKEDITOR.plugins.addExternal( 'autolink', '<?php echo base_url()?>/public/admin/assets/lib/ckeditor/plugins/autolink/', 'plugin.js' );
                        // CKEDITOR.plugins.addExternal( 'bootstrapTabs', '<?php echo base_url()?>/public/admin/assets/lib/ckeditor/plugins/bootstrapTabs/', 'plugin.js' );
                        // CKEDITOR.plugins.addExternal( 'btgrid', '<?php echo base_url()?>/public/admin/assets/lib/ckeditor/plugins/btgrid/', 'plugin.js' );
                        // CKEDITOR.plugins.addExternal( 'ckeditorfa', '<?php echo base_url()?>/public/admin/assets/lib/ckeditor/plugins/ckeditorfa/', 'plugin.js' );
                        // CKEDITOR.plugins.addExternal( 'contents', '<?php echo base_url()?>/public/admin/assets/lib/ckeditor/plugins/contents/', 'plugin.js' );
                        // CKEDITOR.plugins.addExternal( 'easyimage', '<?php echo base_url()?>/public/admin/assets/lib/ckeditor/plugins/easyimage/', 'plugin.js' );
                        // CKEDITOR.plugins.addExternal( 'emoji', '<?php echo base_url()?>/public/admin/assets/lib/ckeditor/plugins/emoji/', 'plugin.js' );
                        // CKEDITOR.plugins.addExternal( 'gg', '<?php echo base_url()?>/public/admin/assets/lib/ckeditor/plugins/gg/', 'plugin.js' );
                        // CKEDITOR.plugins.addExternal( 'imageresize', '<?php echo base_url()?>/public/admin/assets/lib/ckeditor/plugins/imageresize/', 'plugin.js' );
                        // CKEDITOR.plugins.addExternal( 'table', '<?php echo base_url()?>/public/admin/assets/lib/ckeditor/plugins/table/', 'plugin.js' );

                        var editor = CKEDITOR.replace( 'content', {
                            // extraPlugins: 'codesnippet, autolink, bootstrapTabs, btgrid, ckeditorfa, contents,easyimage, emoji, gg, imageresize, table ',
                            // entities_latin: false,
                            // entities_greek: false
                            extraPlugins: 'codesnippet',
                            entities_latin: false,
                            entities_greek: false
                        })
                        var editor = CKEDITOR.replace( 'content1', {
                            // extraPlugins: 'codesnippet, autolink, bootstrapTabs, btgrid, ckeditorfa, contents,easyimage, emoji, gg, imageresize, table ',
                            // entities_latin: false,
                            // entities_greek: false
                            extraPlugins: 'codesnippet',
                            entities_latin: false,
                            entities_greek: false
                        })

    </script>

    <!-- Seo -->
    <script>
      const input = document.getElementById('main_key');
      input.addEventListener('input', seo_check);

      function removeTags(str) {
          if ((str===null) || (str===''))
              return false;
          else
              str = str.toString();
              str = str.replace( /(<([^>]+)>)/ig, '');
              
          // Regular expression to identify HTML tags in 
          // the input string. Replacing the identified 
          // HTML tag with a null string.
          return str;
      }

      // The "change" event is fired whenever a change is made in the editor.
      editor.on( 'change', function( evt ) {
          // getData() returns CKEditor's HTML content.
          console.log( 'string: ' + removeTags(evt.editor.getData()));
      });

      function seo_check(e) {
          console.log(e.target.value);
      }
  </script>
<!-- checkbox in site setting -->
<script>
  $("#site_status").click( function(){
    if($(this).is(':checked')){
      $("#site_status").attr("value", "1");
    } else{
      $("#site_status").attr("value", "0");
    }
  });
</script>
  </body>
</html>

