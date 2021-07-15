<?php

namespace App\Creational\AbstractFactory;

class ModernFactory implements FurnitureFactory
{
    public function createChair(): Chair
    {
        return (new ModernChair());
    }

    public function createSofa(): Sofa
    {
        return (new ModernSofa());
    }

    public function createCoffeeTable(): CofeeTable
    {
        return (new ModernCoffeeTable());
    }
}
