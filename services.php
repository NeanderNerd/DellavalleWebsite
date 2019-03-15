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

        <!-- Head attachment -->
        <?php include 'PageWrappers/Head.php'; ?>
        <title>Services - Dellavalle Laboratory Inc.</title>
        <meta name="description"
            content="An environmental/agricultural laboratory and consulting firm located in the San Joaquin Valley with clientele worldwide." />
    </head>

    <body>
        <!-- Header php attachment -->
        <?php include 'PageWrappers/header.php'; ?>

        <!-- Content for main section -->
        <section>
            <div class="container-fluid">
                <h1>Services</h1>
                <div class="row">
                    <div class="col-12">
                        <p>
                            &emsp;Dellavalle specializes in analyses for agricultural, dairy/environmental
                            and horticultural purposes: primarily soil, plant tissue, water, compost, manure,
                            fertilizer and other related materials. Take a look at what we offer.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="nav nav-pills mb-3" id="servicesTabs" role="tabList">
                            <a class="nav-item nav-link active" id="pills-lab-tab" data-toggle="pill" href="#pills-lab"
                                role="tab" aria-controls="pills-lab" aria-selected="true">Laboratory</a>
                            <a class="nav-item nav-link" id="pills-cons-tab" data-toggle="pill" href="#pills-cons"
                                role="tab" aria-controls="pills-cons" aria-selected="false">Consulting</a>
                            <a class="nav-item nav-link" id="pills-exp-tab" data-toggle="pill" href="#pills-exp"
                                role="tab" aria-controls="pills-exp" aria-selected="fasle">Other Expertise</a>
                            <a class="nav-item nav-link" id="pills-env-tab" data-toggle="pill" href="#pills-env"
                                role="tab" aria-controls="pills-env" aria-selected="fasle">Dairy/Environmental</a>
                        </div>
                    </div>
                    <div class="tab-content col-12" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-lab" role=tabPanel
                            aria-labelledby="pills-lab-tab">
                            <h1>Laboratory</h1>
                            <ul>
                                <li>
                                    <a href="downloads/analytical_catalog/Soil_Analysis.pdf" target="_blank"
                                        title="View Soil Analysis Catalog">
                                        Soil Analyses
                                    </a>
                                    <ul>
                                        <li>Fertility Assay</li>
                                        <li>Sodium and Salinity</li>
                                        <li>Minor Nutrients</li>
                                    </ul>
                                <li>
                                    <a href="downloads/analytical_catalog/Plant_Tissue_Analysis.pdf" target="_blank"
                                        title="View Plant Tissue Catalog">
                                        Plant Tissue Analyses
                                    </a>
                                </li>
                                <li>
                                    Water Analyses
                                    <ul>
                                        <li>
                                            <a href="downloads/analytical_catalog/Water_Analysis_Agricultural_Dairy_Waste.pdf"
                                                target="_blank" title="View Agricultural Water Catalog">
                                                Agricultural Suitability
                                            </a>
                                        </li>
                                        <li>
                                            <a href="downloads/analytical_catalog/Water_Analysis_Domestic_Miscellaneous.pdf"
                                                target="_blank" title="View Domestic Catalog">
                                                Drinking Water Quality
                                            </a>
                                        </li>
                                        <li>
                                            Influent/Effluent Analyses
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="downloads/analytical_catalog/Organic_Soil_Amendment.pdf" target="_blank"
                                        title="View">
                                        Manure Analyses
                                    </a>
                                </li>
                                <li>
                                    <a href="downloads/analytical_catalog/Potting_Mixes.pdf" target="_blank"
                                        title="View Potting Mix Catalog">
                                        Potting Mix/Soil Amendments
                                    </a>
                                </li>
                                <li>
                                    <a href="downloads/analytical_catalog/Fertilizer_Analysis.pdf" target="_blank"
                                        title="View Fertilizer Catalog ">
                                        Fertilizer Analyses
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="pills-cons" role="tabPanel" aria-labelledby="pills-cons-tab">
                            <h1>Consulting</h1>
                            <ul>
                                <li>Crop Specific Interpretation of Results</li>
                                <li>Irrigation Management</li>
                                <li>Dairy Nutrient Management</li>
                                <li>Crop Management</li>
                                <li>Fertilizer Programs</li>
                                <li>Land Management Programs</li>
                                <li>Greenhouse Studies</li>
                                <li>Soil Reclamation Programs</li>
                                <li>Crop Production Problems</li>
                                <li>Wastewater Management</li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="pills-exp" role="tabPanel" aria-labelledby="pills-exp-tab">
                            <h1>Other Expertise</h1>
                            <ul>
                                <li>Dairy/Environmental Monitoring</li>
                                <li>Liaison between Client and Regulatory Agencies</li>
                                <li>
                                    Crop Loss Investigations
                                    <ul>
                                        <li>Expert Witness Testimony</li>
                                        <li>Field Observations</li>
                                    </ul>
                                </li>
                                <li>Pathogen Identification</li>
                                <li>Pesticide Residues</li>
                                <li>Regulatory Compliance</li>
                                <li>Network of Laboratories for Special Analytical Requests</li>
                            </ul>
                            <h4>Other Resources</h4>
                            <ul>
                                <li>Experienced and Certified Samplers</a></li>
                                <li>Soil Probes for Resale</li>
                                <li>Importation Permits for Soil/Plant Tissue</li>
                                <li>Sample Collection Containers</li>
                                <li>Courier Service Available From Many Locations in California</li>
                            </ul>
                            <p>
                                For more information, please call or email requests. Our access to a large network of
                                other
                                laboratories permits us to locate a source for tests not performed here (box stacking
                                strength
                                test, absorbency testing, asbestos testing, locating a Koi veterinarian).
                            </p>
                        </div>
                        <div class="tab-pane fade" id="pills-env" role="tabPanel" aria-labelledby="pills-env-tab">
                            <h1>Dairies and the Environment</h1>
                            <p>
                                &emsp;In California, there are environmental concerns regarding wastewater treatment
                                plants, food waste
                                dischargers (packing houses, food processors) and confined livestock operations
                                (primarily dairies).
                            </p>
                            <p>
                                &emsp;Dellavalle staff has been active in assisting private firms meet the various
                                requirements to
                                satisfy environmental concerns.
                            </p>
                            <p>
                                &emsp;For dairies managing influent/effluent is important as it can impact water
                                quality. In line with
                                this the dairies will need to document nutrient application, crop nutrient uptake and
                                identify
                                management practices that will reduce air pollution. With new regulations being
                                developed, improving
                                each dairy’s environmental performance is important.
                            </p>
                            <p>
                                &emsp;Our Certified Soil Scientists/Agronomists are experienced with these concerns.
                                They can act as
                                liaison between you and any regulatory agency including California Regional Water
                                Quality Control
                                Board (CRWQCB). Appropriate samples can be collected from your monitoring wells,
                                lagoons,
                                effluents/influents and treatment ponds. The waters will be analyzed and our
                                professionals can interpret
                                the results and provide written reports. Monitoring reports often include BOD and
                                nitrogen loading information.
                            </p>
                            <p>
                                &emsp;Dairies are regulated by several agencies including the CRWQCB from whom we
                                received approved laboratory
                                status. Others involved are the Air Pollution Control Board, the County where the dairy
                                is located and other
                                Federal and State groups.
                            </p>
                            <p>
                                We are helping you save the future of our water supply and keep our environment safe.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Content for main section end -->

            <!-- Footer php attachment -->
            <?php include 'PageWrappers/footer.php'; ?>
    </body>

</html>