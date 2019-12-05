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



    <!-- ============================ Say Hello Start ================================== -->
    <section>
        <div class="container">

            <div class="row mt-5 align-items-center">

                <div class="col-lg-2 col-md-2">

                </div>
                <div class="col-lg-8 col-md-8">
                    <h1>Body Mass Index Calculator</h1>
                    <p>Enter your height:
                        <input type="text" id="height" />
                        <select type="multiple" id="heightunits">
                            <option value="inches" selected="selected">inches</option>
                            <option value="metres">metres</option>

                        </select>
                    </p>
                    <p>Enter your weight:
                        <input type="text" id="weight" />
                        <select type="multiple" id="weightunits">
                            <option value="kg" selected="selected">kilograms</option>
                            <option value="lb">pounds</option>
                        </select>
                    </p>
                    <input type="button" value="computeBMI" onclick="computeBMI()"/>
                    <h1>Your BMI is: <span id="output">?</span></h1>

                    <h2>This means you are: value = <span id='comment'></span> </h2>
                </div>
                <div class="col-lg-2 col-md-2">

                </div>

            </div>

        </div>
    </section>
    <div class="clearfix"></div>
    <!-- ============================ Say Hello End ================================== -->
<script>
    function computeBMI() {
        //Obtain user inputs
        var height = Number(document.getElementById("height").value);
        var heightunits = document.getElementById("heightunits").value;
        var weight = Number(document.getElementById("weight").value);
        var weightunits = document.getElementById("weightunits").value;


        //Convert all units to metric
        if (heightunits == "inches") height /= 39.3700787;
        if (weightunits == "lb") weight /= 2.20462;

        //Perform calculation
        var BMI = weight / Math.pow(height, 2);
        //Display result of calculation
        document.getElementById("output").innerHTML = Math.round(BMI * 100)/100;
        if (BMI < 18.5) document.getElementById("comment").innerHTML = "Underweight";
        if (BMI >= 18.5 && BMI <= 25) document.getElementById("comment").innerHTML = "Healthy range";
        if (BMI >= 25 && BMI < 30) document.getElementById("comment").innerHTML = "Overweight";
        /*if (BMI > 30) document.getElementById("comment").innerHTML = "Overweight";*/
        document.getElementById("answer").value = output;
    }
</script>
<?php
include 'footer.php';
