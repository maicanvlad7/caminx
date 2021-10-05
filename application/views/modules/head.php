<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="<?= $seo->keywords; ?>">
	<meta name="description" content="<?= $seo->description; ?>">
	<!-- css file -->
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
	<!-- Responsive stylesheet -->
	<link rel="stylesheet" href="<?= base_url('assets/css/responsive.css'); ?>">
	<!-- Title -->
	<title><?= $seo->title; ?></title>
	<!-- Favicon -->
	<link href="<?= base_url('assets/images/favicon.ico'); ?>" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
	<link href="<?= base_url('assets/images/favicon.ico'); ?>" sizes="128x128" rel="shortcut icon" />

	<script src='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js'></script>
	<link href='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css' rel='stylesheet' />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>

<div class="preloader"></div>

<!-- Main Header Nav -->
<header class="header-nav menu_style_home_one navbar-scrolltofixed stricky stricky-fixed slideInDown animated main-menu">
	<div class="container-fluid p0">
		<!-- Ace Responsive Menu -->
		<nav>
			<!-- Menu Toggle btn-->
			<div class="menu-toggle">
				<img class="nav_logo_img img-fluid" src="<?= base_url(''); ?>images/header-logo.svg" alt="header-logo.svg">
				<button type="button" id="menu-btn">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<a href="<?= base_url(''); ?>" class="navbar_brand float-left dn-smd">
				<img class="logo1 img-fluid" src="<?= base_url('assets/images/header-logo.svg'); ?>" alt="Logo Dormitorio">
				<img class="logo2 img-fluid" src="<?= base_url('assets/images/header-logo2.svg'); ?>" alt="Logo Dormitorio">
				<span>Camin<i style="color:#2650D9;font-style: normal!important;">X</i></span>
			</a>
			<ul id="respMenu" class="ace-responsive-menu text-right" data-menu-style="horizontal">
				<li>
					<a href="<?= base_url(''); ?>"><span class="title">Acasa</span></a>
				</li>
				<li>
					<a href="<?= base_url('/contact'); ?>"><span class="title">Contact</span></a>
				</li>
				<li>
					<a href="<?= base_url(''); ?>"><span class="title flaticon-wifi"> API</span></a>
				</li>
				<?php if($this->session->userdata('id')) {?>
					<li class="list-inline-item list_s"><a href="#" class="btn flaticon-avatar"> <span class="dn-1200"><?= $this->session->userdata('username'); ?></span></a></li>
				<?php }else{ ?>
					<li class="list-inline-item list_s"><a href="#" class="btn flaticon-avatar" data-toggle="modal" data-target=".bd-example-modal-lg"> <span class="dn-1200">Login/Register</span></a></li>
				<?php }?>
			</ul>
		</nav>
	</div>
