<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login Sistem Informasi Izin Pesantren MHI</title>

  <!-- Global stylesheets -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url() ?>assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url() ?>assets/css/minified/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url() ?>assets/css/minified/core.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url() ?>assets/css/minified/components.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url() ?>assets/css/minified/colors.min.css" rel="stylesheet" type="text/css">
  <!-- /global stylesheets -->

  <!-- Core JS files -->
  <script type="text/javascript" src="<?php echo base_url() ?>assets/js/plugins/loaders/pace.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>assets/js/core/libraries/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>assets/js/core/libraries/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>assets/js/plugins/loaders/blockui.min.js"></script>
  <!-- /core JS files -->

  <!-- Theme JS files -->
  <script type="text/javascript" src="<?php echo base_url() ?>assets/js/plugins/forms/styling/uniform.min.js"></script>

  <script type="text/javascript" src="<?php echo base_url() ?>assets/js/core/app.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>assets/js/pages/login.js"></script>
  <!-- /theme JS files -->

</head>

<body class="hold-transition login-page" style="overflow-y: hidden;background:url(
	'<?php echo base_url('assets/images/masjid mhi.jpg');?>')no-repeat;background-size:100%;">  
  <!-- Page container -->
  <div class="page-container login-container">

<?php if ($message): ?>
  <br>
  <div class="col-sm-4"></div>
  <div class="col-sm-4">
    <div class="alert alert-danger no-border">
      <button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Keluar</span></button>
        <span class="text-semibold">Error! </span> <?php echo $message;?> 
    </div>    
  </div>
  <div class="col-sm-4"></div>
<?php endif ?>

    <!-- Page content -->
    <div class="page-content">

      <!-- Main content -->
      <div class="content-wrapper">

        <!-- Content area -->
        <div class="content">

          <!-- Advanced login -->
          <?php echo form_open("auth/login");?>
            <div class="panel panel-body login-form">

              <div class="text-center">
              <img class="hold-transition login-page" style="overflow-y: hidden;background:url(
	'<?php echo base_url('assets/images/LOGO PON PES MHI.png');?>')no-repeat;background-size:100%;">
                <h5 class="content-group-lg">Login <br>Sistem Prediksi Izin Santri</h5>
              </div>

              <div class="form-group has-feedback has-feedback-left">
                <?php echo form_input($identity);?>
                <div class="form-control-feedback">
                  <i class="icon-user text-muted"></i>
                </div>
              </div>

              <div class="form-group has-feedback has-feedback-left">
                <?php echo form_input($password);?>
                <div class="form-control-feedback">
                  <i class="icon-lock2 text-muted"></i>
                </div>
              </div>

              <div class="form-group login-options">
                <div class="row">
                  <div class="col-sm-6">
                    <label class="checkbox-inline">
                      <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
                      Ingat kata sandi
                    </label>
                  </div>
                  <!--
                  <div class="col-sm-6 text-right">
                   <a href="forgot_password"><?php echo lang('login_forgot_password');?></a>
                  </div>
                  -->
                </div>
              </div>

              <div class="form-group">
                <button type="submit" class="btn bg-blue btn-block">Masuk <i class="icon-arrow-right14 position-right"></i></button>
              </div>
              <div class="form-group">
                <button type="submit" class="btn bg-blue btn-block">Registrasi <i class="icon-arrow-right14 position-right"></i></button>
              </div>
              <!--
              <div class="content-divider text-muted form-group"><span>or sign in with</span></div>
              <ul class="list-inline form-group list-inline-condensed text-center">
                <li><a href="#" class="btn border-indigo text-indigo btn-flat btn-icon btn-rounded"><i class="icon-facebook"></i></a></li>
                <li><a href="#" class="btn border-pink-300 text-pink-300 btn-flat btn-icon btn-rounded"><i class="icon-dribbble3"></i></a></li>
                <li><a href="#" class="btn border-slate-600 text-slate-600 btn-flat btn-icon btn-rounded"><i class="icon-github"></i></a></li>
                <li><a href="#" class="btn border-info text-info btn-flat btn-icon btn-rounded"><i class="icon-twitter"></i></a></li>
              </ul>


              <div class="content-divider text-muted form-group"><span>Don't have an account?</span></div>
              <a href="login_registration.html" class="btn btn-default btn-block content-group">Sign up</a>
              <span class="help-block text-center no-margin">By continuing, you're confirming that you've read our <a href="#">Terms &amp; Conditions</a> and <a href="#">Cookie Policy</a></span>
              -->
            </div>

 
          <?php echo form_close();?>
          <!-- /advanced login -->


          <!-- Footer -->
          <div class="footer text-muted">
          <span>Copyright &copy; PonPes Mamba'ul Khoiriatil Islamiyah <?= date('Y'); ?></span>
          </div>
          <!-- /footer -->

        </div>
        <!-- /content area -->

      </div>
      <!-- /main content -->

    </div>
    <!-- /page content -->

  </div>
  <!-- /page container -->

</body>
</html>

