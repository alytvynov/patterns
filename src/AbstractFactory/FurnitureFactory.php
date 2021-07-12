<?php

namespace App\AbstractFactory;

interface FurnitureFactory
{
    public function createChair(): Chair;
    public function createSofa(): Sofa;
    public function createCoffeeTable(): CofeeTable;
}
