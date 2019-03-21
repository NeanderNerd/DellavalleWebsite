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
                                <li>
                                    Soil type, texture or color
                                </li>
                                <li>
                                    Topography, slope, changes in slope, cuts and fills
                                </li>
                                <li>
                                    Variation in crop history
                                </li>
                                <li>
                                    Plant variety, rootstock, age, harvest quality, irrigation source or
                                    leafcoloration
                                </li>
                                <li>
                                    Good areas vs. poor areas
                                </li>
                            </ul>
                        </li>
                        <li>
                            Non-uniform fields should be sampled by taking a composite sample from areas
                            with the same characteristics.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <h4 class="noBold">Additional Sampling Techniques:</h4>
                    <div class="accordion" id="samplingAccordion">
                        <div class="card">
                            <div class="card-header" id="soilHeader">
                                <h1 class="mb-0" style="margin-block-start: 0px">
                                    <button id="accordionLinks" class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseSoil" ari-expanded="true" aria-controls="collapseSoil">
                                        Soil
                                    </button>
                                </h1>
                            </div>
                            <div id="collapseSoil" class="collapse" aria-labeledby="soilHeader" data-parent="#samplingAccordion">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <h4 class="noBold">Equipment:</h4>
                                            <ul>
                                                <li>
                                                    Soil probe or shovel; however, backhoe, soil auger or posthole
                                                    digger may be used.
                                                </li>
                                                <li>
                                                    Clean moisture-proof quart-size bags. Use paper bags only if
                                                    soil is very dry.
                                                </li>
                                                <li>
                                                    Clean plastic bucket to mix samples, optional.
                                                </li>
                                                <li>
                                                    Samples collected for microbiology, nematode and pesticide
                                                    residue analysis generally need
                                                    refrigeration so have a cooler and coolant available.
                                                </li>
                                            </ul>
                                            <h4 class="noBold">Procedure:</h4>
                                            <ul>
                                                <li>
                                                    Walk a zigzag course around or through the sampling area taking
                                                    20 to 30 cores, enough to make a
                                                    quart of soil. Stay away from field edges.
                                                    <ul>
                                                        <li>
                                                            For furrow or field crops, take soil 12 inches below the
                                                            surface
                                                            or to the plowing depth.
                                                        </li>
                                                        <li>
                                                            For tree and vine crops, soil samples should be taken
                                                            one-foot increments to the depth of
                                                            rooting which may require three to five samples from the same area.
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    Collect one quart of soil and put in a clean quart-size bag.
                                                </li>
                                                <li>
                                                    If collecting soils from multiple sites, composite by mixing in
                                                    clean plastic bucket and taking one quart per sample.
                                                </li>
                                                <li>
                                                    Clearly print on each bag using an indelible marker or ballpoint
                                                    pen your name/company, site and sample description.
                                                </li>
                                                <li>
                                                    Complete a <a class=link href="forms.php" target="_blank">Work Request</a>
                                                    form. Please be sure to print clearly and return it with your sample.
                                                </li>
                                                <li>
                                                    Deliver to Dellavalle by:
                                                    <ul>
                                                        <li>
                                                            <a class="link" href="map.php" target="_blank">
                                                                In person drop off
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="link" href="shipping-instructions.php" target="_blank">
                                                                Shipping
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <h4 class="noBold">Specific Soil Sampling:</h4>
                                            <div class="nav nav-pills mb-3" id="soilTabs" role="tabList">
                                                <a class="nav-item nav-link" id="pills-soilFar-tab" data-toggle="pill" href="#pills-soilFar" role="tab" aria-controls="pills-soilFar" aria-selected="false">
                                                    Field &amp; Row Crops
                                                </a>
                                                <a class="nav-item nav-link" id="pills-soilPerm-tab" data-toggle="pill" href="#pills-soilPerm" role="tab" aria-controls="pills-soilPerm" aria-selected="false">
                                                    Permanent Crops
                                                </a>
                                                <a class="nav-item nav-link" id="pills-soilOrn-tab" data-toggle="pill" href="#pills-soilOrn" role="tab" aria-controls="pills-soilOrn" aria-selected="false">
                                                    Ornamental
                                                </a>
                                            </div>
                                        </div>
                                        <div class="tab-content col-12" id="pills-tabContent">
                                            <div class="tab-pane fade" id="pills-soilFar" role="tabPanel" aria-labelledby="pills-soilFar-tab">
                                                <p>
                                                    Samples are collected from the top 12 inches of soil with a soil
                                                    probe.
                                                    A shovel can be used if care is
                                                    taken to assure a good vertical representation of the 0 to 12
                                                    inch
                                                    profile.
                                                </p>
                                                <p>
                                                    Results will vary widely if soil amendment or fertilizer
                                                    injection bands
                                                    become part of the sample. It is
                                                    best to avoid these bands or take a high number of random
                                                    samples.
                                                </p>
                                                <p>
                                                    Nutrients are often better evaluated by petiole or leaf samples
                                                    because
                                                    root-depth and position of
                                                    residual fertilizer levels vary, changing the amount of
                                                    nutrients
                                                    available to the plant. Tissue
                                                    sampling will determine what the plant is absorbing; see tissue
                                                    section
                                                    <a class="links" href="#collapseTis" data-toggle="collapse">below</a>.
                                                </p>
                                            </div>
                                            <div class="tab-pane fade" id="pills-soilPerm" role="tabPanel" aria-labelledby="pills-soilPerm-tab">
                                                <p>
                                                    Soil samples should be collected at one-foot increments to the
                                                    rooting
                                                    depth for the mature crop.
                                                    One-foot increments are needed to evaluate what roots will be
                                                    exposed to
                                                    as they grow. This may require
                                                    three to five vertical (i.e. 1, 2, 3 feet) samples from the each
                                                    site.
                                                </p>
                                                <p>
                                                    Results will vary widely if soil amendment or fertilizer
                                                    injection bands
                                                    become part of the sample.
                                                    Irrigation pushes nutrients and salts to the edges of the wetted
                                                    areas.
                                                    It is best to avoid these
                                                    locations or take a high number of random samples. Under certain
                                                    situations it is advisable to take
                                                    samples in these zones specifically to determine accumulated
                                                    extremes.
                                                </p>
                                                <p>
                                                    Nutrients are often better evaluated by petiole or leaf samples
                                                    because
                                                    the root-depth and position of
                                                    residual fertilizer levels vary, changing the amount nutrients
                                                    available
                                                    to the plant. Tissue sampling
                                                    will determine what the plant is absorbing; see tissue section
                                                    <a class="links" href="#collapseTis" data-toggle="collapse">below</a>.
                                                </p>
                                            </div>
                                            <div class="tab-pane fade" id="pills-soilOrn" role="tabPanel" aria-labelledby="pills-soilOrn-tab">
                                                <ul>
                                                    <li>
                                                        Sampling depths vary depending on the plant selection.
                                                        <ul>
                                                            <li>
                                                                For turf: the critical depth for preplant
                                                                consideration is 0
                                                                to 6 inches
                                                            </li>
                                                            <li>
                                                                Shrubs: 0 to 18 inches
                                                            </li>
                                                            <li>
                                                                Trees: 0 to 24 or 36 inches
                                                            </li>
                                                            <li>
                                                                For deep-rooted plants with salt intolerances,
                                                                sample
                                                                multiple depths separately (i.e. 1, 2,
                                                                3 feet).
                                                            </li>
                                                            <li>
                                                                Imported soil should be sampled separately. Many
                                                                times,
                                                                imported top soil is poor in
                                                                nutrition and high in pH and salts. Know where
                                                                imported
                                                                soil, cuts and fills are located.
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        In a mixed landscape with problems, notice whether the
                                                        affected
                                                        plants are shallow, medium or deep
                                                        rooted. This information will give you an idea of what depth
                                                        to
                                                        sample.
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="tisHeader">
                                <h1 class="mb-0" style="margin-block-start: 0px">
                                    <button id="accordionLinks" class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTis" ari-expanded="true" aria-controls="collapseTis">
                                        Tissue
                                    </button>
                                </h1>
                            </div>
                            <div id="collapseTis" class="collapse" aria-labeledby="tisHeader" data-parent="#samplingAccordion">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <h4 class="noBold">Equipment:</h4>
                                            <ul>
                                                <li>
                                                    Paper or plastic bags can be used. Care should be taken not to
                                                    allow the
                                                    sample to dry or mold. Be
                                                    sure to keep plastic bagged samples cold enroute to laboratory.
                                                    Deliver
                                                    to the laboratory as soon as
                                                    possible.
                                                </li>
                                                <li>
                                                    Most samples can be gathered by hand although hand clippers
                                                    maybe useful
                                                    in some cases. Sampler
                                                    should have clean hands. Do not use borax-containing hand soaps.
                                                </li>
                                                <li>
                                                    Samples collected for microbiology, pathogens and pesticide
                                                    analyses
                                                    generally need refrigeration.
                                                    Have a cooler and coolant available.
                                                </li>
                                            </ul>
                                            <h4 class="noBold">Procedure:</h4>
                                            <ul>
                                                <li>
                                                    Select proper plant part and sampling time; timing is important.
                                                    For
                                                    more information on timing and
                                                    proper plant parts see specific Tissue Sampling below.
                                                </li>
                                                <li>
                                                    Collect 50-80 petioles or leaves per sample.
                                                    <ul>
                                                        <li>
                                                            Leaves: Collect only fully-expanded mature leaves.
                                                        </li>
                                                        <li>
                                                            Petioles: Take only petioles, removing the leaf blade in the
                                                            field.
                                                            (It only takes a few minutes for blades to absorb nutrients
                                                            from
                                                            petioles.)
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    Clearly print on each bag using an indelible marker or ballpoint
                                                    pen
                                                    your name/company, location
                                                    (site) and sample description.
                                                </li>
                                                <li>
                                                    Complete a <a class=link href="forms.php" target="_blank">Work
                                                        Request</a> form.
                                                    Please be sure to print clearly and return it with your sample.
                                                </li>
                                                <li>
                                                    Deliver to Dellavalle by:
                                                    <ul>
                                                        <li>
                                                            <a class="link" href="map.php" target="_blank">In person
                                                                Drop
                                                                off</a>
                                                        </li>
                                                        <li>
                                                            <a class="link" href="shipping-instructions.php" target="_blank">Shipping</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    Tissue samples are rinsed upon arrival so ship promptly as dry
                                                    samples
                                                    cannot be rinsed.
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <h4 class="noBold">Specific Tissue Sampling:</h4>
                                            <div class="nav nav-pills mb-3" id="tisTabs" role="tabList">
                                                <a class="nav-item nav-link" id="pills-tisFar-tab" data-toggle="pill" href="#pills-tisFar" role="tab" aria-controls="pills-tisFar" aria-selected="false">
                                                    Field &amp; Row Crops
                                                </a>
                                                <a class="nav-item nav-link" id="pills-tisPerm-tab" data-toggle="pill" href="#pills-tisPerm" role="tab" aria-controls="pills-tisPerm" aria-selected="false">
                                                    Permanent Crops
                                                </a>
                                                <a class="nav-item nav-link" id="pills-tisOrn-tab" data-toggle="pill" href="#pills-tisOrn" role="tab" aria-controls="pills-tisOrn" aria-selected="false">
                                                    Ornamental
                                                </a>
                                            </div>
                                        </div>
                                        <div class="tab-content col-12" id="pills-tabContent">
                                            <div class="tab-pane fade" id="pills-tisFar" role="tabPanel" aria-labelledby="pills-tisFar-tab">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Crop</th>
                                                            <th scope="col">Plant Part to Sample</th>
                                                            <th scope="col">Time of Sampling</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">Alfalfa</th>
                                                            <td>
                                                                Midstems for NO3-N, PO4-P, K
                                                                <br />Leaves for SO4-S
                                                                <br />Tops for Mo, B
                                                            </td>
                                                            <td>1/10 Bloom</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Asparagus</th>
                                                            <td>Fern needles 4" tip section</td>
                                                            <td>September</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Cabbage/Lettuce</th>
                                                            <td>Midrib of wrapper leaf</td>
                                                            <td>Heading</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Cantaloupe/Cucumber</th>
                                                            <td>
                                                                Petioles of 6th leaf/ from growing tips 6-8 true leaves
                                                            </td>
                                                            <td>Early fruit set</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Corn</th>
                                                            <td>
                                                                Midrib from young mature leaf
                                                                <br />Midrib from leaf opposite ear
                                                                <br />Leaf - young mature
                                                                <br />Leaf opposite ear
                                                            </td>
                                                            <td>
                                                                Before ear formation
                                                                <br />After ear formation
                                                                <br />Before ear formation
                                                                <br />After ear formation
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Cotton</th>
                                                            <td>Young, mature petiole</td>
                                                            <td>June thru Sept 15</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Onion/Garlic</th>
                                                            <td>
                                                                &#8220;Y&#8221; leaf from 6&#8221; plant
                                                                <br />height to pre-harvest
                                                            </td>
                                                            <td>Pre-harvest</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Sorghum/Milo</th>
                                                            <td>Young mature leaf</td>
                                                            <td>Pre-harvest</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Tomato</th>
                                                            <td>Petiole of recently matured leaf (4th leaf from growing tip)</td>
                                                            <td>Early Bloom, 1" Fruit, lst Color</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Wheat/Barley</th>
                                                            <td>2&#8221; of above-ground stem</td>
                                                            <td>6&#8221; tall to pre-harvest</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="tab-pane fade" id="pills-tisPerm" role="tabPanel" aria-labelledby="pills-tisPerm-tab">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Crop</th>
                                                            <th scope="col">Plant Part to Sample</th>
                                                            <th scope="col">Time of Sampling</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">Blueberries</th>
                                                            <td>Leaves &#8211; mid-shoot</td>
                                                            <td>April thru September</td>
                                                        </tr>
                                                        <tr>
                                                            <th scop="row">Citrus</th>
                                                            <td>Mature leaves from non-fruiting terminals (avoid recent flush)</td>
                                                            <td>July 15 to May 15</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Deciduous Fruit/Nut Trees (except those noted below)</th>
                                                            <td>Mature Leaves &#8211; from spurs</td>
                                                            <td>May thru September</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Grapes</th>
                                                            <td>
                                                                Petiole - opposite cluster
                                                                <br />Petiole
                                                                <br />Leaf blade &#8211; opposite cluster
                                                                <br />Leaf blade &#8211; young mature
                                                                <br /><img class="img-thumbnail rounded" src="images/figure1.gif" />
                                                            </td>
                                                            <td>
                                                                Bloom
                                                                <br />Veraison
                                                                <br />April &amp; June
                                                                <br />July thru Sept 15
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Peaches &amp; Nectarines</th>
                                                            <td>
                                                                Leaves &#8211; mid-shoot from current
                                                                <br />season&#8217;s growth
                                                            </td>
                                                            <td>April 15 thru Sept 15</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Pistachios</th>
                                                            <td>
                                                                Young, mature leaves from
                                                                <br />non-fruiting terminals
                                                            </td>
                                                            <td>May thru August</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Walnuts &amp; Pecans</th>
                                                            <td>Terminal leaflet of compound leaf</td>
                                                            <td>Terminal leaflet of compound leaf</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="tab-pane fade" id="pills-tisOrn" role="tabPanel" aria-labelledby="pills-tisOrn-tab">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">Crop</th>
                                                            <th scope="col">Plant Part to Sample</th>
                                                            <th scope="col">Time of Sampling</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Flowers &amp; Shrubs</td>
                                                            <td>Leaves &#8211; young mature</td>
                                                            <td>Anytime</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Turf</td>
                                                            <td>Any clippings</td>
                                                            <td>Anytime</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                Woody Ornamentals
                                                                <br />(Deciduous &amp; Evergreen)
                                                            </td>
                                                            <td>Leaf or needle &#8211; young mature</td>
                                                            <td>April thru September</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="cropHeader">
                                <h1 class="mb-0" style="margin-block-start: 0px">
                                    <button id="accordionLinks" class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseCrop" ari-expanded="true" aria-controls="collapseCrop">
                                        Crop Removal
                                    </button>
                                </h1>
                            </div>
                            <div id="collapseCrop" class="collapse" aria-labeledby="cropHeader" data-parent="#samplingAccordion">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <p>
                                                The harvested crop is analyzed to determine levels of nutrients and salts removed from the
                                                field.
                                            </p>
                                            <table class="table table-hover">
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">Fruit </th>
                                                        <td>Submit 5-10 whole fruit (3 to 5 lbs).</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Silage</th>
                                                        <td>Collect removed crop or hand-cut field samples just prior to harvest.</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Grain </th>
                                                        <td>Submit grain. If baled, sample straw.</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Alfalfa</th>
                                                        <td>Collect samples in field or soon after baled.</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Green-chop</th>
                                                        <td>Collect harvested material.</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <h4 class="noBold">Procedure:</h4>
                                            <ul>
                                                <li>
                                                    Collect one quart ziplock bag of material, double bag it.
                                                </li>
                                                <li>
                                                    Chill immediately to preserve moisture.
                                                </li>
                                                <li>
                                                    Using an <strong>indelible</strong> marker or ballpoint pen clearly print on each bag your
                                                    name/company, site and sample description or location.
                                                </li>
                                                <li>
                                                    Complete a <a class=link href="forms.php" target="_blank">Work Request</a> form.
                                                    Please be sure to print clearly and return it with your sample.
                                                </li>
                                                <li>
                                                    Deliver to Dellavalle by:
                                                    <ul>
                                                        <li>
                                                            <a class="link" href="map.php" target="_blank">
                                                                In person Drop off
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="link" href="shipping-instructions.php" target="_blank">
                                                                Shipping
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="waterHeader">
                                <h1 class="mb-0" style="margin-block-start: 0px">
                                    <button id="accordionLinks" class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseWater" ari-expanded="true" aria-controls="collapseWater">
                                        Water
                                    </button>
                                </h1>
                            </div>
                            <div id="collapseWater" class="collapse" aria-labeledby="waterHeader" data-parent="#samplingAccordion">
                                <div class="card-body">
                                    <p>Hello World!</p><!-- to be filled later -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Content for main section end -->

        <!-- Footer php attachment -->
        <?php include 'PageWrappers/footer.php'; ?>
</body>

</html> 