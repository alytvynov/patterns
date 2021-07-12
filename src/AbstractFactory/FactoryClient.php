<?php

namespace App\AbstractFactory;

class FactoryClient
{
    private FurnitureFactory $factory;

    public function __construct(FurnitureFactory $factory)
    {
        $this->factory = $factory;
    }

    public function printOrder(): void
    {
        $chair = $this->factory->createChair();
        $sofa = $this->factory->createSofa();
        $coffeeTable = $this->factory->createCoffeeTable();

        echo sprintf(
            "%s %s %s\n", get_class($chair), get_class($sofa), get_class($coffeeTable)
        );
    }
}
