<?php
include 'header.php';
?>
<!-- ============================ Hero Banner  Start================================== -->
			<section class="single-banner" style="background-image:url(<?php echo base_url();?>web/assets/img/banner-2.jpg);">
				<div class="finding-overlay op-60"></div>
				<div class="main-banner">
					<div class="container">

						<div class="row">
							<div class="col-sm-12">
								<div class="caption text-center text-white">
									<h2>Find the best fitness centers around you!</h2>
								</div>
							</div>
						</div>

						<form>
							<fieldset class="home-form-1">
								<div class="row no-gutters justify-content-center seo-contact">

									<div class="col-lg-4 col-md-5">
										<div class="form-group">
											<i class="fa fa-map-marker"></i>
											<!--<input type="text" id="search_text" class="form-control b-r" placeholder="Location...">-->
                                           <!-- <select id="location" class="js-states form-control">
                                                <option value="">Choose location</option>
                                                <option value="Delhi">Delhi</option>
                                            </select>-->
                                            <select id="area" class="js-states form-control">
                                                <option value="">Choose Location</option>
                                                <option value="Delhi">Delhi</option>
                                                <option value="Faridabad">Faridabad</option>
                                                <option value="Ghaziabad">Ghaziabad</option>
                                                <option value="Gurugram">Gurugram</option>
                                                 <option value="Noida">Noida</option>
                                            </select>
										</div>
									</div>

									<div class="col-lg-3 col-md-4">
										<div class="form-group">
											<select id="category" class="js-states form-control">
												<option value="">Choose Fitness Option</option>
                                                <?php foreach ($category as $cat){ ?>
												<option value="<?php echo $cat->id ?>"><?php echo $cat->categoryName ?></option>
                                                <?php } ?>

											</select>
										</div>
									</div>

									<div class="col-lg-2 col-md-3">
										<button type="submit" class="btn theme-btn seub-btn b-0">Search</button>
									</div>

								</div>
							</fieldset>
						</form>

						<div class="row justify-content-center">
							<div class="col-lg-10 col-md-12">
								<ul class="banner-cat-list">
                                    <?php foreach ($category as $cat){ ?>
									<li><a href="<?php echo site_url('Admin/viewPofile/'.$cat->id);?>"><img src="<?php echo base_url();?>web/assets/img/01.png"><span><?php echo $cat->categoryName ?></span></a></li>
                                   <?php } ?>
                                </ul>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- ============================ Hero Banner End ================================== -->

			<!-- =========================== Most Visited Places Start ============================================ -->
			<section>
				<div class="container">

					<div class="row">
						<div class="col text-center">
							<div class="sec-heading mx-auto">
								<h3>EXPLORE THE WORLD OF FITNESS OPPORTUNITIES</h3>
								<p>Choose from hundreds of fitness centers, gyms, yoga, zumba and personal trainers to reach your fitness goals.</p>
							</div>
						</div>
					</div>
					<div class="row">
					<ul class="banner-cat-list">
                        <?php foreach ($category as $cat){ ?>
                            <li>
                                <a href="#">
                                    <img src="<?php echo base_url();?>web/assets/img/02.png">
                                    <!-- <span class="fitness-options gyms"></span> -->
                                    <p class="text-uppercase"><?php echo $cat->categoryName ?></p>
                                </a>
                            </li>
                        <?php } ?>
                </ul></div>
				</div>
			</section>
			<!-- =========================== Most Visited Places End ============================================ -->

			<!-- =========================== Category Start ============================================ -->
			<section class="gray">
				<div class="container">

					<div class="row">
						<div class="col text-center">
							<div class="sec-heading mx-auto">
								<h3>GRAB THE BEST FITNESS DEALS BEFORE THEY’RE GONE!</h3>
								<p>Irresistible fitness center offers that are light on your pocket yet high on your expectation!</p>
							</div>
						</div>
					</div>

					<div class="row">
                        <?php foreach ($gym as $gymDetail){ ?>
                            <div class="col-lg-4 col-md-4 col-sm-6 mb-4">
                                <div class="event-grid-wrap">
                                    <a href="<?php echo base_url('Gogym/lists'); ?>">
                                        <div class="event-grid-header">
                                            <img src="<?php echo $gymDetail->gymImage; ?>" class="img-fluid mx-auto" alt="">

                                            <span class="event-grid-cat1">Noida</span>
                                            <span class="event-grid-cat2">
										<h5 class="clrfff"><?php echo $gymDetail->gymName; ?></h5></span>

                                            <span class="event-grid-cat4"><p class="thmclr"><i class="fa fa-inr"></i> <?php echo $gymDetail->gymPrice; ?></p></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <?php } ?>

					</div>

				</div>
			</section>
			<!-- =========================== Category End ============================================ -->

			<!-- =========================== features Start ============================================ -->
			<section>
				<div class="container">



					<div class="row">
						<div class="col-lg-6 col-md-6 mb-4">
							<div class="features-icon-center">
								<div class="features-icon-center-item">

									<div class="features-icon-center-content">
										<img src="https://npimg2.gympik.com/webImages/home/get_personal_trainer.jpg?ver=1569481951" class="img-responsive" style="height: 350px;">
									</div>
								</div>
							</div>
						</div>


						<div class="col-lg-6 col-md-6 mb-4">
							<div class="col text-center">
							<div class="sec-heading mx-auto">
								<h3>HIRE A PERSONAL TRAINER</h3>
								<p>Getting back in shape has never been so easy!</p>

							</div>
							<h6>Get a best-in-class Personal Trainer from Gympik and kick-start your fitness journey at the comfort of your home! You would love the results you see!</h6><br>
							<a class="btn theme-btn font-14" href="#myModal" data-toggle="modal"></i>ENQUIRE NOW</a>
						</div>
						</div>
					</div>

				</div>
			</section>

			<!-- =========================== features End ============================================ -->
			<section>
				<div class="container">

					<div class="row">
						<div class="col text-center">
							<div class="sec-heading mx-auto">
								<h3>EXCLUSIVE FITNESS TRENDS</h3>
								<p>Find out the popular fitness trends and activities near you!</p>
							</div>
						</div>
					</div>

					<div class="row m-0">
						<div class="owl-carousel" id="destination-slide">

							<!-- Single Country -->
							<div class="destination-list event-grid-header">
								<div class="destination-list-thumb">
									<a href="#"><img src="<?php echo base_url();?>web/assets/img/event-1.jpg" class="img-fluid mx-auto" alt=""></a>
									<span class="event-grid-cat5">Must Try</span>
								</div>
							</div>

							<!-- Single Country -->
							<div class="destination-list event-grid-header">
								<div class="destination-list-thumb">
									<a href="#"><img src="<?php echo base_url();?>web/assets/img/event-1.jpg" class="img-fluid mx-auto" alt=""></a>
									<span class="event-grid-cat5">Newly Launched</span>
								</div>
							</div>

							<!-- Single Country -->
							<div class="destination-list event-grid-header">
								<div class="destination-list-thumb">
									<a href="#"><img src="<?php echo base_url();?>web/assets/img/event-1.jpg" class="img-fluid mx-auto" alt=""></a>
									<span class="event-grid-cat5">Trending Centers</span>
								</div>
							</div>

							<!-- Single Country -->
							<div class="destination-list event-grid-header">
								<div class="destination-list-thumb">
									<a href="#"><img src="<?php echo base_url();?>web/assets/img/event-1.jpg" class="img-fluid mx-auto" alt=""></a>
									<span class="event-grid-cat5">Budget Friendly</span>
								</div>
							</div>
						</div>
					</div>

				</div>
			</section>

			<!-- =========================== Testimonial Start ============================================ -->
			<section class="testimonials-3 center-bg" style="background:#ff7600 url(<?php echo base_url();?>web/assets/img/icon-bg.png)">
				<div class="container">

					<div class="row justify-content-center">
						<div class="col-lg-10 col-md-10">
							<div id="testimonial-3" class="slick-carousel-3">
                                <?php
                                foreach ($testimonial as $tes){ ?>
                                <div class="testimonial-detail">
									<div class="client-detail-box">
										<div class="pic">
											<img src="<?php echo base_url();?>web/assets/img/team-1.png" alt="">
										</div>
										<div class="client-detail">
											<h3 class="testimonial-title"><?php echo $tes->tes_name; ?></h3>
											<span class="post"><?php echo $tes->tes_designation; ?></span>
										</div>
									</div>
									<p class="description">
										" <?php echo $tes->tes_description; ?> "
									</p>
								</div>
                                <?php } ?>
                            </div>
						</div>
					</div>

				</div>
			</section>
			<!-- =========================== Testimonial End ========================================= -->
<?php
include 'footer.php';
?>
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">ENQUIRE NOW</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url('Gogym/insert_enquiry');?>" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="col-md-6">
                        <label>Email ID</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                </div>
                    <div class="row" style="padding-top: 2%;">
                        <div class="col-md-6">
                            <label>Mobile No</label>
                            <input type="text" class="form-control" name="mobile" required>
                        </div>
                        <div class="col-md-6">
                            <label>Subject</label>
                            <input type="text" class="form-control" name="subject">
                        </div>
                    </div>
                    <div class="row" style="padding-top: 2%;">
                        <div class="col-md-12">
                            <label>Message</label>
                            <textarea class="form-control" name="msg"></textarea>
                        </div>
                    </div>
                    <span style="padding-top: 2%;">
                        <input type="submit" class="btn btn-primary" value="Submit">
                    </div>
                </form>
            </div>

        </div>

    </div>
</div>
<script>
    $('#search_text').keyup(function(){
        var search = $(this).val();
        $.ajax({
            type: "POST",
            url: '<?php echo base_url('Gogym/searchLocation')?>',
            data:{location:search},
            success: function (data) {
                $.each(JSON.parse(data), function(k, v) {
                    console.log('hkhhk',v.gymCity)

                });

            }
        });
    });
</script>

