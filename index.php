<?php $var = parse_ini_file("variables.ini", true); ?>
<!DOCTYPE html>
<html lang="<?=$var["locale"]?>">
    <head>
        <?php include("includes/meta.php"); ?>
    </head>
    <body>
        <?php include("includes/scripts.php"); ?>
    </body>
</html>
