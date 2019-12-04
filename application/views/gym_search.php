<?php
include 'header.php';

?>

    <!-- ============================ Page Title End ================================== -->

    <!-- ============== Verticle Listing ====================== -->
    <section class="tr-single-detail gray-bg">
        <div class="container">
            <div class="row">
                <!-- Sidebar Start -->

                <!-- /col-md-4 -->
                <div class="col-lg-12 col-md-12 col-sm-12">

                    <div class="row m-0 mb-3">

                        <!--  Single Listing -->
                        <?php foreach ($gym as $gymDetails){ ?>
                            <div class="verticleilist listing-shot">
                                <div class="listing-badge now-open">Now Open</div>
                                <div class="signle-vert-listing-item">

                                    <a class="listing-item" href="<?php echo site_url('Gogym/list_detail/'.$gymDetails->gym_id);?>">
                                        <div class="listing-items">
                                            <div class="listing-shot-img">
                                                <img src="<?php echo $gymDetails->gymImage ?>" class="img-responsive" alt="" />
                                            </div>
                                        </div>
                                    </a>
                                    <div class="verticle-listing-caption">
                                        <div class="listing-shot-caption">
                                            <a href="<?php echo base_url('Gogym/list_detail/'.$gymDetails->gym_id); ?>"><h4><?php echo $gymDetails->gymName ?> </h4></a>
                                            <span class="fnt12"><i class="ti-location-pin"></i> <?php echo $gymDetails->gym_address ?></span>
                                            <span>Services : Certified Trainers | Circuit Training | <a href="#">5 more</a></span>
                                            <span>Pricing : ₹<?php echo $gymDetails->gymPrice; ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                    </div>
                    <p><?php echo $links; ?></p>
                </div>


            </div>
        </div>
    </section>
    <!-- ============================= Verticle Listing ============================= -->
<?php
include 'footer.php';
?>