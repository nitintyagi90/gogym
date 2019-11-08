<?php
include 'header.php';
?>
<!-- End Navigation Bar-->
<div class="wrapper">

    <div class="container-fluid">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="btn-group m-0 pull-right">
                        <ol class="breadcrumb hide-phone p-0 m-0">
                            <li class="breadcrumb-item"><a href="#">Gym</a></li>
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active">Edit Coupon</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Edit Coupon</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">
                        <form class="form-horizontal" action="#" method="post" enctype="multipart/form-data">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalform">Edit Coupon</h5>

                                </div>
                                <div class="modal-body">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="field-1" class="control-label">Gym Name</label><br>
                                                <!--<input type="text" name="gym_mobile" class="form-control" id="mobile" placeholder="Enter Gym mobile Number">-->
                                                <select class="select2 mb-3 select2-multiple " name="gym_mobile[]" style="width: 100%" multiple="multiple" data-placeholder="Choose">

                                                    <option value="Gold">Gold</option>

                                                    <option value="New">New</option>

                                                    <option value="old">old</option>

                                                </select>

                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="form-group"><br>
                                                <label for="field-1" class="control-label">Coupon Code</label>
                                                <input type="text" required name="cupcon" class="form-control" id="field-1" placeholder="Enter Cupcon Code">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="field-1" class="control-label">Percent</label>
                                                <input type="text" required name="percent" class="form-control" id="field-1" placeholder="Enter Percent">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="field-1" class="control-label">Max. Discount</label>
                                                <input type="text" required name="maxdiscount" class="form-control" id="field-1" placeholder="Enter Max. Discount">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="field-3" class="control-label">Min. Value</label>
                                                <input type="text" required name="minvalue" class="form-control" id="field-1" placeholder="Min. Value">
                                            </div>
                                        </div>

                                    </div>


                                </div>
                                <div class="modal-footer">

                                    <input type="submit" class="btn btn-raised btn-primary ml-2" value="Submit">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php
        include 'footer.php';
        ?>
