<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<title>GoGyms Admin Dashboard</title>
	<meta content="Admin Dashboard" name="description" />
	<meta content="Mannatthemes" name="author" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />

	<link rel="shortcut icon" href="<?php echo base_url();?>admin/assets/images/favicon.ico">

	<link href="<?php echo base_url();?>admin/assets/plugins/animate/animate.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>admin/assets/css/bootstrap-material-design.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>admin/assets/css/icons.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>admin/assets/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>

<!-- Begin page -->
<div class="accountbg"></div>
<div class="wrapper-page">
	<div class="display-table">
		<div class="display-table-cell">
			<diV class="container">
				<div class="row">
					<div class="col-md-6">
						<img src="<?php echo base_url();?>admin/assets/images/Artboard.png" alt="" class="img-fluid">
					</div>
					<div class="col-md-6">
						<div class="card">
							<div class="card-body">
								<div class="text-center pt-3">
									<a href="index.html">
										<!-- <img src="assets/images/logo-h-lg.png" alt="logo" height="22" /> -->
										<span style="color: red" class="text-center"><?php echo $this->session->flashdata('message_name1');?></span>
										<h2>GoGyms Admin Login</h2>
									</a>
								</div>
								<div class="px-3 pb-3">
									<form class="form-horizontal m-t-20 mb-0" action="<?php echo base_url('Login/admin_login');?>" autocomplete="on" method="post">

										<div class="form-group row">
											<div class="col-12">
												<input class="form-control" type="text" required="" placeholder="Username" id="username" name="username" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>">
											</div>
										</div>

										<div class="form-group row">
											<div class="col-12">
												<input class="form-control" type="password" required="" placeholder="Password" id="password" name="password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>">
											</div>
										</div>

										<div class="form-group row">
											<div class="col-12">
												<div class="custom-control custom-checkbox">
													<input type="checkbox" class="custom-control-input" id="customCheck1">
													<label class="custom-control-label" for="customCheck1">Remember me</label>
												</div>
											</div>
										</div>

										<div class="form-group text-right row m-t-20">
											<div class="col-12">
												<button class="btn btn-primary btn-raised btn-block waves-effect waves-light" type="submit">Log In</button>
											</div>
										</div>

									</form>
								</div>

							</div>
						</div>

					</div>

				</div>
			</diV>
		</div>
	</div>
</div>




<!-- jQuery  -->
<script src="<?php echo base_url();?>admin/assets/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>admin/assets/js/popper.min.js"></script>
<script src="<?php echo base_url();?>admin/assets/js/bootstrap-material-design.js"></script>
<script src="<?php echo base_url();?>admin/assets/js/modernizr.min.js"></script>
<script src="<?php echo base_url();?>admin/assets/js/detect.js"></script>
<script src="<?php echo base_url();?>admin/assets/js/fastclick.js"></script>
<script src="<?php echo base_url();?>admin/assets/js/jquery.slimscroll.js"></script>
<script src="<?php echo base_url();?>admin/assets/js/jquery.blockUI.js"></script>
<script src="<?php echo base_url();?>admin/assets/js/waves.js"></script>
<script src="<?php echo base_url();?>admin/assets/js/jquery.nicescroll.js"></script>
<script src="<?php echo base_url();?>admin/assets/js/jquery.scrollTo.min.js"></script>

<!-- App js -->
<script src="<?php echo base_url();?>admin/assets/js/app.js"></script>

</body>


</html>
