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
                            <li class="breadcrumb-item active">Enquiry List</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Enquiry List</h4>
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
                                    <th>Name</th>
                                    <th>Email ID</th>
                                    <th>Mobile No</th>
                                    <th>Subject</th>
                                    <th>Description</th>
                                 </tr>
                                </thead>
                                <tbody>
                                <?php $i=1; foreach ($message as  $value) {
                                    ?>
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td><?=$value['enq_name']?></td>
                                    <td><?=$value['enq_email']?></td>
                                    <td><?=$value['enq_mobile']?></td>
                                    <td><?=$value['enq_subject']?></td>
                                    <td><?=$value['enq_message']?></td>
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
