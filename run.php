<?php

use App\AbstractFactory\FactoryClient;
use App\AbstractFactory\ModernFactory;
use App\AbstractFactory\VictorianFactory;
use App\Builder\BuilderA;
use App\Builder\BuilderB;
use App\Builder\Director;
use App\FactoryMethod\LogisticsApp;
use App\FactoryMethod\RoadLogistics;
use App\FactoryMethod\ShipLogistics;
use App\Prototype\Circle;
use App\Prototype\Rectangle;
use App\Singleton\Database;

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

echo "Builder\n";
$director = (new Director(new BuilderA()))->make();
/** @var BuilderA $bA */
dump($director->getBuilder()->getResult());
$director->changeBuilder(new BuilderB())->make();
dump($director->getBuilder()->getResult());
echo "\n";

echo "Prototype\n";
$circle = (new Circle())->setX(1)->setY(3)->setRadius(10);
$circle->print();
$rectangle = (new Rectangle())->setX(-1)->setY(2)->setHeight(4)->setWidth(6);
$rectangle->print();
$circle2 = clone $circle;
$circle2->setX(10)->setY(-10);
$circle2->print();
$rectangle2 = clone $rectangle;
$rectangle2->setWidth(3)->setHeight(1);
$rectangle2->print();
echo "\n";

echo "Singleton\n";
$db = Database::getInstance();
$db2 = Database::getInstance();
dump($db);
dump($db2);
echo "\n";
