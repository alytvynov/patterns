<?php

use App\AbstractFactory\FactoryClient;
use App\AbstractFactory\ModernFactory;
use App\AbstractFactory\VictorianFactory;
use App\FactoryMethod\LogisticsApp;
use App\FactoryMethod\RoadLogistics;
use App\FactoryMethod\ShipLogistics;

$loader = require 'vendor/autoload.php';

echo "Factory Method\n";
$logisticsApp = new LogisticsApp();
$logisticsApp->printInfo(new RoadLogistics());
$logisticsApp->printInfo(new ShipLogistics());
echo "\n";

echo "Abstract Factory\n";
(new FactoryClient(new ModernFactory()))->printOrder();
(new FactoryClient(new VictorianFactory()))->printOrder();
echo "\n";
