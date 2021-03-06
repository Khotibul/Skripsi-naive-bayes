<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= $title ?> | Sister Izin Pondok Pesantren MHI Bangsalsari</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="<?= base_url()?>assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url()?>assets/css/icons/fontawesome/styles.min.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url()?>assets/css/minified/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url()?>assets/css/minified/core.min.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url()?>assets/css/minified/components.min.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url()?>assets/css/minified/colors.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="<?= base_url()?>assets/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="<?= base_url()?>assets/js/core/libraries/bootstrap.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="<?= base_url()?>assets/js/core/app.js"></script>
	<!-- /theme JS files -->

</head>
<!--  sidebar-xs -->
<body class="navbar-top">

	<!-- Main navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-header">
			<a class="navbar-brand" href="<?php echo base_url() ?>">Sister Izin Pondok Pesantren MHI Bangsalsari</a>

			<ul class="nav navbar-nav pull-right visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
				<li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav">
				<li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>

			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown dropdown-user">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<img src="<?= base_url('images/users/'.$user->user_img)?>" alt="">
						<span><?php echo $user->username ?></span>
						<i class="caret"></i>
					</a>
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        </div>
                    </div>
                </div>
            </div>
					<ul class="dropdown-menu dropdown-menu-right">
						<li><a href="<?php echo base_url('auth/logout') ?>"><i class="icon-switch2" onclick="return confirm('yakin Keluar ?')"></i>Keluar</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<?php $this->load->view('layout/sidebar'); ?>

			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header">
					<div class="page-header-content">
						<div class="page-title text-center">
							<h4> 
							<span class="text-semibold">
								<?php echo $title ?>	
							</span> 
							</h4>
						</div>
					</div>

					<div class="breadcrumb-line">
						<?php echo $breadcrumbs ?>
					</div>
				</div>
				<!-- /page header -->

			<?php $this->load->view($content); ?>

			<!-- Footer -->
			<div class="text-center">
			<span>Copyright &copy; PonPes Mamba'ul Khoiriatil Islamiyah <?= date('Y'); ?></span>
			</div>
			<!-- /footer -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

</body>
</html>
