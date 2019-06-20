<!DOCTYPE html>
<html lang="en">
    <!-- #BeginTemplate "Templates/layout1.dwt" -->

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
        <!-- #BeginEditable "doctitle" -->
        <title>Dellavalle Laboratory Inc - Chemists and Consultants</title>
        <!-- #BeginEditable "description" -->
        <meta name="description"
            content="An environmental/agricultural laboratory and consulting firm located in the San Joaquin Valley with clientele worldwide." />
        <!-- #EndEditable -->
    </head>

    <body>

        <?php include 'PageWrappers/header.php'; ?>

        <div class="clearsmall"></div>

        <?php include 'PageWrappers/leftMenu.php'; ?>

        <section id="contentRight">
            <!-- #BeginEditable "contentRight" -->
            <h1>Dellavalle Laboratory, Inc.</h1>
            <p>An environmental/agricultural laboratory and consulting firm located in the San Joaquin Valley with
                clientele worldwide. Our clients include dairies, growers, homeowners, engineering firms, food
                processors, water systems, rural schools, fertilizer and compost producers.</p>
            <p>Agriculturally, our analytical methods are for arid and semi-arid growing conditions. The laboratory
                specializes in analyzing: soils; plant tissues; irrigation, influent/effluent waters; composts and
                fertilizers. Our professionals provide fertilizer recommendations, nutrient management plans,
                troubleshooting expertise, irrigation scheduling and fertility/salinity management.</p>
            <p>The laboratory is ELAP certified and also approved by California Department of Food
                &amp; Agriculture and California Water Quality Control Board. We participate in numerous performance
                evaluations. Our quality assurance and quality control assures that you will receive quality results.
            </p>
            <p>Although most of our work is from the 11 Western states, we have extensive experience with soil and
                tissue from Japan, Mexico, Chile, Canada, Spain, Jordan and Uzbekistan, to name a few.</p>
            <!-- #EndEditable -->

    </body>

    <?php include 'PageWrappers/footer.php'; ?>

    <!-- #EndTemplate -->

    <script>
        lightBoxClose = function(){
            document.querySelector(".lightbox").classList.add("closed")
        }
    </script>
    <div class="lightbox">
        <div class="iframeContainer">
            <div class="toolbarLB">
                <span class="closeLB" onclick="lightBoxClose()">x</span>
            </div>
            <iframe src="images/specialPictures/FourthOfJuly.pdf" width="500" height="700" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
        </div>
    </div>
</html>