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
    <title>Thank You</title>
    <meta name="description" content="An environmental/agricultural laboratory and consulting firm located in the San Joaquin Valley with clientele worldwide." />
</head>

<body>
    <!-- Header php attachment -->
    <?php include 'PageWrappers/header.php'; ?>

    <!-- Content for main Section start -->
    <section>
        <div class="container-fluid">
            <h1>Thank You</h1>
            <div class="row">
                <div class="col-12">
                    <p>Dellavalle Laboratory Inc. appreciates our customers. We should receive your email shortly and will respond to you as soon as possible.</p>
                    <!--  <a class="link" href="Index.php">Home</a>  -->
                </div>
            </div>
        </div>
		<!-- Content for main section end -->

		<!-- Footer php attachemnt -->
		<?php include 'PageWrappers/footer.php'; ?>
</body>

</html> 