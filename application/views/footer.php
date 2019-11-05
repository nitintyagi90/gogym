<!-- ============================ Footer Start ================================== -->
<footer class="image-bg light-footer" style="background:#ffffff url(<?php echo base_url();?>web/assets/img/trans-banner-2.png) no-repeat">
	<div>
		<div class="container">
			<div class="row">

				<div class="col-lg-4 col-md-4">
					<div class="footer-widget">
						<aside id="media_image-2" class="widget widget_media_image">
							<a href="index.html">
								<img src="<?php echo base_url();?>web/assets/img/go-gyms-60.png" class="img-fluid mx-auto" alt="">
							</a>
						</aside>
						<p>Go gyms a connecting bridge between you and your health Goals. Go Gyms is a flexible key platform which provides a flexible regular hazard free fitness environment to help people to live fit Everyday. </p>
					</div>
				</div>

				<div class="col-lg-8 col-md-8">
					<div class="row">

						<div class="col-lg-4 col-md-4">
							<div class="footer-widget">
								<h4 class="widget-title">Location</h4>
								<ul class="footer-menu">
									<li><a href="#">Delhi</a></li>
									<li><a href="#">Gurugram</a></li>
									<li><a href="#">Noida</a></li>
									<li><a href="#">Ghaziabad</a></li>
									<li><a href="#">Faridabad</a></li>
								</ul>
							</div>
						</div>

						<div class="col-lg-4 col-md-4">
							<div class="footer-widget">
								<h4 class="widget-title">Useful links</h4>
								<ul class="footer-menu">
									<li><a href="<?php echo base_url('Gogym/about'); ?>">About US</a></li>
									<li><a href="#">Fitness Blog</a></li>
									<li><a href="<?php echo base_url('Gogym/carrer'); ?>">Carrer</a></li>
									<li><a href="<?php echo base_url('Gogym/contact'); ?>">Contact US</a></li>
								</ul>
							</div>
						</div>

						<div class="col-lg-4 col-md-4">
							<div class="footer-widget">
								<h4 class="widget-title">Contact Us</h4>
								<p><i class="fa fa-map-marker"></i> C-82/8, Gali No-7, Mohanpuri<br>
									Maujpur Delhi-110053</p>
								<p><i class="fa fa-envelope"></i> info@gogyms.in</p>
								<p><i class="fa fa-phone"></i> +91-8377083777</p>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<div class="footer-bottom">
		<div class="container">
			<div class="row">

				<div class="col-lg-12 col-md-12">
					<ul class="footer-bottom-social">
						<li><a href="https://www.facebook.com/gogyms" target="_blank"><i class="fa fa-facebook"></i>Facebook</a></li>
						<li><a href="https://www.twitter.com/gogyms" target="_blank"><i class="fa fa-twitter"></i>Twiiter</a></li>
						<li><a href="https://www.instagram.com/gogyms" target="_blank"><i class="fa fa-instagram"></i>Instagram</a></li>
						<li><a href="https://www.linkedin.com/company/gogyms" target="_blank"><i class="fa fa-linkedin"></i>LinkedIn</a></li>
						<li><a href="https://www.youtube.com/channel/UC9E5l9XQkx39dj4QhmnBiwA?view_as=subscriber" target="_blank"><i class="fa fa-youtube"></i>Youtube</a></li>
						<li><a href="#" target="_blank"><i class="fa fa-android"></i>Download Android App</a></li>
					</ul>
				</div>

			</div>
            <div class="row">

                <div class="col-lg-12 col-md-12">
                    <ul class="footer-bottom-social">
                        <li><a href="<?php echo base_url('Gogym/rules_regulation'); ?>">Rule & Regulation</a></li>
                        <li><a href="<?php echo base_url('Gogym/rules_regulation_policy'); ?>">Rule & Regulation & Policy</a></li>
                        <li><a href="<?php echo base_url('Gogym/refund_cancellation_policy'); ?>">Refund & Cancellation</a></li>
                        <li><a href="<?php echo base_url('Gogym/termination_policy'); ?>">Termination Policy</a></li>
                    </ul>
                </div>

            </div>
		</div>
	</div>
</footer>
<!-- ============================ Footer End ================================== -->

