<?php
include 'header.php';
?>
    <style>
        .img50{
            width: 110px !important;
            height: 110px !important;
        }
    </style>
<section class="gray p-0">
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
								  <a class="nav-link active" id="v-pills-profile-tab" data-toggle="pill" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><i class="ti-user"></i>Profile</a>
								  <a class="nav-link" id="v-pills-listings-tab" data-toggle="pill" href="#listings" role="tab" aria-controls="listings" aria-selected="false"><i class="ti-layers-alt"></i>Add Gym Details</a>
                                <a class="nav-link" id="v-pills-property-tab" data-toggle="pill" href="#property" role="tab" aria-controls="property" aria-selected="false"><i class="ti-home"></i>Add Plan</a>
								  <a class="nav-link" id="v-pills-events-tab" data-toggle="pill" href="#events" role="tab" aria-controls="events" aria-selected="false"><i class="ti-medall-alt"></i>Add Gallery</a>
                                <a class="nav-link" id="v-pills-billing-tab" data-toggle="pill" href="#billing" role="tab" aria-controls="billing" aria-selected="false"><i class="ti-credit-card"></i>Booking Details</a>
								  <a class="nav-link" href="<?php echo base_url('Auth/logout');?>"><i class="ti-shift-right"></i>LogOut</a>
							</div>
						</div>
						<div class="tab-content dashboard-wrap" id="v-pills-tabContent">
							
							<!-- Profile Content -->
							<div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
								<form class="dash-profile-form" action="<?php echo base_url('Auth/profileowner');?>" method="post" enctype="multipart/form-data">

									<!-- Basic Info -->
									<div class="tr-single-box">
										<div class="tr-single-header">
											<h4><i class="ti-share"></i> Basic Information</h4>
										</div>
										
										<div class="tr-single-body">
											<div class="row">
											<div class="form-group col-md-6 col-sm-12">
												<label>Partner Name</label>
												<input class="form-control" name="ownerName" type="text" value="<?php echo $user[0]->owner_name ?>" >
                                                <input class="form-control" type="hidden" name="id" value="<?php echo $user[0]->id ?>">

                                            </div>

											<div class="form-group col-md-6 col-sm-12">
												<label>Email ID</label>
												<input class="form-control" name="ownerEmail" type="email" value="<?php echo $user[0]->email ?>" >
											</div>
											<div class="form-group col-md-6 col-sm-12">
												<label>Mobile No</label>
												<input class="form-control" name="ownerMobile" onkeypress="javascript:return isNumber(event)" maxlength="10" type="text" value="<?php echo $user[0]->mobile ?>" >
											</div>
                                                <div class="form-group col-md-6 col-sm-12">
                                                    <label>Password</label>
                                                    <input class="form-control" name="password" type="password" value="<?php echo $user[0]->password ?>" >
                                                </div>
                                                <div class="form-group col-md-12 col-sm-12">
                                                    <label>Profile Image</label>
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="cover-image" name="profileImage">
                                                        <label class="custom-file-label" for="cover-image">Profile Image</label>
                                                    </div>
                                                </div>
										</div>
										</div>
										 
									</div>

									<div class="row">
										<div class="col-md-9"></div>
										<div class="col-md-3">
									<!-- <button type="submit" class="btn btn-primary full-width mb-4">Save Changes</button> -->
									<input type="Submit" name="" class="btn btn-primary full-width mb-4" value="Save Changes">
								</div>
									</div>
								
								</form>
							</div>
							
							<!-- Listings Content -->
							<div class="tab-pane fade" id="listings" role="tabpanel" aria-labelledby="v-pills-listings-tab">
								<!-- All Listing -->
								<form action="<?php echo base_url('Auth/saveGym');?>" class="dash-profile-form" method="post" enctype="multipart/form-data">
									<!-- Basic Info -->
									<div class="tr-single-box">
										<div class="tr-single-header">
											<h4><i class="ti-share"></i> Gym Information</h4>
										</div>
                                      <!--  <div class="form-group col-md-6 col-sm-12">
                                            <label>Plan Type</label>
                                            <select class="form-control" name="gymplanType">
                                                <option>---Select Plan Type---</option>

                                                <option value="Daily" <?php /*if(@$profile_user[0]->gymplanType=="Daily") echo 'selected="selected"'; */?> >Daily</option>
                                                <option value="Monthly" <?php /*if(@$profile_user[0]->gymplanType=="Monthly") echo 'selected="selected"'; */?> >Monthly</option>
                                                <option value="Weekly" <?php /*if(@$profile_user[0]->gymplanType=="Weekly") echo 'selected="selected"'; */?> >Weekly</option>
                                                <option value="Yearly" <?php /*if(@$profile_user[0]->gymplanType=="Yearly") echo 'selected="selected"'; */?> >Yearly</option>

                                            </select>
                                        </div>-->
										<div class="tr-single-body">
											<div class="row">
											<div class="form-group col-md-12 col-sm-12">
												<label>Gym Name</label>
												<input class="form-control" value="<?php echo @$profile_user[0]->gymName ?>" name="gymName" type="text" value="">
                                                <input class="form-control" type="hidden" name="id" value="<?php echo $user[0]->id ?>">
                                                <input class="form-control" type="hidden" name="user_profile_id" value="<?php echo @$profile_user[0]->profile_id ?>">


                                            </div>

											<div class="form-group col-md-6 col-sm-12">
												<label>Price</label>
												<input class="form-control" onkeypress="javascript:return isNumber(event)" value="<?php echo @$profile_user[0]->gymPrice ?>" name="gymPrice" name="price" type="text" value="">
											</div>
											<div class="form-group col-md-6 col-sm-12">
												<label>Total Availability</label>
												<input type="text" onkeypress="javascript:return isNumber(event)" name="totalavailability" value="<?php echo @$profile_user[0]->totalavailability ?>" name="availability" class="form-control">
											</div>



                                                <div class="form-group col-md-6 col-sm-12">
                                                    <label>Contact Person</label>
                                                    <input class="form-control" type="text" placeholder="" name="contact_name" value="<?php echo @$profile_user[0]->contact_name ?>" required>
                                                </div>
                                                <div class="form-group col-md-6 col-sm-12">
                                                    <label>Contact No </label>
                                                    <input class="form-control" onkeypress="javascript:return isNumber(event)" maxlength="10" type="text" placeholder="" name="contact_no" value="<?php echo @$profile_user[0]->contact_no ?>" required>
                                                </div>
                                                <div class="form-group col-md-4 col-sm-12">
                                                    <label>Open Morning Time</label>
                                                    <div class="clockpicker" data-autoclose="true">
                                                        <input type="text" name="omorning" class="form-control" value="06:00">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-4 col-sm-12">
                                                    <label>Close Morning Time</label>
                                                    <div class="clockpicker" data-autoclose="true">
                                                        <input type="text" name="cmorning" class="form-control" value="11:00">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-4 col-sm-12">
                                                    <label>Open Afternoon Time</label>
                                                    <div class="clockpicker" data-autoclose="true">
                                                        <input type="text" name="oafternoon" class="form-control" value="01:00">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-4 col-sm-12">
                                                    <label>Close Afternoon Time</label>
                                                    <div class="clockpicker" data-autoclose="true">
                                                        <input type="text" name="cafternoon" class="form-control" value="04:00">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-4 col-sm-12">
                                                    <label>Open Evening Time</label>
                                                    <div class="clockpicker" data-autoclose="true">
                                                        <input type="text" name="oevening" class="form-control" value="05:00">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-4 col-sm-12">
                                                    <label>Close Evening Time</label>
                                                    <div class="clockpicker" data-autoclose="true">
                                                        <input type="text" name="cevening" class="form-control" value="11:00">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-12 col-sm-12">
                                                    <label>Gym Address</label>
                                                    <textarea name="gymaddress" class="form-control" name="gymAddress"><?php echo @$profile_user[0]->gym_address ?></textarea>
                                                </div>

                                                <div class="form-group col-md-6 col-sm-12">
                                                    <label>City</label>
                                                    <input class="form-control" type="text" placeholder="" name="gymCity" value="<?php echo @$profile_user[0]->gymCity ?>" required>
                                                </div>

                                                <div class="form-group col-md-6 col-sm-12">
                                                    <label>PinCode</label>
                                                    <input class="form-control" type="text" onkeypress="javascript:return isNumber(event)" maxlength="6" placeholder="" value="<?php echo @$profile_user[0]->pinCode ?>" name="gym_pin" required>
                                                </div>


                                                <div class="form-group col-md-12 col-sm-12">
												<label>Gym Description</label>
												<textarea name="gymdescription" class="form-control" name="gym_description"><?php echo @$profile_user[0]->gymdescription ?></textarea>
											</div>
                                                <!-- Contact Info -->
                                                <div class="tr-single-box">
                                                    <div class="tr-single-header">
                                                        <h4><i class="ti-headphone"></i> Account Details</h4>
                                                    </div>
                                                    <div class="tr-single-body row">
                                                        <div class="form-group col-md-6 col-sm-12">
                                                            <label>Account Holder Name</label>
                                                            <input class="form-control" type="text" name="account_name" value="<?php echo @$profile_user[0]->accountHolderName ?>" required>
                                                        </div>
                                                        <div class="form-group col-md-6 col-sm-12">
                                                            <label>Account Type</label>
                                                            <select class="form-control" name="account_type" required>
                                                                <option>---Select Account Type---</option>
                                                                <option value="Saving" <?php if(@$profile_user[0]->account_type=="Saving") echo 'selected="selected"'; ?> >Saving</option>
                                                                <option value="Current" <?php if(@$profile_user[0]->account_type=="Current") echo 'selected="selected"'; ?> >Current</option>

                                                            </select>
                                                        </div>
                                                        <div class="form-group col-md-6 col-sm-12">
                                                            <label>Account Number</label>
                                                            <input class="form-control" type="text" onkeypress="javascript:return isNumber(event)" name="account_no" value="<?php echo @$profile_user[0]->accountNumber ?>" required>
                                                        </div>
                                                        <div class="form-group col-md-6 col-sm-12">
                                                            <label>IFSC Code</label>
                                                            <input class="form-control" type="text" name="account_ifsc" value="<?php echo @$profile_user[0]->ifsc ?>" required>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Social Info -->
                                                <div class="tr-single-box">
                                                    <div class="tr-single-header">
                                                        <h4><i class="ti-new-window"></i> GST Details</h4>
                                                    </div>

                                                    <div class="tr-single-body">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                                <div class="form-group">
                                                                    <label class="social-nfo">Name Of Organization</label>
                                                                    <input class="form-control" type="text" name="org_name" value="<?php echo @$profile_user[0]->organization ?>" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                                <div class="form-group">
                                                                    <label class="social-nfo">GST No</label>
                                                                    <input class="form-control" type="text" name="gym_gstno" value="<?php echo @$profile_user[0]->gstNumber ?>" required>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                                <!-- Social Info -->
                                                <div class="tr-single-box">
                                                    <div class="tr-single-header">
                                                        <h4><i class="ti-new-window"></i> PAN Details</h4>
                                                    </div>

                                                    <div class="tr-single-body">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-12">
                                                                <div class="form-group">
                                                                    <label class="social-nfo">PAN No</label>
                                                                    <input class="form-control" maxlength="10" type="text" name="gym_panno" value="<?php echo @$profile_user[0]->panCard ?>" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="form-group col-md-6 col-sm-12">
                                                    <label>Choose Allow</label><br>
                                                    <input type="checkbox" name="allowGym" value="Female"> Female
                                                </div>

                                                <div class="form-group col-md-12 col-sm-12">
                                                    <label>Amenities</label><br>
                                                    <div class="row">
                                                        <?php foreach (@$amenities as $pro){ ?>
                                                            <div class="form-group col-md-3">

                                                                <input type="checkbox" name="amenities[]"<?php if (@$gym[0]->aminitiesName == $pro->amentities_name) { echo "checked='checked'"; } ?>
                                                                       value="<?php echo $pro->amentities_name; ?>"><?php echo $pro->amentities_name; ?>

                                                            </div>
                                                        <?php } ?>

                                                    </div>
                                                </div>

                                                <div class="form-group col-md-12 col-sm-12">
                                                    <label>Select Gym Category</label><br>
                                                    <div class="row">
                                                        <?php foreach (@$category as $pro){ ?>
                                                            <div class="form-group col-md-3">

                                                                <input type="checkbox" name="categoryName[]"<?php if (@$gym[0]->categoryName == $pro->categoryName) { echo "checked='checked'"; } ?>
                                                                       value="<?php echo $pro->categoryName; ?>"><?php echo $pro->categoryName; ?>

                                                            </div>
                                                        <?php } ?>

                                                    </div>
                                                </div>


											<div class="form-group col-md-12 col-sm-12">
												<label>Gym Image</label>
												<div class="custom-file">
													<input type="file" name="gymImage"  class="custom-file-input" id="cover-image">
													<label class="custom-file-label" for="cover-image">Gym Image</label>
												</div>
											</div>
											</div>
										</div>

									</div>
									<div class="row">
										<div class="col-md-10">
                                            <a class="btn btn-primary full-width mb-4" ></a>
                                        </div>
										<div class="col-md-2">
                                            <input type="submit" value="Submit" class="btn btn-primary full-width mb-4">
								</div>
							</div>
								</form>
							</div>
							<div class="tab-pane fade" id="events" role="tabpanel" aria-labelledby="v-pills-events-tab">
								<!-- All Listing -->
								<form class="dash-profile-form">
									<!-- Basic Info -->
									<div class="tr-single-box">
										<div class="tr-single-header">
											<h4><i class="ti-share"></i> Gallery Image</h4>
										</div>
										
										<div class="tr-single-body">
											<div class="row">
											<div class="custom-file">
													<input type="file" class="custom-file-input" id="cover-image">
													<label class="custom-file-label" for="cover-image">Gallery Image</label>
												</div>
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
                                <form class="dash-profile-form" action="#" method="post" enctype="multipart/form-data">

                                    <!-- Basic Info -->
                                    <div class="tr-single-box">
                                        <div class="tr-single-header">
                                            <h4><i class="ti-share"></i> Add Plan</h4>
                                        </div>
                                        <div class="tr-single-body">
                                            <div class="row">
                                                <div class="form-group col-md-6 col-sm-12">
                                                    <label>Daily Price (Included GST)</label>
                                                    <input type="text" class="form-control" name="dailyprice" required>
                                                </div>
                                                <div class="form-group col-md-6 col-sm-12">
                                                    <label>Weekly Price (Included GST)</label>
                                                    <input type="text" class="form-control" name="weeklyprice" required>
                                                </div>
                                                <div class="form-group col-md-6 col-sm-12">
                                                    <label>Monthly Price (Included GST)</label>
                                                    <input type="text" class="form-control" name="monthlyprice" required>
                                                </div>
                                                <div class="form-group col-md-6 col-sm-12">
                                                    <label>Yearly Price (Included GST)</label>
                                                    <input type="text" class="form-control" name="yearlyprice" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-9"></div>
                                        <div class="col-md-3">
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
                                                        <th>User Email ID</th>
                                                        <th>User Mobile No</th>
                                                        <th>Plan Type</th>
                                                        <th>Amount</th>
                                                        <th>Payment Mode</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>1001</td>
                                                        <td>Sanjeev</td>
                                                        <td>skgupta5050@gmail.com</td>
                                                        <td>9716683297</td>
                                                        <td>Daily</td>
                                                        <td>49</td>
                                                        <td>Online</td>
                                                    </tr>
                                                    <tr>
                                                        <td>1002</td>
                                                        <td>Sanjeev</td>
                                                        <td>skgupta5050@gmail.com</td>
                                                        <td>9716683297</td>
                                                        <td>Weekly</td>
                                                        <td>299</td>
                                                        <td>Online</td>
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
