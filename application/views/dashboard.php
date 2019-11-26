<?php
include 'header.php';
?>
    <style>
        .img50{
            width: 110px !important;
            height: 110px !important;
        }
        .dlt{
            font-size: 18px !important;
            color: #4558be !important;
            float: right !important;
            border: 1px solid !important;
            border-radius: 50px !important;
            width: 30px !important;
            height: 30px !important;
            padding-left: 8px !important;
            padding-bottom: 1px !important;
        }
    </style>

           <section class="gray p-0" >
				<div class="container-fluid" >
					<div class="row">
						<div class="dashboard-sidebar">
							<div class="dashboard-avatar-detail">
								<div class="ds-avatar-thumb">
                                    <?php if(empty(@$user[0]->profileImage)){ ?>
                                        <img  src="<?php echo base_url();?>web/assets/img/usericon.png" class="img50" alt="">
                                    <?php }else{ ?>
                                        <img src="<?php echo @$user[0]->profileImage ?>" class="img50" alt="">
                                    <?php } ?>
									<span class="ds-status online"></span>
								</div>

							</div>
							<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                                <a class="nav-link "  href="<?php echo base_url('Gogym/dashboard'); ?>" ><i class="ti-home"></i>Profile Details</a>
								  <a class="nav-link"  href="<?php echo base_url('Gogym/gym_details'); ?>" ><i class="ti-layers-alt"></i>Gym Details</a>
                                <a class="nav-link"  href="<?php echo base_url('Gogym/plan'); ?>" ><i class="ti-home"></i>Add Plan</a>
								  <a class="nav-link" href="<?php echo base_url('Gogym/addgallery'); ?>"><i class="ti-medall-alt"></i>Add Gallery</a>
                                <a class="nav-link" href="<?php echo base_url('Gogym/listgallery'); ?>"><i class="ti-bookmark-alt"></i>List Gallery</a>
                                <a class="nav-link" href="<?php echo base_url('Gogym/bookingdetails'); ?>" ><i class="ti-credit-card"></i>Booking Details</a>
                                <a class="nav-link" href="<?php echo base_url('Auth/logout');?>"><i class="ti-shift-right"></i>LogOut</a>
							</div>
						</div>

						<div class="tab-content dashboard-wrap" id="v-pills-tabContent" >


                        <div >
                            <!-- All Bookmark -->
                            <div class="tr-single-body">
                                <div class="card">
                                    <div class="tr-single-box">
                                        <div class="tr-single-header">
                                            <h4><i class="ti-gallery"></i>Profile Details</h4>
                                        </div>
                                        <div class="tr-single-body">
                                            <div class="card">
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-2 table-hover">
                                                        <thead>
                                                        <tr>
                                                            <th>Partner Name</th>
                                                            <th>Email ID</th>
                                                            <th>Mobile No</th>
                                                            <th>Action</th>
                                                         </tr>
                                                        </thead>
                                                        <tbody>

                                                            <tr>
                                                                <td><?php echo $user[0]->owner_name ?></td>
                                                                <td><?php echo $user[0]->email ?></td>
                                                                <td><?php echo $user[0]->mobile ?></td>
                                                                <td><a href="<?php echo base_url('Gogym/user_profile'); ?>" TITLE="Edit"><i class="fa fa-pencil"></i></a></td>
                                                                <td><a href="<?php echo base_url('Gogym/user_profile_view'); ?>" TITLE="View"><i class="fa fa-eye"></i></a></td>
                                                            </tr>
                                                       </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        </div>
                        <img src="<?php echo base_url();?>web/assets/img/gobg.png" style="width: 100%;">
                    </div>
                            </div>
						</div>
					</div>

				</div>
			</section>
<?php
include 'footer.php';
?>
<script type="text/javascript">
    $('.clockpicker').clockpicker()
        .find('input').change(function(){
        console.log(this.value);
    });
    var input = $('#single-input').clockpicker({
        placement: 'bottom',
        align: 'left',
        autoclose: true,
        'default': 'now'
    });

    $('.clockpicker-with-callbacks').clockpicker({
        donetext: 'Done',
        init: function() {
            console.log("colorpicker initiated");
        },
        beforeShow: function() {
            console.log("before show");
        },
        afterShow: function() {
            console.log("after show");
        },
        beforeHide: function() {
            console.log("before hide");
        },
        afterHide: function() {
            console.log("after hide");
        },
        beforeHourSelect: function() {
            console.log("before hour selected");
        },
        afterHourSelect: function() {
            console.log("after hour selected");
        },
        beforeDone: function() {
            console.log("before done");
        },
        afterDone: function() {
            console.log("after done");
        }
    })
        .find('input').change(function(){
        console.log(this.value);
    });

    // Manually toggle to the minutes view
    $('#check-minutes').click(function(e){
        // Have to stop propagation here
        e.stopPropagation();
        input.clockpicker('show')
            .clockpicker('toggleView', 'minutes');
    });
    if (/mobile/i.test(navigator.userAgent)) {
        $('input').prop('readOnly', true);
    }
</script>
