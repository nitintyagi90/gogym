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
                            <li class="breadcrumb-item active">Activity</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Activity</h4>
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->


        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">
                        <form method="post" action="<?php echo base_url('Admin/update_activity');?>" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="field-1" class="control-label">Activity Name</label>
                                        <input type="text" name="activity_name" value="<?php echo $activity[0]['activity_name']; ?>" required class="form-control" id="field-1" placeholder="Enter Activity Name">
                                        <input type="hidden" name="id" value="<?php echo $activity[0]['activity_id']; ?>" required class="form-control" id="field-1" placeholder="Enter Activity Name">
                                    </div>
                                </div>
                                <input type="submit" class="btn btn-raised btn-primary ml-2" value="Submit">
                            </div>
                        </form>
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






