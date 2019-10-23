<?php
include 'header.php';
?>
<style>
    .img50{
        width: 110px !important;
        height: 110px !important;
    }
</style>
	<!-- =========================== Features Start ============================================ -->
	<section class="gray p-0">
		<div class="container-fluid" >

			<div class="row">
				<div class="dashboard-sidebar">
					<div class="dashboard-avatar-detail">
						<div class="ds-avatar-thumb">
                                <?php if(empty($profile_user[0]->user_images)){ ?>
                                    <img  src="<?php echo base_url();?>web/assets/img/usericon.png" class="img50" alt="">
                                <?php }else{ ?>
                                    <img src="<?php echo $profile_user[0]->user_images ?>" class="img50" alt="">
                                <?php } ?>
							<span class="ds-status online"></span>
						</div>
						<div class="ds-avatar-caption">

                            <?php if(empty($profile_user[0]->user_name)){ ?>
                            <?php }else{ ?>
                                <h4 class="ds-author-name"><?php echo $profile_user[0]->user_name; ?></h4>
                            <?php } ?>

						</div>
					</div>
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link active" id="v-pills-profile-tab" data-toggle="pill" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><i class="ti-user"></i>Profile</a>
						<!--  <a class="nav-link" id="v-pills-listings-tab" data-toggle="pill" href="#listings" role="tab" aria-controls="listings" aria-selected="false"><i class="ti-layers-alt"></i>Order Details</a>
						 <a class="nav-link" id="v-pills-events-tab" data-toggle="pill" href="#events" role="tab" aria-controls="events" aria-selected="false"><i class="ti-medall-alt"></i>Add Gallery</a> -->
						<a class="nav-link" href="<?php echo base_url('Auth/logout');?>"><i class="ti-shift-right"></i>LogOut</a>
					</div>
				</div>
				<div class="tab-content dashboard-wrap" id="v-pills-tabContent">

					<!-- Profile Content -->
					<div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
						<form class="dash-profile-form" action="<?php echo base_url('Auth/profileuser');?>" method="post" enctype="multipart/form-data" novalidate>

							<!-- Basic Info -->
							<div class="tr-single-box">
								<div class="tr-single-header">
									<h4><i class="ti-share"></i> Basic Information</h4>
								</div>

								<div class="tr-single-body">
									<div class="row">
										<div class="form-group col-md-6 col-sm-12">
											<label>User Name</label>
											<input class="form-control" type="text" name="user_name" value="<?php echo $profile_user[0]->user_name ?>">
											<input class="form-control" type="hidden" name="id" value="<?php echo $user[0]->id ?>">
										</div>
										<div class="form-group col-md-6 col-sm-12">
											<label>Gender</label>
											<select class="form-control" name="user_gender">
                                                <option value="Male" <?php if($profile_user[0]->user_gender=="Male") echo 'selected="selected"'; ?> >Male</option>
                                                <option value="Female" <?php if($profile_user[0]->user_gender=="Female") echo 'selected="selected"'; ?> >Female</option>
                                                <option value="Other" <?php if($profile_user[0]->user_gender=="Other") echo 'selected="selected"'; ?> >Other</option>
                                            </select>
										</div>
										<div class="form-group col-md-6 col-sm-12">
											<label>Email ID</label>
											<input class="form-control" type="email" name="user_email" value="<?php echo $profile_user[0]->user_email ?>">
										</div>

										<div class="form-group col-md-6 col-sm-12">
											<label>Mobile No</label>
											<input class="form-control" type="text" value="<?php echo $user[0]->mobile ?>" readonly="true">
										</div>
										<div class="form-group col-md-6 col-sm-12">
											<label>Date Of Birth (DD/MM/YYYY)</label><br>
											<input type="date" name="user_dob" class="form-control" value="<?php echo $profile_user[0]->user_dob ?>">
										</div>
										<div class="form-group col-md-6 col-sm-12">
											<label>Location</label>
											<input type="text" value="<?php echo $profile_user[0]->user_location ?>" name="user_location" class="form-control" placeholder="Enter Location">
										</div>
										<div class="form-group col-md-6 col-sm-12">
											<label>Profession</label>
                                            <select class="form-control" name="user_profession" required>
                                                <option>---Select Profession---</option>
                                                <?php foreach ($profession as $pro){ ?>
                                                    <option value="<?php echo $pro->profession_name?>"<?php if($profile_user[0]->user_profession==$pro->profession_name) echo 'selected="selected"'; ?> ><?php echo $pro->profession_name; ?></option>
                                                <?php } ?>
                                            </select>
										</div>
										<div class="form-group col-md-6 col-sm-12">
											<label>Blood Group</label>
                                            <select class="form-control" name="user_bloodgroup">
                                                <option value="0">Please Select Option</option>
                                                <option value="A+" <?php if($profile_user[0]->user_bloodgroup=="A+") echo 'selected="selected"'; ?> >A+</option>
                                                <option value="A-" <?php if($profile_user[0]->user_bloodgroup=="A-") echo 'selected="selected"'; ?> >A-</option>
                                                <option value="B-" <?php if($profile_user[0]->user_bloodgroup=="B-") echo 'selected="selected"'; ?> >B-</option>
                                                <option value="B+" <?php if($profile_user[0]->user_bloodgroup=="B+") echo 'selected="selected"'; ?> >B+</option>
                                                <option value="AB+" <?php if($profile_user[0]->user_bloodgroup=="AB+") echo 'selected="selected"'; ?> >AB+</option>
                                                <option value="O+" <?php if($profile_user[0]->user_bloodgroup=="O+") echo 'selected="selected"'; ?> >O+</option>
                                                <option value="O" <?php if($profile_user[0]->user_bloodgroup=="O") echo 'selected="selected"'; ?> >O</option>
                                            </select>
										</div>
										<div class="form-group col-md-6 col-sm-12">
											<label>Height(CM)</label>
											<!--<input type="text" name="user_height_cm" value="<?php /*echo $profile_user[0]->user_height_cm */?>" class="form-control" placeholder="Enter Height(In CM)" required>-->

											<input type="text" name="user_height_cm" value="<?php echo $profile_user[0]->user_height_cm ?>" id="cm" onkeyup="cmcalculate()" class="form-control" placeholder="Enter Height(In CM)">

										</div>
										<div class="form-group col-md-6 col-sm-12">
											<label>Height(Fit)</label>

											<!--<input type="text" name="user_height_fit" value="<?php /*echo $profile_user[0]->user_height_fit */?>" class="form-control" placeholder="Enter Height(In Fit)" required>-->
											<input type="text" name="user_height_fit" value="<?php echo $profile_user[0]->user_height_fit ?>" id="fit" onkeyup="fitcalculate()" class="form-control" placeholder="Enter Height(In Fit)">

										</div>
										<div class="form-group col-md-6 col-sm-12">
											<label>Weight</label>
											<input type="text" name="user_weight" value="<?php echo $profile_user[0]->user_weight ?>" class="form-control" placeholder="Enter Height(In Kg)" required>
										</div>
										<div class="form-group col-md-6 col-sm-12">
											<label>Heart Rate</label>
											<input type="text" name="user_heart_rate" value="<?php echo $profile_user[0]->user_heart_rate ?>" class="form-control" placeholder="Enter Pulse" required>
										</div>
										<div class="form-group col-md-6 col-sm-12">
											<label>Blood Pressure(Low)</label>
											<input type="text" name="user_bp_low" value="<?php echo $profile_user[0]->user_bp_low ?>" class="form-control" placeholder="Enter Blood Pressure(Low)" required>
										</div>
										<div class="form-group col-md-6 col-sm-12">
											<label>Blood Pressure(High)</label>
											<input type="text" name="user_bp_high" value="<?php echo $profile_user[0]->user_bp_high ?>" class="form-control" placeholder="Enter Blood Pressure(High)" required>
										</div>
										<div class="form-group col-md-4 col-sm-12">
											<label>Smoking</label>
											<select class="form-control" name="user_smoking" required>
												<option>---Select Smoking---</option>
                                                <option value="Yes" <?php if($profile_user[0]->user_smoking=="Yes") echo 'selected="selected"'; ?> >Yes</option>
                                                <option value="No" <?php if($profile_user[0]->user_smoking=="No") echo 'selected="selected"'; ?> >No</option>
                                                <option value="Occasionally" <?php if($profile_user[0]->user_smoking=="Occasionally") echo 'selected="selected"'; ?>>Occasionally</option>

											</select>
										</div>
										<div class="form-group col-md-4 col-sm-12">
											<label>Drinking</label>
											<select class="form-control" name="user_drinking" required>
												<option>---Select Drinking---</option>
                                                <option value="Yes" <?php if($profile_user[0]->user_drinking=="Yes") echo 'selected="selected"'; ?> >Yes</option>
                                                <option value="No" <?php if($profile_user[0]->user_drinking=="No") echo 'selected="selected"'; ?> >No</option>
                                                <option value="Occasionally" <?php if($profile_user[0]->user_drinking=="Occasionally") echo 'selected="selected"'; ?> >Occasionally</option>

											</select>
										</div>
										<div class="form-group col-md-4 col-sm-12">
											<label>Disease ( If Any )</label>
											<select class="form-control" name="user_disease" id="selectNEWBox" required>
												<option>---Select Disease---</option>
                                                <option value="No" <?php if($profile_user[0]->user_disease=="No") echo 'selected="selected"'; ?> >No</option>
                                                <option value="Yes" <?php if($profile_user[0]->user_disease=="Yes") echo 'selected="selected"'; ?> >Yes</option>
                                            </select>
										</div>
										<div class="form-group col-md-12 col-sm-12" id="disease_details" style="display: none;">
											<label>Disease Details</label>
											<textarea class="form-control"  rows="2" placeholder="Enter Disease Details" name="disease_details" required></textarea>
										</div>
										<div class="form-group col-md-12 col-sm-12">
											<label>Address</label>
											<textarea class="form-control" rows="2" placeholder="Enter Your Address" name="user_address" required><?php echo $profile_user[0]->user_address ?></textarea>
										</div>

										<div class="form-group col-md-12 col-sm-12">
											<label>Profile Image</label>
											<div class="custom-file">
												<input type="file" class="custom-file-input" name="user_images">
												<label class="custom-file-label" for="cover-image">Profile Image</label>
											</div>
										</div>
									</div>
								</div>

							</div>
							<div class="row">
								<div class="col-md-9"></div>
								<div class="col-md-3">
									<button type="submit" class="btn btn-primary full-width mb-4">Save Changes</button>
								</div>
							</div>

						</form>
					</div>

					<!-- Listings Content -->
					<div class="tab-pane fade" id="listings" role="tabpanel" aria-labelledby="v-pills-listings-tab">
						<!-- All Listing -->
						<form class="dash-profile-form">
							<!-- Basic Info -->
							<div class="tr-single-box">
								<div class="tr-single-header">
									<h4><i class="ti-share"></i> Gym Information</h4>
								</div>

								<div class="tr-single-body">
									<div class="row">
										<div class="form-group col-md-12 col-sm-12">
											<label>Gym Name</label>
											<input class="form-control" type="text" value="">
										</div>
										<div class="form-group col-md-6 col-sm-12">
											<label>Plan Type</label>
											<select class="form-control">
												<option>---Select Plan Type---</option>
												<option>Daily</option>
												<option>Monthly</option>
												<option>Weekly</option>
												<option>Yearly</option>
											</select>
										</div>
										<div class="form-group col-md-6 col-sm-12">
											<label>Price</label>
											<input class="form-control" name="price" type="text" value="">
										</div>
										<div class="form-group col-md-6 col-sm-12">
											<label>Total Availability</label>
											<input type="text" name="availability" class="form-control">
										</div>
										<div class="form-group col-md-6 col-sm-12">
											<label>Choose Allow</label><br>
											<input type="checkbox" name="vehicle1" value="Bike" checked=""> Male
											<input type="checkbox" name="vehicle2" value="Car"> Female
										</div>
										<div class="form-group col-md-12 col-sm-12">
											<label>Amenities</label><br>
											<div class="row">
												<div class="form-group col-md-3">
													<input type="checkbox" name="vehicle2" value="Car" checked=""> Locker Rooms
												</div>
												<div class="form-group col-md-3">
													<input type="checkbox" name="vehicle2" value="Car"> Indoor/Outdoor Swimming Pools
												</div>
												<div class="form-group col-md-3">
													<input type="checkbox" name="vehicle2" value="Car"> Volleyball
												</div>
												<div class="form-group col-md-3">
													<input type="checkbox" name="vehicle2" value="Car"> Basketball courts
												</div>
												<div class="form-group col-md-3">
													<input type="checkbox" name="vehicle2" value="Car"> Women's Only Workout Area
												</div>
												<div class="form-group col-md-3">
													<input type="checkbox" name="vehicle2" value="Car"> Cardio Cinema
												</div>
												<div class="form-group col-md-3">
													<input type="checkbox" name="vehicle2" value="Car"> Outdoor Functional Training Area
												</div>
											</div>
										</div>

										<div class="form-group col-md-12 col-sm-12">
											<label>Gym Description</label>
											<textarea class="form-control" name="description"></textarea>
										</div>
										<div class="form-group col-md-12 col-sm-12">
											<label>Gym Image</label>
											<div class="custom-file">
												<input type="file" class="custom-file-input" >
												<label class="custom-file-label" for="cover-image">Gym Image</label>
											</div>
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

				</div>
			</div>

		</div>
	</section>
	<!-- =========================== Dashboard End ============================================ -->

<?php
include 'footer.php';
?>
<script>
    $('#checkin').dateDropper();
</script>
<script>
    $( function() {
        $( "#datepicker" ).datepicker();
    } );
</script>
<script>
    $("#selectNEWBox").change(function (){
		var value = this.value;
		if(value=='Yes'){
            $('#disease_details').show();
        }
        else {
            $('#disease_details').hide();
        }
    });
</script>

<script>
    function cmcalculate()
    {
        var cm = document.getElementById('cm');
        var fit = document.getElementById('fit');
        fit.value = cm.value/30.48;
    }
</script>
<script>
    function fitcalculate()
    {
        var cm = document.getElementById('cm');
        var fit = document.getElementById('fit');
        cm.value = fit.value*30.48;
    }
</script>


