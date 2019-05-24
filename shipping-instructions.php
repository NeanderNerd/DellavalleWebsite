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
    <title>Shipping Instructions - Dellavalle Laboratory Inc.</title>
    <meta name="description" content="An environmental/agricultural laboratory and consulting firm located in the San Joaquin Valley with clientele worldwide." />
</head>

<body>
    <!-- Header php attachment -->
    <?php include 'PageWrappers/header.php'; ?>

    <!-- Content for main section start -->
    <section>
        <div class="container-fluid">
            <h1 class="text-md-left text-center">Shipping Instructions</h1>
            <div class="row">
                <div class="col-12">
                    <p>
                        &emsp;Our Fresno office is open 7:30 am to 5:00 pm for deliveries. Samples can
                        also be delivered to our Hanford location at 1216 N. Douty, Hanford CA or our Davis location at
                        502 Mace Blvd, Suite 2B, Davis CA as well. Hours are displayed at the bottom of this page. Our
                        field technicians or an independent courier can pick up your samples for a fee.
                    </p>
                    <p>
                        &emsp;It is always acceptable to ship samples by mail, UPS, Fed Ex, bus or a private courier; overnight
                        shipment is best. Arrange for samples to arrive Monday through Thursday (if shipping) as we are
                        not open on weekends; and, samples that arrive on Friday may not be able to be analyzed in a
                        timely manner. If testing begins after the weekend, then sample may be noncompliant for hold time.
                    </p>
                    <h4 class="noBold">Soil and Plant Tissue Samples:</h4>
                    <ul>
                        <li>
                            Place soil/plant tissue sample bags in cardboard box and seal. Do not pack tissue samples tightly
                            as they may mold, and never package in plastic. <strong>Remember</strong> to include a completed
                            <a class="link" href="forms.php" target="_blank">Work Request</a> Form and return with your sample.
                        </li>
                    </ul>
                    <p>
                        If samples originate outside Fresno County, label your package near your return address with the
                        following information:
                        <ul>
                            <li>
                                What is inside the package (Soil for Analysis) and from where the sample originates (county and
                                state).
                            </li>
                            <li>
                                Due to Fresno County’s Red Fire ant alert, packages without this information may be delayed,
                                confiscated or destroyed by the County Ag Inspectors.
                            </li>
                        </ul>
                    </p>
                    <h4 class="noBold">Water Samples:</h4>
                    <ul>
                        <li>
                            All water samples should be sent in a cooler with <strong>plenty</strong> of ice.
                        </li>
                        <li>
                            Be sure to use indelible ink on bottle labels as water from melted ice may wash away writing.
                            Enclosing sample bottles in zipped plastic bags helps to prevent sample contamination.
                        </li>
                        <li>
                            Be sure to complete and return a
                            <a class="link" href="forms.php" target="_blank">Work Request</a>
                            Form with sample.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Content for main section end -->

        <!-- Footer php attachment -->
        <?php include 'PageWrappers/footer.php'; ?>
</body>

</html>