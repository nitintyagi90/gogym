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
                            <li class="breadcrumb-item active">Edit Event</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Edit Event</h4>
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
                                                <label for="field-1" class="control-label">Event Name</label>
                                                <input type="text" name="name" value="<?php echo $event[0]['event_name'] ?>" maxlength="16" class="form-control" id="field-1" placeholder="Enter Event Name">
                                                <input type="hidden" name="id" value="<?php echo $event[0]['event_id'] ?>" maxlength="16" class="form-control" id="field-1" placeholder="Enter Event Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="field-1" class="control-label">Event Address</label>
                                                <input type="text" value="<?php echo $event[0]['event_address'] ?>" name="address" class="form-control" id="field-1" placeholder="Enter Event Address">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="field-1" class="control-label">Event Date</label>
                                                <input type="date" value="<?php echo $event[0]['event_date'] ?>" name="date" class="form-control" id="field-1" placeholder="Enter Event Date">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="field-1" class="control-label">Event Price</label>
                                                <input type="text" value="<?php echo $event[0]['event_price'] ?>" name="price" class="form-control" id="field-1" placeholder="Enter Price">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label for="field-1" class="control-label">Event Description</label>
                                                <textarea class="form-control" name="description" rows="3"><?php echo $event[0]['event_description'] ?></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="field-3" class="control-label">Event Pic</label>
                                                <input type="file" name="event_pic" onchange="readURL(this);">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <img id="blah" class="img50" src="<?php echo $event[0]['event_pic'] ?>" alt="your image">
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
