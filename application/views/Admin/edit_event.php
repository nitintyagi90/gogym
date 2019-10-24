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
                        <form class="form-horizontal" action="#" method="post" enctype="multipart/form-data">
                            <div class="modal-content">
                                <div class="modal-header">

                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="field-1" class="control-label">Event Name</label>
                                                <input type="text" name="name" required maxlength="16" class="form-control" id="field-1" placeholder="Enter Event Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="field-1" class="control-label">Event Address</label><br>
                                                <input type="text" name="address" class="form-control" id="field-1" placeholder="Enter Event Address">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="field-1" class="control-label">Event Date</label>
                                                <input type="date" required name="percent" class="form-control" id="field-1" placeholder="Enter Event Date">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="field-1" class="control-label">Event Price</label>
                                                <input type="text" required name="percent" class="form-control" id="field-1" placeholder="Enter Price">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label for="field-1" class="control-label">Event Description</label>
                                                <textarea class="form-control" rows="3"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="field-3" class="control-label">Offer Pic</label>
                                                <input type="file" required name="file1" onchange="readURL(this);">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <img id="blah" src="http://placehold.it/80" alt="your image">
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
