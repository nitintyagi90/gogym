<?php

include 'header.php';
?>

<div class="wrapper">
    <div class="container-fluid">

        <!-- Page-Title -->
        <div class="row">
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
                                    <th>Gym Name</th>
                                    <th>Mobile</th>
                                    <th>Gymplan</th>
                                    <th>GymPrice</th>
                                    <th>Totalavailability</th>
                                    <th>Location</th>
                                    <th>Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                <?php $i=1;
                                foreach ($gymorowner as  $value) {


                                    ?>
                                    <tr>
                                        <td><?= $i++; ?></td>

                                        <td><?=$value->gymName;?></td>
                                        <td><?=$value->contact_no;?></td>
                                        <td><?=$value->gymplanType;?></td>
                                        <td><?=$value->gymPrice;?></td>
                                        <td><?=$value->totalavailability;?></td>
                                        <td><?=$value->gymCity;?></td>
                                        <td>
                                            <?php
                                            if($value->is_active==0){?>

                                                <a href="<?php echo site_url('Admin/blockGym/'.$value->gym_id);?>" class="btn btn-danger btn-sm" title="Delete">Active</a>


                                            <?php } ?>

                                            <?php
                                            if($value->is_active==1){?>

                                                <a href="<?php echo site_url('Admin/blockGym/'.$value->gym_id);?>" class="btn btn-primary btn-sm" title="Delete">Deactive</a>


                                            <?php } ?>

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


