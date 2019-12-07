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
                            <li class="breadcrumb-item active">Coupon List</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Coupon List</h4>
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
                                    <th>Gym ID</th>
                                    <th>Coupon Code</th>
                                    <th>Percent</th>
                                    <th>Max Discount</th>
                                    <th>Min Value</th>
                                    <th>Action</th>
                                </tr>
                                </thead>

                                <tbody>
                                <?php $i=1; foreach ($message as  $value) {
                                ?>
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td><?=$value['coupon_gym']?></td>
                                    <td><?=$value['coupon_code']?></td>
                                    <td><?=$value['coupon_percent']?></td>
                                    <td><?=$value['coupon_max_discount']?></td>
                                    <td><?=$value['coupon_min_value']?></td>
                                    <td>
                                        <a href="<?php echo site_url('Admin/delete_cupconlist/'.$value['coupon_id']);?>" class="btn btn-danger btn-sm" title="Delete"><i class="fa fa-trash-o "></i></a>
                                        <a href="<?php echo site_url('Admin/edit_cupconlist/'.$value['coupon_id']);?>" class="btn btn-danger btn-sm" title="Edit"><i class="fa fa-pencil "></i></a>
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
