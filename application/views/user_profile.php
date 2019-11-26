<?php
include 'header.php';
?>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<section class="gray p-0">
    <div class="container-fluid" >

        <div class="row">

            <div class="col-md-12">
                <div >
                  <!--  <?php /*if($responce = $this->session->flashdata('Successfully')): */?>
                        <div class="box-header">
                            <div class="col-lg-12">
                                <div class="alert alert-success text-center"><?php /*echo $responce;*/?></div>
                            </div>
                        </div>
                    --><?php /*endif;*/?>
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
                                        <input class="form-control" type="text" name="user_name" value="<?php echo $user[0]->owner_name ?>">
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
                                            <input type="file" class="form-control" name="user_images"/>
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
            </div>
        </div>
    </div>
</section>
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
