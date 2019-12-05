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

                        <?php if(empty($user[0]->owner_name)){ ?>
                        <?php }else{ ?>
                            <h4 class="ds-author-name"><?php echo $user[0]->owner_name; ?></h4>
                        <?php } ?>

                    </div>
                </div>
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <!--<a class="nav-link " id="v-pills-profile-tab" data-toggle="pill" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><i class="ti-user"></i>Profile</a>-->
                    <a class="nav-link "  href="<?php echo base_url('Gogym/user_dashboard'); ?>" ><i class="ti-home"></i>Profile Details</a>


                        <a class="nav-link active"  href="<?php echo base_url('Gogym/user_bookingdetails'); ?>" ><i class="ti-layers-alt"></i>Booking Details</a>
                        <a class="nav-link"  href="<?php echo base_url('Gogym/dailytrackreport'); ?>" ><i class="ti-layers-alt"></i>Daily Tracking Report</a>
                        <a class="nav-link"  href="<?php echo base_url('Gogym/dailytrackreportlist'); ?>"><i class="ti-medall-alt"></i>Daily Tracking List</a>



                    <a class="nav-link" href="<?php echo base_url('Auth/logout');?>"><i class="ti-shift-right"></i>LogOut</a>
                </div>
            </div>



            <div class="tab-content dashboard-wrap" id="v-pills-tabContent">


                <div >
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
                                                    <th>S.N.</th>

                                                    <th>Gym Name</th>
                                                    <th>user email</th>
                                                    <th>OTP Code</th>
                                                    <th>Price</th>
                                                    <th>Action</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                $i =1 ;
                                                foreach ($booking as $res ) {
                                                    ?>
                                                    <tr>
                                                        <td><?= $i++?></td>
                                                        <td><?= $res->gym_name  ?></td>
                                                        <td><?= $res->email   ?></td>
                                                        <td><?= $res->verificationCode   ?></td>

                                                        <td><?= $res->totalpay  ?></td>

                                                        <td><a href="<?= base_url('Gogym/list_detail/'.$res->gym_id)?>" TITLE="reorder" class="btn btn-success">Re-order</a></td>
                                                    </tr>
                                                <?php } ?>
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


        </div>
    </div>

    </div>
</section>
<!-- =========================== Dashboard End ============================================ -->

<?php
include 'footer.php';
?>



