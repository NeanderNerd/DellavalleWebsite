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
    <title>Map - Dellavalle Laboratory Inc.</title>
    <meta name="description" content="An environmental/agricultural laboratory and consulting firm located in the San Joaquin Valley with clientele worldwide." />
</head>

<body>
    <!-- Header php attachment -->
    <?php include 'PageWrappers/header.php'; ?>
    <!-- Content for main section start -->
    <section>
        <div class="container-fluid">
            <h1>Map</h1>
            <div class="row">
                <div class="col-12">
                    <h4 class="noBold">From the North</h4>
                    <p>
                        South on Hwy 99, in Fresno take Clinton Avenue/North Golden State Blvd. exit and stay left and go under
                        Hwy 99. At first stoplight (McKinley Avenue) yield right (west). We are on north side (right side) of
                        McKinley Avenue; do not go under the overpass. We are at far end of west building.</p>
                    <h4 class="noBold">From the South</h4>
                    <p>
                        North on Hwy 99, in Fresno take McKinley Avenue exit. We are at bottom of exit. Stop and carefully
                        proceed across street and through gate. Look for us at far end of west building.</p>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item"
                            src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=1910+W+McKinley+Ave,+Fresno,+CA&amp;aq=0&amp;oq=191&amp;sll=36.785533,-119.794561&amp;sspn=0.491078,1.056747&amp;ie=UTF8&amp;hq=&amp;hnear=1910+W+McKinley+Ave,+Fresno,+California+93728&amp;t=m&amp;ll=36.765292,-119.833717&amp;spn=0.024065,0.051498&amp;z=14&amp;iwloc=A&amp;output=embed">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
        <!-- Content for main section end -->

        <!-- Footer php attachment -->
        <?php include 'PageWrappers/footer.php'; ?>
</body>


<!-- #EndTemplate -->

</html> 