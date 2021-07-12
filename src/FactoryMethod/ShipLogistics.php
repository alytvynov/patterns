<?php

namespace App\FactoryMethod;

class ShipLogistics extends Logistics
{
    public function createTransport(): Transport
    {
        return new Ship();
    }
}
