<?php
include 'header.php';
?>
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
                            <form method="post" action="<?php echo base_url('Auth/otpverify'); ?>">
                                <div class="form-group">
                                    <label>OTP</label>
                                    <input type="text" class="form-control" name="otp" placeholder="Enter OTP">
                                    <input type="hidden" name="id" value="<?php echo $user_id ?>" class="form-control" placeholder="Enter OTP">
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
