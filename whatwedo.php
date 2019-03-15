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
        <title>What We Do - Dellavalle Laboratory Inc.</title>
        <meta name="description"
            content="An environmental/agricultural laboratory and consulting firm located in the San Joaquin Valley with clientele worldwide." />
    </head>

    <body>
        <!-- Header php attachment -->
        <?php include 'PageWrappers/header.php'; ?>

        <!-- Content for main section start -->
        <section>
            <div class="container-fluid">
                <h1>What We Do</h1>
                <div class="row">
                    <div class="col-2">
                        <div class="list-group" id="list-tab" role="tablist">
                            <a class="list-group-item list-group-item-action active text-center" id="list-Dec-list"
                                data-toggle="list" href="#list-Dec" role=tab aria-controls="Dec">
                                <i class="fas fa-info fa-2x fa-spin"></i>
                                <i class="fas fa-info fa-2x nospin"></i>
                                <i class="fas fa-info small nospin"></i>
                            </a>
                            <a class="list-group-item list-group-item-action text-center" id="list-Cons-list"
                                data-toggle="list" href="#list-Cons" role=tab aria-controls="Cons">
                                <i class="fas fa-clipboard-list fa-2x fa-spin"></i>
                                <i class="fas fa-clipboard-list fa-2x nospin"></i>
                                <i class="fas fa-clipboard-list small nospin"></i>
                            </a>
                            <a class="list-group-item list-group-item-action text-center" id="list-Save-list"
                                data-toggle="list" href="#list-Save" role=tab aria-controls="Save">
                                <i class="fas fa-file-invoice-dollar fa-2x fa-spin"></i>
                                <i class="fas fa-file-invoice-dollar fa-2x nospin"></i>
                                <i class="fas fa-file-invoice-dollar small nospin"></i>
                            </a>
                            <a class="list-group-item list-group-item-action text-center" id="list-Regs-list"
                                data-toggle="list" href="#list-Regs" role=tab aria-controls="Regs">
                                <i class="fas fa-balance-scale fa-2x fa-spin"></i>
                                <i class="fas fa-balance-scale fa-2x nospin"></i>
                                <i class="fas fa-balance-scale small nospin"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-10">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="list-Dec" role="tabpanel"
                                aria-labelledby="list-dec-list">
                                <h3>Provide Quality Information for Making Decisions</h3>
                                <ul>
                                    <li>
                                        Our accurate laboratory results are assured by internal quality controls
                                        and confirmed through external proficiency testing programs.
                                    </li>
                                    <li>
                                        Our knowledgeable, certified consultants can interpret results and make
                                        recommendations.
                                    </li>
                                    <li>
                                        Our analytical methods and staff recommendations are based on research
                                        by University of California and other agencies in arid and semi-arid
                                        growing conditions.
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="list-Cons" role="tabpanel" aria-labelledby="list-Cons-list">
                                <h3>Provide Experienced Consultants</h3>
                                <ul>
                                    <li>
                                        Our Certified Professional Agronomists and Soil/Plant Scientists are
                                        college educated with years of field experience.
                                    </li>
                                    <li>
                                        Their broad knowledge of crops, soil variations, nutrient deficiencies,
                                        pesticide and pathogen problems is your resource.
                                    </li>
                                    <li>
                                        To address your needs, our consultants will provide recommendations,
                                        suggestions and solutions.
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="list-Save" role="tabpanel" aria-labelledby="list-Save-list">
                                <h3>Save You Time (Time is Money!)</h3>
                                <ul>
                                    <li>
                                        Information is provided expeditiously so you can respond quickly.
                                    </li>
                                    <li>
                                        Our sample collection program can relieve work and worry.
                                    </li>
                                    <li>
                                        We have an extensive network of laboratories for your
                                        unusual analytical requests.
                                    </li>
                                    <li>
                                        Sample receiving hours are 7:00 a.m. to 5:00 p.m. M-F with extended
                                        summer hours
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="list-Regs" role="tabpanel" aria-labelledby="list-Regs-list">
                                <h3>Assist With Litigation and Regulations</h3>
                                <ul>
                                    <li>
                                        Expert witness investigation and testimony can be provided.
                                    </li>
                                    <li>
                                        We can work as your liaison with the local, state and federal
                                        agencies such as Food &amp; Agriculture, Health Services and
                                        Water Resources.
                                    </li>
                                    <li>
                                        We can supply the laboratory analyses that real estate
                                        disclosure rules require.
                                    </li>
                                    <li>
                                        We can provide import permits for samples to legally enter
                                        the U.S.
                                    </li>
                                </ul>
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