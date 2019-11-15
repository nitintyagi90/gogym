<?php

include 'header.php';
?>

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
                            <li class="breadcrumb-item active">Profession</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Profession</h4>
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->


        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">

                        <div class="table-responsive">
                            <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Contact Name</th>
                                    <th>Contact Number</th>
                                    <th>Gym Address</th>
                                    <th>Gym Pin</th>
                                    <th>Account Name</th>
                                    <th>Account Type</th>
                                    <th>Account Number</th>
                                    <th>Ifsc</th>
                                    <th>Organization Name</th>
                                    <th>GSTN</th>
                                    <th>Pan Number</th>

                                </tr>
                                </thead>

                                <tbody>
                                <?php $i=1;
                                foreach ($ownerProfile as  $value) {


                                    ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?=$value->contact_name;?></td>
                                        <td><?=$value->contact_no;?></td>
                                        <td><?=$value->gym_address;?></td>
                                        <td><?=$value->gym_pin;?></td>
                                        <td><?=$value->account_name;?></td>
                                        <td><?=$value->account_type;?></td>
                                        <td><?=$value->account_no;?></td>
                                        <td><?=$value->account_ifsc;?></td>
                                        <td><?=$value->org_name;?></td>
                                        <td><?=$value->gym_gstno;?></td>
                                        <td><?=$value->gym_panno;?></td>


                                        <td>

                                        </td>

                                    </tr>
                                <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div> <!-- end container -->
</div>
<!-- end wrapper -->
<?php

include 'footer.php';
?>


