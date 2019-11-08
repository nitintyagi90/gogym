<?php
include 'header.php';
?>
<style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
    th, td {
        padding: 5px;
    }
    th {
        text-align: left;
    }
    .clr{
        color: #333;
    }
</style>
<!-- =========================== Category Start ============================================ -->
<section>
    <div class="container">

        <div class="row">
            <div class="col text-center">
                <div class="sec-heading mx-auto">
                    <h2>Health Checkups</h2>
                </div>
            </div>
        </div>

        <div class="row">

            <?php

            foreach ($message as $value){ ?>

            <!-- Single Category -->
            <div class="col-lg-4 col-md-4 col-sm-6 mb-4">
                <div class="modern-category">
                    <div class="modern-category-footer">
                        <div class="mc-footer-caption">
                            <h4 class="category-title text-center" style="font-size: 20px;"><?php echo $value->health_day ?></h4>
                        </div>
                    </div>
                    <div >
                        <table style="width:100%">
                            <tr>
                                <th class="clr">Breakfast</th>
                                <td><?php echo $value->health_breakfast ?></td>
                            </tr>
                            <tr>
                                <th class="clr">Lunch</th>
                                <td><?php echo $value->health_lunch ?></td>
                            </tr>
                            <tr>
                                <th class="clr">Dinner</th>
                                <td><?php echo $value->health_dinner ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>

    </div>
</section>
<!-- =========================== Category End ============================================ -->
<?php
include 'footer.php';
?>
