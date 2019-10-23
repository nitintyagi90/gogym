<?php
include 'header.php';
?>
    <!-- ============================ Page Title  Start================================== -->
    <div class="page-title image-title" style="background-image:url(assets/img/banner-2.jpg);">
        <div class="finding-overlay op-70"></div>
        <div class="container">
            <div class="page-title-wrap">
                <h1>Gyms</h1>
                <p><a href="#" class="theme-cl">Home</a> <span class="current-page active">Gyms near me Delhi</span></p>
            </div>
        </div>
    </div>
    <!-- ============================ Page Title End ================================== -->
    <!-- ============================ Page Title End ================================== -->

    <!-- ============== Verticle Listing ====================== -->
    <section class="tr-single-detail gray-bg">
        <div class="container">
            <div class="row">
                <!-- Sidebar Start -->
                <div class="col-lg-3 col-md-3 col-sm-12">



                    <div class="widget-boxed">
                        <div class="widget-boxed-header border-0">
                            <h4>Fitness Options</h4>
                        </div>

                        <div class="widget-boxed-body p-t-10">
                            <ul class="no-ul-list">
                                <li>
                                    <input id="d-1" class="checkbox-custom" name="d-1" type="checkbox">
                                    <label for="d-1" class="checkbox-custom-label">Aerobic  Exercise </label>
                                </li>
                                <li>
                                    <input id="d-2" class="checkbox-custom" name="d-2" type="checkbox">
                                    <label for="d-2" class="checkbox-custom-label">Cardio Workout</label>
                                </li>
                                <li>
                                    <input id="d-3" class="checkbox-custom" name="d-3" type="checkbox">
                                    <label for="d-3" class="checkbox-custom-label">Endurance activities </label>
                                </li>
                                <li>
                                    <input id="d-4" class="checkbox-custom" name="d-4" type="checkbox">
                                    <label for="d-4" class="checkbox-custom-label">Strength training </label>
                                </li>
                                <li>
                                    <input id="d-5" class="checkbox-custom" name="d-5" type="checkbox">
                                    <label for="d-5" class="checkbox-custom-label">Stretching</label>
                                </li>
                                <li>
                                    <input id="d-3" class="checkbox-custom" name="d-3" type="checkbox">
                                    <label for="d-3" class="checkbox-custom-label">Running Exercise</label>
                                </li>
                                <li>
                                    <input id="d-6" class="checkbox-custom" name="d-6" type="checkbox">
                                    <label for="d-6" class="checkbox-custom-label">.Endurance activities </label>
                                </li>
                                <li>
                                    <input id="d-7" class="checkbox-custom" name="d-7" type="checkbox">
                                    <label for="d-7" class="checkbox-custom-label">Jogging</label>
                                </li>
                                <li>
                                    <input id="d-8" class="checkbox-custom" name="d-8" type="checkbox">
                                    <label for="d-8" class="checkbox-custom-label">Climbing the stairs</label>
                                </li>
                                <li>
                                    <input id="d-9" class="checkbox-custom" name="d-9" type="checkbox">
                                    <label for="d-9" class="checkbox-custom-label">Playing tennis</label>
                                </li>
                                <li>
                                    <input id="d-10" class="checkbox-custom" name="d-10" type="checkbox">
                                    <label for="d-10" class="checkbox-custom-label">Dancing</label>
                                </li>
                                <li>
                                    <input id="d-11" class="checkbox-custom" name="d-11" type="checkbox">
                                    <label for="d-11" class="checkbox-custom-label">Digging</label>
                                </li>
                                <li>
                                    <input id="d-12" class="checkbox-custom" name="d-12" type="checkbox">
                                    <label for="d-12" class="checkbox-custom-label">Swimming laps </label>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="widget-boxed">
                        <div class="widget-boxed-header border-0">
                            <h4><i class="lni-offer"></i>Location</h4>
                        </div>
                        <div class="widget-boxed-body p-t-10">
                            <ul class="no-ul-list">
                                <li>
                                    <input id="l-1" class="checkbox-custom" name="l-1" type="checkbox">
                                    <label for="l-1" class="checkbox-custom-label">Delhi </label>
                                </li>
                                <li>
                                    <input id="l-2" class="checkbox-custom" name="l-2" type="checkbox">
                                    <label for="d-2" class="checkbox-custom-label">Gurugram</label>
                                </li>
                                <li>
                                    <input id="l-3" class="checkbox-custom" name="l-3" type="checkbox">
                                    <label for="l-3" class="checkbox-custom-label">Noida</label>
                                </li>
                                <li>
                                    <input id="l-4" class="checkbox-custom" name="l-4" type="checkbox">
                                    <label for="l-4" class="checkbox-custom-label">Ghaziabad</label>
                                </li>
                                <li>
                                    <input id="l-5" class="checkbox-custom" name="l-5" type="checkbox">
                                    <label for="l-5" class="checkbox-custom-label">Faridabad</label>
                                </li>
                            </ul>
                        </div>

                    </div>

                </div>
                <!-- /col-md-4 -->
                <div class="col-lg-9 col-md-9 col-sm-12">
                    <div class="row mb-3">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="filter-row">
                                <div class="dropdown show">
                                    <a class="btn btn-filter dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Short List By
                                    </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Popularity</a>
                                        <a class="dropdown-item" href="#">Price (High To Low)</a>
                                        <a class="dropdown-item" href="#">Price (Low To High)</a>
                                        <a class="dropdown-item" href="#">Distance</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--  All Listing -->
                    <div class="row m-0 mb-3">

                        <!--  Single Listing -->
                        <div class="verticleilist listing-shot">
                            <div class="listing-badge now-open">Now Open</div>
                            <div class="signle-vert-listing-item">
                                <a class="listing-item" href="<?php echo base_url('Gogym/list_detail'); ?>">
                                    <div class="listing-items">
                                        <div class="listing-shot-img">
                                            <img src="assets/img/event-1.jpg" class="img-responsive" alt="" />
                                        </div>
                                    </div>
                                </a>
                                <div class="verticle-listing-caption">
                                    <div class="listing-shot-caption">
                                        <a href="<?php echo base_url('Gogym/list_detail'); ?>"><h4>Power World Gyms </h4></a>
                                        <span class="fnt12"><i class="ti-location-pin"></i> No 285.C, 3rd Floor, Sankranti Arcade, 9th Main Road</span>
                                        <span>Services : Certified Trainers | Circuit Training | <a href="#">5 more</a></span>
                                        <span>Pricing : ₹2800.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="verticleilist listing-shot">
                            <div class="listing-badge now-open">Now Open</div>
                            <div class="signle-vert-listing-item">
                                <a class="listing-item" href="<?php echo base_url('Gogym/list_detail'); ?>">
                                    <div class="listing-items">
                                        <div class="listing-shot-img">
                                            <img src="assets/img/event-1.jpg" class="img-responsive" alt="" />
                                        </div>
                                    </div>
                                </a>

                                <div class="verticle-listing-caption">
                                    <div class="listing-shot-caption">
                                        <a href="<?php echo base_url('Gogym/list_detail'); ?>"><h4>Power World Gyms </h4></a>
                                        <span class="fnt12"><i class="ti-location-pin"></i> No 285.C, 3rd Floor, Sankranti Arcade, 9th Main Road</span>
                                        <span>Services : Certified Trainers | Circuit Training | <a href="#">5 more</a></span>
                                        <span>Pricing : ₹2800.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </section>
    <!-- ============================= Verticle Listing ============================= -->
<?php
include 'footer.php';
