<?php
include 'header.php';
?>
<?php if($responce = $this->session->flashdata('fail')): ?>
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
                    <h5 class="modal-title"><i class="ti-unlock"></i>Create a Account</h5>

                </div>
                <div class="modal-body">

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs nav-advance theme-bg" role="tablist">
                        <li class="nav-item active">
                            <a class="nav-link" data-toggle="tab" href="#candidate" role="tab">
                                <i class="ti-user"></i>Sign Up</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"  href="<?php echo base_url('Gogym/login_partner'); ?>" role="tab">
                                <i class="ti-user"></i> Sign In</a>
                        </li>
                    </ul>
                    <!-- Nav tabs -->

                    <!-- Tab panels -->
                    <div class="tab-content">
                        <?php if($this->session->flashdata('active')){?>
                            <div class="alert alert-primary text-center">
                                <strong>
                                    <?php echo $this->session->flashdata('active'); ?>
                                </strong>
                            </div>
                        <?php } ?>
                        <!-- SignIn-->
                        <!--/.Panel 1-->

                        <!-- SignUp Panel -->
                        <div class="tab-pane fade in show active" id="candidate" role="tabpanel">
                            <form  action="<?php echo base_url('Auth/partnerRegister'); ?>" method="post" enctype="multipart/form-data">


                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Partner Name</label>
                                            <input type="text" class="form-control"  name="owner_name" placeholder="Gym Owner Name" required="">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Email ID</label>
                                            <input type="text" class="form-control" name="email" placeholder="Email ID" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Mobile</label>
                                            <input type="text" class="form-control" onkeypress="javascript:return isNumber(event)" maxlength="10"  name="mobile" placeholder="Mobile" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control" name="password" placeholder="Password" required="">
                                        </div>
                                    </div>

                                </div>
                                <div class="form-group">
										<span class="c-box-checkbox">
											<input id="rmp-3" class="checkbox-custom" name="rmp-3" type="checkbox" required="">
                                            <label for="rmp-3" class="checkbox-custom-label"><a target="_blank" href="<?php echo base_url('Gogym/termsrule'); ?>">I Agree Term and condition</a></label>
										</span>

                                </div>
                                <div class="form-group text-center">
                                    <input type="submit" class="btn theme-btn full-width btn-m" value="Register" >
                                </div>
                            </form>

                            <div class="log-option"><span>OR</span></div>

                            <div class="row mrg-bot-20">
                                <div class="col-md-6">
                                    <a href="<?php echo base_url('Auth/FacebookLogin'); ?>" title="" class="fb-log-btn log-btn"><i class="fa fa-facebook"></i>SignUp With Facebook</a>
                                </div>
                                <div class="col-md-6">
                                    <a href="<?php echo base_url('login/google_login2'); ?>" title="" class="gplus-log-btn log-btn"><i class="fa fa-google-plus"></i>SignUp With Google+</a>
                                </div>
                            </div>

                        </div>
                        <!--/.Panel 2-->

                    </div>
                    <!-- Tab panels -->
                </div>
            </div>
        </div>
    </div>
<?php
include 'footer.php';
