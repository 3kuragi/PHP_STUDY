
<?php
require "AirConditioner.php";

$AirConditioner = new AirConditioner(25,3);

$AirConditioner ->heatmode();
$AirConditioner ->temperatureplus();
$AirConditioner ->powerplus();
$AirConditioner ->ShowStatus();

?>
