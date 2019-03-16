<!DOCTYPE html>
<html lang="en">
<?php $x = 0 ?>

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

    <!-- Head php attachment -->
    <?php include 'PageWrappers/Head.php' ?>
    <title>Sampling Guide - Dellavalle Laboratory Inc.</title>
    <meta name="description" content="An environmental/agricultural laboratory and consulting firm located in the San Joaquin Valley with clientele worldwide." />
</head>

<body>
    <!-- Header php attachment -->
    <?php include 'PageWrappers/header.php'; ?>

    <!-- Content for main section start -->
    <section>
        <div class="container-fluid">
            <h1>Sampling Techniques</h1>
            <div class=row>
                <div class="col-12">
                    <p>
                        &emsp;The nutritional status of your crop or field can be established by laboratory
                        analysis. Proper sampling is essential for valid results. A sample should be
                        randomly obtained composite that represents the area to be evaluated.
                    </p>

                    <h4 class="noBold">Determine Area to be Sampled:</h4>
                    <ul>
                        <li>
                            For uniform fields (or for an average of a field), samples should be taken
                            from the entire field. Divide the area into 10 or 40 acre lots (or any appropriate
                            size) based upon the following:
                            <ul>
                                <li>Soil type, texture or color</li>
                                <li>Topography, slope, changes in slope, cuts and fills</li>
                                <li>Variation in crop history</li>
                                <li>Plant variety, rootstock, age, harvest quality, irrigation source or leafcoloration</li>
                                <li>Good areas vs. poor areas</li>
                            </ul>
                        </li>
                        <li>
                            Non-uniform fields should be sampled by taking a composite sample from areas
                            with the same characteristics.
                        </li>
                    </ul>
                </div>
            </div>
            <h4 class="noBold">Additional Sampling Techniques:</h4>
            <div class="accordion" id="samplingAccordion">
                <div class="card">
                    <div class="card-header" id="soilHeader">
                        <h2 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseSoil" ari-expanded="false" aria-controls="collapseSoil">
                                Soil
                            </button>
                        </h2>
                    </div>
                    <div class="collapseSoil" class="collapse" aria-labeledby="soilHeader" data-parent="#samplingAccordion">
                        <div class="card-body">
                            <!-- to be filled later -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="tisHeader">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTis" ari-expanded="false" aria-controls="collapseTis">
                            Tissue
                        </button>
                    </h2>
                </div>
                <div class="collapseTis" class="collapse" aria-labeledby="tisHeader" data-parent="#samplingAccordion">
                    <div class="card-body">
                        <!-- to be filled later -->
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="cropHeader">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseCrop" ari-expanded="false" aria-controls="collapseCrop">
                            Crop Removal
                        </button>
                    </h2>
                </div>
                <div class="collapseCrop" class="collapse" aria-labeledby="cropHeader" data-parent="#samplingAccordion">
                    <div class="card-body">
                        <!-- to be filled later -->
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="waterHeader">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseWater" ari-expanded="false" aria-controls="collapseWater">
                            Water
                        </button>
                    </h2>
                </div>
                <div class="collapseWater" class="collapse" aria-labeledby="waterHeader" data-parent="#samplingAccordion">
                    <div class="card-body">
                        <!-- to be filled later -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Content for main section end -->

        <!-- Footer php attachment -->
        <?php include 'PageWrappers/footer.php'; ?>
</body>

</html> 