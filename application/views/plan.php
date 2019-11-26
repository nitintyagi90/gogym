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
                        <a class="nav-link" href="<?php echo base_url('Gogym/addgallery'); ?>"><i class="ti-medall-alt"></i>Add Gallery</a>
                        <a class="nav-link" href="<?php echo base_url('Gogym/listgallery'); ?>"><i class="ti-bookmark-alt"></i>List Gallery</a>
                        <a class="nav-link" href="<?php echo base_url('Gogym/bookingdetails'); ?>" ><i class="ti-credit-card"></i>Booking Details</a>
                        <a class="nav-link" href="<?php echo base_url('Auth/logout');?>"><i class="ti-shift-right"></i>LogOut</a>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div >
                    <!-- Notification Info -->
                    <div class="tr-single-box">

                        <div class="tr-single-header">
                            <h4><i class="ti-bell"></i> Plan Details</h4>
                        </div>

                        <div class="tr-single-body">
                            <div class="card">
                                <div class="table-responsive">
                                    <table class="table table-striped table-2 table-hover">
                                        <thead>
                                        <tr>
                                            <th>Daily</th>
                                            <th>Weekly</th>
                                            <th>Monthly</th>
                                            <th>Yearly</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>49</td>
                                            <td>300</td>
                                            <td>1200</td>
                                            <td>12500</td>
                                            <td>

                                                <a href="<?php echo base_url('Gogym/plan_edit'); ?>" TITLE="Edit"><i class="fa fa-pencil"></i></a>

                                            </td>

                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Bookmark Content -->
            </div>
        </div>
    </div>
</section>
<?php
include 'footer.php';
?>


