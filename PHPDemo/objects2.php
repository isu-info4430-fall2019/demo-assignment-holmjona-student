<?php  session_start();?>
<!DOCTYPE html>
<html>
<body>
    <?php include("objNav.php"); ?>
    <h1>Page 2</h1>
    <?php
    ini_set("display_errors",1);
    error_reporting(E_ALL);
    include("Vehicle.php");
    $passedWagon = $_SESSION["myWagon"];

    var_dump($passedWagon);
    ?>

<a href="objects.php">Go Back</a>
    </body></html>