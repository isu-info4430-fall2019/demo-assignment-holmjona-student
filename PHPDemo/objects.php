<!DOCTYPE html>
<html>
<body>
    <?php
    ini_set("display_errors",1);
    error_reporting(E_ALL);
    include("Vehicle.php");
    $car = new Vehicle();
    $car->setNumberOfWheels(5);
    echo $car->getNumberOfWheels();
    ?>
</body>
</html>