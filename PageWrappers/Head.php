    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.00">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta name="designer" content="Christopher L. Garrick" />
    <link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon">
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
    <?php
    $y = date("o");
    function yrsOfService(int $yr, int $ot)
    {
        $a = array($yr, date("o"), $ot);
        return array_sum($a);
    }
    ?>