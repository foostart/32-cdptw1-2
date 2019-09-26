<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Module 1636</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="user-scalable=0, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/1636.less', 'css/1636.css');
        ?>
        <link href="css/1636.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
         <?php include '../1636/1636-content.php'; ?>
    </body>
</html>