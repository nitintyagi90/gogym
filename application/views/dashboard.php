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

                                                    </div>
                                                </div>


											<div class="form-group col-md-12 col-sm-12">
												<label>Gym Image</label>
												<div class="custom-file">
													<input type="file" name="gymImage"  class="form-control" accept="image/x-png,image/gif,image/jpeg" />

												</div>
											</div>
											</div>
										</div>

									</div>
									<div class="row">
										<div class="col-md-10">

                                        </div>
										<div class="col-md-2">
                                            <input type="submit" value="Submit" class="btn btn-primary full-width mb-4">
								</div>
							</div>
								</form>
							</div>


							<div class="tab-pane fade" id="events" role="tabpanel" aria-labelledby="v-pills-events-tab">
								<!-- All Listing -->
								<form action="<?php echo base_url('Gogym/saveGallery');?>" method="post" class="dash-profile-form" enctype="multipart/form-data">
									<!-- Basic Info -->
									<div class="tr-single-box">
										<div class="tr-single-header">
											<h4><i class="ti-share"></i> Gallery Image</h4>
										</div>
										
										<div class="tr-single-body">
											<div class="row">
                                                <input class="form-control" type="hidden" name="id" value="<?php echo $user[0]->id ?>">
                                                <input type="file" name="gallery" class="form-control"/>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-10"></div>
										<div class="col-md-2">
									<button type="submit" class="btn btn-primary full-width mb-4">Submit</button>
								</div>
							</div>
								</form>
							</div>
                            <!-- Property Content -->
                            <div class="tab-pane fade" id="property" role="tabpanel" aria-labelledby="v-pills-property-tab">

                                <!-- All Property Info -->
                                <form class="dash-profile-form" action="<?php echo base_url('Gogym/saveGymplan');?>" method="post" enctype="multipart/form-data">

                                    <!-- Basic Info -->
                                    <div class="tr-single-box">
                                        <div class="tr-single-header">
                                            <h4><i class="ti-share"></i> Add Plan</h4>
                                        </div>
                                        <div class="tr-single-body">
                                            <div class="row">
                                                <div class="form-group col-md-6 col-sm-12">
                                                    <label>Daily Price (Included GST)</label>
                                                    <input type="text" value="<?php echo $gymPrice[0]->dailyPrice ?>" class="form-control" name="dailyprice">
                                                    <input class="form-control" type="hidden" name="id" value="<?php echo $user[0]->id ?>">
                                                    <input class="form-control" type="hidden" name="user_profile_id" value="<?php echo @$profile_user[0]->gym_id ?>">

                                                </div>
                                                <div class="form-group col-md-6 col-sm-12">
                                                    <label>Weekly Price (Included GST)</label>
                                                    <input type="text"  value="<?php echo $gymPrice[0]->weeklyPrice ?>" class="form-control" name="weeklyprice">
                                                </div>
                                                <div class="form-group col-md-6 col-sm-12">
                                                    <label>Monthly Price (Included GST)</label>
                                                    <input type="text"  value="<?php echo $gymPrice[0]->monthlyPrice ?>" class="form-control" name="monthlyprice">
                                                </div>
                                                <div class="form-group col-md-6 col-sm-12">
                                                    <label>Yearly Price (Included GST)</label>
                                                    <input type="text"  value="<?php echo $gymPrice[0]->yearlyPrice ?>" class="form-control" name="yearlyprice">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-10"></div>
                                        <div class="col-md-2">
                                            <input type="Submit" name="" class="btn btn-primary full-width mb-4" value="Save Changes">
                                        </div>
                                    </div>

                                </form>
                            </div>
                            <!-- Billing Content -->
                            <div class="tab-pane fade" id="billing" role="tabpanel" aria-labelledby="v-pills-billing-tab">
                                <!-- Notification Info -->
                                <div class="tr-single-box">

                                    <div class="tr-single-header">
                                        <h4><i class="ti-bell"></i> Booking Details</h4>
                                    </div>

                                    <div class="tr-single-body">
                                        <div class="card">
                                            <div class="table-responsive">
                                                <table class="table table-striped table-2 table-hover">
                                                    <thead>
                                                    <tr>
                                                        <th>Booking ID</th>
                                                        <th>User Name</th>
                                                        <!--<th>User Email ID</th>
                                                        <th>User Mobile No</th>-->

                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                    $i =0;
                                                    foreach ($booking as $book){
                                                        $i++;
                                                        ?>
                                                        <tr>
                                                            <td>100<?php echo $i; ?></td>
                                                            <td><?php echo $book->name; ?></td>
                                                            <!--<td><?php /*echo $book->email; */?></td>
                                                            <td><?php /*echo $book->mobile; */?></td>-->

                                                        </tr>
                                                    <?php } ?>


                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- Bookmark Content -->
                            <div class="tab-pane fade" id="bookmark" role="tabpanel" aria-labelledby="v-pills-bookmark-tab">
                                <!-- All Bookmark -->
                               <div class="tr-single-body">
                                        <div class="card">
                                            <div class="tr-single-box">
                                                <div class="tr-single-header">
                                                    <h4><i class="ti-gallery"></i>All Gallery</h4>
                                                </div>
                                                <div class="tr-single-body">
                                                    <ul class="gallery-list">
                                                        <?php foreach ($galleryList as $gallery){ ?>
                                                            <li>
                                                                <a href="<?php echo site_url('Gogym/delete_gallerys/'.$gallery->id);?>" class="delete" data-confirm="Are you sure to delete this image?">
                                                                    <span aria-hidden="true" class="dlt">×</span></a>
                                                                <a data-fancybox="gallery" href="<?php echo $gallery->gym_gallery ?>">
                                                                    <img src="<?php echo $gallery->gym_gallery ?>" class="img-responsive" alt="">
                                                                </a>
                                                            </li>
                                                        <?php } ?>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    </div>


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







    var deleteLinks = document.querySelectorAll('.delete');

    for (var i = 0; i < deleteLinks.length; i++) {
        deleteLinks[i].addEventListener('click', function(event) {
            event.preventDefault();

            var choice = confirm(this.getAttribute('data-confirm'));

            if (choice) {
                window.location.href = this.getAttribute('href');
            }
        });
    }






</script>
