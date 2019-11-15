<?php
include 'header.php';
?>
<style>
    .img50{
        height: 50px;
        width: 50px;
    }
</style>
<div class="wrapper">
    <div class="container-fluid">

        <!-- Page-Title -->
        <div class="row paddtp5">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="btn-group m-0 pull-right">
                        <ol class="breadcrumb hide-phone p-0 m-0">
                            <li class="breadcrumb-item"><a href="#">GoGyms</a></li>
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active">User Details</li>
                        </ol>
                    </div>
                    <h4 class="page-title">User Details</h4>
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->

        <h4 class="page-title">User Details</h4>
        <div class="row">

            <div class="col-6">
                <div class="card m-b-30">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <tr>
                                    <th>User Name :</th>
                                    <td>Sanjeev</td>
                                </tr>
                                <tr>
                                    <th>Email ID :</th>
                                    <td>sanjeev@gmail.com</td>
                                </tr>
                                <tr>
                                    <th>Gender :</th>
                                    <td>Male</td>
                                </tr>
                                <tr>
                                    <th>Mobile No :</th>
                                    <td><?php echo $user[0]->mobile; ?></td>
                                </tr>
                                <tr>
                                    <th>Date Of Birth :</th>
                                    <td>16/10/1990</td>
                                </tr>

                                <tr>
                                    <th>Location :</th>
                                    <td>Noida</td>
                                </tr>
                                <tr>
                                    <th>Profession :</th>
                                    <td>Teacher</td>
                                </tr>
                                <tr>
                                    <th>Blood Group :</th>
                                    <td>O+</td>
                                </tr>
                                <tr>
                                    <th>Height(CM) :</th>
                                    <td>164</td>
                                </tr>
                                <tr>
                                    <th>Height(Fit) :</th>
                                    <td>5.7</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
            <div class="col-6">
                <div class="card m-b-30">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered" cellspacing="0" width="100%">

                                <tr>
                                    <th>Heart Rate :</th>
                                    <td>90</td>
                                </tr>
                                <tr>
                                    <th>Blood Pressure(Low) :</th>
                                    <td>80</td>
                                </tr>
                                <tr>
                                    <th>Blood Pressure(High)</th>
                                    <td>120</td>
                                </tr>
                                <tr>
                                    <th>Smoking</th>
                                    <td>No</td>
                                </tr>
                                <tr>
                                    <th>Drinking</th>
                                    <td>No</td>
                                </tr>
                                <tr>
                                    <th>Disease </th>
                                    <td>No</td>
                                </tr>
                                <tr>
                                    <th>Disease ( If Yes )</th>
                                    <td>Disease Details</td>
                                </tr>
                                <tr>
                                    <th>Address</th>
                                    <td>sec- 63 Noida</td>
                                </tr>

                                <tr>
                                    <th>Profile Image</th>
                                    <td><img src="" class="img50"></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div> <!-- end container -->
</div>
<?php
include 'footer.php';
?>
