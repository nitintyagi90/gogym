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
<section class="gray p-0">
    <div class="container-fluid" >

        <div class="row">

            <div class="col-md-12">
                <!-- Property Content -->
                <div >

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
            </div>
        </div>
    </div>
</section>
<?php
include 'footer.php';
?>


