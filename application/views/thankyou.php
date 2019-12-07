<?php
include 'header.php';
?>
    <!-- ============================ Page Title  Start================================== -->
    <div class="page-title image-title" style="background-image:url(assets/img/banner-2.jpg);">
        <div class="finding-overlay op-70"></div>
        <div class="container">
            <div class="page-title-wrap">
                <h1>Thank You</h1>
                <p><a href="#" class="theme-cl">Home</a> <span class="current-page active">Thank You</span></p>
            </div>
        </div>
    </div>
    <!-- ============================ Page Title End ================================== -->
    <section class="cta center-bg" style="background:#ff7600 url(<?php echo base_url();?>web/assets/img/tag-1.png)no-repeat">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-10">
                    <div class="cta-sec text-center">
                        <h2>Thank You for booking with "GoGyms". Your booking ID: <?php echo $bookingId; ?></h2>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php
include 'footer.php';
