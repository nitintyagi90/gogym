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
                            <li class="breadcrumb-item active">Transaction Details</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Transaction Details</h4>
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->


        <div class="row">
            <div class="col-12">
                <form action="<?= base_url('Admin/datefilter')?>" method="post" >
                    <div class="row">
                        <div class="col-md-2">
                            <label>Select Gym</label>
                            <select  name="gymid" class="form-control" required>
                                <option>---Select Gym---</option>

                                <?php foreach ($gym as $res) { ?>
                                    <option value="<?= $res->gym_id ;?>"><?= $res->gymName; ?></option>
                                <?php } ?>

                            </select>
                        </div>
                        <div class="col-md-2">
                            <label>From Date</label>
                            <input name="date1" type="date" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <label>To Date</label>
                            <input name="date2" type="date" class="form-control">
                        </div>
                        <div class="col-md-2" style="padding-top: 3%">
                            <input type="submit" class="btn btn-primary" value="Search">
                        </div>
                    </div><br>
                </form>
                <div class="card m-b-30">
                    <div class="card-body">

                        <div class="table-responsive">
                            <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Date</th>
                                    <th>GymName</th>
                                    <th>Price</th>
                                    <th>Payment Mode</th>
                                </tr>
                                </thead>

                                <tbody>
                                <?php
                                $i=1; foreach ($message as  $value) {
                                    ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?=$value['cur_date']?></td>
                                        <td>
                                            <?=$value['gym_name']?>
                                        </td>
                                        <td><?=$value['totalpay']?></td>
                                        <?php if(	$value['payment_type'] == "offline"){ ?>
                                            <td >Pay At Gym</td>
                                        <?php }else{ ?>
                                            <td>Pay At GoGyms</td>
                                        <?php     } ?>
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





