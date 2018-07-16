<?php $var = parse_ini_file("variables.ini"); ?>
<!DOCTYPE html>
<html lang="<?=$var["lang"]?>">
    <head>
        <?php include("includes/meta.php"); ?>
    </head>
    <body>
        <?php include("includes/scripts.php"); ?>
    </body>
</html>
