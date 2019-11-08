<?php
include 'header.php';
?>
    <!-- ============================ Page Title  Start================================== -->
    <div class="page-title image-title" style="background-image:url(assets/img/banner-2.jpg);">
        <div class="finding-overlay op-70"></div>
        <div class="container">
            <div class="page-title-wrap">
                <h1>Get in touch</h1>
                <p><a href="#" class="theme-cl">Home</a> <span class="current-page active">Contact Us</span></p>
            </div>
        </div>
    </div>
    <!-- ============================ Page Title End ================================== -->

    <!-- ============================ Say Hello Start ================================== -->
    <section>
        <div class="container">


            <div class="row mt-5 align-items-center">

                <div class="col-lg-5 col-md-5">
                    <div class="contact-box">
                        <i class="fa fa-map-marker"></i>
                        <h4>Address</h4>
                        <h5>Gogyms Fitness Solutions</h5>
                        101, Pratap Nagar, Mayur Vihar Phase-1,
                        New Delhi-110091
                    </div>
                    <div class="contact-box">
                        <i class="ti-email"></i>
                        <h4>Drop a Mail</h4>
                        contact@gogyms.in
                    </div>
                    <div class="contact-box">
                        <i class="ti-headphone"></i>
                        <h4>Call Us</h4>
                        08377-083777
                    </div>
                </div>

                <div class="col-lg-7 col-md-7">
                    <div class="contact-form">
                        <form action="<?php echo base_url('Gogym/insert_contact');?>" method="post" enctype="multipart/form-data">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>First Name</label>
                                    <input type="text" class="form-control" name="fname" placeholder="First Name" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Last Name</label>
                                    <input type="text" class="form-control" name="lname" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Email ID</label>
                                    <input type="email" class="form-control" name="cemail" placeholder="Email" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Mobile No</label>
                                    <input type="text" name="cmobile" onkeypress="javascript:return isNumber(event)" maxlength="10" class="form-control" placeholder="Mobile No" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Message</label>
                                <textarea class="form-control" name="cmsg" placeholder="Type Here..."></textarea>
                            </div>
                            <input type="submit" class="btn btn-primary" value="Submit">
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <div class="clearfix"></div>
    <!-- ============================ Say Hello End ================================== -->
<?php
include 'footer.php';
