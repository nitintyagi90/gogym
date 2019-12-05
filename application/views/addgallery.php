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
            <div class="col-md-3">
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
                        <a class="nav-link active" href="<?php echo base_url('Gogym/addgallery'); ?>"><i class="ti-medall-alt"></i>Add Gallery</a>
                        <a class="nav-link" href="<?php echo base_url('Gogym/listgallery'); ?>"><i class="ti-bookmark-alt"></i>List Gallery</a>
                        <a class="nav-link" href="<?php echo base_url('Gogym/bookingdetails'); ?>" ><i class="ti-credit-card"></i>Booking Details</a>
                        <a class="nav-link" href="<?php echo base_url('Gogym/success_booking'); ?>" ><i class="ti-credit-card"></i>success Booking List</a>
                        <a class="nav-link" href="<?php echo base_url('Auth/logout');?>"><i class="ti-shift-right"></i>LogOut</a>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div >
                    <img src="<?php echo base_url();?>web/assets/img/gobg.png" style="width: 100%;">
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
                                    <input type="file" name="gallery[]" multiple class="form-control"/>
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
<?php
include 'footer2.php';
?>


