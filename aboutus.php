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

    <!-- Head php attachment -->
    <?php include 'PageWrappers/Head.php'; ?>
    <title>About Us | Dellavalle Lab.</title>
    <meta name="description" content="An environmental/agricultural laboratory and consulting firm located in the San Joaquin Valley with clientele worldwide." />
</head>

<body>
    <!-- Header php attachment -->
    <?php include 'PageWrappers/header.php'; ?>

    <!-- Content for main section start -->
    <section>
        <div class="container-fluid">
            <h1>About Us</h1>
            <div class="row">
                <div class="col-12">
                    <p>
                        &emsp;Dellavalle Laboratory, Inc. was founded in 1978 to assist growers in making decisions
                        regarding fertilizer applications, soil management practices and other related agricultural
                        areas. Over the years we have grown into one of the foremost consulting laboratories in
                        California, specializing in analyzing soil, water and plant tissue primarily for environmental
                        and agricultural markets.
                    </p>
                    <p>
                        &emsp;We employ Certified Professional Agronomists/Soil Scientists and Crop Advisors with expertise
                        in water usage, soil science and plant nutrition. Our consultants can provide assistance with
                        nutrient management planning, fertilizer recommendations, influent/effluent,
                        fertility/salinity and irrigation management and troubleshooting.
                    </p>
                    <p>
                        &emsp;Based in California's San Joaquin Valley, we serve clients throughout California, 11 Western
                        States and many countries. Our analytical methods are appropriate for arid and semi-arid
                        agricultural conditions. University of California research is the basis of consultant
                        information.
                    </p>
                    <p>
                        &emsp;An approved laboratory for the California Department of Food and Agriculture and the
                        California Regional Water Quality Control Board, Dellavalle also holds a California State
                        Water Resources Control Board ELAP certification for water and wastewater analyses.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="accordion" id="aboutUsAccordion">
                        <div class="card">
                            <div class="card-header" id="consultantsHeading">
                                <h1 class="mb-0" style="margin-block-start: 0px">
                                    <button id="accordionLinks" class="btn btn-link" type="button" data-toggle="collapse" data-target="#consultantsBody" aria-expanded="true" aria-controls="consultantsBody">
                                        Consultants
                                    </button>
                                </h1>
                            </div>
                            <div id="consultantsBody" class="collapse" aria-labelledby="consultantsHeading" data-parent="#aboutUsAccordion">
                                <div class="card-body">
                                    <p>
                                        &emsp;In the field, there is no substitute for experience. Fortunately, experience
                                        is
                                        one of the great strengths of the Dellavalle approach. Our consultants are spread
                                        throughout California for easy access. Due to the wide diversity of California
                                        agriculture, their expertise includes tree crops, field and row crops and
                                        vineyards as well as landscaping. In addition all have worked with water
                                        compliance issues as dictated by the Department of Health Services and the
                                        California Regional Water Quality Control Board.
                                    </p>
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <tbody>
                                                <tr>
                                                    <td class="cons" scope="row">
                                                        <img alt="Nat B. Dellavalle" title="Nat B. Dellavalle" class="img-fluid img-thumbnail" src="images/consultants/nat.jpg">
                                                    </td>
                                                    <td colspan="4">
                                                        <strong>Nat B. Dellavalle</strong>
                                                        <li>
                                                            <?php 
                                                            echo yrsOfService(-1950, 0);
                                                            ?>
                                                            Years Experience
                                                        </li>
                                                        <em>
                                                            Certified Professional Agronomist/SoilScientist, Certified Crop
                                                            Advisor
                                                            <br>
                                                        </em>
                                                        Mobile: (559) 647-5316<br>Area: Outside California, Foreign countries,
                                                        Southern California
                                                        <br>
                                                        <a href="mailto:ndellavalle@dellavallelab.com">ndellavalle@dellavallelab.com</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="cons" scope="row">
                                                        <img alt="Keith M. Backman" title="Keith M. Backman" id="cons" class="img-fluid img-thumbnail" src="images/consultants/keith.jpg">
                                                    </td>
                                                    <td colspan="4">
                                                        <strong>Keith M. Backman</strong>
                                                        <li>
                                                            <?php
                                                            echo yrsOfService(-1960, 0);
                                                            ?>
                                                            Years Experience
                                                        </li>
                                                        <em>
                                                            Certified Horticulturist/PomologistCertified, Crop Advisor
                                                            California Water Distribution Operator
                                                            <br>
                                                        </em>
                                                        Mobile: (559) 647-5330<br>Area: Eastern Fresno, Kings, Northern Tulare,
                                                        San Luis Obispo and Santa Barbara Regions
                                                        <br>
                                                        <a href="mailto:kbackman@dellavallelab.com">kbackman@dellavallelab.com</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="cons" scope="row">
                                                        <img alt=" Ben Nydam" title="Ben Nydam" class="img-fluid img-thumbnail" id="cons" src="images/consultants/ben.jpg">
                                                    </td>
                                                    <td colspan="4">
                                                        <strong>Ben Nydam</strong>
                                                        <li>
                                                            <?php 
                                                            echo yrsOfService(-1995, 0);
                                                            ?>
                                                            Years Experience
                                                        </li>
                                                        <em>
                                                            Consultant, Irrigation Specialist, Certified Crop Advisor
                                                        </em>
                                                        <br>
                                                        Mobile: (559) 647-5331<br>Area: Kern, Tulare, Kings Regions
                                                        <br>
                                                        <a href="mailto:bnydam@dellavallelab.com">bnydam@dellalvallelab.com</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="cons" scope="row">
                                                        <img alt="Danyal Kasapligil" title="Danyal Kasapligil" id="cons" class="img-fluid img-thumbnail" src="images/consultants/danyal.jpg">
                                                    </td>
                                                    <td colspan="4">
                                                        <strong>Danyal Kasapligil</strong>
                                                        <li>
                                                            <?php 
                                                            echo yrsOfService(-1998, 10);
                                                            ?>
                                                            Years Experience
                                                        </li>
                                                        <em>
                                                            Certified Professional Agronomist, Certified Crop Advisor,
                                                            Agricultural Pest Control Advisor
                                                            <br />
                                                            BS Plant Science - University of California Davis
                                                            <br />
                                                            MS General Agriculture - California Polytechnic State University San Luis Obispo
                                                        </em>
                                                        <br>
                                                        Mobile: (831) 750-4509
                                                        <br>
                                                        Areas: Nothern California Coast, North Central California Coast, California Bay Area
                                                        <br>
                                                        <a href="mailto:danyal@dellavallelab.com">danyal@dellavallelab.com</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="cons" scope="row">
                                                        <img alt="Bill Blanken " title="Bill Blanken" class="img-fluid img-thumbnail" id="cons" src="images/consultants/bill.jpg">
                                                    </td>
                                                    <td colspan="4">
                                                        <strong>Bill Blanken</strong>
                                                        <li>
                                                            <?php 
                                                            echo yrsOfService(-1960, 0);
                                                            ?>
                                                            Years Experience
                                                        </li>
                                                        <em>Agronomist</em>
                                                        <br>
                                                        Mobile: (559) 469-2832<br>Area: Kern, Kings and Tulare Regions
                                                        <br>
                                                        <a href="mailto:bblanken@dellavallelab.com">bblanken@dellavallelab.com</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="cons" scope="row">
                                                        <img alt="Anne Burkholder" title="Anne Burkholder" id="cons" class="img-fluid img-thumbnail" src="images/consultants/anne-sm.jpg">
                                                    </td>
                                                    <td colspan="4">
                                                        <strong>Anne Burkholder</strong>
                                                        <li>
                                                            <?php 
                                                            echo yrsOfService(-2008, 0);
                                                            ?>
                                                            Years Experience
                                                        </li>
                                                        <em>
                                                            Soil Scientist
                                                            <br />
                                                            BS Biology - University of Dallas
                                                            <br />
                                                            MS Soils and Biogeochemestry - University of California Davis
                                                            <br />
                                                            Certified Crop Advisor | Certified Professional Soil Scientist
                                                        </em>
                                                        <br>
                                                        Mobile: (530) 400-1346
                                                        <br>Areas: The counties of Yolo, Solano, Colusa, and Sutter
                                                        <br>
                                                        <a href="mailto:anne@dellavallelab.com">anne@dellavallelab.com</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="cons" scope="row">
                                                        <img alt="Lacey Mount" title="Lacey Mount" class="img-fluid img-thumbnail" id="cons" src="images/consultants/Lacey_Mount.jpg">
                                                    </td>
                                                    <td colspan="4">
                                                        <strong>Lacey Mount</strong>
                                                        <li>
                                                            <?php 
                                                            echo yrsOfService(-2014, 0);
                                                            ?>
                                                            Years Experience
                                                        </li>
                                                        <em>Agronomist, Certified Crop Advisor, Doctor of Plant Medicine</em>
                                                        <br>
                                                        Mobile: (559) 351-2741<br>Area: Fresno, Madera and Merced regions,
                                                        Special Projects
                                                        <br>
                                                        <a href="mailto:lmount@dellavallelab.com">lmount@dellavallelab.com</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="cons" scope="row">
                                                        <img alt="Cynthia Tiemersma" title="Cynthia Tiemersma" id="cons" class="img-fluid img-thumbnail" src="images/consultants/cynthia.jpg">
                                                    </td>
                                                    <td colspan="4">
                                                        <strong>Cynthia Tiemersma</strong>
                                                        <li>
                                                            <?php 
                                                            echo yrsOfService(-2015, 0);
                                                            ?>
                                                            Years Experience
                                                        </li>
                                                        <em>Dairy Technician</em>
                                                        <br>
                                                        Mobile: (559) 471-6140<br>Area: Kern, Kings, Fresno Regions
                                                        <br>
                                                        <a href="mailto:ctiemersma@dellavallelab.com">ctiemersma@dellavallelab.com</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="cons" scope="row">
                                                        <img alt="Sam Daud" title="Sam Daud" class="img-fluid img-thumbnail" id="cons" src="images/consultants/sam-daud.jpg">
                                                    </td>
                                                    <td colspan="4">
                                                        <strong>Samuel Daud</strong>
                                                        <li>
                                                            <?php 
                                                            echo yrsOfService(-2015, 0);
                                                            ?>
                                                            Years Experience
                                                        </li>
                                                        <div class="table-responsive">
                                                            <table class="table table-sm">
                                                                <tbody>
                                                                    <tr>
                                                                        <th scope="row">
                                                                            <i class="fas fa-briefcase"></i>
                                                                        </th>
                                                                        <td>Agronomist</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">
                                                                            <i class="fas fa-graduation-cap"></i>
                                                                        </th>
                                                                        <td>
                                                                            BS Sustainable Agriculture and Food Systems
                                                                            <br />
                                                                            &emsp;Emphasis in Agriculture &amp; Ecology
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">
                                                                            <i class="fas fa-certificate"></i>
                                                                        </th>
                                                                        <td>Cerified Crop Advisor</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">
                                                                            <i class="fas fa-mobile"></i>
                                                                        </th>
                                                                        <td>Mobile: (559) 940-1294</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">
                                                                            <i class="fas fa-globe-americas"></i>
                                                                        </th>
                                                                        <td>
                                                                            Areas: Counties of Fresno &amp; Madera
                                                                            <br />
                                                                            &emsp;Cities of Los Ba&ograve;os &amp; Dos Palos
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th scope="row">
                                                                            <i class="fas fa-at"></i>
                                                                        </th>
                                                                        <td>
                                                                            <a href="mailto:s.daud@dellavallelab.com">
                                                                                s.daud@dellavallelab.com
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="cons" scope="row">
                                                        <img alt="Carlos Olmedo" title="Carlos Olmedo" class="img-fluid img-thumbnail" id="cons" src="images/consultants/CarlosOlmedo.jpg">
                                                    </td>
                                                    <td colspan="4">
                                                        <strong>Carlos Olmedo</strong>
                                                        <li>
                                                            <?php
                                                            echo yrsOfService(-2012, 0);
                                                            ?>
                                                            Years Experience
                                                        </li>
                                                        <em>
                                                            Agricultural Consultant
                                                            <br />
                                                            AS Agriculture - Woodland Community College
                                                            <br />
                                                            BA Business - California State University Sacramento
                                                            <br />
                                                            Distribution Operator D1 | Treatment Operator T1
                                                        </em>
                                                        <br />
                                                        Mobile: (831) 776.1811
                                                        <br />
                                                        Areas: Sacramento and San Joaquin County
                                                        <br />
                                                        <a href="mailto:colmedo@dellavallelab.com">colmedo@dellavallelab.com</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="cons" scope="row">
                                                        <img alt="Andrew Koetsier" title="Andrew Koetsier" class="img-fluid img-thumbnail" id="cons" src="">
                                                    </td>
                                                    <td colspan="4">
                                                        <strong>Andrew Koetsier</strong>
                                                        <li>
                                                            <?php
                                                            echo yrsOfService(-2019, 2);
                                                            ?>
                                                            Years Experience
                                                        </li>
                                                        <em>
                                                            Agronomist
                                                            <br />
                                                            BA Agriculture - Dordt College
                                                        </em>
                                                        <br />
                                                        Mobile: (559) 656.9672
                                                        <br />
                                                        Areas: Hanford and Visalia South
                                                        <br />
                                                        <a href="mailto:a.koetsier@dellavallelab.com">a.koetsier@dellavallelab.com</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="cons" scope="row">
                                                        <img alt="Joe Voth" title="Joe Voth" class="img-fluid img-thumbnail" id="cons" src="images/consultants/joeVoth.jpg">
                                                    </td>
                                                    <td colspan="4">
                                                        <strong>Joe Voth</strong>
                                                        <li>
                                                            <?php
                                                            echo yrsOfService(-2018, 38);
                                                            ?>
                                                            Years Experience
                                                        </li>
                                                        <em>
                                                            Certified Agronomist
                                                            <br />
                                                            BA Viticulture - Fresno State University California
                                                            <br />
                                                            California Almond Board (INSH) | Kern County CAPCA Board
                                                            <br />
                                                            Certified Crop Advisor | Pest Control Advisor | Qualified Applicator
                                                        </em>
                                                        <br />
                                                        Mobile: (661) 742.2478
                                                        <br />
                                                        Areas: Kern County
                                                        <br />
                                                        <a href="mailto:javoth@Dellavallelab.com">javoth@Dellvallelab.com</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="cons" scope="row">
                                                        <img alt="Lisa Rubin" title="Lisa Rubin" class="img-fluid img-thumbnail" id="cons" src="">
                                                    </td>
                                                    <td colspan="4">
                                                        <strong>Lisa Rubin</strong>
                                                        <li>
                                                            <?php
                                                            echo yrsOfService(-2015, 2);
                                                            ?>
                                                            Years Experience
                                                        </li>
                                                        <em>
                                                            Technical Consultant
                                                            <br />
                                                            BA Plant Scientce: Plant Health Option | AA Natural Science
                                                            <br />
                                                            CCA
                                                            <br />
                                                            Regulatory Compliance | Waste Discharge Requirement Reporting | Sediment
                                                            and Erosion Control Planning | Comprehensive Nutrient Management Plans
                                                            (daries) | Nutrient MAnagement Planning for Recycled Process Water |
                                                            Crop Loss Investigations | Agronomic Assessment Reports for New Purchases
                                                        </em>
                                                        <br />
                                                        Mobile: (408) 667.7661
                                                        <br />
                                                        Areas: Central California Valley
                                                        <br />
                                                        <a href="mailto:l.rubin@Dellavallelab.com">l.rubin@Dellvallelab.com</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="cons" scope="row">
                                                        <img alt="Lisa Rubin" title="Lisa Rubin" class="img-fluid img-thumbnail" id="cons" src="">
                                                    </td>
                                                    <td colspan="4">
                                                        <strong>Lisa Rubin</strong>
                                                        <li>
                                                            <?php
                                                            echo yrsOfService(-2015, 2);
                                                            ?>
                                                            Years Experience
                                                        </li>
                                                        <em>
                                                            Technical Consultant
                                                            <br />
                                                            BA Plant Scientce: Plant Health Option | AA Natural Science
                                                            <br />
                                                            CCA
                                                            <br />
                                                            Regulatory Compliance | Waste Discharge Requirement Reporting | Sediment
                                                            and Erosion Control Planning | Comprehensive Nutrient Management Plans
                                                            (daries) | Nutrient MAnagement Planning for Recycled Process Water |
                                                            Crop Loss Investigations | Agronomic Assessment Reports for New Purchases
                                                        </em>
                                                        <br />
                                                        Mobile: (408) 667.7661
                                                        <br />
                                                        Areas: Central California Valley
                                                        <br />
                                                        <a href="mailto:l.rubin@Dellavallelab.com">l.rubin@Dellvallelab.com</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="clientServicesHeading">
                                <h1 class="mb-0" style="margin-block-start: 0px">
                                    <button id="accordionLinks" class="btn btn-link" type="button" data-toggle="collapse" data-target="#clientServicesBody" aria-expanded="true" aria-controls="clientServicesBody">
                                        Client Services
                                    </button>
                                </h1>
                            </div>
                            <div id="clientServicesBody" class="collapse" aria-labelledby="clientServicesHeading" data-parent="#aboutUsAccordion">
                                <div class="card-body">
                                    <p>
                                        &emsp;Our client service specialist, a Certified Sampler, is experienced and
                                        knowledgeable in many areas. With over 25 years of experience locating
                                        laboratories, coordinating sample collection and answering inquiries;
                                        you can depend on her. Bids and quotations are available upon request.
                                    </p>
                                    <h5>
                                        Peggy Miller - Client Service Specialist
                                    </h5>
                                    <ul>
                                        <li>
                                            Soil and plant tissue inquiries
                                        </li>
                                        <li>
                                            Agricultural inquiries (water, manure, etc.)
                                        </li>
                                        <li>
                                            Irrigation water inquiries
                                        </li>
                                        <li>
                                            Pesticide residue
                                        </li>
                                        <li>
                                            Domestic water questions
                                        </li>
                                        <li>
                                            Assistance with sample collection
                                        </li>
                                        <li>
                                            Analytical inquiries
                                        </li>
                                        <li>
                                            Resource research
                                        </li>
                                    </ul>
                                    <p>
                                        We invite your inquiries. Call 1-800-228-9896 or
                                        <a href="mailto:pmiller@dellavallelab.com" title="EMAIL PEGGY">EMAIL PEGGY</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="certSampHeading">
                                <h1 class="mb-0" style="margin-block-start: 0px">
                                    <button id="accordionLinks" class="btn btn-link" type="button" data-toggle="collapse" data-target="#certSampBody" aria-expanded="true" aria-controls="certSampBody">
                                        Certified Samplers
                                    </button>
                                </h1>
                            </div>
                            <div id="certSampBody" class="collapse" aria-labelledby="certSampHeading" data-parent="#aboutUsAccordion">
                                <div class="card-body">
                                    <p>
                                        &emsp;Our certified samplers are trained in proper sampling techniques. They are
                                        experienced with the collection of plant parts, soils, manures, fertilizers,
                                        waters and other media.
                                    </p>
                                    <p>
                                        &emsp;Attention is given to special analysis requests (pesticides, pathogens, etc.)
                                        regarding the correct handling of samples: types of containers, sample
                                        refrigeration, etc. Let us schedule your sample collection.
                                    </p>
                                    <p>
                                        &emsp;Dellavalle currently employs five California Certified Water Distribution
                                        Operators (D1) and two Certified Water Treatment Operator (T1). With this
                                        specialized training in water distribution and treatment, we can assist
                                        with your water system’s operating needs. They can be a liaison with the
                                        local and State Health Departments to keep the water system in compliance
                                        with all regulatory requirements, and can assist with system mapping,
                                        quality control and public relations.
                                    </p>
                                    <p><a class="link" href="contactus.php" target="_blank">Call us</a> for more information.</p>
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