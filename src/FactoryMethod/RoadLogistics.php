<?php

namespace App\FactoryMethod;

class RoadLogistics extends Logistics
{
    public function createTransport(): Transport
    {
        return new Track();
    }
}
