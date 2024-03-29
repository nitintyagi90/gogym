<?php
include 'header.php';
?>
<style>
    .img50{
        height:50px !important;
        width:50px !important;
    }
</style>
<!-- End Navigation Bar-->
<div class="wrapper">

    <div class="container-fluid">

        <!-- Page-Title -->
        <div class="row paddtp5">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="btn-group m-0 pull-right">
                        <ol class="breadcrumb hide-phone p-0 m-0">
                            <li class="breadcrumb-item"><a href="#">Gym</a></li>
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active">Edit Team Member</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Edit Team Member</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">
                        <form class="form-horizontal" action="<?php echo base_url('Admin/updateTeam');?>" method="post" enctype="multipart/form-data">
                            <div class="modal-content">
                                <div class="modal-header">

                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="field-1" class="control-label">Name</label>
                                                <input type="text" value="<?php echo $team[0]->memberName ?>" name="memberName" required class="form-control" id="field-1" placeholder="Enter Member Name">
                                                <input type="hidden" value="<?php echo $team[0]->id ?>" name="id"  class="form-control" id="field-1" placeholder="Enter Member Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="field-1" class="control-label">Designation</label>
                                                <input type="text" value="<?php echo $team[0]->designation ?>" name="designation" required class="form-control" id="field-1" placeholder="Enter Designation">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label for="field-1" class="control-label">Description</label>
                                                <textarea class="form-control" name="description" rows="3"><?php echo $team[0]->description ?></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="field-1" class="control-label">Member Image</label>
                                                <input type="file" name="categoryImage"  class="form-control" id="field-1" placeholder="Enter Amenities Name">
                                                <img src="<?php echo $team[0]->image ?>" class="img50">
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
