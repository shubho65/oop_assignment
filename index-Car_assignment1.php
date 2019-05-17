<?php
include 'Audi.php';

$audi=new Audi();
$audi->setColor("blue");
echo $audi->getColor();
echo "<br/>";
$audi->setSeats(4);
echo $audi->getSeats();
echo "<br/>";
$audi->setEngineStatus("working");
echo $audi->getEngineStatus();
echo "<br/>";
$audi->setBodyPart("dashboard");
echo $audi->getBodyPart();
?>