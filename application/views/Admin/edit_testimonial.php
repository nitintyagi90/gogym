<?php
include 'header.php';
?>
<style>
    .img50{
        height: 80px;
        width: 80px;
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
                            <li class="breadcrumb-item active">Edit Testimonial</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Edit Testimonial</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">
                        <form class="form-horizontal" action="<?php echo base_url('Admin/updateTestimonial');?>" method="post" enctype="multipart/form-data">
                            <div class="modal-content">
                                <div class="modal-header">

                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="field-1" class="control-label">Name</label>
                                                <input type="text" name="memberName" value="<?php echo $test[0]['tes_name'] ?>"  class="form-control" id="field-1" placeholder="Enter Name">
                                                <input type="hidden" name="id" value="<?php echo $test[0]['tes_id'] ?>"  class="form-control" id="field-1" placeholder="Enter Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="field-1" class="control-label">Designation</label>
                                                <input type="text" name="designation"  value="<?php echo $test[0]['tes_designation'] ?>" class="form-control" id="field-1" placeholder="Enter Designation">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label for="field-1" class="control-label">Description</label>
                                                <textarea class="form-control" name="description" rows="3"><?php echo $test[0]['tes_description'] ?></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="field-3" class="control-label">Image</label>
                                                <input type="file" name="image" name="file1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <img id="blah" class="img50" src="<?php echo $test[0]['tes_image'] ?>" alt="your image">
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
