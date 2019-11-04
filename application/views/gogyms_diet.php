<?php
include 'header.php';
?>
    <!-- =========================== Events Start ============================================ -->
    <section class="lst">
        <div class="container">

            <div class="row">
                <div class="col text-center">
                    <div class="sec-heading mx-auto">
                        <h2>Gogyms Diet</h2>
                    </div>
                </div>
            </div>

            <div class="row">

                <!-- Single Event -->

                <?php foreach ($diet as $di){ ?>
                <div class="col-lg-4 col-md-4 col-sm-6 mb-4">
                    <div class="event-grid-wrap">
                        <a href="<?php echo $di->url; ?>" target="_blank">
                            <div class="event-grid-header" >
                                <img src="<?php echo $di->image ?>" class="img-fluid mx-auto" alt="">
                            </div>
                        </a>
                        <div class="event-grid-caption">
                            <div class="event-grid-caption-header">
                                <h4 class="event-name"><a href="#"><?php echo $di->title ?></a></h4>
                            </div>
                            <span class="event-time-limit"><i class="fa fa-phone"></i>&nbsp; +91-8377083777</span>
                            <p style="    line-height: 18px;"><?php echo $di->description ?></p>
                        </div>
                    </div>
                </div>
                <?php } ?>



            </div>
        </div>
    </section>
    <!-- =========================== Events End ============================================ -->
<?php
include 'footer.php';
