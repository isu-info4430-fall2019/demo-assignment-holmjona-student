<?php  session_start(); ?>

<!DOCTYPE html>
<html>
<body>
    <?php include("objNav.php"); ?>
    <h1>Start Here</h1>
    <form action="" method="post">
        <label for="txtColor">What color?</label>
        <input id="txtColor" name="Color" type="text" />
        <input type="submit" value="Submit" />
    </form>
    <?php
    echo "did this do something?";
    ini_set("display_errors",1);
    error_reporting(E_ALL);
    include("Vehicle.php");
    //$car = new Vehicle();
    //$car->setNumberOfWheels(5);
    //echo $car->getNumberOfWheels();
    //var_dump(  Vehicle::Red);

    //if(count($_POST) > 0){
    if(isset($_POST["Color"])){
        $newColor = $_POST["Color"];
        if($newColor){
            $newWagon = new Vehicle(4,$newColor);
            var_dump($newWagon);
            $_SESSION["myWagon"] = $newWagon;
        }
    }

    ?>
    <a href="objects2.php">Go Here</a>
</body>
</html>