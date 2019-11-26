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
<section class="gray p-0">
    <div class="container-fluid" >

        <div class="row">

            <div class="col-md-3">
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
                        <!--<a class="nav-link " id="v-pills-profile-tab" data-toggle="pill" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><i class="ti-user"></i>Profile</a>-->
                        <a class="nav-link active"  href="<?php echo base_url('Gogym/user_dashboard'); ?>" ><i class="ti-home"></i>Profile Details</a>
                        <a class="nav-link"  href="<?php echo base_url('Gogym/dailytrackreport'); ?>" ><i class="ti-layers-alt"></i>Daily Tracking Report</a>
                        <a class="nav-link"  href="<?php echo base_url('Gogym/dailytrackreportlist'); ?>"><i class="ti-medall-alt"></i>Daily Tracking List</a>
                        <a class="nav-link" href="<?php echo base_url('Auth/logout');?>"><i class="ti-shift-right"></i>LogOut</a>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <!-- Listings Content -->
                <div >
                    <!-- All Listing -->
                    <form class="dash-profile-form">
                        <!-- Basic Info -->
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
                                            <?php foreach ($report as $res){ ?>
                                                <tr>
                                                    <td><?php echo $res->checkinDate ?></td>
                                                    <td><?php echo $res->checkIntime ?></td>
                                                    <td><?php echo $res->weight ?></td>
                                                    <td><?php echo $res->pressurehigh ?></td>
                                                    <td><?php echo $res->heartrate ?></td>
                                                    <td><?php echo $res->activity1 ?></td>
                                                    <td><?php echo $res->activity2 ?></td>
                                                    <td><?php echo $res->activity3 ?></td>
                                                    <td><?php echo $res->activity4 ?></td>
                                                    <td><?php echo $res->activity5 ?></td>
                                                    <td><?php echo $res->activity6 ?></td>
                                                    <td><?php echo $res->activity7 ?></td>
                                                    <td><?php echo $res->activity8 ?></td>
                                                    <td><?php echo $res->activity9 ?></td>
                                                    <td><?php echo $res->activity10 ?></td>
                                                    <td><?php echo $res->outtime ?></td>
                                                    <td><?php echo $res->remark ?></td>

                                                </tr>
                                            <?php  }?>



                                            </tbody>
                                        </table>
                                    </div>
                                </div>
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

