<?php
include 'header.php';
?>
<style>
    #hearts { color: #FF0000;}
    #hearts-existing { color: #87bad7;}
</style>



    <!-- ======================= Start Banner ===================== -->
    <section class="page-title-banner" style="background-image:url(<?php echo $gym[0]->gymImage; ?>);">
        <div class="container">
            <div class="row m-0 align-items-end detail-swap">
                <div class="tr-list-wrap">
                    <div class="tr-list-detail">
                        <!--<div class="tr-list-thumb">
                            <img src="assets/img/go-gyms-60.png" class="img-responsive" alt="" />
                        </div>-->
                        <div class="tr-list-info">
                            <h4><?php echo $gym[0]->gymName; ?></h4>
                            <p><?php echo $gym[0]->gym_address ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======================= End Banner ===================== -->

    <section class="profile-header-nav p-0 b-b">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12">
                    <div class="tab" role="tabpanel">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation"><a href="#Overview" class="active" role="tab" data-toggle="tab"><i class="ti-user"></i>Overview</a></li>

                            <li role="presentation"><a href="#Photos" role="tab" data-toggle="tab"><i class="ti-gallery"></i>Photos</a></li>
                        </ul>
                        <!-- Tab panes -->
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ============== Tour Detail ====================== -->
    <section class="tr-single-detail gray-bg">
        <div class="container">
            <div class="row">

                <div class="col-md-8 col-sm-12">
                    <div class="tab-content tabs">

                        <div role="tabpanel" class="tab-pane fade in show active" id="Overview">


                            <!-- Description -->
                            <div class="row">
                                <div class="tr-single-box">
                                    <div class="tr-single-header">
                                        <h4><i class="ti-files"></i>Description</h4>
                                    </div>
                                    <div class="tr-single-body">
                                        <p><?php echo $gym[0]->gymdescription; ?></p>
                                    </div>
                                </div>
                            </div>

                            <!-- Amenities -->
                            <div class="row">
                                <div class="tr-single-box">
                                    <div class="tr-single-header">
                                        <h4><i class="ti-crown"></i>Amenities</h4>
                                    </div>
                                    <div class="tr-single-body">
                                        <ul class="amenities third">
                                            <?php foreach ($aminities as $am){ ?>
                                            <li><?php echo $am->aminitiesName ?></li>
                                           <?php }?>
                                        </ul>
                                    </div>
                                </div>
                            </div>



                            <!-- Location -->
                       <!--     <div class="row">
                                <div class="tr-single-box">
                                    <div class="tr-single-header">
                                        <h4><i class="ti-map-alt"></i>Location</h4>
                                    </div>
                                    <div class="tr-single-body">
                                        <div class="height-350" id="singleMap" data-latitude="40.712776" data-longitude="-74.005974" data-mapTitle="Our Location"></div>
                                    </div>
                                </div>
                            </div>-->

                            <!-- Review button -->
                            <a href="#myModal" data-toggle="modal" class="btn add-review-btn">Add Your Review</a>

                            <!-- Review & Rating -->
                            <div class="row">
                                <div class="comment-module-wrap">

                                    <div class="comment-module-header">
                                        <div class="comment-module-avatar">
                                            <img src="assets/img/team-5.png" class="img-responsive img-circle" alt="">
                                        </div>
                                        <div class="comment-module-avatar-detail">
                                            <h4 class="cma-title">Daniel</h4>
                                            <span class="cma-comment-date">Jan 10 2019</span>
                                        </div>
                                        <div class="comment-module-rating">
                                            <div class="f-rate">
                                                4.5<sup>5</sup>
                                                <!--<span class="rating-status good-rate">Very Good</span>-->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="comment-module-body">
                                        <h4 class="comment-module-title">Very Good & Success</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                                    </div>
                                    <div class="comment-module-footer">
                                        <div class="comment-info-module">
                                            <div class="comment-review_btn">
                                                <a href="#" class="utility-meta_module"><i class="ti-thumb-up"></i><span style="color: #ff7600;">206</span>&nbsp;Like</a>
                                            </div>
                                            <div class="comment-review_btn">
                                                <a href="#anchor-01" class="utility-meta_module"><i class="ti-comment-alt"></i><span style="color: #ff7600;">206</span>&nbsp;Comment</a>
                                            </div>

                                        </div>
                                        <div class="comment-reply-module">
                                            <ul>
                                                <li>
                                                    <div class="reply-module-avater">
                                                        <img src="<?php echo base_url();?>web/assets/img/team-2.png" class="img-responsive img-circle" alt="">
                                                    </div>
                                                    <div class="reply-module-detail">
                                                        <h5 class="reply-module-title">Daisy Lilla</h5>
                                                        <p class="reply-module-comment">Hi Its very good for me</p>
                                                        <span class="reply-module-date">Jan 20 2019</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="reply-module-avater">
                                                        <img src="<?php echo base_url();?>web/assets/img/team-3.png" class="img-responsive img-circle" alt="">
                                                    </div>
                                                    <div class="reply-module-detail">
                                                        <h5 class="reply-module-title">Zahir Khan</h5>
                                                        <p class="reply-module-comment">Hi Its very good for me</p>
                                                        <span class="reply-module-date">Jan 20 2019</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="comment-form-module">
                                            <div class="comment-form-avater">
                                                <img src="<?php echo base_url();?>web/assets/img/team-4.png" class="img-responsive img-circle" alt="">
                                            </div>
                                            <div class="comment-form-box">
                                                <div class="input-group">
                                                    <input id="anchor-01" type="text" class="form-control" placeholder="Type Something...">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="ti-arrow-right"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>




                        <!-- ============ Photos =================== -->
                        <div role="tabpanel" class="tab-pane fade in" id="Photos">
                            <div class="row">
                                <div class="tr-single-box">
                                    <div class="tr-single-header">
                                        <h4><i class="ti-gallery"></i>All Gallery</h4>
                                    </div>
                                    <div class="tr-single-body">
                                        <ul class="gallery-list">
                                            <li>
                                                <a data-fancybox="gallery" href="assets/img/event-1.jpg">
                                                    <img src="assets/img/event-1.jpg" class="img-responsive" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a data-fancybox="gallery" href="assets/img/event-1.jpg">
                                                    <img src="assets/img/2.jpg" class="img-responsive" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a data-fancybox="gallery" href="assets/img/event-1.jpg">
                                                    <img src="assets/img/event-1.jpg" class="img-responsive" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a data-fancybox="gallery" href="assets/img/event-1.jpg">
                                                    <img src="assets/img/event-1.jpg" class="img-responsive" alt="">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Sidebar Start -->
                <div class="col-md-4 col-sm-12">
                    <!-- Book now -->
                    <div class="tr-single-box">
                        <div class="tr-single-header">
                            <h4><i class="ti-direction"></i> Gym Timing</h4>
                        </div>

                        <div class="tr-single-body">
                            <table class="table table-striped table-2 table-hover">
                                <thead>
                                    <tr>
                                        <th>Time Slot</th>
                                        <th>Opening Time</th>
                                        <th>Closing Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Morning</td>
                                        <td><?php echo $gym[0]->open_mg_time; ?></td>
                                        <td><?php echo $gym[0]->close_mg_time; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Afternoon</td>
                                        <td><?php echo $gym[0]->after_open_time; ?></td>
                                        <td><?php echo $gym[0]->after_close_time; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Evening</td>
                                        <td><?php echo $gym[0]->open_evng_time; ?></td>
                                        <td><?php echo $gym[0]->close_evng_time; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div class="tr-single-box">
                        <div class="tr-single-header">
                            <h4><i class="ti-calendar"></i> Booking</h4>
                        </div>

                        <div class="tr-single-body">
                            <form action="<?php echo base_url('Gogym/payment'); ?>" method="post" class="booking-form">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label>Select Gender</label>
                                            <select class="form-control" name="gender">
                                                <option>Male</option>
                                                <option>Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group ">
                                            <label>CheckIn</label>
                                            <div class="input-group clockpicker startTime"  data-autoclose="true">
                                                <input type="text" name="checkIn" class="form-control checkIn" value="09:30">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <label>Check Out</label>

                                        <div class="input-group">
                                            <input type="text" readonly class="form-control checkouttime" name="checkOut" value="13:30">
                                            <input type="hidden" name="gymId" value="<?php echo $gym[0]->gym_id; ?>">
                                            <input type="hidden" name="gymPrice" value="<?php echo $gymprice[0]->dailyPrice; ?>">
                                            <input type="hidden" name="gymImage" value="<?php echo $gym[0]->gymImage; ?>">
                                            <input type="hidden" name="gym_address" value="<?php echo $gym[0]->gym_address; ?>">
                                            <input type="hidden" name="gymName" value="<?php echo $gym[0]->gymName; ?>">
                                            <input type="hidden" name="gymUserID" value="<?php echo $gym[0]->user_id; ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label>No. Of Person</label>
                                            <select class="form-control" name="personValue">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                <option>6</option>
                                                <option>7</option>
                                                <option>8</option>
                                                <option>9</option>
                                                <option>10</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <input type="submit" class="btn btn-success full-width" value="Continue To Book">
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                    <!-- Business Info -->
                    <div class="tr-single-box">
                        <div class="tr-single-header">
                            <h4><i class="ti-direction"></i> Business Info</h4>
                        </div>

                        <div class="tr-single-body">
                            <ul class="extra-service">
                                <li>
                                    <div class="icon-box-icon-block">
                                        <a href="#">
                                            <div class="icon-box-round">
                                                <i class="lni-map-marker"></i>
                                            </div>
                                            <div class="icon-box-text">
                                               <?php echo $gym[0]->gym_address ?>
                                            </div>
                                        </a>
                                    </div>
                                </li>

                                <li>
                                    <div class="icon-box-icon-block">
                                        <a href="#">
                                            <div class="icon-box-round">
                                                <i class="fa fa-phone"></i>
                                            </div>
                                            <div class="icon-box-text">
                                                8376-06-8376
                                                <?php /*echo $gym[0]->contact_no */?>
                                            </div>
                                        </a>
                                    </div>
                                </li>



                            </ul>
                        </div>

                    </div>

                </div>
                <!-- /col-md-4 -->
            </div>
        </div>
    </section>
    <!-- ============== Tour Detail ====================== -->

