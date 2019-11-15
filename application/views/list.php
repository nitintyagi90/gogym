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
                                <?php
                                $d = 1;
                                foreach ($category as $cat){
                                    $d++
                                    ?>
                                <li>
                                    <input id="d-<?php echo $d; ?>" class="checkbox-custom searchType" value="<?php echo $cat->categoryName; ?>" name="d-1" type="checkbox">
                                    <label for="d-<?php echo $d; ?>" class="checkbox-custom-label"><?php echo $cat->categoryName; ?> </label>
                                </li>
                                <?php } ?>

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
                                    <input id="l-1" class="checkbox-custom searchlocation" value="Delhi" name="l-1" type="checkbox">
                                    <label for="l-1" class="checkbox-custom-label">Delhi </label>
                                </li>
                                <li>
                                    <input id="l-2" class="checkbox-custom searchlocation" value="Gurugram" name="l-2" type="checkbox">
                                    <label for="l-2" class="checkbox-custom-label">Gurugram</label>
                                </li>
                                <li>
                                    <input id="l-3" class="checkbox-custom searchlocation" value="Noida"  name="l-3" type="checkbox">
                                    <label for="l-3" class="checkbox-custom-label">Noida</label>
                                </li>
                                <li>
                                    <input id="l-4" class="checkbox-custom searchlocation" value="Ghaziabad" name="l-4" type="checkbox">
                                    <label for="l-4" class="checkbox-custom-label">Ghaziabad</label>
                                </li>
                                <li>
                                    <input id="l-5" class="checkbox-custom searchlocation" value="Faridabad" name="l-5" type="checkbox">
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
                                        <a class="dropdown-item priceHigh" href="#">Price (High To Low)</a>
                                        <a class="dropdown-item" href="#">Price (Low To High)</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--  All Listing -->
                    <div class="filter">

                    </div>
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
                                        <a href="<?php echo base_url('Gogym/list_detail'); ?>"><h4><?php echo $gymDetails->gymName ?> </h4></a>
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
<script>
    $('.searchType').click(function() {
        var checkedValue = $(this).val();
        if(this.checked) {
            $.ajax({
                type: "POST",
                url: '<?php echo base_url('Gogym/filter')?>',
                data:{id:checkedValue},
                success: function (data) {
                    $(".filter").prepend(data);

                }
            });
        }
    });



    $('.searchlocation').click(function() {
        var location = $(this).val();
        if(this.checked) {
            $.ajax({
                type: "POST",
                url: '<?php echo base_url('Gogym/locationFilter')?>',
                data:{location:location},
                success: function (data) {
                    $(".filter").prepend(data);
                }
            });
        }

    });


</script>