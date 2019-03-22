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
    <title>Worksheet Forms - Dellavalle Laboratory Inc.</title>
    <meta name="description" content="An environmental/agricultural laboratory and consulting firm located in the San Joaquin Valley with clientele worldwide." />
</head>

<body>
    <!-- Header php attachment -->
    <?php include 'PageWrappers/header.php'; ?>

    <!-- Content for main section start -->
    <section>
        <div class="container-fluid">
            <h1>Forms</h1>
            <div class="row">
                <div class="col-12">
                    <p>
                        &emsp;Select appropriate Work Request form, print, complete and return it with your sample. Forms for download;
                        print and submit with your sample:
                        <ul>
                            <li>
                                <a href="downloads/forms/FLDSHEET_Soil_Plant_Tissue.pdf" target="_blank" title="Work Request - Soil/Plant Tissue">
                                    Work Request - Soil/Plant Tissue
                                </a>
                            </li>
                            <li>
                                <a href="downloads/forms/FLDSHEET_Waters_Only_COC.pdf" target="_blank" title="Work Request - Waters">
                                    Work Request - Waters
                                </a>
                            </li>
                            <li>
                                <a href="downloads/forms/FLDSHEET-Coli-Landscape-2014.pdf" target="_blank" title="Work Request - Coliform">
                                    Work Request - Coliform (P/A and MPN)
                                </a>
                            </li>
                        </ul>
                    </p>
                    <p>
                        &emsp;When submitting Soil, Plant Tissue, Waters or other material, be very clear about analyses needed. As an
                        example, listing nitrogen is not enough information; specify TN, TKN, NH4-N, NO3 or NO3-N.
                    </p>
                    <p>
                        On Work Request Form complete as much as applies:
                        <ul>
                            <li>
                                <strong>Date and Time Sampled</strong>
                                – For waters date and time sampled is very important.
                            </li>
                            <li>
                                <strong>Analysis Requested </strong>
                                – Indicate appropriate analytical package; see “<a href="analyticalcatalog.php">Analytical Catalog</a>”
                            </li>
                            <li>
                                <strong>Present Crop</strong>
                                – Helps consultant offer correct comments and recommendations; varieties are important to growing crop.
                            </li>
                            <li>
                                <strong>Intended Crop</strong>
                                – Important for evaluation.
                            </li>
                            <li>
                                <strong>Crop Stage of Growth</strong>
                                – Plant age is very helpful.
                            </li>
                            <li>
                                <strong>Description of Samples</strong>
                                – Appears on your report and should match the descriptions on bags/bottles.
                            </li>
                            <li>
                                <strong>Chain of Custody</strong>
                                – Sign if you are required to send copy to a regulatory agency.
                            </li>
                            <li>
                                <strong>Ranch managers:</strong>
                                - Put different ranches on separate forms so clients only see their results.
                            </li>
                            <li>
                                <strong>Copy To</strong>
                                – If a copy of your report must be sent to another party, write in the appropriate
                                information or check the appropriate boxes at the right of form include county.
                            </li>
                        </ul>
                        <p>
                            Other details that should be noted are location (Napa, Coachella, etc.), reason for sampling (routine or
                            troubleshooting) and System ID numbers for water systems. The more information you give us, the more assistance we can provide.
                        </p>
                    </p>
                </div>
            </div>
        </div>
        <!-- Content for main section end -->

        <!-- Footer php attachment -->
        <?php include 'PageWrappers/footer.php'; ?>
</body>

</html> 