<!-- Sign Up Window Code -->
<div class="modal fade" id="signin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
	<div class="modal-dialog">

		<div class="modal-content" id="myModalLabel1">
			<div class="modal-header">
				<h5 class="modal-title"><i class="ti-unlock"></i>Create a Account</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<i class="ti-close"></i>
				</button>
			</div>
			<div class="modal-body">

				<!-- Nav tabs -->
				<ul class="nav nav-tabs nav-advance theme-bg" role="tablist">
					<li class="nav-item active">
						<a class="nav-link" data-toggle="tab" href="#employer" role="tab">
							<i class="ti-user"></i> Sign In</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#candidate" role="tab">
							<i class="ti-user"></i> Sign Up</a>
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
					<div class="tab-pane fade in show active" id="employer" role="tabpanel">
						<form id="login">

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
								<a href="#forget" data-toggle="modal" title="Forget" onclick="forgot();" class="float-right">Forgot Password?</a>
							</div>
							<div class="form-group text-center">
								<input type="submit" class="btn theme-btn full-width btn-m" value="LogIn" >
							</div>

						</form>

					</div>
					<!--/.Panel 1-->

					<!-- SignUp Panel -->
					<div class="tab-pane fade" id="candidate" role="tabpanel">
						<form id="userRegister" method="post" enctype="multipart/form-data" novalidate>
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12">
									<div class="form-group">
										<label>Select Type</label>
										<select class="form-control" name="purpose" id='purpose'>
											<option value="0">---Select Type---</option>
											<option value="1">AS User</option>
											<option value="2">AS Gym Owner</option>
										</select>
									</div>
								</div>
							</div>
							<div class="row" style="display: none;" id="user">
								<div class="col-lg-12 col-md-12 col-sm-12">
									<div class="form-group">
										<label>Mobile</label>
										<input type="text" id="mobileUser" onkeypress="javascript:return isNumber(event)" maxlength="10" name="userMobile" class="form-control" placeholder="Mobile" required>
									</div>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12">
									<div class="form-group">
										<label>Password</label>
										<input type="password" id="passwordUser" name="userPassword" class="form-control" placeholder="Password">
									</div>
								</div>
							</div>
							<div class="row" style="display: none;" id="owner">
								<div class="col-lg-6 col-md-6 col-sm-12">
									<div class="form-group">
										<label>Gym Owner Name</label>
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
							<div class="form-group text-center">
								<input type="submit" class="btn theme-btn full-width btn-m" value="Register" >
							</div>
						</form>

						<div class="log-option"><span>OR</span></div>

						<div class="row mrg-bot-20">
							<div class="col-md-6">
								<a href="#" title="" class="fb-log-btn log-btn"><i class="fa fa-facebook"></i>SignUp With Facebook</a>
							</div>
							<div class="col-md-6">
								<a href="#" title="" class="gplus-log-btn log-btn"><i class="fa fa-google-plus"></i>SignUp With Google+</a>
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
<div class="modal fade" id="forget" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
	<div class="modal-dialog">

		<div class="modal-content" id="myModalLabel1">
			<div class="modal-header">
				<h5 class="modal-title"><i class="ti-unlock"></i>Forgot Password</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<i class="ti-close"></i>
				</button>
			</div>
			<div class="modal-body">
				<!-- Tab panels -->
				<div class="tab-content">
					<!-- SignIn-->
					<div class="tab-pane fade in show active" id="employer" role="tabpanel">
						<form>
							<div class="form-group">
								<label>Mobile No</label>
								<input type="text" class="form-control" placeholder="Mobile No">
							</div>
							<div class="form-group text-center">
								<a href="#otp" data-toggle="modal" title="otp" onclick="otp();" class="btn theme-btn full-width btn-m">OTP</a>
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
<!-- End Sign Up Window -->
<div class="modal fade" id="enterOtp"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
	<div class="modal-dialog">

		<div class="modal-content" id="myModalLabel1">
			<div class="modal-header">
				<h5 class="modal-title"><i class="ti-unlock"></i>OTP</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<i class="ti-close"></i>
				</button>
			</div>
			<div class="modal-body">
				<!-- Tab panels -->
				<div class="tab-content">
					<!-- SignIn-->
					<div class="tab-pane fade in show active" id="employer" role="tabpanel">
						<form action="<?php echo base_url('Auth/otpverify');?>" method="post" enctype="multipart/form-data">
							<div class="form-group">
								<label>OTP</label>
								<input type="text" name="otp" id="otp" class="form-control" placeholder="Enter OTP">
								<input type="hidden" name="id" id="id" class="form-control userIddd" placeholder="Enter OTP">
							</div>
							<div class="form-group text-center">
								<input type="submit" class="btn theme-btn full-width btn-m" id="otp2" value="OTP" >
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

</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->

