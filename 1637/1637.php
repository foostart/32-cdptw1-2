<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Module 1637</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="user-scalable=0, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/1637.less', 'css/1637.css');
        ?>
        <link href="css/1637.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
         <?php include '../1637/1637-content.php'; ?>
    </body>
</html>