</header>
<!-- Modal -->
<div class="sign_up_modal modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-md mt100" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body container pb20 pl0 pr0 pt0">
				<div class="row">
					<div class="col-lg-12">
						<ul class="sign_up_tab nav nav-tabs" id="myTab" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Login</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Inregistrare</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="tab-content container" id="myTabContent">
					<div class="row mt40 tab-pane fade show active pl20 pr20" id="home" role="tabpanel" aria-labelledby="home-tab">
						<div class="col-lg-12">
							<div class="login_form">
								<form action="<?= base_url('auth/login'); ?>" method="POST">
									<div class="input-group mb-2 mr-sm-2">
										<input type="text" class="form-control" id="inlineFormInputGroupUsername2" name="email" placeholder="Email" required>
									</div>
									<div class="input-group form-group mb5">
										<input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password" required>
									</div>
									<div class="form-group custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="exampleCheck1">
										<label class="custom-control-label" for="exampleCheck1">Tine-ma minte!</label>
										<a class="btn-fpswd float-right" href="#">Am uitat parola?</a>
									</div>
									<button type="submit" class="btn btn-log btn-block btn-thm">Login</button>
									<p class="text-center mb30 mt20">Nu ai un cont? <a class="text-thm" href="#">Inregistrare</a></p>
									<hr>
									<div class="row justify-content-center">
										<p >COMING SOON</p><br>
									</div>
									<div class="row mt30">
										<div class="col-lg-6">
											<button disabled type="submit" class="btn btn-fb btn-block"><i class="fa fa-facebook float-left mt5"></i> Log In via Facebook</button>
										</div>
										<div class="col-lg-6">
											<button disabled type="submit" class="btn btn-googl btn-block"><i class="fa fa-google float-left mt5"></i> Log In via Google+</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="row mt40 tab-pane fade pl20 pr20" id="profile" role="tabpanel" aria-labelledby="profile-tab">
						<div class="col-lg-12">
							<div class="sign_up_form">
								<ul class="nav nav-pills mb-4" id="pills-tab" role="tablist">
									<li class="nav-item" role="presentation">
										<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Student</a>
									</li>
								</ul>
								<div class="tab-content" id="pills-tabContent">
									<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
										<form action="<?= base_url('auth/register'); ?>" method="POST">
											<div class="form-group input-group">
												<input type="email" class="form-control"  name="email" placeholder="Email" required>
											</div>
											<div class="form-group input-group">
												<input type="text" class="form-control"  name="username" placeholder="Username" required>
											</div>
											<div class="form-group input-group mb20">
												<input type="password" class="form-control"  name="password" placeholder="Parola" required>
											</div>
											<div class="form-group input-group">
												<div class="ui_kit_whitchbox">
													<div class="custom-control custom-switch">
														<input type="checkbox" class="custom-control-input" id="customSwitch1" name="student"  required>
														<label class="custom-control-label" for="customSwitch1">Sunt student</label>
													</div>
												</div>
											</div>
											<button type="submit" class="btn btn-log btn-block btn-thm">Inregistrare</button>
											<hr>
											<div class="row justify-content-center">
												<p>Coming SOON</p>
											</div>
											<div class="row">
												<div class="col-lg-6">
													<button disabled type="submit" class="btn btn-block btn-fb"><i class="fa fa-facebook float-left mt5"></i> Log In via Facebook</button>
												</div>
												<div class="col-lg-6">
													<button disabled type="submit" class="btn btn-block btn-googl"><i class="fa fa-google float-left mt5"></i> Log In via Google+</button>
												</div>
											</div>
										</form>
									</div>
									<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
										<form action="#">
											<div class="form-group input-group">
												<input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
											</div>
											<div class="form-group input-group">
												<input type="text" class="form-control" id="exampleInputName2" placeholder="Username">
											</div>
											<div class="form-group input-group mb20">
												<input type="password" class="form-control" id="exampleInputPassword3" placeholder="Parola">
											</div>
											<button type="submit" class="btn btn-log btn-block btn-thm">Inregistrare !</button>
											<hr>
											<div class="row">
												<div class="col-lg-6">
													<button type="submit" class="btn btn-block btn-fb"><i class="fa fa-facebook float-left mt5"></i> Log In via Facebook</button>
												</div>
												<div class="col-lg-6">
													<button type="submit" class="btn btn-block btn-googl"><i class="fa fa-google float-left mt5"></i> Log In via Google+</button>
												</div>
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
	</div>
</div>

<!-- Main Header Nav For Mobile -->
<div id="page" class="stylehome1 h0">
	<div class="mobile-menu">
		<div class="header stylehome1">
			<div class="main_logo_home2 text-left">
				<img class="nav_logo_img img-fluid mt15" src="<?= base_url('assets/images/header-logo2.svg'); ?>" alt="header-logo2.svg">
				<span class="mt15">CaminX</span>
			</div>
			<ul class="menu_bar_home2">
				<li class="list-inline-item"><a class="custom_search_with_menu_trigger msearch_icon" ><span class="flaticon-loupe"></span></a></li>
				<li class="list-inline-item"><a class="muser_icon" href="page-register.html"><span class="flaticon-avatar"></span></a></li>
				<li class="list-inline-item"><a class="menubar" href="#menu"><span></span></a></li>
			</ul>
		</div>
	</div><!-- /.mobile-menu -->
	<nav id="menu" class="stylehome1">
		<ul>
			<li>
				<a href="<?= base_url(''); ?>"><span class="title">Acasa</span></a>
			</li>
			<li>
				<a href="<?= base_url('contact'); ?>"><span class="title">Contact</span></a>
			</li>
			<li>
				<a href="<?= base_url(''); ?>"><span class="title flaticon-wifi"> API</span></a>
			</li>
			<?php if($this->session->userdata('id')) {?>
				<li class="list-inline-item add_listing"><a href="page-add-new-listing.html"><span class="icon">+ <?= $this->session->userdata('username'); ?></span><span class="dn-lg"></span></a></li>
			<?php }else{ ?>
				<li class="list-inline-item list_s"><a href="#" class="btn flaticon-avatar" data-toggle="modal" data-target=".bd-example-modal-lg"> <span class="dn-1200">Login/Register</span></a></li>
			<?php }?>
		</ul>
	</nav>
</div>