<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="<?php echo base_url();?>web/assets/plugins/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>web/assets/plugins/js/jquery-ui.min.js"></script>
<script src="<?php echo base_url();?>web/assets/plugins/js/jquery.fancybox.min.js"></script>
<script src="<?php echo base_url();?>web/assets/plugins/js/aos.js"></script>
<script src="<?php echo base_url();?>web/assets/plugins/js/popper.min.js"></script>
<script src="<?php echo base_url();?>web/assets/plugins/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>web/assets/plugins/js/owl.carousel.min.js"></script>
<script src="<?php echo base_url();?>web/assets/plugins/js/jquery-rating.js"></script>
<script src="<?php echo base_url();?>web/assets/plugins/js/slick.js"></script>
<script src="<?php echo base_url();?>web/assets/plugins/js/imagesloaded.js"></script>
<script src="<?php echo base_url();?>web/assets/plugins/js/isotope.min.js"></script>
<script src="<?php echo base_url();?>web/assets/plugins/js/select2.min.js"></script>
<script src="<?php echo base_url();?>web/assets/plugins/js/bootstrap-slider.js"></script>
<script src="<?php echo base_url();?>web/assets/plugins/js/datedropper.min.js"></script>
<script src="<?php echo base_url();?>web/assets/plugins/js/dropzone.js"></script>
<script src="<?php echo base_url();?>web/assets/plugins/js/placeholders.min.js"></script>
<script src="<?php echo base_url();?>web/assets/plugins/js/timedropper.js"></script>
<script src="http://maps.google.com/maps/api/js?key="></script>
<script src="<?php echo base_url();?>web/assets/plugins/js/map_infobox.js"></script>
<script src="<?php echo base_url();?>web/assets/plugins/js/markerclusterer.js"></script>
<script src="<?php echo base_url();?>web/assets/js/custom-maps.js"></script>

<!-- Custom js -->
<script src="<?php echo base_url();?>web/assets/js/custom.js"></script>
<script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places"></script>

<script src="<?php echo base_url();?>web/assets/js/jquery.geocomplete.js"></script>
<script src="<?php echo base_url();?>web/assets/bootstrap-clockpicker.min.js"></script>


<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->


<script type="text/javascript">
    /*function otp1(){
	$("#signin").hide();
	$("#otp").show();
}*/
    $(document).ready(function(){
        $('#purpose').on('change', function() {
            if ( this.value == '1')
            {
                $("#user").show();
            }
            else
            {
                $("#user").hide();
            }
            if ( this.value == '2')
            {
                $("#owner").show();
            }
            else
            {
                $("#owner").hide();
            }
        });
    });
</script>
<script>
	$("#userRegister").submit(function(event) {
        event.preventDefault();
        $.ajax({
            url: "<?php echo base_url('Auth/register'); ?>",
            data: $("#userRegister").serialize(),
            type: "post",
            async: false,
            dataType: 'json',
            success: function(result){
                var userId = result.user_id;
                if(result=='false'){
                    alert('Email and Mobile already exists')
                }
                if(result.response=='true'){
                    $('#signin').modal('hide');
                    $('#enterOtp').modal('show');
                    $(".userIddd").val(userId);
                }
            },

        });
    });

</script>
<script>
    $("#login").submit(function(event) {
        event.preventDefault();
        $.ajax({
            url: "<?php echo base_url('Auth/login'); ?>",
            data: $("#login").serialize(),
            type: "post",
            async: false,
            dataType: 'json',
            success: function(result){
                if(result.user_type==1){
                    window.location = "Gogym/user_dashboard?user_id="+result.session_id;
                }
                if(result.user_type==2){
                    window.location.href="Gogym/dashboard?user_id="+result.session_id;
                }
				if(result==false){
					alert('invalid login details')
                }

            },

        });
    });

</script>
<script>
    $(document).ready(function(){
        $("#otp2").click(function(){
            var otp = $("#otp").val();
            var id = $("#id").val();

            var dataString = 'otp='+ otp ;
            if(otp=='')
            {
                alert("Please Enter OTP");
            }
            else
            {
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url('Auth/otpverify'); ?>",
                    data: {
                        id:id,
                        otp:otp
                    },
                    success: function(result){
                        console.log(result.response);
                        if(result=="false"){
                            alert('Please Enter valid OTP');
                        }
                        if(result.userType=='1'){
                            window.location = "Gogym/user_dashboard?user_id="+id;

                        }
                        if(result.userType=='2'){
                            window.location.href="Gogym/dashboard?user_id="+id;

                        }
                    }
                });
            }
            return false;
        });
    });
</script>
<script>
    // WRITE THE VALIDATION SCRIPT.
    function isNumber(evt) {
        var iKeyCode = (evt.which) ? evt.which : evt.keyCode
        if (iKeyCode != 46 && iKeyCode > 31 && (iKeyCode < 48 || iKeyCode > 57))
            return false;

        return true;
    }
</script>
</body>


</html>
