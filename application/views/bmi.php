<?php
include 'header.php';
?>


    <!-- ============================ Page Title  Start================================== -->
    <div class="page-title image-title" style="background-image:url(assets/img/banner-2.jpg);">
        <div class="finding-overlay op-70"></div>
        <div class="container">
            <div class="page-title-wrap">
                <h1>BMI Calculator</h1>
                <p><a href="#" class="theme-cl">Home</a> <span class="current-page active">BMI Calculator</span></p>
            </div>
        </div>
    </div>
    <!-- ============================ Page Title End ================================== -->

<?php
// BMI calculator
// Coded on 1/14/18, Updated on 1/15/18 to include Metric options/conversions
// Used the following educational resources to determine the BMI formula:
// http://extoxnet.orst.edu/faqs/dietcancer/web2/twohowto.html
// http://www.medcalc.com/body.html

// process data submitted in form
if(isset($_POST['givems']) && ($_POST['givems'])== "Submit"){
    // extract the data and assign automatically to variables
    extract($_POST);

    // now, using these variables, process the user's BMI and report it
    //first, determine the unit of measurement the user chose -- if Standard...

        // convert from lbs to kg
        $adjusted_weight = $weight * 0.45359237;
        // convert from inches to m
        $adjusted_height = $height * 0.0254;
        // square the height variable
        $adjusted_height_final = $adjusted_height * $adjusted_height;
        // divide the weight by the squared height to get the BMI value
        $prep_bmi = $adjusted_weight/$adjusted_height_final;
        $bmi = number_format($prep_bmi, 1);
        // and finally announce the result
        // center the result
        echo "<center>";
        echo "Your BMI is $bmi. ";
    if($bmi > '18.5' && $bmi < '25') {  echo "<span style='color:#2ed02e;padding-top: 5%;'>You are considered within normal BMI range.</span><br /><br />";
    } elseif($bmi < '18.5') { echo "<span style='color:#2ed02e;padding-top: 5%;'>You are considered underweight.</span><br /><br />";
    } elseif($bmi >= '25' && $bmi < '30') { echo "<span style='color:#2ed02e;padding-top: 5%;'>You are considered overweight.</span><br /><br />";
    } elseif($bmi >= '30' && $bmi < '40') { echo "You are considered obese.<br /><br />";
    } elseif($bmi >= '40') { echo "You are considered extremely obese.<br /><br />";
    }

        // close the centering
        echo "</center>";

        // elseif unit chosen is Metric, continue accordingly

} // close extract post
?>

    <!-- ============================ Say Hello Start ================================== -->
    <section>
        <div class="container">

            <div class="row mt-5 align-items-center">

                <div class="col-lg-3 col-md-3">

                </div>
                <div class="col-lg-6 col-md-6">
                    <center><h2> BMI Calculator </h2></center>
                    <div id="bmiform">
                        <b>Please enter your measurements below.
                        <form id="bmicalc" name="bmicalc" method="post">
                            Weight (in lbs): <input type="text" name="weight" class="form-control">
                            Height (in inches): <input type="text" name="height" class="form-control">
                            <br>
                            <input type="submit" name="givems" id="givems" class="btn btn-primary" value="Submit"/>
                        </form>

                    </div>
                <div class="col-lg-3 col-md-3">

                </div>

            </div>

        </div>
    </section>
    <div class="clearfix"></div>
    <!-- ============================ Say Hello End ================================== -->
<?php
include 'footer.php';
