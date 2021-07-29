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
use App\Structural\Adapter\RoundHole;
use App\Structural\Adapter\RoundPeg;
use App\Structural\Adapter\SquarePeg;
use App\Structural\Adapter\SquarePegAdapter;
use App\Structural\Bridge\AdvancedRemote;
use App\Structural\Bridge\DeviceRadio;
use App\Structural\Bridge\DeviceTV;
use App\Structural\Bridge\Remote;
use App\Structural\Composite\GCircle;
use App\Structural\Composite\GDot;
use App\Structural\Composite\GGroup;
use App\Structural\Composite\GRectangle;
use App\Structural\Composite\ImageEditor;

$loader = require 'vendor/autoload.php';

echo "--------------------------------------------------\n";
echo "CREATIONAL Design Patterns\n";

echo "Factory Method\n";
$logisticsApp = new LogisticsApp();
$logisticsApp->printInfo(new RoadLogistics());
$logisticsApp->printInfo(new ShipLogistics());
echo "\n";

echo "Abstract Factory\n\n";
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
$db  = Database::getInstance();
$db2 = Database::getInstance();
dump($db);
dump($db2);
echo "\n";

echo "--------------------------------------------------\n";
echo "STRUCTURAL Design Patterns\n\n";
echo "Adapter / Wrapper\n";
$roundHole = new RoundHole(5);
$roundPeg  = new RoundPeg(4);
$roundHole->printFits($roundPeg);
$squarePeg1 = new SquarePeg(3);
$squarePeg2 = new SquarePeg(9);

$squarePetAdapter = new SquarePegAdapter(5);
$squarePetAdapter->setSquarePeg($squarePeg1);
$roundHole->printFits($squarePetAdapter);

$squarePetAdapter->setSquarePeg($squarePeg2);
$roundHole->printFits($squarePetAdapter);
echo "\n";

echo "Builder\n";
$tv = new DeviceTV();
$tv->setVolume(20);
$remote = new Remote($tv);
$remote->togglePower();
$radio   = new DeviceRadio();
$remote2 = new AdvancedRemote($radio);
$remote2->togglePower();
dump($remote);
dump($remote2);
echo "\n";

echo "Builder\n";
$group1      = new GGroup(
    [
        new GDot(1, 1),
        new GDot(-1, 2),
        new GCircle(3, 10, 7),
        new GDot(3, 2),
    ]
);
$group2      = new GGroup(
    [
        new GDot(-2, 2),
        new GCircle(2, 2, 1),
        new GDot(-3, -4)
    ]
);
$group3      = new GGroup(
    [
        $group1, $group2, new GRectangle(-5, -5, 3, 8),
    ]
);
$group4      = new GGroup(
    [
        new GDot(10, 10),
        $group3
    ]
);
$imageEditor = new ImageEditor($group4);
$imageEditor->draw();
echo "\n";
