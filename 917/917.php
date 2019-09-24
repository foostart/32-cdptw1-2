<!DOCTYPE html>

<html lang="en">

    <head>
        <title> 917 </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/animate.min.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/type-917.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/type-917.less', 'css/type-917.css');
        ?>
        <script src="js/jquery-1.5.1.min.js"></script>
        <script src="js/jquery.orbit-1.2.3.min.js"></script>
        <script src="js/script.js"></script>

    </head>

    <body>
        <?php include '../917/917-content.php'; ?>
        <script src="./js/swiper-4.5.0/dist/js/swiper.min.js"></script>
         <script src="js/917.js"></script>
    </body>

</html>