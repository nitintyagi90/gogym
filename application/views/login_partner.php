<?php
include 'header.php';
?>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <br>
            <div class="modal-content" id="myModalLabel1">
                <div class="modal-header">
                    <h5 class="modal-title"><i class="ti-unlock"></i>Login Your Account</h5>

                </div>
                <div class="modal-body">

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs nav-advance theme-bg" role="tablist">
                        <li class="nav-item active">
                            <a class="nav-link" data-toggle="tab" href="#employer" role="tab">
                                <i class="ti-user"></i> Sign In</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('Gogym/register_partner'); ?>" role="tab">
                                <i class="ti-user"></i> Sign Up</a>
                        </li>
                    </ul>
                    <!-- Nav tabs -->

                    <!-- Tab panels -->
                    <?php if($responce = $this->session->flashdata('fail')): ?>
                        <div class="box-header">
                            <div class="col-lg-12">
                                <div class="alert alert-success text-center"><?php echo $responce;?></div>
                            </div>
                        </div>
                    <?php endif;?>


                    <!-- SignIn-->
                    <div class="tab-pane fade in show active" id="employer" role="tabpanel">
                        <form method="post" action="<?php echo base_url('Auth/partnerLogin'); ?>">

                            <div class="form-group">
                                <label>Mobile No</label>
                                <input type="tel" class="form-control" onkeypress="javascript:return isNumber(event)" maxlength="10" placeholder="Mobile No" name="user_mobile"  required>
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" placeholder="*********" name="user_password" required>
                            </div>

                            <div class="form-group">
										<span class="c-box-checkbox">
											<input id="rmp-3" class="checkbox-custom" name="rmp-3" type="checkbox">
											<label for="rmp-3" class="checkbox-custom-label">Remember Me</label>
										</span>
                                <a href="<?php echo base_url('Gogym/forgot'); ?>"  title="Forget" onclick="forgot();" class="float-right">Forgot Password?</a>
                            </div>
                            <div class="form-group text-center">
                                <input type="submit" class="btn theme-btn full-width btn-m" value="LogIn" >
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
