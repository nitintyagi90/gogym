<?php
include 'header.php';
?>
<!-- End Navigation Bar-->
<div class="wrapper">

    <div class="container-fluid">

        <!-- Page-Title -->
        <div class="row" style="padding-top: 12%;">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="btn-group m-0 pull-right">
                        <ol class="breadcrumb hide-phone p-0 m-0">
                            <li class="breadcrumb-item"><a href="#">Gym</a></li>
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active">Add Event</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Add Event</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">
                        <form class="form-horizontal" action="<?php echo base_url('Admin/insert_event');?>" method="post" enctype="multipart/form-data">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalform">Add Event</h5>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="field-1" class="control-label">Event Name</label>
                                                <input type="text" name="name" required class="form-control" id="field-1" placeholder="Enter Event Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="field-1" class="control-label">Event Address</label>
                                                <input type="text" name="address" class="form-control" id="field-1" placeholder="Enter Event Address">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="field-1" class="control-label">Event Date</label>
                                                <input type="date" name="date" class="form-control" id="field-1" placeholder="Enter Event Date">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="field-1" class="control-label">Event Price</label>
                                                <input type="text" required name="price" class="form-control" id="field-1" placeholder="Enter Price">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <label for="field-1" class="control-label">Event Description</label>
                                                <textarea class="form-control" name="description" rows="3"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="field-3" class="control-label">Event Pic</label>
                                                <input type="file" required name="event_pic">
                                            </div>
                                        </div>
                                        <!--<div class="col-md-2">
                                            <img id="blah" src="http://placehold.it/80" alt="your image">
                                        </div>-->
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
