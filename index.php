<?php
// index.php

require 'Car.php';

$lamborghini = new Car('Yellow',4, 60);
$lamborghini->getNbWheels();
$lamborghini->getCurrentSpeed();
$lamborghini->getColor(); 
$lamborghini->getNbSeats();
$lamborghini->getEnergy();
$lamborghini->getEnergyLevel(60);
$lamborghini->dump();
echo $lamborghini->forward(). "<br>";
echo $lamborghini->brake();
$lamborghini->dump();


require 'Bicycle.php';

$Kona = new Bicycle('Black',2, 15);
$Kona->getCurrentSpeed();
$Kona->getColor(); 
$Kona->dump();
echo $Kona->forward(). "<br>";
echo $Kona->brake();
$Kona->dump();