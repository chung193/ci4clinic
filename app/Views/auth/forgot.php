<!doctype html>
<html lang="vi">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quên mật khẩu</title>
    <link rel="icon" type="image/x-icon" href="<?= base_url().'/public/admin/assets/img/'?>favicon.png">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url()?>/public/admin/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url()?>/public/admin/AdminLTE-3.2.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url()?>/public/admin/AdminLTE-3.2.0/dist/css/adminlte.min.css">
  </head>
  <body class="hold-transition login-page">
  <div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Quản trị </b>Nội dung</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Điền đúng email để lấy lại mật khẩu</p>
      <?php if(session()->getFlashdata('msg')):?>
        <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
      <?php endif;?>
      <form action="<?php echo base_url()?>/auth/forgot/sendresetlink" method="post">

        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email" value="<?= set_value('email') ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-7">
            
          </div>
          <!-- /.col -->
          <div class="col-5">
            <button type="submit" class="btn btn-primary btn-block">Gửi mail</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

    <!-- jQuery -->
    <script src="<?php echo base_url()?>/public/admin/AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url()?>/public/admin/AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url()?>/public/admin/AdminLTE-3.2.0/dist/js/adminlte.min.js"></script>
  </body>
</html>

