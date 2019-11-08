<?php
include 'header.php';
?>
    <!-- Top header  -->
    <!-- ============================================================== -->
    <!-- ============================ Page Title  Start================================== -->
    <div class="page-title image-title" style="background-image:url(assets/img/banner-2.jpg);">
        <div class="finding-overlay op-70"></div>
        <div class="container">
            <div class="page-title-wrap">
                <h1>Carrer</h1>
                <p><a href="#" class="theme-cl">Home</a> <span class="current-page active">Carrer</span></p>
            </div>
        </div>
    </div>
    <!-- ============================ Page Title End ================================== -->

    <!-- ============================ Say Hello Start ================================== -->
    <section>
        <div class="container">
            <div class="row mt-5 align-items-center">
                <div class="col-lg-12 col-md-12">
                    <div class="contact-form">
                        <form action="<?php echo base_url('Gogym/insert_carrer');?>" method="post" enctype="multipart/form-data">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>First Name</label>
                                    <input type="text" name="fname" class="form-control" placeholder="First Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Last Name</label>
                                    <input type="text" name="lname" class="form-control" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Email ID</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Mobile No</label>
                                    <input type="text" name="mobile" onkeypress="javascript:return isNumber(event)" maxlength="10" class="form-control" placeholder="Mobile No">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label>Date Of Birth</label>
                                    <input type="date" name="dob" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Select Gender</label>
                                    <select name="gender" class="form-control">
                                        <option>---Select Gender---</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Upload Resume</label>
                                    <input type="file" class="form-control" name="file" accept="application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Message</label>
                                <textarea class="form-control" name="msg" placeholder="Type Here..."></textarea>
                            </div>
                            <input type="submit" class="btn btn-primary" value="Submit">
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <div class="clearfix"></div>
<?php
include 'footer.php';
