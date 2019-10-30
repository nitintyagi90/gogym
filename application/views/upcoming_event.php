<?php
include 'header.php';
?>
    <!-- =========================== Events Start ============================================ -->
    <section class="lst">
        <div class="container">

            <div class="row">
                <div class="col text-center">
                    <div class="sec-heading mx-auto">
                        <h2>Upcoming Events</h2>
                        <p>Discover some of the most popular Events.</p>
                    </div>
                </div>
            </div>

            <div class="row">

                <!-- Single Event -->
                <div class="col-lg-4 col-md-4 col-sm-6 mb-4">
                    <div class="event-grid-wrap">
                        <a href="#">
                            <div class="event-grid-header">
                                <img src="<?php echo base_url();?>web/assets/img/event-1.jpg" class="img-fluid mx-auto" alt="">
                                <span class="event-grid-cat"><i class="fa fa-inr"></i>500</span>
                            </div>
                        </a>
                        <div class="event-grid-caption">
                            <div class="event-grid-caption-header">
                                <h4 class="event-name"><a href="#">Amagansett Go Around</a></h4>
                            </div>
                            <span class="event-time-limit">25/10/2019</span>
                            <p><i class="ti-location-pin"></i>215 Maujpur,Delhi, India</p>
                        </div>
                    </div>
                </div>

                <!-- Single Event -->
                <div class="col-lg-4 col-md-4 col-sm-6 mb-4">
                    <div class="event-grid-wrap">
                        <a href="#">
                            <div class="event-grid-header">
                                <img src="<?php echo base_url();?>web/assets/img/event-2.jpg" class="img-fluid mx-auto" alt="">
                                <span class="event-grid-cat"><i class="fa fa-inr"></i>300</span>
                            </div>
                        </a>
                        <div class="event-grid-caption">
                            <div class="event-grid-caption-header">
                                <h4 class="event-name"><a href="#">Amateur Barber Night</a></h4>
                             </div>
                            <span class="event-time-limit">25/10/2019</span>
                            <p><i class="ti-location-pin"></i>215 Maujpur,Delhi, India</p>
                        </div>
                    </div>
                </div>

                <!-- Single Event -->
                <div class="col-lg-4 col-md-4 col-sm-6 mb-4">
                    <div class="event-grid-wrap">
                        <a href="#">
                            <div class="event-grid-header">
                                <img src="<?php echo base_url();?>web/assets/img/event-3.jpg" class="img-fluid mx-auto" alt="">
                                <span class="event-grid-cat"><i class="fa fa-inr"></i>400</span>
                            </div>
                        </a>
                        <div class="event-grid-caption">
                            <div class="event-grid-caption-header">
                                <h4 class="event-name"><a href="#">Antisocial Darwinism</a></h4>
                            </div>
                            <span class="event-time-limit">25/10/2019</span>
                            <p><i class="ti-location-pin"></i>215 Maujpur,Delhi, India</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- =========================== Events End ============================================ -->
<?php
include 'footer.php';
