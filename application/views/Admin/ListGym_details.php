<?php
include 'header.php';
?>
<style>
    .img50{
        height: 50px;
        width: 50px;
    }
</style>
<div class="wrapper">
    <div class="container-fluid">

        <!-- Page-Title -->
        <div class="row paddtp5">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="btn-group m-0 pull-right">
                        <ol class="breadcrumb hide-phone p-0 m-0">
                            <li class="breadcrumb-item"><a href="#">GoGyms</a></li>
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active">Gym Details</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Gym Details</h4>
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->

        <h4 class="page-title">Gym Details</h4>
        <div class="row">

            <div class="col-6">
                <div class="card m-b-30">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <tr>
                                    <th>Gym Name :</th>
                                    <td><?php echo $gym[0]->gymName; ?></td>
                                </tr>
                                <tr>
                                    <th>Daily Plan Price :</th>
                                    <td>49</td>
                                </tr>
                                <tr>
                                    <th>Weekly Plan Price :</th>
                                    <td>Gold</td>
                                </tr>
                                <tr>
                                    <th>Monthly Plan Price :</th>
                                    <td>Gold</td>
                                </tr>
                                <tr>
                                    <th>Yearly Plan Price :</th>
                                    <td>Gold</td>
                                </tr>

                                <tr>
                                    <th>Contact Person :</th>
                                    <td><?php echo $gym[0]->contact_name ?></td>
                                </tr>
                                <tr>
                                    <th>Contact No :</th>
                                    <td><?php echo $gym[0]->contact_no ?></td>
                                </tr>
                                <tr>
                                    <th>Open Morning Time :</th>
                                    <td>06:00</td>
                                </tr>
                                <tr>
                                    <th>Close Morning Time :</th>
                                    <td>11:00</td>
                                </tr>
                                <tr>
                                    <th>Open Afternoon Time :</th>
                                    <td>01:00</td>
                                </tr>
                                <tr>
                                    <th>Close Afternoon Time :</th>
                                    <td>04:00</td>
                                </tr>
                                <tr>
                                    <th>Open Evening Time :</th>
                                    <td>06:00</td>
                                </tr>
                                <tr>
                                    <th>Close Evening Time :</th>
                                    <td>11:00</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
            <div class="col-6">
                <div class="card m-b-30">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered" cellspacing="0" width="100%">

                                <tr>
                                    <th>Account Holder Name</th>
                                    <td><?php echo $gym[0]->accountHolderName ?></td>
                                </tr>
                                <tr>
                                    <th>Account Type</th>
                                    <td><?php echo $gym[0]->accountType ?></td>
                                </tr>
                                <tr>
                                    <th>Account No</th>
                                    <td><?php echo $gym[0]->accountNumber ?></td>
                                </tr>
                                <tr>
                                    <th>IFSC Code</th>
                                    <td><?php echo $gym[0]->ifsc ?></td>
                                </tr>
                                <tr>
                                    <th>Name Of Organization</th>
                                    <td><?php echo $gym[0]->organization ?></td>
                                </tr>
                                <tr>
                                    <th>GST No</th>
                                    <td><?php echo $gym[0]->gstNumber ?></td>
                                </tr>
                                <tr>
                                    <th>PAN No</th>
                                    <td><?php echo $gym[0]->panCard ?></td>
                                </tr>
                                <tr>
                                    <th>Gym Category</th>
                                    <td>A , B</td>
                                </tr>
                                <tr>
                                    <th>Gym Addrerss</th>
                                    <td><?php echo $gym[0]->gym_address ?></td>
                                </tr>

                                <tr>
                                    <th>PinCode</th>
                                    <td><?php echo $gym[0]->pinCode ?></td>
                                </tr>
                                <tr>
                                    <th>Gym Description</th>
                                    <td><?php echo $gym[0]->gymdescription ?></td>
                                </tr>
                                <tr>
                                    <th>Gym Image</th>
                                    <td><img src="<?php echo $gym[0]->gymImage ?>" class="img50"></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
        <h4 class="page-title">Partner Details</h4>
        <div class="row">

            <div class="col-6">
                <div class="card m-b-30">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <tr>
                                    <th>Partner Name :</th>
                                    <td><?php echo $gym[0]->owner_name ?></td>
                                </tr>
                                <tr>
                                    <th>Partner Email ID :</th>
                                    <td><?php echo $gym[0]->email ?></td>
                                </tr>

                            </table>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
            <div class="col-6">
                <div class="card m-b-30">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <tr>
                                    <th>Partner Mobile No</th>
                                    <td><?php echo $gym[0]->mobile; ?></td>
                                </tr>
                                <tr>
                                    <th>Partner Profile Image</th>
                                    <?php if(empty($gym[0]->profileImage)){ ?>
                                        <td><img src="" class="img50"></td>

                                    <?php }else{?>
                                        <td><img src="<?php echo $gym[0]->profileImage ?>" class="img50"></td>

                                    <?php } ?>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div> <!-- end container -->
</div>
<?php
include 'footer.php';
?>
