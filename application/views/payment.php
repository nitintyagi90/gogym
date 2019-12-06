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
                        <div class="tr-single-header">
                            <h4><i class="ti-headphone"></i> Coupon </h4>
                        </div>
                        <div class="tr-single-body">
                            <h5>Have discount coupon?</h5>
                            <div class="row">
                                <div class="col-md-4"><p>Enter discount code</p></div>

                                <div class="col-md-4">
                                    <input type="hidden" name="gymname" id="gymname" placeholder="Enter Any Coupon" value="<?php echo $gymName; ?>" class="form-control">


                                    <input type="text" name="coupon" id="coupon" placeholder="Enter Any Coupon" value="" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <input type="button" id="submit2" name="apply" value="APPLY" class="btn btn-success">
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
                                               <!-- <button class="btn btn-payment" type="submit">Pay Now</button>-->
                                                <?php
                                                $totalPrice = $price*$person;

                                                ?>
                                                <a href="<?php echo base_url('Gogym/tokenmoney/'.$totalPrice); ?>" class="btn btn-payment">Pay Now</a>
                                            </a>
                                        </li>

                                        <li class="nav-item" style="width: 50%;">
                                            <input type="hidden" name="payment_type" value="offline">
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
                            <input type="hidden"  name="total_price" id="total_price" placeholder="Enter Any Coupon" value="<?php echo $totalPrice; ?>">
                            <li>Booking Amount <span class="calTotal"><?php echo $totalPrice; ?></span></li>
                            <li style="display: none" id="couponamt">Coupon Discount <span class="main-color couponprice2" id="couponprice2"><i class="fa fa-inr"></i>0</span></li>
                            <li><input type="checkbox" class="insurance" name="Insurance" value="Insurance">&nbsp;Insurance(<?php echo $insurance; ?>%) <span class="main-color appendvalue"><i class="fa fa-inr"></i>0.00</span></li>
                            <input type="hidden" id="booking_price" name="booking_price" value="<?= $totalPrice?>">
                            <li class="total-costs" id="totalamt"> Total Cost<br><p style="font-size: 10px;">(inclusive of all taxes)</p> <span class="main-color calTotal" style="margin-top: -20%;"><i class="fa fa-inr"></i><?php echo $totalPrice; ?> </span></li>
                            <li class="total-costs" id="totalamt2" style="display: none">Total Cost<br><p style="font-size: 10px;">(inclusive of all taxes)</p> <span class="main-color calTotal" style="margin-top: -20%;"><i class="fa fa-inr" id="couponprice"></i></span></li>
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

    var applycoupan=0;
    var price = '<?php echo $price; ?>';
    var person = '<?php echo $person; ?>';
    var insurance = '<?php echo $insurance; ?>';
    var totalprice = price * person;
    var cal = totalprice * insurance;
    var newTotal = cal / 100;
    var final = totalprice + newTotal;

    $(function(){
        $('input[type="radio"]').click(function(){
            $(".insurance").prop("checked", false);
            $(".appendvalue").html('₹ 0.0');
            value = $(this).attr("id");
            if ($(this).is(':checked'))
            {
                if(applycoupan===1){
                    var gymname = $("#gymname").val();
                    var coupon = $("#coupon").val();
                    var total_price  = value * person;
                    $.ajax({
                        method:"post",
                        url:"<?php echo base_url();?>"+"index.php/Gogym/fetch_coupon_detail",
                        data:{gymname:gymname,coupon:coupon, total_price:total_price},
                        success:function(data){
                            var result = JSON.parse(data);
                            afterCoupan = result.final;
                            var discountPrice = result.discount;
                            var newCal = afterCoupan * insurance;
                            var insuranceAdd = newCal / 100;
                            var totalPriceappend = insuranceAdd + afterCoupan;
                            $(".calTotal").text('₹' + afterCoupan);
                            $(".couponprice2").text(result.discount);
                        }
                    });
                }
                $(".calTotal").text('₹' + value * person);
            }
        });
    });

    $ ('.insurance').click(function(){
        if ($(this).prop('checked')) {
            if(applycoupan===1){
                var gymname = $("#gymname").val();
                var coupon = $("#coupon").val();
                var total_price;
                if(value!==undefined){
                    total_price  = value * person;
                }else{
                    total_price = totalprice;
                }
                $.ajax({
                    method:"post",
                    url:"<?php echo base_url();?>"+"index.php/Gogym/fetch_coupon_detail",
                    data:{gymname:gymname,coupon:coupon, total_price:total_price},
                    success:function(data){
                        var result = JSON.parse(data);
                        afterCoupan = result.final;
                        var newCal = afterCoupan * insurance;
                        var insuranceAdd = newCal / 100;
                        var totalPriceappend = insuranceAdd + afterCoupan;
                        $(".calTotal").text('₹' + totalPriceappend);
                        $(".appendvalue").text('₹' + insuranceAdd);
                    }
                });
            }
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
            if(applycoupan===1){
                $(".appendvalue").text('₹0.00');
                $(".calTotal").text('₹' + afterCoupan);
                $(".calTotal").text('₹' + afterCoupan);
            }else{
                $(".appendvalue").text('₹0.00');
               if(value===undefined){
                   $(".appendvalue").text('₹0.00');
                   $(".calTotal").text('₹' + final);
                   $(".calTotal").text('₹' + totalprice);

               }else{
                   $(".calTotal").text('₹' + value*person);

               }

            }



         }
 });
</script>

<script>

        $("#submit2").click(function(){
            var gymname = $("#gymname").val();
            var coupon = $("#coupon").val();
            var total_price  = $("#total_price").val();
            $.ajax({
                method:"post",
                url:"<?php echo base_url();?>"+"index.php/Gogym/fetch_coupon_detail",
                data:{gymname:gymname,coupon:coupon, total_price:total_price},
                success:function(data){
                    var result = JSON.parse(data);
                    applycoupan=1;
                    if(data=== total_price)
                    {
                        value = 0;
                        $('#couponamt').hide();
                        alert('Invaild coupon');
                    }
                    else
                    {
                        value = data;
                        var couponamt =(total_price - data ).toFixed(2);
                        $('#couponprice2').html(result.discount);
                        $('#couponamt').show();
                    }
                    $('#totalamt').hide();
                    $('#totalamt2').show();
                    $('#couponprice').html(result.final);
                    $('booking_price').val(result.final);
                }
            });
        });

</script>


