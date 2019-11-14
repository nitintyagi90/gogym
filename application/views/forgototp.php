<?php
include 'header.php';
?>
<?php if($responce = $this->session->flashdata('Successfully')): ?>
    <div class="box-header">
        <div class="col-lg-12">
            <div class="alert alert-success text-center"><?php echo $responce;?></div>
        </div>
    </div>
<?php endif;?>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <br>
            <div class="modal-content" id="myModalLabel1">
                <div class="modal-header">
                    <h5 class="modal-title"><i class="ti-unlock"></i>OTP</h5>

                </div>
                <div class="modal-body">
                    <!-- Tab panels -->
                    <div class="tab-content">
                        <!-- SignIn-->
                        <div class="tab-pane fade in show active" id="employer" role="tabpanel">
                            <form  action="<?php echo base_url('Gogym/forgotVerify'); ?>" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>OTP</label>
                                    <input type="text" name="otp" class="form-control" placeholder="Enter OTP">
                                    <input type="hidden" name="mobile" value="<?php echo $mobile ?>" class="form-control" placeholder="Enter OTP">
                                </div>
                                <div class="form-group text-center">
                                    <input type="submit" class="btn theme-btn full-width btn-m" value="OTP" >
                                </div>
                            </form>
                        </div>
                        <!--/.Panel 1-->
                    </div>
                    <!-- Tab panels -->
                </div>
            </div>
        </div>
    </div>
<?php
include 'footer.php';
