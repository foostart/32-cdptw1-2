<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Module 1638</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="user-scalable=0, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/1638.less', 'css/1638.css');
        ?>
        <link href="css/1638.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery-2.1.4.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
         <?php include '../1638/1638-content.php'; ?>
    </body>
</html>