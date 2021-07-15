<?php

use App\Creational\AbstractFactory\FactoryClient;
use App\Creational\AbstractFactory\ModernFactory;
use App\Creational\AbstractFactory\VictorianFactory;
use App\Creational\Builder\BuilderA;
use App\Creational\Builder\BuilderB;
use App\Creational\Builder\Director;
use App\Creational\FactoryMethod\LogisticsApp;
use App\Creational\FactoryMethod\RoadLogistics;
use App\Creational\FactoryMethod\ShipLogistics;
use App\Creational\Prototype\Circle;
use App\Creational\Prototype\Rectangle;
use App\Creational\Singleton\Database;

$loader = require 'vendor/autoload.php';

echo "CREATIONAL Design Patterns\n\n\n";

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
