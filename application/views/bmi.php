<?php
include 'header.php';
?>
<style>
    .bmidiv {
        height: 1em;

        background-color: #09b367;
        background-image: -moz-linear-gradient(top, #09b367, #09b367);
        background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#09b367), to(#09b367));
        background-image: -webkit-linear-gradient(top, #09b367, #09b367);
        background-image: -o-linear-gradient(top, #09b367, #09b367);
        background-image: linear-gradient(to bottom, #09b367, #09b367);
        background-repeat: repeat-x;
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fffbb450', endColorstr='#fff89406', GradientType=0);
    }

    .bmidiv:before {
        height: 1em;
        width: 33.3%;
        display: block;
        content: "";
        float: left;

        background-color: #418fde;
        background-image: -moz-linear-gradient(top, #418fde, #418fde);
        background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#418fde), to(#418fde));
        background-image: -webkit-linear-gradient(top, #418fde, #418fde);
        background-image: -o-linear-gradient(top, #418fde, #418fde);
        background-image: linear-gradient(to bottom, #418fde, #418fde);
        background-repeat: repeat-x;
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fffbb450', endColorstr='#fff89406', GradientType=0);
    }

    .bmidiv:after {
        height: 1em;
        width: 33.3%;
        display: block;
        content: "";
        float: right;

        background-color: #fd6559;
        background-image: -moz-linear-gradient(top, #fd6559, #fd6559);
        background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#fd6559), to(#fd6559));
        background-image: -webkit-linear-gradient(top, #fd6559, #fd6559);
        background-image: -o-linear-gradient(top, #fd6559, #fd6559);
        background-image: linear-gradient(to bottom, #fd6559, #fd6559);
        background-repeat: repeat-x;
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fd6559', endColorstr='#fff89406', GradientType=0);
    }
</style>

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
                    <input type="button" class="btn btn-primary" value="Calculate BMI" onclick="computeBMI()"/>
                    <h4>Your BMI is: <span id="output">?</span></h4>

                    <h2>This means you are: value = <span id='comment'></span> </h2>
                </div>
                <div class="col-lg-2 col-md-2">

                </div>

            </div>

            <div class="container"  style="margin-bottom: 30px; margin-top: 40px;">
                <h3 style="text-align: center"  >Information Body Mass Index</h3>
            </div>
            <div >

                <div class="row">
                    <div class="col-5">
                        <h5 style="margin-left: 102px;">Underweight </h5>
                    </div>
                    <div class="col-4">
                        <h5>Normal</h5>
                    </div>
                    <div class="col-3">
                        <h5>Overweight</h5>
                    </div>

                </div>
            </div>
<div >
            <div class="bmidiv"></div>
            <div class="row">
                <div class="col-4">
                    <h5>16.0</h5>
                </div>
                <div class="col-4">
                    <h5 style="margin-left: -28px;">18.5</h5>
                </div>
                <div class="col-3">
                    <h5 style="margin-left: -28px;">25.0</h5>
                </div>
                <div class="col-1">
                    <h5 style="margin-left: 33px;">40.0</h5>
                </div>
            </div>
</div>

            <div class="container" style="margin-top: 50px;">
                <h3>Body Mass Index</h3><br>
                <h5>What is the Body Mass Index?</h5>
                <p> The Body Mass Index or BMI is a method of classifying whether an individual is overweight, underweight, obese or normal weight based only on their height and weight and is not gender specific. To calculate your BMI you can use our online BMI calculator.</p>

                <h5> What are the classifications of the Body Mass Index?</h5>

                <p>  A BMI of less than 18.5 is underweight, normal weight is between 18.5 to 25, overweight is between 25 to 30 and obese is greater than 30.
                </p>
                <h5>  How is the Body Mass Index Calculated?</h5>

                   <p> BMI is calculated by dividing a person's weight in kilograms by height in meters squared. The mathematical formula as under:
                   </p>

                   <h5> BMI = weight (kg) / height square (m²)</h5>
                </p>

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
        if (BMI < 18.5) document.getElementById("comment").innerHTML = "<h2 style='color: #418fde'>Underweight</h2>";
        if (BMI >= 18.5 && BMI <= 25) document.getElementById("comment").innerHTML = "<h2 style='color: #09b367'>Healthy range</h2>";
        if (BMI >= 25 && BMI < 30) document.getElementById("comment").innerHTML = "<h2 style='color: #fd6559'>Overweight</h2>";
        /*if (BMI > 30) document.getElementById("comment").innerHTML = "Overweight";*/
        document.getElementById("answer").value = output;
    }
</script>
<?php
include 'footer.php';