<?php
include 'footer.php';
?>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Give your Feedback</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="form-group" id="rating-ability-wrapper">
                    <label class="control-label" for="rating" style="margin-bottom: 0px;">
                        <span class="field-label-info"></span>
                        <input type="hidden" id="selected_rating" name="selected_rating" value="" required="required">
                    </label>
                    <h2 class="bold rating-header" style="">
                        <span class="selected-rating">0</span><small> / 5</small>
                    </h2>
                    <button type="button" class="btnrating btn btn-default btn-lg" data-attr="1" id="rating-star-1">
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </button>
                    <button type="button" class="btnrating btn btn-default btn-lg" data-attr="2" id="rating-star-2">
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </button>
                    <button type="button" class="btnrating btn btn-default btn-lg" data-attr="3" id="rating-star-3">
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </button>
                    <button type="button" class="btnrating btn btn-default btn-lg" data-attr="4" id="rating-star-4">
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </button>
                    <button type="button" class="btnrating btn btn-default btn-lg" data-attr="5" id="rating-star-5">
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </button>
                </div>
                <input type="submit" class="btn btn-primary" value="Submit">
            </div>

        </div>

    </div>
</div>
   <script>
       jQuery(document).ready(function($){

           $(".btnrating").on('click',(function(e) {

               var previous_value = $("#selected_rating").val();

               var selected_value = $(this).attr("data-attr");
               $("#selected_rating").val(selected_value);

               $(".selected-rating").empty();
               $(".selected-rating").html(selected_value);

               for (i = 1; i <= selected_value; ++i) {
                   $("#rating-star-"+i).toggleClass('btn-warning');
                   $("#rating-star-"+i).toggleClass('btn-default');
               }

               for (ix = 1; ix <= previous_value; ++ix) {
                   $("#rating-star-"+ix).toggleClass('btn-warning');
                   $("#rating-star-"+ix).toggleClass('btn-default');
               }

           }));


       });

   </script>
