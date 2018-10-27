<?php 
    session_start();
    if (isset($_GET['page'])) {
         $app = "app/" . $_GET['page'] . ".php";
        if (file_exists($app)) {
            include $app;
        }
    }else{
        include "app/home.php";
    }

    $pageTitle = isset($pageTitle) ? $pageTitle : "HelloCode.id";
?>
<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $pageTitle ?></title>
        <?php include "template/stylesheets.php" ?>
    </head>
    <body>
        <?php include "template/navbar.php" ?>
            <div class="container">
               <?php include "template/content.php"?>
            </div>
        <?php include "template/js.php" ?>
    </body>
</html>
