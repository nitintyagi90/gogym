<!DOCTYPE html>
<html lang="en">

<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="google-site-verification" content="I4CfQZdsjnA6jlEFURWGWPLP8DdoNnMxguGsgqdLDiI" />
		<title>GoGyms</title>
		<!-- All Plugins Css -->
        <link href="<?php echo base_url();?>web/assets/plugins/css/plugins.css" rel="stylesheet">
		<!-- Custom CSS -->
        <link href="<?php echo base_url();?>web/assets/css/styles.css" rel="stylesheet">
        <link href="<?php echo base_url();?>web/assets/bootstrap-clockpicker.min.css" rel="stylesheet">


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="shortcut icon" href="<?php echo base_url();?>web/assets/img/go-gyms-fab.png" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    </head>
	<body>
		<!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
			<!-- ============================================================== -->
            <!-- Top header  -->
            <!-- ============================================================== -->
            <div class="topbar static-head" id="top">
                <div class="header light">
                    <div class="container po-relative">
                        <nav class="navbar navbar-expand-lg header-nav-bar">
                            <a href="<?php echo base_url();?>" class="navbar-brand"><img src="<?php echo base_url();?>web/assets/img/go-gyms-new .png" alt="GoGyms"></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation"><span class="ti-align-right"></span></button>
                            <div class="collapse navbar-collapse hover-dropdown font-14 ml-auto" id="navigation">
                                <ul class="navbar-nav ml-auto">
									<li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>">Home</a></li>
									<li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Why GoGyms <i class="fa fa-angle-down m-l-5"></i></a>
										<ul class="b-none dropdown-menu font-14 animated fadeInUp">
											<li><a class="dropdown-item" href="<?php echo base_url('Gogym/about'); ?>">About US</a></li>
											<li><a class="dropdown-item" href="<?php echo base_url('Gogym/team'); ?>">Our Team</a></li>
											<li><a class="dropdown-item" href="<?php echo base_url('Gogym/story'); ?>">Our Story</a></li>
										</ul>
									</li>
									<li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">GoGyms Services <i class="fa fa-angle-down m-l-5"></i></a>
										<ul class="b-none dropdown-menu font-14 animated fadeInUp">
											<li><a class="dropdown-item" href="<?php echo base_url('Gogym/healthcheckup'); ?>">Health Checkups</a></li>
											<li><a class="dropdown-item" href="<?php echo base_url('Gogym/gogyms_diet'); ?>">GoGyms Diet</a></li>
											<li><a class="dropdown-item" href="<?php echo base_url('Gogym/launch_offer'); ?>">Launch Offers</a></li>
										    <!--<li><a class="dropdown-item" href="#">GoGyms Tips</a></li>-->
											<li><a class="dropdown-item" href="<?php echo base_url('Gogym/upcoming_event'); ?>">Upcoming GoGyms Events</a></li>
										</ul>
									</li>
									<li class="nav-item"><a class="nav-link" href="#">Fitness Blog</a></li>
                                    <li class="nav-item"><a class="nav-link" href="<?php echo base_url('Gogym/bmi'); ?>">BMI Calculator</a></li>
								</ul>
								<!--<div class="act-buttons">
									<a href="javascript:void(0)" class="login btn theme-btn font-14 " data-toggle="modal" data-target="#signin" style="color: #fff;"><i class="fa fa-sign-in pr-2"></i>Login</a>
								</div>-->
								<div class="act-buttons">
									<?php if(empty($_SESSION['user_type']==1)){ ?>
									<!--<a href="javascript:void(0)" class="login btn theme-btn font-14 " data-toggle="modal" data-target="#signin" style="color: #fff;"><i class="fa fa-sign-in pr-2"></i>Login</a>-->
                                        <a href="<?php echo base_url('Gogym/login'); ?>" class="login btn theme-btn font-14 "  style="color: #fff;"><i class="fa fa-sign-in pr-2"></i>Login</a>
									<?php } else{ ?>
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle login btn theme-btn font-14" href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #fff;">Welcome <?php echo $_SESSION['session_name']; ?><i class="fa fa-angle-down m-l-5"></i></a>
                                            <ul class="b-none dropdown-menu font-14 animated fadeInUp">
                                                <?php if($_SESSION['user_type']==1){ ?>
                                                <li><a class="dropdown-item" href="<?php echo base_url('Gogym/user_dashboard"'); ?>">My Profile</a></li>
                                                <?php }?>
                                                <?php if($_SESSION['user_type']==2){ ?>
                                                <li><a class="dropdown-item" href="<?php echo base_url('Gogym/dashboard"'); ?>">My Profile</a></li>
                                                <?php }?>

                                                <li><a class="dropdown-item" href="<?php echo base_url('Auth/logout'); ?>">Logout</a></li>
                                            </ul>
                                        </li>
                                    </ul>
									<!--<ul style="list-style-type: none">
										<li>
											<a href="javascript:void(0)" class="login btn theme-btn font-14 "  style="color: #fff;"></a>
										</li>
										<li style="padding-left: 10%;"><a href="<?php /*echo base_url('Auth/logout'); */?>" class="prof">Logout</a></li>
									</ul>-->
										<?php } ?>
								</div>
								
							</div>
						</nav>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<!-- ============================================================== -->
			<!-- Top header  -->
			<!-- ============================================================== -->