<script type="text/javascript">
    $('.clockpicker').clockpicker()
        .find('input').change(function(){
    });
    var input = $('#single-input').clockpicker({
        placement: 'bottom',
        align: 'left',
        autoclose: true,
        'default': 'now'
    });

    $('.clockpicker-with-callbacks').clockpicker({
        donetext: 'Done',
        init: function() {
            console.log("colorpicker initiated");
        },
        beforeShow: function() {
            console.log("before show");
        },
        afterShow: function() {
            console.log("after show");
        },
        beforeHide: function() {
            console.log("before hide");
        },
        afterHide: function() {
            console.log("after hide");
        },
        beforeHourSelect: function() {
            console.log("before hour selected");
        },
        afterHourSelect: function() {
            console.log("after hour selected");
        },
        beforeDone: function() {
            console.log("before done");
        },
        afterDone: function() {
            console.log("after done");
        }
    })
        .find('input').change(function(){
        console.log(this.value);
    });

    // Manually toggle to the minutes view
    $('#check-minutes').click(function(e){
        // Have to stop propagation here
        e.stopPropagation();
        input.clockpicker('show')
            .clockpicker('toggleView', 'minutes');
    });
    if (/mobile/i.test(navigator.userAgent)) {
        $('input').prop('readOnly', true);
    }


    $('.startTime').clockpicker().find('input').change(function(){
        var time = this.value;
        var date = time.split(':')[0];
        var minute = time.split(':')[1];
        var value = 4;
        var add=value += +date;
        var newData = add + ':' + minute;
        $('.checkouttime').val(newData);
    });





</script>
