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
                            <li class="breadcrumb-item active">Launch Offer List</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Launch Offer List</h4>
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
                                    <th>Deal Name</th>
                                    <th>Percent</th>
                                    <th>Disount</th>
                                    <th>Gym Name</th>
                                    <th>Deal Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                <?php $i=1; foreach ($message as  $value) {
                                    ?>
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td><?=$value['deal_name']?></td>
                                    <td><?=$value['deal_gym']?></td>
                                    <td><?=$value['deal_percent']?></td>
                                    <td><?=$value['deal_discount']?></td>

                                    <td><img src="<?=$value['deal_image']?>" class="img50"></td>
                                    <td>
                                        <a href="<?php echo site_url('Admin/delete_launch_offer/'.$value['deal_id']);?>" class="btn btn-danger btn-sm" title="Delete"><i class="fa fa-trash-o "></i></a>
<!--                                        <a href="<?php /*echo site_url('Admin/edit_launch_offer/'.$value['deal_id']);*/?>" class="btn btn-danger btn-sm" title="Edit"><i class="fa fa-pencil "></i></a>
-->
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
<?php
include 'footer.php';
?>
