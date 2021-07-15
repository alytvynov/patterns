<?php

namespace App\Creational\FactoryMethod;

class ShipLogistics extends Logistics
{
    public function createTransport(): Transport
    {
        return new Ship();
    }
}
