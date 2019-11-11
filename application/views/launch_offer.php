<?php
include 'header.php';
?>
    <!-- =========================== Events Start ============================================ -->
    <section class="lst">
        <div class="container">

            <div class="row">
                <div class="col text-center">
                    <div class="sec-heading mx-auto">
                        <h2>Launch Offer</h2>
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
                                <img src="<?=$value['deal_image']?>" class="img-fluid mx-auto" alt="">
                                <span class="event-grid-cat" style="    font-size: 18px;"><?=$value['deal_percent']?>%</span>
                            </div>
                        </a>
                        <div class="event-grid-caption">
                            <div class="event-grid-caption-header">
                                <h4 class="event-name"><a href="#"><?=$value['deal_name']?></a></h4>
                            </div>
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
