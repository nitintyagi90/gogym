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
            <?php $i=1; foreach ($message as  $value) {
            ?>
                <!-- Single Event -->
                <div class="col-lg-4 col-md-4 col-sm-6 mb-4">
                    <div class="event-grid-wrap">
                        <a href="#">
                            <div class="event-grid-header">
                                <img src="<?php echo base_url();?>web/assets/img/event-1.jpg" class="img-fluid mx-auto" alt="">
                                <span class="event-grid-cat"><i class="fa fa-inr"></i><?=$value['event_price']?></span>
                            </div>
                        </a>
                        <div class="event-grid-caption">
                            <div class="event-grid-caption-header">
                                <h4 class="event-name"><a href="#"><?=$value['event_name']?></a></h4>
                            </div>
                            <span class="event-time-limit"><?=$value['event_date']?></span>
                            <p><i class="ti-location-pin"></i><?=$value['event_address']?></p>
                        </div>
                    </div>
                </div>
            <?php }?>
            </div>
        </div>
    </section>
    <!-- =========================== Events End ============================================ -->
<?php
include 'footer.php';
