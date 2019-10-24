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

	<link rel="shortcut icon" href="<?php echo base_url();?>web/assets/img/go-gyms-fab.png">

	<!--Morris Chart CSS -->
	<link href="<?php echo base_url();?>admin/assets/plugins/fullcalendar/vanillaCalendar.css" rel="stylesheet" type="text/css"  />
	<link href="<?php echo base_url();?>admin/assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url();?>admin/assets/plugins/chartist/css/chartist.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>admin/assets/plugins/morris/morris.css">
	<link rel="stylesheet" href="<?php echo base_url();?>admin/assets/plugins/metro/MetroJs.min.css">

	<link  href="<?php echo base_url();?>admin/assets/plugins/carousel/owl.carousel.min.css" rel="stylesheet">
	<link  href="<?php echo base_url();?>admin/assets/plugins/carousel/owl.theme.default.min.css" rel="stylesheet">

	<link href="<?php echo base_url();?>admin/assets/plugins/animate/animate.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>admin/assets/css/bootstrap-material-design.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>admin/assets/css/icons.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>admin/assets/css/style.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url();?>admin/assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url();?>admin/assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
	<!-- Responsive datatable examples -->
	<link href="<?php echo base_url();?>admin/assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>admin/assets/plugins/timepicker/tempusdominus-bootstrap-4.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>admin/assets/plugins/timepicker/bootstrap-material-datetimepicker.css" rel="stylesheet">
    <link href="<?php echo base_url();?>admin/assets/plugins/clockpicker/jquery-clockpicker.min.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>admin/assets/plugins/colorpicker/asColorPicker.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>admin/assets/plugins/select2/select2.min.css" rel="stylesheet" type="text/css" />

    <link href="<?php echo base_url();?>admin/assets/plugins/animate/animate.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>admin/assets/css/bootstrap-material-design.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>admin/assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>admin/assets/css/style.css" rel="stylesheet" type="text/css">
</head>


<body>

<!-- Loader -->
<div id="preloader"><div id="status"><div class="spinner"></div></div></div>

<!-- Navigation Bar-->
<header id="topnav">
	<div class="topbar-main">
		<div class="container-fluid">

			<!-- Logo container-->
			<div class="logo">
				<!-- Text Logo -->
				<!--<a href="index.html" class="logo">-->
				<!--Urora-->
				<!--</a>-->
				<!-- Image Logo -->
				<a href="<?=base_url('Admin/dashboard')?>" class="logo">
					<!--  <img src="<?php echo base_url();?>admin/assets/images/logo-sm.png" alt="" height="50" class="logo-small">
                            <img src="<?php echo base_url();?>admin/assets/images/logo-h-lg.png" alt="" class="logo-large"> -->
					<h3>Gym Admin Dashboard</h3>
				</a>

			</div>
			<!-- End Logo container-->


			<div class="menu-extras topbar-custom">

				<ul class="list-inline float-right mb-0 ">
					<!-- language-->

					<li class="list-inline-item dropdown notification-list">
						<a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
						   aria-haspopup="false" aria-expanded="false">
							<i class="ti-bell noti-icon"></i>
							<div id="notification">


							</div>

						</a>
						<div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-menu-lg">
							<!-- item-->


							<!-- item-->
							<a href="javascript:void(0);" class="dropdown-item notify-item">
								<div class="notify-icon bg-primary"><i class="mdi mdi-cart-outline"></i></div>
								<p class="notify-details"><b>Price Update</b><small class="text-muted">Gym Price update.</small></p>
							</a>


						</div>
					</li>
					<li class="list-inline-item dropdown notification-list">
						<div class="dropdown notification-list nav-pro-img">
							<a class="dropdown-toggle nav-link arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
							   aria-haspopup="false" aria-expanded="false">
								<img src="<?php echo base_url();?>admin/assets/images/users/avatar-3.jpg" alt="user" class="rounded-circle">
							</a>
							<div class="dropdown-menu dropdown-menu-right profile-dropdown ">
								<!-- item-->
								<div class="dropdown-item noti-title">
									<h5>Welcome</h5>
								</div>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="<?php echo base_url('Admin/logout')?>"><i class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
							</div>
						</div>
					</li>
					<li class="menu-item list-inline-item">
						<!-- Mobile menu toggle-->
						<a class="navbar-toggle nav-link" id="mobileToggle">
							<div class="lines">
								<span></span>
								<span></span>
								<span></span>
							</div>
						</a>
						<!-- End mobile menu toggle-->
					</li>
				</ul>

			</div>
			<!-- end menu-extras -->

			<div class="clearfix"></div>

		</div> <!-- end container -->
	</div>
	<!-- end topbar-main -->

	<!-- MENU Start -->
	<div class="navbar-custom">
		<div class="container-fluid">
			<div id="navigation">
				<!-- Navigation Menu-->
				<ul class="navigation-menu text-center">
					<li class="has-submenu ">
						<a href="<?=base_url('Admin/dashboard')?>"><i class="mdi mdi-view-dashboard"></i>Dashboard</a>
					</li>
					<li class="has-submenu ">
						<a href="<?=base_url('Admin/amenities')?>"><i class="mdi mdi-cards"></i>Add Amenities</a>
					</li>
					<li class="has-submenu ">
						<a href="<?=base_url('Admin/profession')?>"><i class="mdi mdi-animation"></i>Add Profession</a>
					</li>
                    <li class="has-submenu ">
                        <a href="<?=base_url('Admin/ListGym')?>"><i class="mdi mdi-animation"></i>Gym Owner</a>
                    </li>

                    <li class="has-submenu ">
                        <a href="<?=base_url('Admin/gymDetail')?>"><i class="mdi mdi-animation"></i>Gym</a>
                    </li>

                    <li class="has-submenu ">
                        <a href="<?=base_url('Admin/category')?>"><i class="mdi mdi-animation"></i>Gym Category</a>
                    </li>

                    <li class="has-submenu ">
                        <a href="<?=base_url('Admin/team')?>"><i class="mdi mdi-animation"></i>Team Details</a>
                    </li>
                    <li class="has-submenu ">
                        <a href="<?=base_url('Admin/gogyms_diet')?>"><i class="mdi mdi-animation"></i>Gogyms Diet</a>
                    </li>
                    <li class="has-submenu ">
                        <a href="<?=base_url('Admin/launch_offer')?>"><i class="mdi mdi-animation"></i>Launch Offer</a>
                    </li>
                    <li class="has-submenu ">
                        <a href="<?=base_url('Admin/launch_offer_list')?>"><i class="mdi mdi-animation"></i>Launch Offer List</a>
                    </li>
                    <li class="has-submenu ">
                        <a href="<?=base_url('Admin/event')?>"><i class="mdi mdi-animation"></i>Add Event</a>
                    </li>
                    <li class="has-submenu ">
                        <a href="<?=base_url('Admin/event_list')?>"><i class="mdi mdi-animation"></i>Event List</a>
                    </li>
				</ul><!-- End navigation menu -->
			</div> <!-- end #navigation -->
		</div> <!-- end container -->
	</div> <!-- end navbar-custom -->
</header>
<!-- End Navigation Bar-->
