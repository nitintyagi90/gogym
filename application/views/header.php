<!DOCTYPE html>
<html lang="en">

<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>GoGyms</title>
		<!-- All Plugins Css -->
        <link href="<?php echo base_url();?>web/assets/plugins/css/plugins.css" rel="stylesheet">
		<!-- Custom CSS -->
        <link href="<?php echo base_url();?>web/assets/css/styles.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="shortcut icon" href="<?php echo base_url();?>web/assets/img/go-gyms-fab.png" type="image/x-icon" /> 
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
                            <a href="<?php echo base_url('Gogym');?>" class="navbar-brand"><img src="<?php echo base_url();?>web/assets/img/go-gyms-60.png" alt="GoGyms"></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation"><span class="ti-align-right"></span></button>
                            <div class="collapse navbar-collapse hover-dropdown font-14 ml-auto" id="navigation">
                                <ul class="navbar-nav ml-auto">
									<li class="nav-item"><a class="nav-link" href="<?php echo base_url('Gogym');?>">Home</a></li>
									<li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Why GoGyms <i class="fa fa-angle-down m-l-5"></i></a>
										<ul class="b-none dropdown-menu font-14 animated fadeInUp">
											<li><a class="dropdown-item" href="#">About US</a></li>
											<li><a class="dropdown-item" href="#">Our Team</a></li>
											<li><a class="dropdown-item" href="#">Our Story</a></li>
										</ul>
									</li>
									<li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">GoGyms Services <i class="fa fa-angle-down m-l-5"></i></a>
										<ul class="b-none dropdown-menu font-14 animated fadeInUp">
											<li><a class="dropdown-item" href="#">Health Checkups Plan</a></li>
											<li><a class="dropdown-item" href="#">GoGyms Diet</a></li>
											<li><a class="dropdown-item" href="#">Launch Offers</a></li>
											<li><a class="dropdown-item" href="#">Upcoming Offers</a></li>
											<li><a class="dropdown-item" href="#">GoGyms Tips</a></li>
											<li><a class="dropdown-item" href="#">Upcoming GoGyms Events</a></li>
										</ul>
									</li>
									<li class="nav-item"><a class="nav-link" href="#">Fitness Blog</a></li>
								</ul>
								<!--<div class="act-buttons">
									<a href="javascript:void(0)" class="login btn theme-btn font-14 " data-toggle="modal" data-target="#signin" style="color: #fff;"><i class="fa fa-sign-in pr-2"></i>Login</a>
								</div>-->
								<div class="act-buttons">
									<?php if(empty($_SESSION['session_id'])){ ?>
									<a href="javascript:void(0)" class="login btn theme-btn font-14 " data-toggle="modal" data-target="#signin" style="color: #fff;"><i class="fa fa-sign-in pr-2"></i>Login</a>
									<?php } else{ ?>
									<ul style="list-style-type: none">
										<li>
											<a href="javascript:void(0)" class="login btn theme-btn font-14 "  style="color: #fff;"><?php echo $_SESSION['session_name']; ?></a>
										</li>
										<li style="padding-left: 10%;"><a href="<?php echo base_url('Auth/logout'); ?>" class="prof">Logout</a></li>
									</ul>
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
