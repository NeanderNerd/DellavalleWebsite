    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.00">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta name="designer" content="Christopher L. Garrick" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="pragma" content="no-cache" />

    <!--[if lt IE 9]>
    <script>
        document.createElement('header');
        document.createElement('nav');
        document.createElement('section');
        document.createElement('article');
        document.createElement('aside');
        document.createElement('footer');
        document.createElement('hgroup');
    </script>
    <![endif]-->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mr+Dafoe|Montserrat:500|Homemade+Apple|Pacifico">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="http://fonts.googleapis.com/css?family=Simonetta" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
    <link rel="stylesheet" type="text/css" href="css/ie.css" />
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="apple-touch-icon" sizes="180x180" href="/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon-16x16.png">
    <link rel="manifest" href="/images/site.webmanifest">
    <link rel="mask-icon" href="/images/safari-pinned-tab.svg" color="#00a300">
    <link rel="shortcut icon" href="/images/favicon.ico">
    <meta name="msapplication-TileColor" content="#00a300">
    <meta name="msapplication-config" content="/images/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <meta name="keywords" content="Laboratory, Analytical, Water Analysis, Leaf Analysis, Soil Analysis, Petiole Analysis, ELAP Certified, Nutrient Deficiency, Fertilizer, Recommendations, Nitrogen, Management, Coliform, Ag Lab,
        Consulting Service, Tomato, CCA, Professional Agronomist, Dairy, Science, Irrigation Management, Distribution Operator, Regional Water Quality Control Board, Potability, Orchard">
    <?php
    $y = date("o");
    function yrsOfService(int $yr, int $ot)
    {
        $a = array($yr, date("o"), $ot);
        return array_sum($a);
    }
    ?>