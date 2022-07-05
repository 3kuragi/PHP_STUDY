<?php
require "AirConditioner.php";

$AirConditioner = new AirConditioner(25,3);

$AirConditioner ->heatmode();
$AirConditioner -> ShowStatus();
?>
