<?php
include 'header.php';
?>

    <!-- ============================ Page Title  Start================================== -->
    <div class="page-title image-title" style="background-image:url(assets/img/banner-2.jpg);">
        <div class="finding-overlay op-70"></div>
        <div class="container">
            <div class="page-title-wrap">
                <h1>Booking Summary</h1>
                <p><a href="#" class="theme-cl">Home</a> <span class="current-page active">Booking</span></p>
            </div>
        </div>
    </div>
    <!-- ============================ Page Title End ================================== -->

    <!-- =========================== Category Start ============================================ -->
    <section>
        <div class="container">
            <div class="row">

                <!-- Payment Form -->
                <div class="col-lg-8 col-md-8">

                    <!-- Billing information -->
                    <div class="tr-single-box">
                        <div class="tr-single-header">
                            <h4><i class="ti-headphone"></i> Billing information</h4>
                        </div>

                        <div class="tr-single-body">
                            <div class="row">

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input class="form-control" type="email">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Mobile</label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="tr-single-box">
                        <div class="tr-single-header">
                            <h4><i class="ti-headphone"></i> Coupon </h4>
                        </div>
                        <div class="tr-single-body">
                            <h5>Have discount coupon?</h5>
                            <div class="row">
                                <div class="col-md-4"><p>Enter discount code</p></div>
                                <div class="col-md-4"><input type="text" name="coupon" placeholder="Enter Any Coupon" value="" class="form-control"></div>
                                <div class="col-md-4">
                                    <input type="submit" name="apply" value="APPLY" class="btn btn-success">
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="<?php echo base_url('Gogym/disclaimer'); ?>" style="color: #ff7600">Disclaimer</a>
                    <!-- Payment Methode -->
                    <div class="tr-single-box">
                        <div class="tr-single-header">
                            <h4><i class="ti-headphone"></i> Payment Method</h4>
                        </div>

                        <div class="tr-single-body">
                            <div class="row m-0">
                                <div class="payment-opt-tab">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item" style="width: 50%;">
                                            <a class="nav-link active" id="credit-tab" data-toggle="tab" href="#credit" role="tab" aria-controls="credit" aria-selected="true">
                                                <button class="btn btn-payment" type="submit">Pay Now</button>
                                            </a>
                                        </li>

                                        <li class="nav-item" style="width: 50%;">
                                            <a class="nav-link" id="paypal-tab" data-toggle="tab" href="#paypal" role="tab" aria-controls="paypal" aria-selected="false">
                                                <button class="btn btn-success" type="submit" style="width: 100%;">Pay At Gym</button>
                                            </a>
                                        </li>
                                    </ul>
                                </div>


                            </div>

                        </div>
                    </div>

                </div>

                <!-- Billing Detail -->
                <div class="col-lg-4 col-md-4">
                    <div class="booking-item list-item">
                        <div class="bookin-item-header">
                            <img src="<?php echo $_POST['gymImage']; ?>" class="img-fluid mx-auto" alt="">
                        </div>
                        <div class="booking-summary-head">
                            <div class="gl-rating gl-card">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                        </div>
                        <div class="booking-summary">
                            <h4 class="booking-item-title"><?php echo $_POST['gymName'] ?></h4>
                            <p class="booking-item-location"><?php echo $_POST['gym_address'] ?></p>
                        </div>
                    </div>
                    <div class="summary-boxed-widget">
                        <h4><i class="ti-calendar"></i> Booking Summary</h4>
                        <ul>
                            <li>Check In <span><?php echo $_POST['checkIn'] ?></span></li>
                            <li>Check Out <span><?php echo $_POST['checkOut'] ?></span></li>
                            <li>No. Of Person <span><?php echo $_POST['personValue'] ?></span></li>
                            <?php
                            $gymAmount = $_POST['gymPrice'];
                            $personValue = $_POST['personValue'];
                            $totalPrice = $gymAmount*$personValue;
                            $cal = $totalPrice*$insurance[0]->insurance_value;
                            $newTotal = $cal / 100;
                            ?>
                            <li>Booking Amount <span><?php echo $totalPrice; ?></span></li>
                            <li>Coupon Discount (Go25) <span class="main-color">-<i class="fa fa-inr"></i>13.00</span></li>
                            <li><input type="checkbox" name="Insurance" value="Insurance">&nbsp;Insurance(<?php echo $insurance[0]->insurance_value; ?>%) <span class="main-color"><i class="fa fa-inr"></i>0.00</span></li>
                            <li class="total-costs">Total Cost<br><p style="font-size: 10px;">(inclusive of all taxes)</p> <span class="main-color" style="margin-top: -20%;"><i class="fa fa-inr"></i><?php echo $newTotal; ?></span></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- =========================== Category End ============================================ -->
<?php
include 'footer.php';
