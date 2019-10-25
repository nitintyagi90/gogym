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
											<input type="text" id="geocomplete" class="form-control b-r" placeholder="Location...">

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
							<a class="btn theme-btn font-14" href="#"></i>ENQUIRE NOW</a>
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
								<div class="testimonial-detail">
									<div class="client-detail-box">
										<div class="pic">
											<img src="<?php echo base_url();?>web/assets/img/team-1.png" alt="">
										</div>
										<div class="client-detail">
											<h3 class="testimonial-title">Adam Alloriam</h3>
											<span class="post">Web Developer</span>
										</div>
									</div>
									<p class="description">
										" Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem commodi eligendi facilis itaque minus non odio, quaerat ullam eligendi facilis itaque minus non odio, quaerat ullam unde  unde voluptatum Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem commodi eligendi. "
									</p>
								</div>

								<div class="testimonial-detail">
									<div class="client-detail-box">
										<div class="pic">
											<img src="<?php echo base_url();?>web/assets/img/team-2.png" alt="">
										</div>
										<div class="client-detail">
											<h3 class="testimonial-title">Illa Millia</h3>
											<span class="post">Project Manager</span>
										</div>
									</div>
									<p class="description">
										" Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem commodi eligendi facilis itaque minus non odio, quaerat ullam eligendi facilis itaque minus non odio, quaerat ullam unde  unde voluptatum Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem commodi eligendi. "
									</p>
								</div>

								<div class="testimonial-detail">
									<div class="client-detail-box">
										<div class="pic">
											<img src="<?php echo base_url();?>web/assets/img/team-3.png" alt="">
										</div>
										<div class="client-detail">
											<h3 class="testimonial-title">Rout Millance</h3>
											<span class="post">Web Designer</span>
										</div>
									</div>
									<p class="description">
										" Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem commodi eligendi facilis itaque minus non odio, quaerat ullam eligendi facilis itaque minus non odio, quaerat ullam unde  unde voluptatum Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem commodi eligendi. "
									</p>
								</div>

								<div class="testimonial-detail">
									<div class="client-detail-box">
										<div class="pic">
											<img src="<?php echo base_url();?>web/assets/img/team-4.png" alt="">
										</div>
										<div class="client-detail">
											<h3 class="testimonial-title">williamson</h3>
											<span class="post">Web Developer</span>
										</div>
									</div>
									<p class="description">
										" Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem commodi eligendi facilis itaque minus non odio, quaerat ullam eligendi facilis itaque minus non odio, quaerat ullam unde  unde voluptatum Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem commodi eligendi. "
									</p>
								</div>
							</div>
						</div>
					</div>

				</div>
			</section>
			<!-- =========================== Testimonial End ========================================= -->
<?php
include 'footer.php';
?>

<script>
    $(function(){

        $("#geocomplete").geocomplete()
            .bind("geocode:result", function(event, result){
                $.log("Result: " + result.formatted_address);
            })
            .bind("geocode:error", function(event, status){
                $.log("ERROR: " + status);
            })
            .bind("geocode:multiple", function(event, results){
                $.log("Multiple: " + results.length + " results found");
            });

        $("#find").click(function(){
            $("#geocomplete").trigger("geocode");
        });


        $("#examples a").click(function(){
            $("#geocomplete").val($(this).text()).trigger("geocode");
            return false;
        });

    });
</script>
