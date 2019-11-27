<?php
include 'header2.php';
?>
<style>
    .img50{
        width: 110px !important;
        height: 110px !important;
    }
    .dlt{
        font-size: 18px !important;
        color: #4558be !important;
        float: right !important;
        border: 1px solid !important;
        border-radius: 50px !important;
        width: 30px !important;
        height: 30px !important;
        padding-left: 8px !important;
        padding-bottom: 1px !important;
    }
</style>
<section class="gray p-0">
    <div class="container-fluid" >

        <div class="row">

            <div class="col-md-12">
                <div >
                    <?php if($responce = $this->session->flashdata('Successfully')): ?>
                        <div class="box-header">
                            <div class="col-lg-12">
                                <div class="alert alert-success text-center"><?php echo $responce;?></div>
                            </div>
                        </div>
                    <?php endif;?>
                    <form class="dash-profile-form" action="<?php echo base_url('Auth/profileowner');?>" method="post" enctype="multipart/form-data" >

                        <!-- Basic Info -->
                        <div class="tr-single-box">
                            <div class="tr-single-header">
                                <h4><i class="ti-share"></i> Basic Information</h4>
                            </div>

                            <div class="tr-single-body">
                                <div class="row">
                                    <div class="form-group col-md-6 col-sm-12">
                                        <label>Partner Name</label>

                                        <input class="form-control" name="ownerName" type="text" value="<?php echo $user[0]->owner_name ?>" >
                                        <input class="form-control" type="hidden" name="id" value="<?php echo $user[0]->id ?>">

                                    </div>

                                    <div class="form-group col-md-6 col-sm-12">
                                        <label>Email ID</label>
                                        <input class="form-control" name="ownerEmail" type="email" value="<?php echo $user[0]->email ?>" >
                                    </div>
                                    <div class="form-group col-md-6 col-sm-12">
                                        <label>Mobile No</label>
                                        <input class="form-control" name="ownerMobile" onkeypress="javascript:return isNumber(event)" maxlength="10" type="text" value="<?php echo $user[0]->mobile ?>" >
                                    </div>
                                    <div class="form-group col-md-6 col-sm-12">
                                        <label>Password</label>
                                        <input class="form-control" name="password" type="password" value="<?php echo $user[0]->password ?>" >
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12">
                                        <label>Profile Image</label>
                                        <div class="custom-file">
                                            <input type="file" class="form-control" accept="image/x-png,image/gif,image/jpeg" / name="profileImage">

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-9"></div>
                            <div class="col-md-3">
                                 <input type="Submit" name="" class="btn btn-primary full-width mb-4" value="Save Changes">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include 'footer2.php';
?>
<script type="text/javascript">
    $('.clockpicker').clockpicker()
        .find('input').change(function(){
        console.log(this.value);
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
</script>


