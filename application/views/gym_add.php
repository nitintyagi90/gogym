<?php
include 'header2.php';
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
<section class="gray p-0">
    <div class="container-fluid" >

        <div class="row">

            <div class="col-md-12">
                <div >
                    <!-- All Listing -->
                    <form action="<?php echo base_url('Auth/saveGym');?>" class="dash-profile-form" method="post" enctype="multipart/form-data">
                        <!-- Basic Info -->
                        <div class="tr-single-box">
                            <div class="tr-single-header">
                                <h4><i class="ti-share"></i> Gym Information</h4>
                            </div>

                            <div class="tr-single-body">
                                <div class="row">
                                    <div class="form-group col-md-6 col-sm-12">
                                        <label>Gym Name</label>
                                        <input class="form-control" value="<?php echo @$profile_user[0]->gymName ?>" name="gymName" type="text" value="">

                                        <input class="form-control" type="hidden" name="user_profile_id" value="<?php echo @$profile_user[0]->profile_id ?>">


                                    </div>

                                    <!--	<div class="form-group col-md-6 col-sm-12">
												<label>Price</label>
												<input class="form-control" onkeypress="javascript:return isNumber(event)" value="<?php /*echo @$profile_user[0]->gymPrice */?>" name="gymPrice" name="price" type="text" value="">
											</div>-->
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
                                            <input type="text" value="<?php echo @$profile_user[0]->open_mg_time ?>"  name="omorning" class="form-control" value="06:00">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4 col-sm-12">
                                        <label>Close Morning Time</label>
                                        <div class="clockpicker" data-autoclose="true">
                                            <input type="text" value="<?php echo @$profile_user[0]->close_mg_time ?>" name="cmorning" class="form-control" value="11:00">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4 col-sm-12">
                                        <label>Open Afternoon Time</label>
                                        <div class="clockpicker" data-autoclose="true">
                                            <input type="text" value="<?php echo @$profile_user[0]->after_open_time ?>" name="oafternoon" class="form-control" value="01:00">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4 col-sm-12">
                                        <label>Close Afternoon Time</label>
                                        <div class="clockpicker" data-autoclose="true">
                                            <input type="text" value="<?php echo @$profile_user[0]->after_close_time ?>" name="cafternoon" class="form-control" value="04:00">
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
                                        <input class="form-control" type="text" placeholder="" name="gymCity" value="<?php echo @$profile_user[0]->gymCity ?>">
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
            </div>
        </div>
    </div>
</section>
<?php
include 'footer2.php';
?>


