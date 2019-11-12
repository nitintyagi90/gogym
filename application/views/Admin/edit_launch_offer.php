<?php
include 'header.php';
?>
<style>
    .img50{
        height: 50px;
        width: 50px;
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
                            <li class="breadcrumb-item active">Edit Launch Offer</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Edit Launch Offer</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">
                        <form class="form-horizontal" action="<?php echo base_url('Admin/updateLaunch_offer');?>" method="post" enctype="multipart/form-data">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalform">Edit Launch Offer</h5>

                                </div>
                                <div class="modal-body">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="field-1" class="control-label">offer Name</label>
                                                <input type="text"  name="name" value="<?php echo $offer[0]['deal_name'] ?>" maxlength="16" class="form-control" id="field-1" placeholder="Enter Deals Name">
                                                <input type="hidden"  name="id" value="<?php echo $offer[0]['deal_id'] ?>" maxlength="16" class="form-control" id="field-1" placeholder="Enter Deals Name">
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="field-1" class="control-label">Gym Name</label><br>
                                                <select class="select2 mb-3 select2-multiple" name="gymName[]" style="width: 100%" multiple="multiple" data-placeholder="Choose">
                                                    <option>---Select Gym Name---</option>
                                                    <?php foreach ($message as  $value) {
                                                        ?>
                                                        <option value="<?=$value['gym_id']?>"><?=$value['gymName']?></option>
                                                    <?php }?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="field-1" class="control-label">Percent</label>
                                                <input type="text" value="<?php echo $offer[0]['deal_percent'] ?>" name="percent" class="form-control" id="field-1" placeholder="Enter Percent">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="field-1" class="control-label">Max. Discount</label>
                                                <input type="text" value="<?php echo $offer[0]['deal_discount'] ?>" name="discount" class="form-control" id="field-1" placeholder="Enter Max. Discount">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="field-3" class="control-label">Offer Pic</label>
                                                <input type="file" name="image" onchange="readURL(this);">

                                            </div>
                                        </div
                                        <div class="col-md-3">
                                            <img src="<?php echo $offer[0]['deal_image'] ?>" class="img50">
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
