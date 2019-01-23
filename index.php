<?php $var = parse_ini_file("variables.ini", true); ?>
<!DOCTYPE html>
<html lang="<?=$var["locale"]?>">
    <head>
        <?php include_once("includes/meta.php"); ?>
    </head>
    <body>
        <?php include_once("includes/scripts.php"); ?>
    </body>
</html>
