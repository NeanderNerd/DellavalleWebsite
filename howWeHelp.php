<!DOCTYPE html>
<html lang="en">
<?php $x = 0; ?>

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-136360584-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-136360584-1');
    </script>

    <!-- Head php attchment -->
    <?php include 'PageWrappers/Head.php'; ?>
    <title>How We Help | Dellavalle Lab.</title>
    <meta name="description" content="An environmental/agricultural laboratory and consulting firm located in the San Joaquin Valley with clientele worldwide." />
</head>

<body>
    <!-- Header php attachment -->
    <?php include 'PageWrappers/header.php'; ?>

    <!-- Content for main section start -->
    <section>
        <div class="container-fluid">
            <h1>How We Help</h1>
            <div class="row">
                <div class="col-12">
                    <p>
                        For growers we provide consultation regarding irrigation management, plant nutrition, soil fertility,
                        salinity management and soil reclamation. We can assist with agricultural investigations for crop
                        production problems and crop loss claims. Our laboratory can provide the analytical work to assist with
                        such evaluations.
                    </p>
                </div>
            </div>
            <div class=row>
                <div class="col-2">
                    <div class="list-group" id="list-tab" role="tablist">
                        <a class="list-group-item list-group-item-action active text-center" id="list-prob-list" data-toggle="list" href="#list-prob" role="tab" aria-controls="prob">
                            <i class="fas fa-globe-americas fa-2x fa-spin"></i>
                            <i class="fas fa-globe-americas fa-2x nospin"></i>
                            <i class="fas fa-globe-americas small nospin"></i>
                        </a>
                        <a class="list-group-item list-group-item-action text-center" id="list-imp-list" data-toggle="list" href="#list-imp" role="tab" aria-controls="imp">
                            <i class="fas fa-chart-line fa-2x fa-spin"></i>
                            <i class="fas fa-chart-line fa-2x nospin"></i>
                            <i class="fas fa-chart-line small nospin"></i>
                        </a>
                        <a class="list-group-item list-group-item-action text-center" id="list-cost-list" data-toggle="list" href="#list-cost" role="tab" aria-controls="cost">
                            <i class="fas fa-dollar-sign fa-2x fa-spin"></i>
                            <i class="fas fa-dollar-sign fa-2x nospin"></i>
                            <i class="fas fa-dollar-sign small nospin"></i>
                        </a>
                        <a class="list-group-item list-group-item-action text-center" id="list-max-list" data-toggle="list" href="#list-max" role="tab" aria-controls="max">
                            <i class="fas fa-tint fa-2x fa-spin"></i>
                            <i class="fas fa-tint fa-2x nospin"></i>
                            <i class="fas fa-tint small nospin"></i>
                        </a>
                        <a class="list-group-item list-group-item-action text-center" id="list-eval-list" data-toggle="list" href="#list-eval" role="tab" aria-controls="eval">
                            <i class="fas fa-tint fa-2x fa-spin"></i>
                        </a>
                    </div>
                </div>
                <div class="col-10">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="list-prob" role="tabpanel" aria-labelledby="list-prob-list">
                        </div>
                        <div class="tab-pane fade" id="list-imp" role="tabpanel" aria-labelledby="list-imp-list">
                        </div>
                        <div class="tab-pane fade" id="list-cost" role="tabpanel" aria-labelledby="list-cost-list">
                        </div>
                        <div class="tab-pane fade" id="list-max" role="tabpanel" aria-labelledby="list-max-list">
                        </div>
                        <div class="tab-pane fade" id="list-eval" role="tabpanel" aria-labelledby="list-eval-list">
                        </div>
                    </div>
                </div>
                <h4>We Can Solve Problems</h4>
                <ul>
                    <li>Soil and plant tissue analyses can provide information for correcting nutrient deficiencies or
                        excesses, or confirming that everything is satisfactory.</li>
                    <li>&nbsp;Our consultants can often determine the probable cause of problems with field inspection.</li>
                    <li>We can analyze your irrigation water to assure nutrient and salinity levels are suitable for your
                        crops.</li>
                </ul>
                <h4>Improve (Increase) Yields</h4>
                <ul>
                    <li>&nbsp;Overcome production limitations caused by nutrient deficiencies, soil salinity, mineral
                        toxicity or water use.</li>
                    <li>Use consultants’ recommendations to optimize fertilizer, soil amendment and irrigation management.
                    </li>
                </ul>
                <h4>Reduce Costs</h4>
                <ul>
                    <li>Analyze your soil, tissue and water to establish the current nutrient needs for your crop.</li>
                    <li>&nbsp;Take a look at our Sampling Guide.
                        Know your crop's needs to eliminate unnecessary fertilizer purchases.</li>
                    <li>&nbsp;Monitor your crop's water use to possibly reduce your use of water and power.</li>
                </ul>
                <h4>Maximize Water Efficiency</h4>
                <ul>
                    <li>Monitor soil moisture with a neutron probe to provide a basis for an irrigation plan - when and how
                        much water.</li>
                </ul>
                <h4>Evaluate Land Prior to Acquisition</h4>
                <ul>
                    <li>With analyses of property's soil and water, we can determine if it meets your objectives.</li>
                    <li>Appropriate rootstock/crops and fertilizer programs can be recommended, based on soil conditions.
                    </li>
                    <li>Appropriate reclamation steps can be provided for various situations (alkalinity, hardpan or even
                        excavation).</li>
                </ul>
            </div>
            <!-- Content for main section End -->

            <!-- Footer php attachment -->
            <?php include 'PageWrappers/footer.php'; ?>
</body>

</html> 