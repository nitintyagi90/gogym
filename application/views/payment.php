<?php
include 'header.php';
?>
<style>
    .img250 {
        width: 100%;
        height: 250px;
    }
</style>
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
        <form action="<?php echo base_url('Gogym/booking'); ?>" method="post" enctype="multipart/form-data">
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
                                        <label>Name</label>
                                        <input value="<?php echo $userName; ?>" name="name" class="form-control" type="text">
                                        <input value="<?php echo $checkIn; ?>" name="checkIn" class="form-control" type="hidden">
                                        <input value="<?php echo $checkOut; ?>" name="checkout" class="form-control" type="hidden">
                                        <input value="<?php echo $person; ?>" name="person" class="form-control" type="hidden">
                                        <input value="<?php echo $gymId; ?>" name="gymId" class="form-control" type="hidden">
                                        <input value="<?php echo $gymUserID; ?>" name="gymUserID" class="form-control" type="hidden">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input class="form-control" value="<?php echo $user[0]->user_email ?>" name="email" type="email">
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Mobile</label>
                                        <input value="<?php echo $userMobile ?>" name="mobile" class="form-control" type="text">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="tr-single-box">

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
                                               <!-- <button class="btn btn-payment" type="submit">Pay Now</button>-->
                                                <a href="<?php echo base_url('Gogym/tokenmoney'); ?>" class="btn btn-payment">Pay Now</a>
                                            </a>
                                        </li>

                                        <li class="nav-item" style="width: 50%;">
                                           <!-- <a class="nav-link" id="paypal-tab" data-toggle="tab" href="#paypal" role="tab" aria-controls="paypal" aria-selected="false">-->
                                                <input type="submit" class="btn btn-success" value="Pay At Gym">
                                           <!-- </a>-->
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
                            <img src="<?php echo $image; ?>" class="img-fluid mx-auto img250" alt="">

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


                        <div class="booking-summary" style="    bottom: 20px;
    left: 25px;
    top: 20px;position: relative;">
                           <!-- <h4 class="booking-item-title" name="gymname"><?php /*echo $gymName */?></h4>
                            <p class="booking-item-location" name="address"><?php /*echo $address */?></p>-->
                            <p>Please select your Plan:</p>
                            <input style="position: relative;left: 0px;" type="radio" id="<?php echo $allprice[0]->dailyPrice ?>" name="plantype" value="Daily" checked> Daily<br>
                            <input style="position: relative;left: 0px;" type="radio" id="<?php echo $allprice[0]->weeklyPrice ?>" name="plantype" value="Weekly"> Weekly<br>
                            <input style="position: relative;left: 0px;" type="radio" id="<?php echo $allprice[0]->monthlyPrice ?>" name="plantype" value="Monthly"> Monthly<br>
                            <input style="position: relative;left: 0px;" type="radio" id="<?php echo $allprice[0]->yearlyPrice ?>"  name="plantype" value="Yearly"> Yearly<br>
                            <br>
                        </div>
                    </div>
                    <div class="summary-boxed-widget">
                        <h4><i class="ti-calendar"></i> Booking Summary</h4>
                        <ul>
                            <li >Check In <span name="checkIn"><?php echo $checkIn ?></span></li>
                            <li>Check Out <span><?php echo $checkOut ?></span></li>
                            <li>No. Of Person <span><?php echo $person ?></span></li>
                            <?php
                            $totalPrice = $price*$person;
                            $cal = $totalPrice*$insurance;
                            $newTotal = $cal / 100;
                            ?>
                            <li>Booking Amount <span class="calTotal"><?php echo $totalPrice; ?></span></li>
<!--                            <li>Coupon Discount (Go25) <span class="main-color">-<i class="fa fa-inr"></i>13.00</span></li>
-->                            <li><input type="checkbox" class="insurance" name="Insurance" value="Insurance">&nbsp;Insurance(<?php echo $insurance; ?>%) <span class="main-color appendvalue"><i class="fa fa-inr"></i>0.00</span></li>
                            <li class="total-costs">Total Cost<br><p style="font-size: 10px;">(inclusive of all taxes)</p> <span class="main-color calTotal" style="margin-top: -20%;"><i class="fa fa-inr"></i><?php echo $totalPrice; ?></span></li>
                        </ul>
                    </div>
                </div>

            </div>
        </form>
        </div>
    </section>
    <!-- =========================== Category End ============================================ -->
<?php
include 'footer.php';
?>
<script>

    var value;
    var price = '<?php echo $price; ?>';
    var person = '<?php echo $person; ?>';
    var insurance = '<?php echo $insurance; ?>';
    var totalprice = price * person;
    var cal = totalprice * insurance;
    var newTotal = cal / 100;
    var final = totalprice + newTotal;
    $(function(){
        $('input[type="radio"]').click(function(){
            value = $(this).attr("id");
            if ($(this).is(':checked'))
            {
                $(".calTotal").text('₹' + value * person);
            }
        });
    });

    $ ('.insurance').click(function(){
        if ($(this).prop('checked')) {
            if(value==undefined){
                $(".calTotal").text('₹' + final);
                $(".appendvalue").text('₹' + newTotal);

            }else{
                var totalprice2 = value * person;
                var cal2 = totalprice2 * insurance;
                var newTotal2 = cal2 / 100;
                var final2 = totalprice2 + newTotal2;
                $(".calTotal").text('₹' + final2);
                $(".appendvalue").text('₹' + newTotal2);

            }
        }else{
            $(".appendvalue").text('₹0.00');
            $(".calTotal").text('₹' + final);
            $(".calTotal").text('₹' + totalprice);

        }

    });


</script>

<?php
/*$totalPrice = $price*$person;
$cal = $totalPrice*$insurance;
$newTotal = $cal / 100;
$totalAmountis = $totalPrice + $newTotal;
    echo "
         <script type=\"text/javascript\">    
           $ ('.insurance').click(function(){
             if ($(this).prop('checked')){
              $(\".appendvalue\").text('₹' + $newTotal);
              $(\".appendvalue\").val('₹' + $newTotal);
              $(\".calTotal\").text('');
              $(\".calTotal\").text('₹' + $totalAmountis);
             }
            else{
             $(\".appendvalue\").text('₹0.00');
             $(\".appendvalue\").val('0.00');
             $(\".calTotal\").text('₹' + $totalPrice);
              }
             }); 
            </script>
        ";

*/?>
