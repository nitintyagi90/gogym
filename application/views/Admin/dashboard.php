<?php

include 'header.php';
?>

<div class="wrapper dashborad-h">
	<div class="container-fluid">

		<!-- Page-Title -->
		<div class="row">
			<div class="col-sm-12">
				<div class="page-title-box">
					<div class="btn-group m-0 pull-right">
						<ol class="breadcrumb hide-phone p-0 m-0">
							<li class="breadcrumb-item"><a href="#">GoGyms</a></li>
							<li class="breadcrumb-item active">Dashboard</li>
						</ol>
					</div>
					<h4 class="page-title">Dashboard</h4>
				</div>
			</div>
		</div>
		<!-- end page title end breadcrumb -->
		<div class="row">
			<!-- Column -->
			<div class="col-sm-12 col-md-6 col-xl-4">
                <a href="<?=base_url('Admin/gymDetail')?>">
				<div class="card bg-danger m-b-30">
					<div class="card-body">
						<div class="d-flex row">
							<div class="col-3 align-self-center">
								<div class="round">
									<i class="mdi mdi-google-physical-web"></i>
								</div>
							</div>
							<div class="col-8 ml-auto align-self-center text-center">
								<div class="m-l-10 text-white float-right">
									<h5 class="mt-0 round-inner"><?php pr($message);?></h5>
									<p class="mb-0 ">Total Gym Owner</p>
								</div>
							</div>
						</div>
					</div>
				</div>
                </a>
			</div>
			<!-- Column -->
			<!-- Column -->
			<div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                <a href="<?=base_url('Admin/userlist')?>">
				<div class="card bg-info m-b-30">
					<div class="card-body">
						<div class="d-flex row">
							<div class="col-3 align-self-center">
								<div class="round">
									<i class="mdi mdi-account-multiple-plus"></i>
								</div>
							</div>
							<div class="col-8 text-center ml-auto align-self-center">
								<div class="m-l-10 text-white float-right">
									<h5 class="mt-0 round-inner"><?php pr($message1);?></h5>
									<p class="mb-0 ">Total Users</p>
								</div>
							</div>
						</div>
					</div>
				</div>
                </a>
			</div>
			<!-- Column -->
			<!-- Column -->
			<div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                <a href="<?=base_url('Admin/transaction')?>">
				<div class="card bg-success m-b-30">
					<div class="card-body">
						<div class="d-flex row">
							<div class="col-3 align-self-center">
								<div class="round ">
									<i class="mdi mdi-basket"></i>
								</div>
							</div>
							<div class="col-8 ml-auto align-self-center text-center">
								<div class="m-l-10 text-white float-right">
									<h5 class="mt-0 round-inner"><?php pr($message2);?></h5>
									<p class="mb-0 ">Total Orders</p>
								</div>
							</div>
						</div>
					</div>
				</div>
                </a>
			</div>
			<!-- Column -->
			<!-- Column -->

			<!-- Column --><br><br>
		</div>


	</div> <!-- end container -->
</div>


<?php

include 'footer.php';
?>
<!--<script>
    function fetchdata(){
        $.ajax({
            url: '<?/*=base_url('Admin/notification')*/?>',
            type: 'post',
            success: function(response){

                if(response=='success'){

                    $('#notification').html('<span class="badge badge-success noti-icon-badge"><i class="fa fa-envelope"></i></i></span>');

                }

            }
        });
    }

    $(document).ready(function(){
        setInterval(fetchdata,1000);
    });
</script>-->
