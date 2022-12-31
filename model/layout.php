<?php
require_once('../config/config.php');
require_once('../class/Query.php');
$data = new Query();
?>
<!DOCTYPE html>
<html id="html" lang="<?= $lang ?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titleDocument ?> | <?= $Appname ?></title>

    <!-- Link Favicon -->
    <link rel="icon" type="image/x-icon" href="./favicon.ico">

    <!-- CSS DaisyUI Library -->
    <link href="./dist/daisyui.full.css" rel="stylesheet" type="text/css" />

    <!-- CSS Style -->
    <link rel="stylesheet" href="./css/style.css" />
    <?php
    if(isset($stylesheets)){
        foreach($stylesheets as $stylesheet){
            echo '<link rel="stylesheet" href="'.$stylesheet.'" />';
        }
    }
    ?>
</head>
<body>
    <?php
        include_once('../model/components/_navbar.php');
    ?>
    <?php
        include_once($content);
    ?>
    <?php
        include_once('../model/components/_footer.php');
    ?>
    <!-- JS Script -->
    <?php
    if(isset($scripts)){
        foreach($scripts as $script){
            echo '<script src="'.$script.'" type="text/javascript"></script>';
        }
    }
    ?>
    <script src="./js/app.js" type="text/javascript"></script>
    <script src="./dist/tailwind.full.js"></script>
</body>
</html>