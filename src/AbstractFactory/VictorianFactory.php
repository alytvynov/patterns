<?php

namespace App\AbstractFactory;

class VictorianFactory implements FurnitureFactory
{
    public function createChair(): Chair
    {
        return (new VictorianChair());
    }

    public function createSofa(): Sofa
    {
        return (new VictorianSofa());
    }

    public function createCoffeeTable(): CofeeTable
    {
        return (new VictorianCoffeeTable());
    }
}
