<?php
include 'header.php';
?>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <br>
            <div class="modal-content" id="myModalLabel1">
                <div class="modal-header">
                    <h5 class="modal-title"><i class="ti-unlock"></i>Enter OTP</h5>

                </div>
                <div class="modal-body">
                    <!-- Tab panels -->
                    <div class="tab-content">
                        <!-- SignIn-->
                        <div class="tab-pane fade in show active" id="employer" role="tabpanel">
                            <form>
                                <div class="form-group">
                                    <label>New Password</label>
                                    <input type="text" class="form-control" placeholder="Enter New Password" required>
                                </div>
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input type="text" class="form-control" placeholder="Enter Confirm Password" required>
                                </div>
                                <div class="form-group text-center">
                                    <!-- <input type="submit" class="btn theme-btn full-width btn-m" value="OTP" > -->
                                    <a href="<?php echo base_url('Gogym/login'); ?>" class="btn theme-btn full-width btn-m">Update Password</a>
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
