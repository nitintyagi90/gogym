<?php
include 'header.php';
?>
    <!-- ============================ Page Title  Start================================== -->
    <div class="page-title image-title" style="background-image:url(assets/img/banner-2.jpg);">
        <div class="finding-overlay op-70"></div>
        <div class="container">
            <div class="page-title-wrap">
                <p><a href="#" class="theme-cl">Home</a> <span class="current-page active">Team</span></p>
            </div>
        </div>
    </div>
    <!-- ============================ Page Title End ================================== -->

    <!-- =========================== Category Start ============================================ -->
    <section>
        <div class="container">

            <div class="row">
                <div class="col text-center">
                    <div class="sec-heading mx-auto">
                        <h2>Our Team</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <?php foreach ($team as $tm){ ?>

                <!-- Single Category -->
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">

                    <div class="modern-category">
                        <div class="modern-category-box-thumb">
                            <a href="#"><img src="<?php echo $tm->image; ?>" class="img-fluid mx-auto" alt=""></a>
                        </div>
                        <div class="modern-category-footer">
                            <div class="mc-footer-caption">
                                <h4 class="category-title"><?php echo $tm->memberName ?></h4>
                                <span class="category-counting"><b><?php echo $tm->designation ?></b></span>
                                <p style="line-height: 16px;"><?php echo $tm->description ?></p>
                            </div>

                        </div>
                    </div>


                </div>
                <?php } ?>
             </div>

        </div>
    </section>
    <!-- =========================== Category End ============================================ -->
    <div class="clearfix"></div>
    <!-- ============================ Say Hello End ================================== -->
<?php
include 'footer.php';
?>

