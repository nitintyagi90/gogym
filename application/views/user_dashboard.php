<?php
include 'header.php';
?>
<style>
    .img50{
        width: 110px !important;
        height: 110px !important;
    }
</style>
<style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
    th, td {
        padding: 5px;
    }
    th {
        text-align: left;
    }
    .clr{
        color: #333;
    }
</style>
<style>
    * {
        box-sizing: border-box;
    }
    /* Hide all steps by default: */
    .tab {
        display: none;
    }
    button {
        background-color: #4CAF50;
        color: #ffffff;
        border: none;
        padding: 8px 20px;
        font-size: 17px;
        cursor: pointer;
    }

    button:hover {
        opacity: 0.8;
    }

    #prevBtn {
        background-color: #bbbbbb;
    }

    /* Make circles that indicate the steps of the form: */
    .step {
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbbbbb;
        border: none;
        border-radius: 50%;
        display: inline-block;
        opacity: 0.5;
    }

    .step.active {
        opacity: 1;
    }

    /* Mark the steps that are finished and valid: */
    .step.finish {
        background-color: #4CAF50;
    }
</style>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

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
                        <a class="nav-link" id="v-pills-property-tab" data-toggle="pill" href="#property" role="tab" aria-controls="property" aria-selected="false"><i class="ti-home"></i>Profile Details</a>
                        <a class="nav-link" id="v-pills-listings-tab" data-toggle="pill" href="#listings" role="tab" aria-controls="listings" aria-selected="false"><i class="ti-layers-alt"></i>Daily Tracking Report</a>
						<a class="nav-link" id="v-pills-events-tab" data-toggle="pill" href="#events" role="tab" aria-controls="events" aria-selected="false"><i class="ti-medall-alt"></i>Daily Tracking List</a>
						<a class="nav-link" href="<?php echo base_url('Auth/logout');?>"><i class="ti-shift-right"></i>LogOut</a>
					</div>
				</div>



				<div class="tab-content dashboard-wrap" id="v-pills-tabContent">

					<!-- Profile Content -->
					<div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <?php if($responce = $this->session->flashdata('Successfully')): ?>
                            <div class="box-header">
                                <div class="col-lg-12">
                                    <div class="alert alert-success text-center"><?php echo $responce;?></div>
                                </div>
                            </div>
                        <?php endif;?>
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
											<input class="form-control" name="user_mobile" type="text" value="<?php echo $user[0]->mobile ?>">
										</div>

                                        <div class="form-group col-md-6 col-sm-12">
                                            <label>Password</label>
                                            <input class="form-control" name="user_password" type="password" value="<?php echo $user[0]->password ?>">
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
											<input type="text" maxlength="3" onkeypress="javascript:return isNumber(event)" name="user_weight" value="<?php echo $profile_user[0]->user_weight ?>" class="form-control" placeholder="Enter Height(In Kg)" required>
										</div>
										<div class="form-group col-md-6 col-sm-12">
											<label>Heart Rate</label>
											<input type="text" maxlength="3" onkeypress="javascript:return isNumber(event)" name="user_heart_rate" value="<?php echo $profile_user[0]->user_heart_rate ?>" class="form-control" placeholder="Enter Pulse" required>
										</div>
										<div class="form-group col-md-6 col-sm-12">
											<label>Blood Pressure(Low)</label>
											<input type="text" maxlength="3" onkeypress="javascript:return isNumber(event)" name="user_bp_low" value="<?php echo $profile_user[0]->user_bp_low ?>" class="form-control" placeholder="Enter Blood Pressure(Low)" required>
										</div>
										<div class="form-group col-md-6 col-sm-12">
											<label>Blood Pressure(High)</label>
											<input type="text" maxlength="3" onkeypress="javascript:return isNumber(event)" name="user_bp_high" value="<?php echo $profile_user[0]->user_bp_high ?>" class="form-control" placeholder="Enter Blood Pressure(High)" required>
										</div>
										<div class="form-group col-md-6 col-sm-12">
											<label>Smoking</label>
											<select class="form-control" name="user_smoking" required>
												<option>---Select Smoking---</option>
                                                <option value="Yes" <?php if($profile_user[0]->user_smoking=="Yes") echo 'selected="selected"'; ?> >Yes</option>
                                                <option value="No" <?php if($profile_user[0]->user_smoking=="No") echo 'selected="selected"'; ?> >No</option>
                                                <option value="Occasionally" <?php if($profile_user[0]->user_smoking=="Occasionally") echo 'selected="selected"'; ?>>Occasionally</option>

											</select>
										</div>
										<div class="form-group col-md-6 col-sm-12">
											<label>Drinking</label>
											<select class="form-control" name="user_drinking" required>
												<option>---Select Drinking---</option>
                                                <option value="Yes" <?php if($profile_user[0]->user_drinking=="Yes") echo 'selected="selected"'; ?> >Yes</option>
                                                <option value="No" <?php if($profile_user[0]->user_drinking=="No") echo 'selected="selected"'; ?> >No</option>
                                                <option value="Occasionally" <?php if($profile_user[0]->user_drinking=="Occasionally") echo 'selected="selected"'; ?> >Occasionally</option>

											</select>
										</div>
										<div class="form-group col-md-6 col-sm-12">
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
												<input type="file" class="form-control" name="user_images" accept="image/x-png,image/gif,image/jpeg" />
												<!--<label class="custom-file-label" for="cover-image">Profile Image</label>-->
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
                    <div class="tab-pane fade" id="property" role="tabpanel" aria-labelledby="v-pills-property-tab">
                        <!-- All Property Info -->
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
                                                        <th>User Name</th>
                                                        <th>Email ID</th>
                                                        <th>Mobile No</th>
                                                        <th>Gender</th>
                                                        <th>DOB</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td><?php echo $profile_user[0]->user_name ?></td>
                                                        <td><?php echo $profile_user[0]->user_email ?></td>
                                                        <td><?php echo $user[0]->mobile ?></td>
                                                        <td><?php echo $profile_user[0]->user_gender ?></td>
                                                        <td><?php echo $profile_user[0]->user_dob ?></td>
                                                        <td><a href="#" TITLE="Edit"><i class="fa fa-pencil"></i></a></td>
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

					<!-- Listings Content -->
					<div class="tab-pane fade" id="listings" role="tabpanel" aria-labelledby="v-pills-listings-tab">
						<!-- All Listing -->
						<form class="dash-profile-form">
							<!-- Basic Info -->
							<div class="tr-single-box">
								<div class="tr-single-header">
									<h4><i class="ti-share"></i> Daily Tracking Report</h4>
								</div>

								<div class="tr-single-body">
                                    <form id="regForm" action="#">
                                        <div class="tab">Date:
                                            <input  type="date"  placeholder="Select Date..." oninput="this.className = ''" name="fname">
                                            <!--<input type="text" id="myTextarea">-->

                                        </div>
                                        <div class="tab">In-Time:
                                            <div class="input-group clockpicker" data-autoclose="true">
                                            <input type="text"  oninput="this.className = ''" value="09:30" name="intime">
                                            </div>
                                        </div>
                                        <div class="tab">Weight:
                                            <input id="weight" maxlength="3" onkeypress="javascript:return isNumber(event)" placeholder="Enter Weight" oninput="this.className = ''" name="weight">
                                        </div>
                                        <div class="tab">Blood pressure:
                                            <input id="bphigh" maxlength="3" onkeypress="javascript:return isNumber(event)" placeholder="Enter Blood Presure High..." oninput="this.className = ''" name="pressurehigh">
                                            <input id="bplow" maxlength="3" onkeypress="javascript:return isNumber(event)" placeholder="Enter Blood Presure Low..." oninput="this.className = ''" name="pressurelow">

                                        </div>
                                        <div class="tab">Heart Rate:
                                            <input id="heartrate" maxlength="3" onkeypress="javascript:return isNumber(event)" placeholder="Enter Heart Rate..." oninput="this.className = ''" name="heartrate">
                                        </div>
                                        <div class="tab">Select Activity 1:
                                            <select id="activity1" oninput="this.className = ''" name="activity1">
                                                <option value="">---Select Activity 1---</option>
                                                <?php foreach ($activity as $act){ ?>
                                                    <option value="<?php echo $act->activity_name?>"><?php echo $act->activity_name; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="tab">Select Activity 2:
                                            <select id="activity2" oninput="this.className = ''" name="activity2">
                                                <option value="">---Select Activity 2---</option>
                                                <?php foreach ($activity as $act){ ?>
                                                    <option value="<?php echo $act->activity_name?>"><?php echo $act->activity_name; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="tab">Select Activity 3:
                                            <select id="activity3" oninput="this.className = ''" name="activity3">
                                                <option value="">---Select Activity 3---</option>
                                                <?php foreach ($activity as $act){ ?>
                                                    <option value="<?php echo $act->activity_name?>"><?php echo $act->activity_name; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="tab">Select Activity 4:
                                            <select id="activity4" oninput="this.className = ''" name="activity4">
                                                <option value="">---Select Activity 4---</option>
                                                <?php foreach ($activity as $act){ ?>
                                                    <option value="<?php echo $act->activity_name?>"><?php echo $act->activity_name; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="tab">Select Activity 5:
                                            <select id="activity5" oninput="this.className = ''" name="activity5">
                                                <option value="">---Select Activity 5---</option>
                                                <?php foreach ($activity as $act){ ?>
                                                    <option value="<?php echo $act->activity_name?>"><?php echo $act->activity_name; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="tab">Select Activity 6:
                                            <select id="activity6" oninput="this.className = ''" name="activity6">
                                                <option value="">---Select Activity 6---</option>
                                                <?php foreach ($activity as $act){ ?>
                                                    <option value="<?php echo $act->activity_name?>"><?php echo $act->activity_name; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="tab">Select Activity 7:
                                            <select id="activity7" oninput="this.className = ''" name="activity7">
                                                <option value="">---Select Activity 7---</option>
                                                <?php foreach ($activity as $act){ ?>
                                                    <option value="<?php echo $act->activity_name?>"><?php echo $act->activity_name; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="tab">Select Activity 8:
                                            <select id="activity8" oninput="this.className = ''" name="activity8">
                                                <option value="">---Select Activity 8---</option>
                                                <?php foreach ($activity as $act){ ?>
                                                    <option value="<?php echo $act->activity_name?>"><?php echo $act->activity_name; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="tab">Select Activity 9:
                                            <select id="activity9" oninput="this.className = ''" name="activity9">
                                                <option value="">---Select Activity 9---</option>
                                                <?php foreach ($activity as $act){ ?>
                                                    <option value="<?php echo $act->activity_name?>"><?php echo $act->activity_name; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="tab">Select Activity 10:
                                            <select id="activity10" oninput="this.className = ''" name="activity10">
                                                <option value="">---Select Activity 10---</option>
                                                <?php foreach ($activity as $act){ ?>
                                                    <option value="<?php echo $act->activity_name?>"><?php echo $act->activity_name; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="tab">Out-Time:
                                            <div class="input-group clockpicker" data-autoclose="true">
                                                <input type="text"  oninput="this.className = ''" value="09:30" name="outtime">
                                            </div>
                                        </div>
                                        <div class="tab">
                                            <textarea id="note" oninput="this.className = ''" rows="2" placeholder="Enter Note / Remark...." style="width: 50%;"></textarea>
                                        </div>
                                        <div style="overflow:auto;">
                                            <div style="float:right;">
                                                <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                                                <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                                                <input type="submit" class="btn btn-primary" value="Submit" style="margin-top: -5px;">
                                            </div>
                                        </div>
                                        <!-- Circles which indicates the steps of the form: -->
                                        <div style="text-align:center;margin-top:40px;">
                                            <span class="step"></span>
                                            <span class="step"></span>
                                            <span class="step"></span>
                                            <span class="step"></span>
                                            <span class="step"></span>
                                            <span class="step"></span>
                                            <span class="step"></span>
                                            <span class="step"></span>
                                            <span class="step"></span>
                                            <span class="step"></span>
                                            <span class="step"></span>
                                            <span class="step"></span>
                                            <span class="step"></span>
                                            <span class="step"></span>
                                            <span class="step"></span>
                                            <span class="step"></span>
                                            <span class="step"></span>
                                        </div>
                                    </form>
								</div>
                                <div class="table-responsive" style="overflow-x: auto;">
                                    <table class="table table-striped table-2 table-hover">
                                        <thead>
                                    <tr>
                                        <th class="clr">Weight</th>
                                        <th class="clr">BP High</th>
                                        <th class="clr">BP Low</th>
                                        <th class="clr">Heart Rate</th>
                                        <th class="clr">Activity1</th>
                                        <th class="clr">Activity2</th>
                                        <th class="clr">Activity3</th>
                                        <th class="clr">Activity4</th>
                                        <th class="clr">Activity5</th>
                                        <th class="clr">Activity6</th>
                                        <th class="clr">Activity7</th>
                                        <th class="clr">Activity8</th>
                                        <th class="clr">Activity9</th>
                                        <th class="clr">Activity10</th>
                                        <th class="clr">Note / Remark</th>
                                    </tr>
                                        </thead>
                                        <tbody
                                    <tr>
                                        <td class="weight"></td>
                                        <td class="bphigh"></td>
                                        <td class="bplow"></td>
                                        <td class="heartrate"></td>
                                        <td class="activity1"></td>
                                        <td class="activity2"></td>
                                        <td class="activity3"></td>
                                        <td class="activity4"></td>
                                        <td class="activity5"></td>
                                        <td class="activity6"></td>
                                        <td class="activity7"></td>
                                        <td class="activity8"></td>
                                        <td class="activity9"></td>
                                        <td class="activity10"></td>
                                        <td class="note"></td>
                                    </tr>
                                    </tbody>
                                </table>

							</div>

						</form>
					</div>

                    <!-- Events Content -->
                    <div class="tab-pane fade" id="events" role="tabpanel" aria-labelledby="v-pills-events-tab">
                        <!-- All Event -->
                        <div class="tr-single-box">

                            <div class="tr-single-header">
                                <h4><i class="ti-share"></i> Daily Tracking List</h4>
                                <div class="btn-group fl-right">
                                    <button type="button" class="btn-trans" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ti-more"></i>
                                    </button>

                                </div>
                            </div>

                            <div class="tr-single-body">
                                <div class="card">
                                    <div class="table-responsive" style="overflow-x: auto;">
                                        <table class="table table-striped table-2 table-hover">
                                            <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>In-Time</th>
                                                <th>Weight</th>
                                                <th>Blood Pressure</th>
                                                <th>Heart Rate</th>
                                                <th>Activity 1</th>
                                                <th>Activity 2</th>
                                                <th>Activity 3</th>
                                                <th>Activity 4</th>
                                                <th>Activity 5</th>
                                                <th>Activity 6</th>
                                                <th>Activity 7</th>
                                                <th>Activity 8</th>
                                                <th>Activity 9</th>
                                                <th>Activity 10</th>
                                                <th>Out-Time</th>
                                                <th>Note / Remark</th>

                                            </tr>
                                            </thead>

                                            <tbody>
                                            <tr>
                                                <td>06/11/2019</td>
                                                <td>07:00</td>
                                                <td>100</td>
                                                <td>120/80</td>
                                                <td>90</td>
                                                <td>Activity 1</td>
                                                <td>Activity 2</td>
                                                <td>Activity 3</td>
                                                <td>Activity 4</td>
                                                <td>Activity 5</td>
                                                <td>Activity 6</td>
                                                <td>Activity 7</td>
                                                <td>Activity 8</td>
                                                <td>Activity 9</td>
                                                <td>Activity 10</td>
                                                <td>11:00</td>
                                                <td>Test</td>
                                            </tr>



                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- Property Content -->


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
<script>
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

    function showTab(n) {
        // This function will display the specified tab of the form...
        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";
        //... and fix the Previous/Next buttons:
        if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
        } else {
            document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == (x.length - 1)) {
            //document.getElementById("nextBtn").innerHTML = "Submit";
        } else {
            document.getElementById("nextBtn").innerHTML = "Next";
        }
        //... and run a function that will display the correct step indicator:
        fixStepIndicator(n)
    }

    function nextPrev(n) {
        // This function will figure out which tab to display
        var x = document.getElementsByClassName("tab");
        // Exit the function if any field in the current tab is invalid:
        if (n == 1 && !validateForm()) return false;
        // Hide the current tab:
        x[currentTab].style.display = "none";
        // Increase or decrease the current tab by 1:
        currentTab = currentTab + n;
        // if you have reached the end of the form...
        if (currentTab >= x.length) {
            // ... the form gets submitted:
            document.getElementById("regForm").submit();
            return false;
        }
        // Otherwise, display the correct tab:
        showTab(currentTab);
    }

    function validateForm() {
        // This function deals with validation of the form fields
        var x, y, i, valid = true;
        x = document.getElementsByClassName("tab");
        y = x[currentTab].getElementsByTagName("input");
        // A loop that checks every input field in the current tab:
        for (i = 0; i < y.length; i++) {
            // If a field is empty...
            if (y[i].value == "") {
                // add an "invalid" class to the field:
                y[i].className += " invalid";
                // and set the current valid status to false
                valid = false;
            }
        }
        // If the valid status is true, mark the step as finished and valid:
        if (valid) {
            document.getElementsByClassName("step")[currentTab].className += " finish";
        }
        return valid; // return the valid status
    }

    function fixStepIndicator(n) {
        // This function removes the "active" class of all steps...
        var i, x = document.getElementsByClassName("step");
        for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
        }
        //... and adds the "active" class on the current step:
        x[n].className += " active";
    }
</script>
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
<script>
    $(document).ready(function(){
        $("#weight").keyup(function(){
            // Getting the current value of textarea
            var currentText = $(this).val();
            // Setting the Div content
            $(".weight").text(currentText);
        });
    });
    $(document).ready(function(){
        $("#bphigh").keyup(function(){
            // Getting the current value of textarea
            var currentText = $(this).val();
            // Setting the Div content
            $(".bphigh").text(currentText);
        });
    });
    $(document).ready(function(){
        $("#bplow").keyup(function(){
            // Getting the current value of textarea
            var currentText = $(this).val();
            // Setting the Div content
            $(".bplow").text(currentText);
        });
    });
    $(document).ready(function(){
        $("#heartrate").keyup(function(){
            // Getting the current value of textarea
            var currentText = $(this).val();
            // Setting the Div content
            $(".heartrate").text(currentText);
        });
    });
    $(function() {
        $("#activity1").change(function() {
            //alert ( $('option:selected', this).text() );
            var currentText = $('option:selected', this).text();
            // Setting the Div content
            $(".activity1").text(currentText);
        });
    });
    $(function() {
        $("#activity2").change(function() {
            //alert ( $('option:selected', this).text() );
            var currentText = $('option:selected', this).text();
            // Setting the Div content
            $(".activity2").text(currentText);
        });
    });
    $(function() {
        $("#activity3").change(function() {
            //alert ( $('option:selected', this).text() );
            var currentText = $('option:selected', this).text();
            // Setting the Div content
            $(".activity3").text(currentText);
        });
    });
    $(function() {
        $("#activity4").change(function() {
            //alert ( $('option:selected', this).text() );
            var currentText = $('option:selected', this).text();
            // Setting the Div content
            $(".activity4").text(currentText);
        });
    });
    $(function() {
        $("#activity5").change(function() {
            //alert ( $('option:selected', this).text() );
            var currentText = $('option:selected', this).text();
            // Setting the Div content
            $(".activity5").text(currentText);
        });
    });
    $(function() {
        $("#activity6").change(function() {
            //alert ( $('option:selected', this).text() );
            var currentText = $('option:selected', this).text();
            // Setting the Div content
            $(".activity6").text(currentText);
        });
    });
    $(function() {
        $("#activity7").change(function() {
            //alert ( $('option:selected', this).text() );
            var currentText = $('option:selected', this).text();
            // Setting the Div content
            $(".activity7").text(currentText);
        });
    });
    $(function() {
        $("#activity8").change(function() {
            //alert ( $('option:selected', this).text() );
            var currentText = $('option:selected', this).text();
            // Setting the Div content
            $(".activity8").text(currentText);
        });
    });
    $(function() {
        $("#activity9").change(function() {
            //alert ( $('option:selected', this).text() );
            var currentText = $('option:selected', this).text();
            // Setting the Div content
            $(".activity9").text(currentText);
        });
    });
    $(function() {
        $("#activity10").change(function() {
            //alert ( $('option:selected', this).text() );
            var currentText = $('option:selected', this).text();
            // Setting the Div content
            $(".activity10").text(currentText);
        });
    });
    $(document).ready(function(){
        $("#note").keyup(function(){
            // Getting the current value of textarea
            var currentText = $(this).val();
            // Setting the Div content
            $(".note").text(currentText);
        });
    });

</script>


