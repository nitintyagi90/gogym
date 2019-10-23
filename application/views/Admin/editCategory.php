<?php

include 'header.php';
?>
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
                            <li class="breadcrumb-item"><a href="#">GoGyms</a></li>
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active">Category</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Category</h4>
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->


        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">

                        <form class="form-horizontal" action="<?php echo base_url('Admin/updateCategory');?>" method="post" enctype="multipart/form-data">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalform">Category Add</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="field-1" class="control-label">Category Name</label>
                                                <input type="text" value="<?php echo $category[0]['categoryName'] ?>" name="categoryName" required class="form-control" id="field-1" placeholder="Enter Amenities Name">
                                                <input type="hidden" value="<?php echo $category[0]['id'] ?>" name="id" required class="form-control" id="field-1" placeholder="Enter Amenities Name">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="field-1" class="control-label">Category Image</label>
                                                <input type="file" name="categoryImage"  class="form-control" id="field-1" placeholder="Enter Amenities Name">
                                                <img src="<?php echo $category[0]['categoryImage'] ?>" class="img50">
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-raised btn-danger" data-dismiss="modal">Close</button>
                                    <input type="submit" class="btn btn-raised btn-primary ml-2" value="Submit">
                                </div>
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





