<?php
include 'header.php';
?>

<!-- End Navigation Bar-->
<style>
    .img50{
        height:50px !important;
        width:50px !important;
    }
    </style>

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
                            <li class="breadcrumb-item active">Edit Gogyms Diet</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Edit Gogyms Diet</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">
                        <form class="form-horizontal" action="<?php echo base_url('Admin/updateDiet');?>" method="post" enctype="multipart/form-data">
                            <div class="modal-content">
                                <div class="modal-header">

                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="field-1" class="control-label">Title</label>
                                                <input type="text" name="title" value="<?php echo $diet[0]['title']; ?>" class="form-control" id="field-1" placeholder="Enter Title">
                                                <input type="hidden" name="id" value="<?php echo $diet[0]['id']; ?>" class="form-control" id="field-1" placeholder="Enter Title">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="field-1" class="control-label">Url</label>
                                                <input type="text" name="url" value="<?php echo $diet[0]['url']; ?>" class="form-control" id="field-1" placeholder="Enter Url">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="form-group">
                                                <label for="field-1" class="control-label">Description</label>
                                                <textarea class="form-control" name="description" rows="3"><?php echo $diet[0]['description']; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="field-1" class="control-label">Diet Image</label>
                                                <input type="file" name="categoryImage"  class="form-control" id="field-1" >
                                                <img src="<?php echo $diet[0]['image'] ?>" class="img50">

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
