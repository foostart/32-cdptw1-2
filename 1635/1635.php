<!DOCTYPE html>

<html lang="en">
    <head>
        <title>1635</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="user-scalable=0, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/1635.less', 'css/1635.css');
        ?>
        <link href="css/1635.css" rel="stylesheet"/>
    </head>
    <body>
        <?php include '../1635/1635-content.php'; ?>
    </body>
</html>